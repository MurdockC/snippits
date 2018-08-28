<?php
/*
 * DreamHost-compatible PHP Git Deploy Script
 * based on https://github.com/markomarkovic/simple-php-git-deploy
 */
 
// Locates and gets definitions from deploy-config.php
if (file_exists(basename(__FILE__, '.php').'-config.php')) {
	define('CONFIG_FILE', basename(__FILE__, '.php').'-config.php');
	require_once CONFIG_FILE;
} else {
	define('CONFIG_FILE', __FILE__);
}
 
// Check the secret access token for entry
if (!isset($_GET['sat']) || $_GET['sat'] !== SECRET_ACCESS_TOKEN) {
	header($_SERVER['SERVER_PROTOCOL'] . ' 403 Forbidden', true, 403);
	die('<h2>ACCESS DENIED!</h2>');
}

// Create array of services required for script
$requiredBinaries = array('git', 'rsync');

// Outputs versions of all required services
foreach ($requiredBinaries as $command) {
	$path = trim(shell_exec('which '.$command));
	if (!$path == '') {
		$version = explode("\n", shell_exec($command.' --version'));
		printf('<b>%s</b> : %s'."\n"
			, $path
			, $version[0]
		);
	}
}

// Display variables taken from payload
echo 'Repository Name - ' . REPO_NAME . PHP_EOL;
echo 'branch - ' . BRANCH . PHP_EOL;

// Establish paths to the repo and branch folders
//$repopath = DIR_PATH . REPO_NAME . '/';
$repopath = DIR_PATH;
$branchpath = $repopath . '/Branches/' . BRANCH;

// Display repo and branch paths
echo 'Repository Path - ' . $repopath . PHP_EOL;
echo 'Branch Path - ' . $branchpath . PHP_EOL;

// Create array to hold commands	
$customcommands = array();

// Start a bash that will actually run ssh-add in DreamHost
$customcommands[] = sprintf(
		'exec ssh-agent bash'
);

// Start the ssh-agent
$customcommands[] = sprintf(
		'ssh-agent -s'
);

// Add the ramseybot key to the ssh-agent's keychain
$customcommands[] = sprintf(
		'ssh-add .ssh/id_github_ramseybot'
);

// If the branch folder exists, gets rid of it
if (is_dir($branchpath)) {
	$customcommands[] = sprintf(
		'rm -rf %s'
		, $branchpath
	);
}

// Creates branch-level folder and clones contents inside, whether master or a branch
$customcommands[] = sprintf(
		'git clone --depth=1 --branch %s %s %s'
	, BRANCH
	, REMOTE_REPOSITORY
	, $branchpath
);

// To put master contents at the repo level, rsyncs master's branch-level contents
// and then deletes the sending folder
if (BRANCH == 'master') {
	$customcommands[] = sprintf(
		'rsync -arlDgovz %s/ %s'
		, $branchpath
		, $repopath
	);
	$customcommands[] = sprintf(
		'rm -rf %s'
		, $branchpath
	);
}

// Kill the ssh-agent
$customcommands[] = sprintf(
		'ssh-agent -k'
);

// Executes all commands. Uncomment the 'echo ...' to display all commands pre-execution
foreach ($customcommands as $command) {
	echo 'running command - ' . $command . PHP_EOL;
	exec($command);
//	sleep(1); // Uncomment to pause between commands
}
?>
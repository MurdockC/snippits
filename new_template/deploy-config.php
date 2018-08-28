<?php
/*
 * DreamHost-compatible PHP Git Deploy Script Config File
 * based on https://github.com/markomarkovic/simple-php-git-deploy
 */

// Protect the script from unauthorized access by using a secret access token
define('SECRET_ACCESS_TOKEN', 'hey');

// Puts payload contents in human-readable format into $data
$data = json_decode(file_get_contents('php://input'), true);

// Take the 'ref' value from payload to get branch name
$branchblock = $data[ref];

// NOTE: seems branches this is good enough, but master has extra stuff
// Example 'ref' value - refs/heads/master;

// Create branchwords to store the words delimited by '/' in 'ref' value
$branchwords = explode('/', $branchblock);

// From what I've seen so far, there are only 3-worded or 1-worded 'ref' values
if (count($branchwords) == 3) {
	define('BRANCH', $branchwords[2]); // Get the last word
} else {
	define('BRANCH', $branchblock);    // Get the whole thing
}

// Takes name of the repository from payload
define('REPO_NAME', $data[repository][name]);

// Creates address of the remote Git repository with some payload info
// NOTE: if the repository is private, you'll need to use the SSH address
$remotepath = 'git@github.com:' . $data[repository][full_name] . '.git';
define('REMOTE_REPOSITORY', $remotepath);

// Define path of where respository folder can be found on server
define('DIR_PATH', '.');
?>
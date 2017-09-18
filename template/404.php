<?php 
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";
	

	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once('assets/source/source.php');
	
	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$application = source::getApplication();
	$company = source::getTitle();
?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="<?php echo $siteURL;?>assets/css/main.css"/>
</head>
<body>

<div style="text-align: center; padding: 10px; padding-top: 10vw;" class="container error">
  <div class="row">
    <div class="twelve columns u-centered">
      <div class="eight columns offset-by-two">
        <h1>Whoops! Looks like something went wrong.</h1>
        <h3>Good news though, you can still apply!</h3>
        <div class="twelve columns">
          <div class="twelve columns">
            <a class="button button-primary" href="<?php echo $application; ?>">Apply Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<div style="position:fixed; bottom: 0px; width: 100%;" class="sticky-footer">
  <?php include ('assets/includes/footer.php'); ?>
</div>
</body>
</html>
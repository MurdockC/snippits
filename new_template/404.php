<?php 
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";
	
	include('assets/includes/header.php');
?>

<div class="container error">
  <div class="row">
    <div class="twelve columns u-centered">
      <div class="eight columns offset-by-two">
        <h1>Whoops! Looks like something went wrong.</h1>
        <h3>Good news though, you can still apply!</h3>
        <div class="twelve columns">
          <div class="twelve columns">
            <a class="button button-primary" href="<?php echo $application; ?>?r=<?php echo $origin ?>">Apply Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<div style="position:fixed; bottom: 0px; width: 100%;" class="sticky-footer">
  <?php include ('assets/includes/footer.php'); ?>
</div>
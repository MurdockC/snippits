<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";

	include('assets/includes/header.php');
?>


	<div class="container margin--md">
		<div class="container--full-width flex flex-column ai--c jc--c margin--md">
			<div class="container--960 flex flex-column margin--md<?php //showhide for mobile tabs ?>showhide">
        <h1>Whoops! Looks like something went wrong.</h1>
        <h3>Good news though, you can still apply!</h3>
        <a style="max-width: 300px" class="flex button button--primary margin--lg padding--lg jc--c ai--c" href="<?php echo $application; ?>?r=<?php echo $origin ?>">Apply Now!</a>
      </div>
    </div>
  </div>

<div style="position:fixed; bottom: 0px; width: 100%;" class="sticky-footer">
  <?php include ('assets/includes/footer.php'); ?>
</div>

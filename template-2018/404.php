<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";
	include('assets/includes/header.php');
?>

<div class="o--hidden container--full-width jc--c ai--c error_404">
	<h1>Whoops! Looks like something went wrong.</h1>
	<br>
	<h3>Good news though, you can still apply!</h3>
	<a href="<?php echo $app; ?>?r=<?php echo $origin; ?>"><button class="button flex campaign__button button--primary m--lg grow ai--c jc--c grow">Apply Now!</button></a>
</div>

<div class="sticky-footer">
  <?php include ('assets/includes/footer.php'); ?>
</div>

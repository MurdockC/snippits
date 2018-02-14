<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";

	include('assets/includes/header.php');
?>

<div class="container error">
  <div class="margin--md">
    <div class=" container--flex ai--c jc--c margin--md">
      <div style="text-align: center;" class="container--960 container--flex container--column ai--c jc--c margin--md">
        <h1>Whoops! Looks like something went wrong.</h1>
        <h3>Good news though, you can still apply!</h3>
        <div class="container--full-width container--flex ai--c jc--c margin--md ">
          <div class="container--1200 container--flex ai--c jc--c margin--md">
            <a class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow margin--md" href="<?php echo $application; ?>?r=<?php echo $origin ?>">Apply Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="position:fixed; bottom: 0px; width: 100%;" class="sticky-footer">
  <?php include ('assets/includes/footer.php'); ?>
</div>

<?php
	$pageName = 'FRS';
	include('../assets/includes/header.php');
?>


	<div class=" this flex  jc--c ai--c ">
  	<div class="index-intro flex column jc--c ai--c">
			<h1><?php echo $pageName ; ?></h1>
			<h2>Choose a Location</h2>
  	</div>
	</div>



<section  class="white-bg flex jc--c ai--c">
	<div class="index-button-container ">
  	<a href="<?php echo $siteURL; ?>/frs/deforest"><div class="index-button container jc--c ai--c">Deforest</div></a>
  	<a href="<?php echo $siteURL; ?>/frs/youngwood"><div class="index-button container jc--c ai--c">Youngwood</div></a>
	</div>
	
</section>

<?php include('../assets/includes/footer.php'); ?>

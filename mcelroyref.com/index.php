<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Referrals";
	$pageName = "referrals";
	include('assets/includes/header.php');
?>

	<section class="form-bg" id="questions" style="padding-top:0px;">
		<div class="container" style="display:block; text-align:center;">
			<h1 style=" color: white; line-height: 1.3; padding-top: 30px;">Refer a Driver!</h1>
		</div>
		<div class="container" style="max-width: 800px;">
			<?php include ('assets/forms/referral_form.php'); ?>
		</div>
	</section>

	</div>

<?php include ('assets/includes/footer.php'); ?>

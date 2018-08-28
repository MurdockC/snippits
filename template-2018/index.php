<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Company";
	$pageName = "company";
	include('assets/includes/header.php');
?>


<div id="mobile-hide">
	<section class="o--hidden w--full light-bg ai--c jc--c column flex p--lg">
		<h2>Join a big dealer. Be a big deal with MHC.</h2>
	</section>
	<section id="details" class="o--hidden w--full light-bg ai--c jc--c column flex">
		<div id="benefits" class="o--hidden w--1200 flex wrap row">
			<div class="flex details">
				<h3 class="location__heading">Atlanta, GA</h3>
				<p class="details__heading--small">Service Manager</p>
				<p>As the Service Manager, you’ll be responsible for day-to-day operations of the branch’s service and maintenance departments. That includes:</p>
				<ul>
					<li>Directing and controlling all department activities
					<li>Planning major goals and specific plans</li>
					<li>Evaluating results versus objectives</li>
					<li>Meeting growth and profit objectives</li>
					<li>Maintaining the highest standards of professionalism in serving customers</li>
				</ul>
			</div>
			<div class="flex details">
				<h4 class="details__heading">Big Incentives</h4>
				<ul class="incentives">
					<li><strong>Competitive Salary</strong></li>
					<li><strong>Medical, Dental, and Prescription Insurance</strong></li>
					<li><strong>Life and Disability Insurance</strong></li>
					<li><strong>Paid Time Off — 17 days in year 1</strong></li>
					<li><strong>401(k) and Profit Sharing with Employer Match</strong></li>
					<li><strong>Flexible Spending Account</strong></li>
					<li><strong>On-the-Job Training</strong></li>
					<li><strong>Internal Promotion Opportunities</strong></li>
					<li><strong>Tuition Reimbursement Program</strong></li>
				</ul>
			</div>
	  </div>
	</section>
	<section id="form" class="o--hidden flex w--full bg--b ai--c jc--c p--tb-xl">
	<?php include ('assets/forms/form.php'); ?>
	</section>
	<?php include ('assets/includes/footer.php'); ?>
</div>
</body>
</html>

<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";

	include('assets/includes/header.php');
	?>

<style>
  @media (max-width: 500px) {
    .column-fix {
        margin-top: 0px;
        margin-bottom: 0px;
    }
}
</style>

		<div id="mobile-hide">
				<section id="body-content" class="container element--full-width light-bg ai--c jc--c flex-column flex padding--lg">
					<div id="benefits" class="container container--1200 flex wrap ">
						<div class="flex margin--lg container--column-300 column-fix">
							<h4 class="margin--tb-sm text--left ">Pay</h4>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left"><b>Paid percentage of linehaul</b></li>
								<li class="margin--tb-md text--left"><b>100% FSC</b></li>
								<li class="margin--tb-md text--left"><b>Weekly Settlements</b></li>
							</ul>
							<h4 class="margin--tb-sm text--left ">Added Benefits</h4>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left"><b>Pay</b> for loading, layovers, and breakdowns</li>
								<li class="margin--tb-md text--left"><b>Discounted costs</b> on fuel and tires</li>
								<li class="margin--tb-md text--left"><b>Health</b>, dental, and vision insurance available</li>
							</ul>
            </div>
            <div class="flex margin--lg container--column-300 column-fix">
							<h4 class="margin--tb-sm text--left">Routes & Freight</h4>
							<ul class="margin--sm margin--md">
								<li class="margin--tb-xs text--left"><b>Bulk liquid</b> chemical and waste loads</li>
								<li class="margin--tb-md text--left"><b>OTR and regional</b>, a good mix of both available</li>
								<li class="margin--tb-md text--left"><b>Regular Home time available</b></li>
							</ul>
							<h4 class="margin--tb-sm text--left ">Safety & Support</h4>
		 					 <ul class="margin--sm">
		 						 <li class="margin--tb-xs text--left"><b>Paid safety training</b> and company orientation</li>
		 						 <li class="margin--tb-md text--left"><b>Quarterly awards</b> for safety and performance</li>
		 						 <li class="margin--tb-md text--left"><b>Veteran dispatch and management</b> with decades of experience to back&nbspyou</li>
		 					 </ul>
            </div>
	        </div>
	    </section>

	    <section id="form" class="container element--full-width bg--secondary ai--c jc--c padding--tb-xl flex flex-column">
				<?php include ('assets/forms/form.php'); ?>
	    </section>

			<section id="" class="container element--full-width white-bg ai--c jc--c flex-column flex padding--lg">
				<div id="requirements" class="container container--1200 flex wrap flex-column">
					<h4>Requirements</h4>
					<div class="flex wrap container flex element--full-width">
 				 <div class="flex margin--lg container--column-300 column-fix">
 					 <h5 class="margin--tb-sm text--left ">For Owner Operators</h5>
 					 <ul class="margin--sm">
 						 <li class="margin--tb-xs text--left">CDL A</li>
						 <li class="margin--tb-xs text--left">At least 1 year of OTR experience</li>
						 <li class="margin--tb-xs text--left">23 years old</li>
						 <li class="margin--tb-xs text--left">Tanker and Hazmat Endorsements</li>
						 <li class="margin--tb-xs text--left">No suspended or revoked license for 3 years</li>
						 <li class="margin--tb-xs text--left">No positive drug or alcohol test results for 10 years</li>
						 <li class="margin--tb-xs text--left">No more than 2 moving violations or 1 at-fault accident for 3 years</li>
 					 </ul>
 				 </div>
 				 <div class="flex margin--lg container--column-300 column-fix">
 					 <h5 class="margin--tb-sm text--left">For Equipment</h5>
 					 <ul class="margin--sm margin--md">
 						 <li class="margin--tb-xs text--left">Tractors 10 years old or less</li>
 						 <li class="margin--tb-md text--left">19,500 lb weight limit</li>
 						 <li class="margin--tb-md text--left">Gear pump required - needs to be adjusted (PTO or similar to attach pump and compressor or wet kit to your tractor)</li>
						 <li class="margin--tb-md text--left">Hoses and fittings provided</li>
 					 </ul>
 				 </div>
			 </div>
 			 </div>
		 </section>
			<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

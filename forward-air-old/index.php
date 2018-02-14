<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";

	include('assets/includes/header.php');?>
		<div id="mobile-hide">
  		<style>
    		.margin--sm li {
      		margin: 3px;
    		}
    		H4 {
      		letter-spacing: .05em;
    		}
    		</style>

    		<section id="body-content" class="bg-light container container--full-width padding--lg ai--c jc--c container--flex bg-secondary">
						<div class="container--flex container--1200 jc--c ai--c ">
							<div class="container--flex container--column jc--c ai--c column bg-">
								<h1 class="job__title">Less Than Truckload (LTL)</h1>
								<p>In this LTL position, you'll haul expedited loads from terminal to terminal.</p>
							</div>
						</div>
				</section>

				<section id="body-content" class="container container--full-width light-bg ai--c jc--c container--column container--flex padding--lg">
					<div id="benefits" class="container container--1200 container--flex wrap">
						<div class="container--flex margin--lg container--column-sm">
							<h4 class="margin--tb-sm text--left ">Solo Owner Operator Pay</h4>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left">$1.05 / loaded mile + FSC</li>
								<li class="margin--tb-xs text--left">$1.02 / empty mile + FSC</li>
								<li class="margin--tb-xs text--left">$1,500 Sign On Bonus</li>
							</ul>
							<h4 class="margin--tb-sm text--left ">Team Owner Operator Pay</h4>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left">$1.15 / loaded mile + FSC</li>
								<li class="margin--tb-md text--left">$1.02 / empty mile + FSC</li>
								<li class="margin--tb-md text--left">$3,000 Sign On Bonus</li>
								<small><br>*Earnings are based off of an estimated 5,800 miles per week and include $0.02 for hazmat and
$0.02 for a truck 5 years old or newer. The estimate is for 52 weeks and includes an adjustment
for empty miles and fuel surcharge.</small>
							</ul>
            </div>
            <div class="container--flex margin--lg container--column-sm">
							<h4 class="margin--tb-sm text--left">Benefits</h4>
							<h6 class="margin-tb-md">* Owner Operators don’t receive benefits directly through Forward Air, but we offer third-party insurance&nbspfor :</h6>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left">Health, Dental, Vision, Disability, and Life</li>
								<li class="margin--tb-md text--left">Non-Trucking Liability</li>
								<li class="margin--tb-md text--left">Physical Damage</li>
								<li class="margin--tb-md text--left">Occupational Accident and More</li>
								<h5 class="margin-tb-md">Additional Advantages</h5>
								<li class="margin--tb-md text--left">Weekly pay by direct deposit</li>
								<li class="margin--tb-md text--left">Paperless online settlement</li>
								<li class="margin--tb-md text--left">Longevity raises on plates and permits</li>
								<li class="margin--tb-md text--left">Free TripPak document handling</li>
								<li class="margin--tb-md text--left">No-charge fuel cards</li>
								<li class="margin--tb-md text--left">Tire discounts</li>
								<li class="margin--tb-md text--left">24/7 Breakdown Shop Support</li>
								<li class="margin--tb-md text--left">Lease Purchase Program</li>
							</ul>
            </div>
	        </div>
	    </section>

	    <section id="form" class="container bg-primary container--full-width secondary-bg ai--c jc--c padding--tb-xl container--flex container--column">
				<?php include ('assets/forms/form.php'); ?>
	    </section>

			<section id="body-content" class="container container--full-width white-bg ai--c jc--c container--column container--flex padding--lg">
			 <div id="benefits" class="container container--1200 container--flex wrap">
					<div class="container--flex margin--lg container--column-sm ai--c jc--c">
					 <h4 class="margin--tb-sm text--left ">Qualifications</h4>
					 <ul class="margin--sm">
						 <li class="margin--tb-xs text--left">CDL A</li>
						 <li class="margin--tb-md text--left">23 years old</li>
						 <li class="margin--tb-md text--left">12 months of driving experience in the past 3 years or 24 months in the past 5 years</li>
						 <li class="margin--tb-md text--left">No more than 2 violations on MVR for past 36 months</li>
						 <li class="margin--tb-md text--left">Must adhere to all DOT requirements & regulations</li>
						 <li class="margin--tb-md text--left">All applicants are subject to a criminal background investigation</li>
					 </ul>
					</div>
			 </div>
		 </section>
			<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

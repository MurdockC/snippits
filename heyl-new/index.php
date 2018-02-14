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

    		<section id="body-content" class="container container--full-width campaign-bg container--flex relative">
						<div class="intro__container--first container--flex ">
							<div class="intro__container--adjust">
								<h1 class="job__title">US OTR</h1>
								<p>Along with higher mileage, layover, and detention rates on every route, new drivers will receive an immediate one-cent increase if they have at least 12 months of continuous driving experience with the same employer in the past three years.</p>
							</div>
						</div>
						<div class="intro__container--second container container--flex wrap ">
							<div class="container__video">
								<iframe src="https://player.vimeo.com/video/242581264" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						  </div>
					</div>
				</section>

				<section id="body-content" class="container container--full-width light-bg ai--c jc--c container--column container--flex padding--lg">
					<div id="benefits" class="container container--1200 container--flex wrap">
						<div class="container--flex margin--lg container--column-sm">
							<h4 class="margin--tb-sm text--left ">Pay</h4>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left">Drivers average between $1,025 and $1,225 a week.</li>
								<li class="margin--tb-md text--left">All dispatched miles paid, loaded or empty</li>
								<li class="margin--tb-md text--left">Average of 2,500 to 3,000 miles per week</li>
								<li class="margin--tb-md text--left">Weekly settlements by direct deposit</li>
							</ul>
							<h4 class="margin--tb-sm text--left ">Bonus and Additional Pay</h4>
							<ul class="margin--sm">
								<li class="margin--tb-xs text--left">Monthly Fuel Bonus</li>
								<li class="margin--tb-md text--left">Quarterly Performance Bonus</li>
								<li class="margin--tb-md text--left">Quarterly "Hustle" Bonus (for quarterly miles above 28,000)</li>
								<li class="margin--tb-md text--left">Referral Bonus​</li>
								<li class="margin--tb-md text--left">Detention, Layover, Border-Crossing, Pick Up/Drop Pay</li>
								<li class="margin--tb-md text--left">Paid Orientation</li>
							</ul>
            </div>
            <div class="container--flex margin--lg container--column-sm">
							<h4 class="margin--tb-sm text--left">Benefits</h4>
							<ul class="margin--sm margin--md">
								<li class="margin--tb-xs text--left">Affordable Health, Dental, Vision, and Life Insurance available in 90 days or less; individual and family health coverage options</li>
								<li class="margin--tb-md text--left">401(k) with matching contributions from Heyl</li>
								<li class="margin--tb-md text--left">Paid Vacation - 1 week after 1 year, 2 weeks after 5 years</li>
								<li class="margin--tb-md text--left">Motel Allowance</li>
								<li class="margin--tb-md text--left">Consistent Lanes with No-Touch Freight</li>
								<li class="margin--tb-md text--left">Excellent Equipment</li>
								<ul class="margin--none margin--md">
									<li class="margin--tb-md text--left">Assigned, late model Freightliners, Kenworths, Peterbilts, and Volvos</li>
									<li class="margin--tb-md text--left">Automatic transmission and upgraded features such as Thermo King APUs on new models</li>
									<li class="margin--tb-md text--left">AUtility 3000R Refrigerated Trailers</li>
								</ul>
								<li class="margin--tb-md text--left">Reliable Home Time that's above-average</li>
								<li class="margin--tb-md text--left">Passenger Program</li>
								<li class="margin--tb-md text--left">Pet Policy</li>
							</ul>
            </div>
	        </div>
	    </section>

	    <section id="form" class="container container--full-width secondary-bg ai--c jc--c padding--tb-xl container--flex container--column">
				<?php include ('assets/forms/form.php'); ?>
	    </section>

			<section id="body-content" class="container container--full-width white-bg ai--c jc--c container--column container--flex padding--lg">
			 <div id="benefits" class="container container--1200 container--flex wrap">
					<div class="container--flex margin--lg container--column-sm ai--c jc--c">
					 <h4 class="margin--tb-sm text--left ">Qualifications</h4>
					 <ul class="margin--sm">
						 <li class="margin--tb-xs text--left">Age 23 or older</li>
						 <li class="margin--tb-md text--left">Can legally work in the US or Canada</li>
						 <li class="margin--tb-md text--left">Can speak, read, and write in English</li>
						 <li class="margin--tb-md text--left">No drug or alcohol violations in the last 5 years</li>
						 <li class="margin--tb-md text--left">No serious CDL moving violations in the last year</li>
						 <li class="margin--tb-md text--left">6 months experience</li>
					 </ul>
					</div>
			 </div>
		 </section>
			<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

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
			<section id="body-content" class="container element--full-width bg--primary ai--c jc--c flex-column flex padding--xl">
				<div id="benefits" class="container container--960 flex wrap ">
					<p style="color:white;">We serve lots of outside customers, but inside the company, drivers come first—in every department. When we put drivers upfront, everything else falls into place.</p>
				</div>
			</section>
			<section id="body-content" class="container element--full-width light-bg ai--c jc--c flex-column flex padding--lg">
				<div class="container--1200 flex;">
<h4 class="padding--lg padding-tb--none margin-tb--lg">Here’s what to expect as a driver in our Specialized Flatbed Division:</h4>
				</div>
				<div id="benefits" class="container container--1200 flex wrap ">
					<div class="flex margin--lg container--column-300 column-fix">


						<h4 class="margin--tb-sm text--left ">What You'll Earn</h4>
						<ul class="margin--sm">
							<li class="margin--tb-xs text--left"><b>$1,250</b>/week average</li>
							<li class="margin--tb-md text--left"><b>Up to 54 CPM Starting</b> — Plus yearly increases</li>
							<li class="margin--tb-md text--left"><b>Extra Pay</b> — For training, layover, detention, breakdown, tarping, set-up, take-down, and trips to Canada</li>
						</ul>
						<h4 class="margin--tb-sm text--left ">What You'll Enjoy</h4>
						<ul class="margin--sm">
							<li class="margin--tb-xs text--left"><b>Insurance</b> — Medical, dental, and vision starting your 8th day</li>
							<li class="margin--tb-md text--left"><b>Retirement</b> — 401(k) plan after 90 days</li>
							<li class="margin--tb-md text--left"><b>Riders</b> — Family and pets allowed without deposit</li>
							<li class="margin--tb-md text--left"><b>Equipment</b> — All trucks 4 years or newer</li>
						</ul>
          </div>
          <div class="flex margin--lg container--column-300 column-fix">
						<h4 class="margin--tb-sm text--left">Where You’ll Go (and for how long)</h4>
						<ul class="margin--sm margin--md">
							<li class="margin--tb-xs text--left"><b>Driving/Hiring Area</b> — anywhere in the lower 48 States</li>
							<li class="margin--tb-md text--left"><b>Flexible Road and Home Time</b></li>
						</ul>
						<h4 class="margin--tb-sm text--left ">What’s Required of You</h4>
	 					 <ul class="margin--sm">
	 						 <li class="margin--tb-xs text--left">CDL Class A</li>
	 						 <li class="margin--tb-md text--left">25 years old</li>
	 						 <li class="margin--tb-md text--left">1 Year OTR experience (3 states or more)</li>
							 <li class="margin--tb-md text--left">No more than 2 moving violations in 12 months</li>
							 <li class="margin--tb-md text--left">No speeding 15 MPH or more in 3 years</li>
							 <li class="margin--tb-md text--left">No rollovers or abandonments</li>
	 					 </ul>
          </div>
        </div>
    </section>

	    <section id="form" class="container element--full-width bg--secondary ai--c jc--c padding--tb-xl flex flex-column">
				<?php include ('assets/forms/form.php'); ?>
	    </section>

			<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

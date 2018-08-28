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
			<section id="body-content" class="container w--full  ai--c  column flex p--xl p-tb--sm">
				<div id="benefits" class="container w--1045 flex location-title ">
					<h2>Scottsbluff, NE</h2>
				</div>
			</section>
			<section id="body-content" class="container w--full light-bg ai--c jc--c column flex p--lg p-tb--sm">
				<div id="benefits" class="container w--1200 flex wrap benefits-container ">
					<div class="flex info-container m-tb--md ">
						<h3 class="info-title">CDL-A Driver Position</h3>
						<h5 class="secondary-text">Rate Based on Haul, can make over $1,000 a week!</h5>
						<p>Local & Regional hauls in Western Nebraska, Eastern Wyoming and Western South Dakota.</p>
						<h5 class="secondary-text">Nights & Weekends Home!</h5>
						<p>This may not be sugar beet season, but drivers who are hired on now will be classified as full time with benefits available! We haul aggregate materials in the off season.</p>
					</div>
					<div class="flex info-container m-tb--md">
						<h3 class="info-title">Driver Benefits</h3>
						<p>Full time benefits available during the aggregate hauling season, including:</p>
						<ul>
							<li>Health, Dental & VSP</li>
							<li>401(k)</li>
							<li>Aflac optional</li>
						</ul>
					</div>
					<div id="benefits" class="container w--1200 flex wrap benefits-container ">
						<div class="flex info-container m-tb--md ">
							<h3 class="info-title">Job Responsibilities</h3>
							<ul>
								<li>Regional driving work.</li>
								<li>Operate Belly Dump trailer hauling aggregat material.</li>
								<li>Drive tractor, maneuvering in to position to attach the trailer and handle lines to scure the vehicle on the road on customer premises plus use knowledge of commercial driving regulations.</li>
								<li>Ins[ect tractor-trailer for defects pre/post trip and submit DOT inspection report indicating the condition.</li>
								<li>Maintain driver log (Electronic) according to DOT regulations.</li>
								<li>Perform any other duties as necessary.</li>
							</ul>
						</div>
						<div class="flex info-container m-tb--md">
							<h3 class="info-title">Qualifications</h3>
							<ul>
								<li>Must be at least 23 years of age.</li>
								<li>Must have at least two years of recent verifiable experience as a Class A driver, operating a tractor/trailer commercial vehicle.</li>
								<li>Must have a clear driving record for the past three years.</li>
								<li>No chargeable accidents in the last three years.</li>
							</ul>
						</div>
        </div>
    </section>

    <section id="form" class="container flex w--full bg--p ai--c jc--c p--tb-xl column">
			<?php include ('assets/forms/form.php'); ?>
    </section>
		<section id="body-content" class="container w--full light-bg ai--c jc--c column flex p--lg">
			<div id="benefits" class="container w--1200 flex wrap ">
				<div class="flex info-container m-tb--md ">
					<h3 class="info-title">Driver Benefits</h3>
					<ul>
						<li>For six months of the year, we provide day and night sugar beet rehauling for Western Sugar Cooperative. We will load and deliver an average of 23,000 tons every day in our custom quad axle trailers, while also heling to ventilate the beet piles using snow cats. This is a huge operation that takes nearly 400 people to get done.</li>
						<li>The rest of the year we perform contract hauling of aggregat materials, coal, cement, lime, dry bulk materials, railroad traction sand, food grade products, hot molasses for feed supplements, wood by-products, and other materials.</li>
					</ul>
				</div>
				<div class="flex  m-tb--md ">
					<img class="driver-photo" src="assets/images/dist/truck.png" alt="truck and driver">
				</div>
			</div>
		</section>

			<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

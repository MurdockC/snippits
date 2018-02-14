<?php 
	$pageTitle = "Home";
	$pageName = "home";
	$metaDesc = "";
	include('assets/includes/header.php');
?>
<main class="main">
	<div class="sixteen columns">
		<div class="ten columns visibile-on-mobile">
			<h3 class="recruiter-phone" style="float:none; text-align:center; color:#000;">Talk to a Recruiter! <a href="tel:<?php echo $phone_no_string; ?>"><?php echo $phone; ?></a> or </h3>
			<?php include('assets/includes/quickapp.php'); ?>
		</div>
	    <h1>Join Our Family</h1>
		<p>It's been 75 years since the first Andrus family member hauled freight for a customer.  Since then, everyone who drives for Doug Andrus Distributing has been treated like family - enjoying an atmosphere of respect, flexibility and support. Headquartered in Idaho Falls, ID, Doug Andrus Distributing serves customers across America, dealing in a variety of products.  Doug Andrus offers regional and OTR fleet services and provides drivers with high quality, late model equipment - Freightliners and Peterbilts. </p>
		<div class="minitabs">
			<ul class="tabnames">
				<li>Why Drive for Doug Andrus?</li>
				<li>Qualifications</li>
				<li>Pay & Benefits</li>
				<li>Home Time</li>
				<li>Training</li>
		   </ul>
		    <div class="tabcontent" id="why">
				<h2>Why Drive for Doug Andrus?</h2>
				<img style="float:right;" class="scale-with-grid" src="assets/images/truck.jpg" alt="truck">
				<p>Solo company drivers can find success with excellent driving opportunities in refrigerated, flatbed and hopper freight.</p>
				<ul class="arrow">
					<li><strong>Our Drivers Average $1,100 per Week. </strong></li>
					<li>Our Refrigerated fleet drivers make up to $0.39cpm; Flatbed drivers make up to $0.43cpm (starting pay dependent on experience and fleet assignment)</li>
					<li>Average miles - 2700 to 3000 miles per week</li>
					<li>Generous bonus opportunities</li>
					<li>Mostly No Touch Freight</li>
					<li>Tarping pay (Flatbed)</li>
					<li>Rider program</li>
					<li>Affordable health insurance for you and your family</li>
					<li>Quality home time - Generally 10 to 14 days on the road</li>
				</ul>
			</div>
			<div class="tabcontent" id="qual">
				<h2>Qualifications</h2>
				<ul class="arrow">
					<h6>Minimum Qualifications</h6>
					<li>Minimum 23 years old, 21 or more for Students</li>
					<li>Must have a valid CDL-A</li>
					<li>Veterans: Must have CDL school certificate and 12 months of verifiable OTR experience or 24 months verifiable OTR experience.</li>
					<li>Students: Must have CDL school certificate from accredited truck driving school.</li>				
					<h6>Employment History</h6>
					<li>No more than 3 employers (motor carrier employers) in the past 12 months.</li>
					<h6>Violations</h6>
					<li>No more than 3 moving violations combined on MVR, PSP, and/or driver application in the past three years</li>
					<li>No serious moving violations within the past 3 years on the MVR, PSP, or driver application</li>
					<h6>Driving Record</h6>
					<li>No more than 3 preventable accidents on the MVR, PSP, and/or driver application in the past 3 years</li>
					<li>No serious preventable accidents on the MVR, PSP, and/or driver application in the past 3 years, (serious is defined as a at-fault rear end collision, a head-on accident, a rollover, a jack-knife, etc.)</li>
					<li>No DUI/DWI, drug/alcohol violations, or Reckless Driving violations in the past 5 years</li>
					<h6>Screening</h6>
					<li>Be able to pass DOT physical and a functional capacity test (i.e. Worksteps)</li>
					<li>Be able to pass a pre-employment drug screen</li>
				</ul>
			</div>
			<div class="tabcontent">
				<h2>Pay & Benefits</h2>
				<ul class="arrow">
					<li><strong>Our Drivers Average $1,100 per Week</strong></li>
					<li><strong>Running 2,700 - 3,000 miles per Week</strong></li>
					<li>Doug Andrus drivers average 40 cpm (starting pay based on experience & fleet assignment)</li>
					<li>Industry competitive benefits include medical/dental/vision/life insurance, 401K plan, etc</li>
					<li>Rider Policy program support quality of life efforts while on-the-road</li>
					<li>Vacation Pay</li>
				</ul>
				
			</div>
			<div class="tabcontent">
				<h2>Home Time</h2>
				<ul class="arrow">
					<li>Doug Andrus runs keep you out for 10 to 14 days with 1 day home for every 7 days out</li>
				</ul>
			</div>
			<div class="tabcontent">
				<h2>Training Program</h2>
				<p>We offer the most comprehensive training program in the business for recent CDL graduates. We recognize that our program may be a little longer than most programs.  Doug Andrus is committed to putting a safe driver on the road as soon as possible, assuring you, the trainee-student, that your CSA (Comprehensive Safety Analysis) score is not damaged.</p>
				<p>Doug Andrus requires that you be 21 years of age, have a valid Class A CDL and a clean MVR and a Certificate of Graduation from a driving school.  Pay, while in training, is $75.00 per day.</p>
				<p>All trainees must pass a DOT Physical and Physical Abilities test as well as a substance abuse test.</p>
			</div>
		</div>
		<section>
			<h1>What Drivers are Saying</h1>
			<blockquote>"The best thing about working for Doug Andrus is that the owners are always working to improve the company by thinking of their drivers. The truck shop is always friendly and fix the trucks as soon as possible if there are any problems. When you walk into the office it feels like you are walking into your own home. The dispatchers are friendly and always answer my questions the best way possible."<cite>- Cilviano Nochebuena 7.5 yrs with Doug Andrus Distributing</cite></blockquote>
			<blockquote>"I enjoy working for Andrus because they try to take care of you. If you have a problem, they try to fix it. You never have to worry about getting paid, it's there. The people in the office take care of you if there is ever a problem."<cite>- Rob Howell, 26.5 yrs with Doug Andrus Distributing</cite></blockquote>
		</section>
	</div>
	<div class="sixteen columns">
		<hr>
		<h3 class="recruiter-phone" style="float:none; text-align:center; color:#000;">Talk to a Recruiter! <a href="tel:<?php echo $phone_no_string; ?>"><?php echo $phone; ?></a> or <a href="<?php echo $tenstreet; ?>">Apply Now!</a></h3>
		<hr>
	</div>
</main>

<?php include ('assets/includes/footer.php'); ?>
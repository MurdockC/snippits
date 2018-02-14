<section id="form" class="full-width">
<form id="quickApp" class="container full-width centered-contents padding--tb-xl container--flex margin--tb-lg container--column" method="post" action="assets/forms/post.php">

	<div class="container full-width text--center">
		<h2 class="form__title">Be Contacted</h2>
	</div>
	<div class="container width-1200 container--flex wrap">
		<div class="container--flex margin--lg container--column-sm">
			<label class="form-label" for="firstname">First & Last Name</label>
			<input type="text" name="name" autocorrect="off" autocapitalize="sentences" title="Please enter your first & last name." placeholder="Enter your First & Last Name" $ pattern="(?=.*\w)^(\w|')+\s+(\w|')+(\s+(\w|')+)*\s?$" required> <!--pattern="^\w+\s+\w+(\s+\w+)*\s?$"-->
			<label class="form-label" for="content">Email</label>
			<input type="email" name="content" autocapitalize="off" autocorrect="off"  title="Please enter a valid email address." placeholder="Enter your Email Address" pattern="^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
			<input class="email-honeypot" type="email" name="email" title="Please enter a valid email." placeholder="Email">


			<label class="form-label" for="phone">Phone</label>
			<input class="u-full-width" type="tel" name="phone" title="Please enter a 9 digit phone number." placeholder="Enter your Phone Number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
			<label class="form-label" for="zipcode">Zip Code</label>
			<input type="tel" name="zipcode" title="Please enter your zip code." placeholder="Enter your Zip Code" pattern="^\d{5}" required>
			<div class="text-error"></div>
			<!--<div>
				<label for="address">Street Address</label>
				<input tabindex="6"  type="text" name="address" title="Please enter your street address." placeholder="Enter your Street Address" required>
			</div>-->
			<!--[if lte IE 9]>
				<label for="city">City</label>
				<input tabindex="7" type="text" name="city" title="Please enter your city." placeholder="City">
				<label for="state">State</label>
				<input tabindex="8" type="text" name="state" title="Please enter your state." placeholder="State/Province">
			<![endif]-->
			<!--[if !IE]>-->
			<input type="hidden" name="city" title="Please enter your city." placeholder="City">
			<input type="hidden" name="state" title="Please enter your state." placeholder="State/Province">
		</div>
		<div class="container--flex margin--lg container--column-sm">
			<label class="form-label" for="experience">Years of Experience</label>
			<div class="check-radio-container">
				<input type="radio" id="experience1-2" name="experience" value="1-2 years" required><label for="experience1-2">1-2 Years</label>
				<input type="radio" id="experience3-5" name="experience" value="3-5 years"><label for="experience3-5">3-5 Years</label>
				<input type="radio" id="experience6-10" name="experience" value="6-10 years"><label for="experience6-10">6-10 Years</label>
				<input type="radio" id="experience10+" name="experience" value="10+ years"><label for="experience10+">10+ Years</label>
			</div>
			<label class="form-label" for="driver">Job Type</label>
			<div class="check-radio-container">
				<input type="radio" id="job1" name="job" value="company" required><label  for="job1">Company Driver</label>
				<input type="radio" id="job2" name="job" value="ownopp"><label for="job2">Owner Operator</label>
				<input type="radio" id="job3" name="job" value="lease"><label for="job3">Lease Purchase</label>
			</div>
			<label class="form-label" for="cdl">Type of CDL</label>
			<div class="check-radio-container">
				<input type="radio" id="cdla" name="cdl" value="a" required><label  for="cdla">Class A</label>
				<input type="radio" id="cdlb" name="cdl" value="b"><label for="cdlb">Class B</label>
			</div>
			<label class="form-label" for="driver">Driver Type</label>
			<div class="check-radio-container">
				<input type="radio" id="driver1" name="driver" value="solo" required><label  for="driver1">Solo</label>
				<input type="radio" id="driver2" name="driver" value="soloteam"><label for="driver2">Solo Willing to Team</label>
				<input type="radio" id="driver2" name="driver" value="team"><label for="driver2">Team</label>
			</div>
			<input type="hidden" name="source" value="<?php echo $origin; ?>_lead">
				<input type="hidden" name="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
				<input type="hidden" name="recruiterphone" value="<?php echo $phone; ?>">
				<input type="hidden" name="location" value="<?php echo $city; ?>,<?php echo $state; ?>">
				<input type="hidden" name="division" value="<?php echo $pageTitle;?>">
				<input type="hidden" name="jobid" value="<?php echo $jobID; ?>">
			<button type="submit" class="bg-contrast form-button button padding--lg full-width margin--lg self--center">Contact Me!</button>
		</div>
	</div>

</form>
</section>

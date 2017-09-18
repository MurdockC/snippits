<section class="form-bg quickapp-toggle" id="questions">
	<form id="quickApp" class="app" method="post" action="<?php echo $siteURL; ?>assets/forms/post.php">
		<div class="container" style="max-width: 800px;">
			<div class="full-width">
				<h2 class="centered">Get Started Below</h2>
				<h4 class="centered">Fill out the form below to have<br>a recruiter contact you soon.</h4>
				<br>
			</div>
			<div id="formColumn_first">
				<h3>Personal Information</h3>
				<div>
					<label style="font-size: .8em;" for="name">First & Last Name</label>
					<input tabindex="3" class="u-full-width" type="text" name="name" autocorrect="off" autocapitalize="sentences" title="Please enter your first & last name." placeholder="Enter your First & Last Name" $ pattern="(?=.*\w)^(\w|')+\s+(\w|')+(\s+(\w|')+)*\s?$" required> <!--pattern="^\w+\s+\w+(\s+\w+)*\s?$"-->
				</div>
				<div>
					<label for="content">Email</label>
					<input tabindex="4" class="u-full-width" type="email" name="content" autocapitalize="off" autocorrect="off"  title="Please enter a valid email address." placeholder="Enter your Email Address" pattern="^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
					<input class="email-honeypot" type="email" name="email" title="Please enter a valid email." placeholder="Email">
				</div>
				<div>
					<label for="phone">Phone</label>
					<input tabindex="5" class="u-full-width" type="tel" name="phone" title="Please enter a 9 digit phone number." placeholder="Enter your Phone Number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
				</div>
				<!--<div>
					<label for="address">Street Address</label>
					<input tabindex="6" class="u-full-width" type="text" name="address" title="Please enter your street address." placeholder="Enter your Street Address" required>
				</div>-->
				<!--[if lte IE 9]>
					<label for="city">City</label>
					<input tabindex="7" class="u-full-width" type="text" name="city" title="Please enter your city." placeholder="City">
					<label for="state">State</label>
					<input tabindex="8" class="u-full-width" type="text" name="state" title="Please enter your state." placeholder="State/Province">
				<![endif]-->
				<!--[if !IE]>-->
				<input tabindex="7" class="u-full-width" type="hidden" name="city" title="Please enter your city." placeholder="City">
				<input tabindex="8" class="u-full-width" type="hidden" name="state" title="Please enter your state." placeholder="State/Province">
				<!--<![endif]-->				
				<div>
					<label for="zipcode">Zip Code</label>
					<input tabindex="9" class="u-full-width" type="tel" name="zipcode" title="Please enter your zip code." placeholder="Enter your Zip Code" pattern="^\d{5}" required>
					<div class="text-error"></div>
				</div>
			</div>
			<div>
				<h3>Driving Information</h3>
				<label for="cdl">Do you have a valid CDL-A?</label>
				<div class="checkRadioBox">
					<input type="radio" id="cdlyes" name="cdl" value="yes" required><label  for="cdlyes">Yes</label>
					<input type="radio" id="cdlno" name="cdl" value="no"><label for="cdlno">No</label>
				</div>	
				<label for="experience">Years of Experience</label>
				<div class="checkRadioBox">
					<input type="radio" id="experience1-2" name="experience" value="1-2 years" required><label for="experience1-2">1-2 Years</label>
					<input type="radio" id="experience3-5" name="experience" value="3-5 years"><label for="experience3-5">3-5 Years</label>
					<input type="radio" id="experience6-10" name="experience" value="6-10 years"><label for="experience6-10">6-10 Years</label>
					<input type="radio" id="experience10+" name="experience" value="10+ years"><label for="experience10+">10+ Years</label>
				</div>	
				<!--<label for="endorsements">Choose Endorsements (select all that apply)</label>
				<div class="checkRadioBox">
					<input type="checkbox" id="endorsementstanker" name="tanker" value="Tanker"><label for="endorsementstanker">Tanker</label>
					<input type="checkbox" id="endorsementshazmat" name="hazmat" value="HazMat"><label for="endorsementshazmat">Hazmat</label>
				</div>-->
				<div>
					<input type="hidden" name="source" value="<?php echo $origin; ?>_lead">
				    <input type="hidden" name="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
				    <input type="hidden" name="recruiterphone" value="<?php echo $phone; ?>">
				    <input type="hidden" name="location" value="<?php echo $city; ?>,<?php echo $state; ?>">
				    <input type="hidden" name="division" value="<?php echo $pageTitle;?>">
				    <input type="hidden" name="jobid" value="<?php echo $jobID; ?>">
					<input id="quickAppSubmit" tabindex="10" class="button button-primary" type="submit" value="Contact Me!">
				</div>
			</div>
		</div>
	</form>
</section>
	<h3 style="text-align:center">Start the process now!</h3>
	<p style="text-align:center;">Fill out our short form and a recruiter will contact you.</p>
	<form id="quickApp" method="post" action="assets/forms/post.php">
		<label>Do you have a valid CDL-A?</label>
		<select tabindex="1" class="u-full-width" name="cdl" required>
			<option value="">-- Valid CDL-A? --</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		<label>Do you have flatbed experience?</label>
		<select tabindex="2" class="u-full-width" name="flatbed" required>
			<option value="">-- Select Experience --</option>
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>		
		<label>Years of Experience</label>
		<select tabindex="3" class="u-full-width" name="experience" required>
			<option value="">-- Select Experience --</option>
			<option value="2">2 years</option>
			<option value="3-5">3-5 years</option>
			<option value="6-10">6-10 years</option>
			<option value="10+">10+ years</option>
		</select>	
		<div>
			<label for="name">First & Last Name</label>
			<input tabindex="4" class="u-full-width" type="text" name="name" autocorrect="off" autocapitalize="sentences" title="Please enter your first & last name." placeholder="Enter your First & Last Name" $ pattern="(?=.*\w)^(\w|')+\s+(\w|')+(\s+(\w|')+)*\s?$" required> <!--pattern="^\w+\s+\w+(\s+\w+)*\s?$"-->
		</div>
		<div>
			<label for="content">Email</label>
			<input tabindex="5" class="u-full-width" type="email" name="content" autocapitalize="off" autocorrect="off"  title="Please enter a valid email address." placeholder="Enter your Email address" pattern="^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
			<input class="email-honeypot" type="email" name="email" title="Please enter a valid email." placeholder="Email">
		</div>
		<div>
			<label for="phone">Phone</label>
			<input tabindex="6" class="u-full-width" type="tel" name="phone" title="Please enter a 9 digit phone number." placeholder="Enter your Phone Number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
		</div>
		<div>
			<label for="zipcode">Zipcode</label>
			<input tabindex="7" class="u-full-width" type="tel" name="zipcode" title="Please enter your zipcode." placeholder="Enter your Zipcode" pattern="^\d{5}" required>
			<div class="text-error"></div>
		</div>
		<!--[if lte IE 9]>
			<label for="city">City</label>
			<input tabindex="7" class="u-full-width" type="text" name="city" title="Please enter your city." placeholder="City">
			<label for="state">State</label>
			<input tabindex="8" class="u-full-width" type="text" name="state" title="Please enter your state." placeholder="State">
		<![endif]-->
		<!--[if !IE]>-->
		<input tabindex="8" class="u-full-width" type="hidden" name="city" title="Please enter your city." placeholder="City">
		<input tabindex="9" class="u-full-width" type="hidden" name="state" title="Please enter your state." placeholder="State">
		<!--<![endif]-->
		<input type="hidden" name="source" value="<?php echo $origin; ?>_lead">
	    <input type="hidden" name="recruiter" value="<?php echo $recruiter; ?>">
	    <input type="hidden" name="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
	    <input type="hidden" name="recruiterphone" value="<?php echo $phone; ?>">
	    
		<input tabindex="10" class="u-full-width button" type="submit" value="Get Started">
	</form>
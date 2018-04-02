	<form id="quickApp" class="app" method="post" action="<?php echo $siteURL; ?>/assets/forms/referral_post.php">
		<h2>Your Information</h2>
		<div>
			<label for="referrer">Your First & Last Name</label>
			<input tabindex="1" class="u-full-width" type="text" name="referrer" autocorrect="off" autocapitalize="sentences" title="Please enter you first & last name." placeholder="Enter your First & Last Name" $ pattern="(?=.*\w)^(\w|')+\s+(\w|')+(\s+(\w|')+)*\s?$" required>
		</div>
		<br>
		<h2>Your Referral's Information</h2>
		<div>
			<label for="name">Referral's First & Last Name</label>
			<input tabindex="3" class="u-full-width" type="text" name="name" autocorrect="off" autocapitalize="sentences" title="Please enter your referrals first & last name." placeholder="Enter your Referral's First & Last Name" $ pattern="(?=.*\w)^(\w|')+\s+(\w|')+(\s+(\w|')+)*\s?$" required> <!--pattern="^\w+\s+\w+(\s+\w+)*\s?$"-->
		</div>
		<div>
			<label for="content">Referral's Email</label>
			<input tabindex="4" class="u-full-width" type="email" name="content" autocapitalize="off" autocorrect="off"  title="Please enter a valid email address." placeholder="Enter your Referral's Email address" pattern="^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
			<input class="email-honeypot" type="email" name="email" title="Please enter a valid email." placeholder="Email">
		</div>
		<div>
			<label for="phone">Referral's Phone</label>
			<input tabindex="5" class="u-full-width" type="tel" name="phone" title="Please enter a 9 digit phone number." placeholder="Enter your Referral's Phone Number" pattern="^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$" required>
		</div>
		<div>
			<label for="zipcode">Referral's Zipcode</label>
			<input tabindex="6" class="u-full-width" type="tel" name="zipcode" title="Please enter a zipcode." placeholder="Enter your Referral's Zipcode" pattern="^\d{5}" required>
			<div style="color: #fff;" class="text-error"></div>
		</div>
		<!--[if lte IE 9]>
			<label for="city">City</label>
			<input tabindex="7" class="u-full-width" type="text" name="city" title="Please enter your city." placeholder="City">
			<label for="state">State</label>
			<input tabindex="8" class="u-full-width" type="text" name="state" title="Please enter your state." placeholder="State">
		<![endif]-->
		<!--[if !IE]>-->
		<input tabindex="7" class="u-full-width" type="hidden" name="city" title="Please enter your city." placeholder="City">
		<input tabindex="8" class="u-full-width" type="hidden" name="state" title="Please enter your state." placeholder="State">
		<!--<![endif]-->
		<input type="hidden" name="source" value="<?php echo $origin; ?>_lead">
	    <input type="hidden" name="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

		<input id="quickAppSubmit" tabindex="9" class="u-full-width button" type="submit" value="Submit Referral">
	</form>

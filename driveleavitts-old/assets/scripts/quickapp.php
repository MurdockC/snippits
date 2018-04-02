<aside id="quick-app">
     <a href="<?php echo $tenstreet; ?>?r=<?php echo $source; ?>" id="fullApp" target="_blank"><h3>Apply Now!</h3>Complete our full driver application!</a>
     <hr>
	<p>If you need more information before you apply, submit this short form and a recruiter will contact you.</p>
     <form name="survey" id="quickApp" method="post" action="assets/scripts/quickApp.php" data-enable-shim="true" novalidate>
     	<input type="hidden" name="source" value="<?php echo $origin; ?>_lead">
     	<input type="hidden" name="userIP" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
		<input tabindex="1" type="text" name="first" id="first" placeholder="* First Name" required required="true">
		<input tabindex="2" type="text" name="last" id="last" placeholder="* Last Name" required required="true">
		<input tabindex="3" type="text" name="email" id="email" placeholder="* Email" required required="true" email="true">
		<input tabindex="4" type="text" name="phone" id="phone" placeholder="* Phone" required required="true" phoneUS="true">
		<input tabindex="5" type="text" name="city" id="city" placeholder="* City" required required="true">
		<input tabindex="6" type="text" name="state" id="state" placeholder="* State" required required="true">
		<input tabindex="7" type="text" name="experience" id="experience" placeholder="* Years of Experience" required required="true">
		<p>Do you have flatbed experience?</p>
		<select tabindex="8" name="flatbed" required>
			<option value="">-- Select --</option>
			<option value="y">Yes</option>
			<option value="n">No</option>
		</select>
		<p>Do you have a current CDL-A?</p>
		<select tabindex="8" name="cdl" required>
			<option value="">-- Select --</option>
			<option value="y">Yes</option>
			<option value="n">No</option>
		</select>
		<input tabindex="9" type="text" name="message" id="content" value="">
		<input tabindex="10" type="submit" id="submit-btn" class="mb-20px" name="submit" value="Contact Me">
	</form>
</aside>
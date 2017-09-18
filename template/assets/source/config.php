<?php
	class config {
	    // Company Information goes here

		// Full url
		protected static $url = 'http://template.com/'; 

		// Set Company Name for Page Titles
		protected static $title = 'JBS Carriers';

	    // Set Default Source here - no spaces - domain
		protected static $company  = 'joinjbscarriers.com';

		// Set Cookie Name, just the url, with no http: or .com etc --- And No Spaces
		protected static $name = 'joinjbscarriers';

		// Default Phone number
		protected static $phone = '888.462.8770';

		// Tenstreet ID (Request from Tenstreet tech support)
		protected static $tenstreet = '1269';

		// Purely for display in the Email subject line. Capitalize the first letter of each word in the URL.
		protected static $siteName = 'JoinJBSCarriers.com';

		//Leave blank if they do not want the short forms emailed to them
		protected static $notify = '';

		// Client Key for the ZipCode API
		protected static $zipAPIKey = 'js-FVNVVCGyRzeKDSp59NdzjjIScZtCqCA6xo1t0I2SihDW921iQfSayA3LAwo09Y7H';

		// Set application link
		protected static $application = "https://intelliapp.driverapponline.com/c/jbscarriers";

		// GID for google phone # sheet
		protected static $gid = '1816293935';

		// Set URL Parameter Name here
		protected static $param = 'utm_source';

		// Set Cookie Duration here in days
		protected static $duration = 30;
	}
?>

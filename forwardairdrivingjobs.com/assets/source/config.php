<?php
	class config {
	    // Company Information goes here

		// Full url
		protected static $url = 'http://forwardairdrivingjobs.com/';

		// Set Company Name for Page Titles
		protected static $title = 'ForwardAir';

	    // Set Default Source here - no spaces - domain
		protected static $company  = 'forwardairdrivingjobs.com';

		// Set Cookie Name, just the url, with no http: or .com etc --- And No Spaces
		protected static $name = 'forwardairdrivingjobs';

		// Default Phone number
		protected static $phone = '855.466.4522'; //this is defined in the header for each page since each location has a seperate number


		// Tenstreet ID (Request from Tenstreet tech support)
		protected static $tenstreet = '1494';

		// Purely for display in the Email subject line. Capitalize the first letter of each word in the URL.
		protected static $siteName = 'ForwardAirDrivingJobs.com';

		//Leave blank if they do not want the short forms emailed to them
		protected static $notify = '';

		// Client Key for the ZipCode API
		protected static $zipAPIKey = 'js-y2U0Uwsav7nG5xkqxjHzWyropBUMWxjuAevuKXFg52XbAhB8BiHxR9WgKQ3HoncZ';

		// Set application link
		protected static $application = 'https://intelliapp.driverapponline.com/c/faf';

		// GID for google phone # sheet
		protected static $gid = '479695459';

		// Set URL Parameter Name here
		protected static $param = 'utm_source';

		// Set Cookie Duration here in days
		protected static $duration = 30;
	}
?>

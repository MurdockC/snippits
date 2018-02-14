<?php
	class config {
	    // Company Information goes here

		// Full url
		protected static $url = 'http://localhost:8081/leavitts/';

		// Set Company Name for Page Titles
		protected static $title = 'Leavitts';

	    // Set Default Source here - no spaces - domain
		protected static $company  = 'leavitts';

		// Set Cookie Name, just the url, with no http: or .com etc --- And No Spaces
		protected static $name = 'leavitts';

		// Default Phone number
		protected static $phone = ''; //this is defined in the header for each page since each location has a seperate number


		// Tenstreet ID (Request from Tenstreet tech support)
		protected static $tenstreet = '';

		// Purely for display in the Email subject line. Capitalize the first letter of each word in the URL.
		protected static $siteName = 'Leavitts.com';

		//Leave blank if they do not want the short forms emailed to them
		protected static $notify = '';

		// Client Key for the ZipCode API
		protected static $zipAPIKey = '';

		// Set application link
		protected static $application = '';

		// GID for google phone # sheet
		protected static $gid = '';

		// Set URL Parameter Name here
		protected static $param = 'utm_source';

		// Set Cookie Duration here in days
		protected static $duration = 30;
	}
?>

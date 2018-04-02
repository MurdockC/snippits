<?php

$errors = ''; // Will be populated by the error messages if there are any errors.

//-------------------------
// Change these variables
//-------------------------

$companyName = 'Mcelroyref.com';

// ALWAYS leave the trailing slash at the end. MUST have 'http://'
$siteURL = 'http://mcelroyref.com/';

// THis is the url for the landing page
$landingURL = 'http://mcelroyref.com/';

// Purely for display in the Email subject line. Capitalize the first letter of each word in the URL.
$siteName = 'McElroyRef';

// Leave blank if submitting to Tenstreet
$notify = 'caleb@ramseymediaworks.com';//

// Email address the QuickApp notification is "From." Should normally be "apps@[domain]"
$appsEmail = 'apps@mcelroyref.com';

// RMW email address to BCC (leave as 'admin@')
$rmwemail = 'apps@ramseymediaworks.com';

//---------------------------------------------------
// Don't edit below unless you have a good reason!
//---------------------------------------------------

$referrer = $_POST['referrer'];
$fullname = $_POST['name'];
$email = $_POST['content'];
$phone = $_POST['phone'];
$zip = $_POST['zipcode'];
$city = $_POST['city'];
$state = $_POST['state'];
$source = $_POST['source'];
$userIP = $_POST['userIP'];
$recruiterphone	= $_POST['recruiterphone'];

//pull first and last out of full name
$trimmed = rtrim($fullname);
$parts = explode(" ", $trimmed);
$last = array_pop($parts);
$first = implode(" ", $parts);

//Set date for sql entry
date_default_timezone_set("America/Chicago");
$date = date("y-m-d h:i:sa");

//SQL variables
$db_host = "mysql.rmwhost.com";
$db_username = "landingpages";
$db_password = "@||PaG3s";
$db_name = "_apps";
$sql = "INSERT INTO mcelroyref (Referrer, First, Last, Email, Phone, City, State, ZipCode, UserIp, Source, Date) VALUES ('$referrer', '$first', '$last', '$email' , '$phone' , '$city' , '$state' , '$zip' , '$userIP' , '$source' , '$date' )";

// Honeypot Captcha to repel spambots
$bot = $_POST['email'];
if (isset($bot)) {
	header("Location: $siteURL");
}

if ($errors) {
	mail("meghan@ramseymediaworks.com", "Landing Page Form Errors", $errors, "MIME-Version: 1.0 \r\n Content-type:text/html;charset=UTF-8 \r\n");
}
if( empty($errors) && empty($bot) ) // Checks to see if there are errors and that the 'content' field is not filled in
	{
		//Set up HTML Email for notification
		$to = $notify;
		$email_subject = "New $companyName Referral: $first $last";
		$message = '<html><body>';
		$message .= '<p style="padding-right: 5px; padding-left: 5px; padding-top: 20px; padding-bottom: 20px; text-align: left; background-color: #fff;" align="left" bgcolor="#fff" font-size:18px;><strong>You\'ve received a new lead from '. $siteName .'! Here are the details:</strong></p>';
		$message .= '<table style="border-left-width: 2px; border-bottom-width: 2px; border-right-width: 2px; border-top-width: 2px; border-spacing: 2px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: #131416; border-left-color: #131416; border-top-color: #131416; border-bottom-color: #131416; border-collapse: collapse; background-color: #fff;" bgcolor="#fff">';
		$message .= '<tr><th colspan="2" style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; text-align: left; background-color: #131416; color: #fff;" align="left" bgcolor="#131416"><h4 align="left" style="margin-left: 0; margin-top: 0; margin-bottom: 0; margin-right: 0; color: #fff !important;">Referral Information</h4></th></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>First Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $first .'</td></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Last Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $last .'</td></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Email</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $email .'</td></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Phone Number</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $phone .'</td></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>City</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $city .'</td></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>State</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $state .'</td></tr>';
		$message .= '<tr><th colspan="2" style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; text-align: left; background-color: #131416; color: #fff;" align="left" bgcolor="#131416"><h4 align="left" style="margin-left: 0; margin-top: 0; margin-bottom: 0; margin-right: 0; color: #fff !important;">Referring Driver Information</h4></th></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Referring Driver</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $referrer .'</td></tr>';
		$message .= '<tr><th colspan="2" style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; text-align: left; background-color: #131416; color: #fff;" align="left" bgcolor="#131416"><h4 align="left" style="margin-left: 0; margin-top: 0; margin-bottom: 0; margin-right: 0; color: #fff !important;">Other Data</h4></th></tr>';
		$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>User IP Address</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $userIP .'</td></tr>';
		$message .= '</table>';
		$message .= '</body></html>';

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From: $siteName <$appsEmail>\r\n";
		$headers .= "Reply-To: $first $last <$email>\r\n";
		$headers .= 'Date: '.date("r")."\r\n";
		$headers .= "BCC: $rmwemail" . "\r\n";

		//Set up HTML Email for referral
		$referralto = $email;
		$referralsubject = 'You have been referred by ' . $referrer . ' to ' . $companyName;
		$referralmessage = '<html><body>';
		$referralmessage .= '<table style="background-color:rgba(120, 59, 66, 1); width: 100%;"><tr><td style="padding-left: 15px; padding-top: 15px; padding-right: 15px; padding-bottom: 15px;" valign="top" align="left"><img style="text-align:center; margin: 0px auto; max-width: 150px;" src="' . $landingURL . 'assets/images/logo.png"</td></tr></table>';
		$referralmessage .= '<p style="color: #000; font-family: Trebuchet MS, sans-serif; padding-right: 5px; padding-left: 5px; padding-top: 20px; text-align: left; background-color: #fff; font-size:22px;" align="left" bgcolor="#fff"><strong>THANK YOU FOR YOUR INTEREST IN ' . $companyName . '.</strong></p>';
		$referralmessage .= '<p style="color: #000; font-family: Trebuchet MS, sans-serif; padding-right: 5px; padding-left: 5px; text-align: left; background-color: #fff; font-size:18px;" align="left" bgcolor="#fff"><em>You were referred by ' . $referrer .'.</em><br><br><strong>A recruiter will contact you soon.</strong></p>';
		$referralmessage .= '<p style="color: #000; font-family: Trebuchet MS, sans-serif; padding-right: 5px; padding-left: 5px; text-align: left; background-color: #fff; font-size:18px;" align="left" bgcolor="#fff"> <strong style="color: #000;"> For more information about ' . $companyName . ' and to pre-qualify, visit <a href="' . $landingURL . '?utm_source=referral_email">' . $landingURL . '</a>.</strong></p>';
		$referralmessage .= '</body></html>';

		$referralheaders = "MIME-Version: 1.0" . "\r\n";
		$referralheaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$referralheaders .= "From: $siteName <$appsEmail>\r\n";
		$referralheaders .= 'Date: '.date("r")."\r\n";

		//Send Nofitication email
		mail($to,$email_subject,$message,$headers);

		//Send Email to Referral
		mail($referralto,$referralsubject,$referralmessage,$referralheaders);

		//Connect to Database
		$link = mysqli_connect( $db_host, $db_username, $db_password, $db_name);
		// Check connection
		if($link === false){
		    $errors = die("ERROR: Could not connect. " . mysqli_connect_error());
		}

		// After sending and insertion let know it worked, or didn't
		if (mysqli_query($link, $sql)) {
        	// Redirect to the 'Success' page
			header("Location: {$siteURL}success?name=$referrer");
			//Close database
			mysqli_close($link);
        } else {
        	echo "Error: " . mysqli_error($link);
        }


	} else {
		// Redirect to the 'Error' page
		header("Location: {$siteURL}errors?errors=$errors");
	}

?>

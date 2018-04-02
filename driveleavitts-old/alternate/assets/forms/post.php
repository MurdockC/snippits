<?php 

$errors = ''; // Will be populated by the error messages if there are any errors.

//-------------------------
// Change these variables
//-------------------------

$companyName = 'Leavitts Freight Service';

// ALWAYS leave the trailing slash at the end. MUST have 'http://'
$siteURL = 'http://driveleavitts.com/alternate/'; 

// Purely for display in the Email subject line. Capitalize the first letter of each word in the URL.
$siteName = 'DriveLeavitts.com'; 

// Tenstreet ID (Request from Tenstreet tech support)
$companyID = '805'; 

// Leave blank if submitting to Tenstreet
$notify = 'jwilliams@leavitts.com, bdover@leavitts.com, rsmith@leavitts.com, ccardiel@leavitts.com';

// Email address the QuickApp notification is "From." Should normally be "apps@[domain]"
$appsEmail = 'apps@driveleavitts.com'; 

// RMW email address to BCC (leave as 'admin@')
$rmwemail = 'admin@ramseymediaworks.com'; 

//---------------------------------------------------
// Don't edit below unless you have a good reason!
//---------------------------------------------------

$cdl = $_POST['cdl'];
$experience = $_POST['experience'];
$flatbed = $_POST['flatbed'];
$fullname = $_POST['name'];
$email = $_POST['content'];
$phone = $_POST['phone'];
$zip = $_POST['zip'];
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

		// If no Tenstreet ID is set, just email the form to the "myemail" variable and copy RMW
		if( empty($companyID) ) {

			$to = $notify; 
			$email_subject = "New $companyName QuickApp: $first $last";
			$message = '<html><body>';
			$message .= '<p style="padding-right: 5px; padding-left: 5px; padding-top: 20px; padding-bottom: 20px; text-align: left; background-color: #fff;" align="left" bgcolor="#fff" font-size:18px;><strong>You\'ve received a new lead from'. $siteName .'! Here are the details:</strong></p>';
			$message .= '<table style="border-left-width: 2px; border-bottom-width: 2px; border-right-width: 2px; border-top-width: 2px; border-spacing: 2px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: #131416; border-left-color: #131416; border-top-color: #131416; border-bottom-color: #131416; border-collapse: collapse; background-color: #fff;" bgcolor="#fff">';
			$message .= '<tr><th colspan="2" style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; text-align: left; background-color: #131416; color: #fff;" align="left" bgcolor="#131416"><h4 align="left" style="margin-left: 0; margin-top: 0; margin-bottom: 0; margin-right: 0; color: #fff !important;">Submitted Form Data</h4></th></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>First Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $first .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Last Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $last .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Email</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $email .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Phone Number</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $phone .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>City</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $city .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>State</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $state .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Years of Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $experience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Current CDL</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $cdl .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>User IP Address</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $userIP .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Ad Source</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $source .'</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: $siteName <$appsEmail>\r\n";
			$headers .= "Reply-To: $first $last <$email>\r\n";
			$headers .= 'Date: '.date("r")."\r\n";
			$headers .= "BCC: $rmwemail" . "\r\n";
			
			mail($to,$email_subject,$message,$headers);
			
			// Redirect to the 'Success' page
			header("Location: {$siteURL}success?source=$source&recruiterphone=$recruiterphone&name=$first");
		
		} else {

			$postURL = 'https://dashboard.tenstreet.com/post/tenstreet_standard_post_receive.php';
		
			$post_string = '<?xml version="1.0" encoding="UTF-8"?>
			<TenstreetData>
				<Mode>PROD</Mode>
				<Source>RamseyMediaWorks</Source> 
				<CompanyId>' . $companyID . '</CompanyId>
				<PersonalData>
					<PersonName>
						<GivenName>' . $first . '</GivenName>
						<FamilyName>' . $last . '</FamilyName>
					</PersonName>
					<PostalAddress>
						<Municipality>'. $city . '</Municipality>
						<Region>' . $state . '</Region>
					</PostalAddress>
					<ContactData PreferredMethod="PrimaryPhone">
						<InternetEmailAddress>' . $email . '</InternetEmailAddress>
						<PrimaryPhone>' . $phone . '</PrimaryPhone>
					</ContactData>
				</PersonalData>
				<ApplicationData>
					<AppReferrer>' . $source . '</AppReferrer>
					<Licenses>
						<License>
							<CommercialDriversLicense>'. $cdl . '</CommercialDriversLicense>
						</License>
					</Licenses>
					<DisplayFields>
						<DisplayField>
							<DisplayId>experience</DisplayId>
							<DisplayPrompt>Number of Years Experience</DisplayPrompt>
							<DisplayValue>' . $experience . '</DisplayValue>
						</DisplayField>
						<DisplayField>
							<DisplayId>flatbed</DisplayId>
							<DisplayPrompt>Flatbed Experience</DisplayPrompt>
							<DisplayValue>' . $flatbed . '</DisplayValue>
						</DisplayField>
					</DisplayFields>
				</ApplicationData>
			</TenstreetData>
			';
			
			$header  = "POST HTTP/1.0 \r\n";
			$header .= "Content-type: text/xml \r\n";
			$header .= "Content-length: ".strlen($post_string)." \r\n";
			$header .= "Content-transfer-encoding: text \r\n";
			$header .= "Connection: close \r\n\r\n"; 
			$header .= $post_string;
			
			$ch = curl_init($postURL);
		
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
		
			curl_close($ch);
			
			// Send an email copy of the submitted data to RMW
			$to = $rmwemail; 
			$email_subject = "$companyName QuickApp: $source";
			$message = '<html><body>';
			$message .= '<p style="padding-right: 5px; padding-left: 5px; padding-top: 20px; padding-bottom: 20px; text-align: left; background-color: #fff;" align="left" bgcolor="#fff" font-size:18px;><strong>You\'ve received a new lead from'. $siteName .'! Here are the details:</strong></p>';
			$message .= '<table style="border-left-width: 2px; border-bottom-width: 2px; border-right-width: 2px; border-top-width: 2px; border-spacing: 2px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: #131416; border-left-color: #131416; border-top-color: #131416; border-bottom-color: #131416; border-collapse: collapse; background-color: #fff;" bgcolor="#fff">';
			$message .= '<tr><th colspan="2" style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; text-align: left; background-color: #131416; color: #fff;" align="left" bgcolor="#131416"><h4 align="left" style="margin-left: 0; margin-top: 0; margin-bottom: 0; margin-right: 0; color: #fff !important;">Submitted Form Data</h4></th></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>First Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $first .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Last Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $last .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Email</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $email .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Phone Number</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $phone .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>City</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $city .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>State</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $state .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Flatbed Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $flatbed .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Years of Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $experience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Current CDL</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $cdl .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Ad Source</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $source .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>User IP Address</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $userIP .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>TENSTREET SERVER RESPONSE</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $result .'</td></tr>';
			$message .= '</table>';
			$message .= '</body></html>';
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: $siteName <$appsEmail>\r\n";
			$headers .= "Reply-To: $first $last <$email>\r\n";
			$headers .= 'Date: '.date("r")."\r\n";
			
			mail($to,$email_subject,$message,$headers);
			
			// Redirect to the 'Success' page
			header("Location: {$siteURL}success?source=$source&recruiterphone=$recruiterphone&name=$first");
		
		}
	} else {
		// Redirect to the 'Error' page
		header("Location: {$siteURL}errors");
	}

?>

<!DOCTYPE HTML> 
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Form Errors!</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>
<style type="text/css">

@font-face {
	font-family: 'Interstate Black Condensed';
	src: url('../fonts/interstate/interstate_blackcondensed-webfont.eot');
	src: url('../fonts/interstate/interstate_blackcondensed-webfont.eot?#iefix') format('embedded-opentype'),
	    url('../fonts/interstate/interstate_blackcondensed-webfont.woff') format('woff'),
	    url('../fonts/interstate/interstate_blackcondensed-webfont.ttf') format('truetype'),
	    url('../fonts/interstate/interstate_blackcondensed-webfont.svg#interstateblackcondensed') format('svg');
	font-weight: normal;
	font-style: normal;
}

body {
	background: #fff url('../assets/images/bg.jpg') center bottom no-repeat;
	background-attachment: fixed;
	margin: 50px 30px 50px 30px; 
	font-family: 'Open Sans', sans-serif;
	font-size: 16px;
	color: #333;
	}
	
#content {
	background: #fff;
	background: rgba(255,255,255,0.5);
	padding: 22px 15px 25px 15px;
	border: #ccc 1px solid;
	text-align: center;
	}
	
a { color: #3953a4; }

h2 { 
	font-family: 'Interstate Black Condensed';
	color: #f00;
	}

</style>
</head>
<body>
     <div id="content">
	  <h2>Quick App Submission Error</h2>
	  <p>There was an error in your quick app submission. Please read below.</p>
	  <strong><?php echo nl2br($errors); ?></strong>
	  <p>Either hit the back button to return to previous page or <a href="/">return to home page</a>.</p>
     </div>
</body>
</html>
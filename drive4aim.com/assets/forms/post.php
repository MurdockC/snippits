<?php

include '../source/source.php';

$errors = ''; // Will be populated by the error messages if there are any errors.

$companyName = source::getCompany();
$siteURL = source::getUrl();
$siteName = source::getSiteName();
$companyID = source::getTenstreet();
$notify = source::getNotify();

// Email address the QuickApp notification is "From."
$URL_strip1 = str_replace('http://', '', $siteURL); // removes http
$URL_strip2 = str_replace('https://', '', $URL_strip1); //removes https
$URL_strip3 = str_replace('/', '', $URL_strip2); //removes trailing slash
$URL_stripped = str_replace('template_2017', '', $URL_strip3);
$appsEmail = 'apps@' .  $URL_stripped ; //prepends faux email address

// RMW email address to BCC (leave as 'admin@')
$rmwemail = 'apps@ramseymediaworks.com';

//---------------------------------------------------
// Don't edit below unless you have a good reason!
//---------------------------------------------------

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fullname = test_input($_POST['name']);
	$email = test_input($_POST['content']);
	$phone = test_input($_POST['phone']);
	$address = test_input($_POST['address']);
	$zip = test_input($_POST['zipcode']);
	$city = test_input($_POST['city']);
	$state = test_input($_POST['state']);

	$cdl = test_input($_POST['cdl']);
	$experience = test_input($_POST['experience']);

	//$trailertype = test_input($_POST['division']);
	//$hazmat = test_input($_POST['hazmat']);
	//$tanker = test_input($_POST['tanker']);

	$flatbed = test_input($_POST['flatbed']);
	$van = test_input($_POST['van']);
	$sliding = test_input($_POST['sliding']);
	$reefer = test_input($_POST['reefer']);
	$doubles = test_input($_POST['doubles']);
	$straight = test_input($_POST['straight']);

	$source = test_input($_POST['source']);
	$userIP = test_input($_POST['userIP']);
}

$recruiterphone	= $_POST['recruiterphone'];
$jobID = $_POST['jobid'];
$location = $_POST['location'];

//pull first and last out of full name
$trimmed = rtrim($fullname);
$parts = explode(" ", $trimmed);
$last = array_pop($parts);
$first = implode(" ", $parts);


//Set date for sql entry
date_default_timezone_set("America/Chicago");
$date = date("y-m-d h:i:sa");


// This pulls the siteURL and strips the Scheme and the top domain and inputs it as the value of the database table variable
$databaseTable = str_replace('.com', '', $URL_stripped); //removes the .com from the url and places itself as the value for the database table name

$db_host = "mysql.rmwhost.com";
$db_username = "landingpages";
$db_password = "@||PaG3s";
$db_name = "_apps";
$sql = "INSERT INTO $databaseTable (First, Last, Email, Phone, Address, City, State, Zip, Experience, CDL, TrailerType, Source, UserIP, Date) VALUES ('$first', '$last', '$email' , '$phone' , '$address', '$city' , '$state' , '$zip' ,  '$experience' , '$cdl' , '$flatbed, $van, $sliding, $reefer, ' , '$source' , '$userIP' , '$date' )";


// Honeypot Captcha to repel spambots
$bot = $_POST['email'];
if (!empty($bot)) {
	$redirect = "Location: $siteURL";
}

if(empty($fullname) || !preg_match("/^[a-zA-Z ]*$/", $fullname)) {  $errors .= "\n Error: A Name is Required.";}
if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {  $errors .= "\n Error: A Valid Email is Required.";}
if(empty($phone)) {  $errors .= "\n Error: Phone number required.";}

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
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Address</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $address .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>City</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $city .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>State</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $state .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Zip</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $zip .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Years of Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $experience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Trailer Type</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $flatbed .' '. $van .' ' . $sliding . ' ' . $reefer . ' ' . $doubles . ' ' . $straight . '</td></tr>';
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

			$link = mysqli_connect( $db_host, $db_username, $db_password, $db_name);
			// $input = mysql_select_db($db_name, $link);
			// Check connection
			if($link === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			// After sending and insertion let know it worked, or didn't
		    if (mysqli_query($link, $sql)) {
		    	// Redirect to the 'Success' page
		        $redirect = "Location: {$siteURL}success?source=$source&recruiterphone=$recruiterphone&name=$first";
		        mysqli_close($link);
		    } else {
		        $errors .= "Error: " . mysqli_error($link);
		    }


		} else {

			$postURL = 'https://dashboard.tenstreet.com/post/';

			$post_string = '<?xml version="1.0" encoding="UTF-8"?>
			<TenstreetData>

				<Authentication>
					<ClientId>74</ClientId>
					<Password>v^6itq#H#vn4ug*l*ef@3ac0</Password>
					<Service>subject_upload</Service>
				</Authentication>

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
						<PostalCode>' . $zip . '</PostalCode>
						<Address1>' . $address .'</Address1>
					</PostalAddress>
					<ContactData PreferredMethod="PrimaryPhone">
						<InternetEmailAddress>' . $email . '</InternetEmailAddress>
						<PrimaryPhone>' . $phone . '</PrimaryPhone>
					</ContactData>
				</PersonalData>
				<ApplicationData>
					<AppReferrer>' . $source . '</AppReferrer>
					<DisplayFields>
						<DisplayField>
							<DisplayId>experience</DisplayId>
							<DisplayPrompt>Number of Years Experience</DisplayPrompt>
							<DisplayValue>' . $experience . '</DisplayValue>
						</DisplayField>
						<DisplayField>
							<DisplayId>trailertype</DisplayId>
							<DisplayPrompt>Trailer Type</DisplayPrompt>
							<DisplayValue>' . $flatbed . ' ' . $van . ' ' . $sliding . ' ' . $reefer . ' ' . $doubles . ' ' . $straight . '</DisplayValue>
						</DisplayField>
						<DisplayField>
							<DisplayId>location</DisplayId>
							<DisplayPrompt>Location Applied For</DisplayPrompt>
							<DisplayValue>' . $location . '</DisplayValue>
						</DisplayField>
						<DisplayField>
							<DisplayId>cdl</DisplayId>
							<DisplayPrompt>Valid CDL</DisplayPrompt>
							<DisplayValue>' . $cdl . '</DisplayValue>
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


		    // FORM REACTOR - SEND FORM TO CALL TRACKING METRICS FOR PHONE CALLS


				// There are currently 8 locations with different groups of phone numbers. I'm going to do 8 different if statements with if statements inside for each source.
				if ($location == "fxp-valparaiso") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F31FF08E53DC3659CCE58236EA0EECFB'); // Family Express (FXP) - Valparaiso Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F23BD580AD4749AEDEE14CEFE6F02824C7'); // Family Express (FXP) - Valparaiso Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2EE218EF0C6702C83DB511113B6D4AC94'); // Family Express (FXP) - Valparaiso Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F220A8FA1DDCA2A69FC3DBF5D8450A917E'); // Family Express (FXP) - Valparaiso Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F27B75C40F96DAD0D4806A98D56DE05668'); // Family Express (FXP) - Valparaiso ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2140415415C68B3E6121A6A5BB9C01109'); // Family Express (FXP) - Valparaiso Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F297A51336AE6766A4450FF2C5F07647C5'); // Family Express (FXP) - Valparaiso Landing Page
					}
				} elseif ($location == "frs-deforest") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2FABEADF069AFE8AFEB5D98684815DD34'); // Firestone (FRS) - Deforest Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F27AB7FFE37B3A00234D067713305E26F1'); // Firestone (FRS) - Deforest Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F3C72A57E85D05040E5DC60ABD789AB1'); // Firestone (FRS) - Deforest Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F251C9145EC70BB53CF1258655C78C24E2'); // Firestone (FRS) - Deforest Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F22F7A633435D8C3D82AE3EFC11B41D37F'); // Firestone (FRS) - Deforest ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F202D679847D615BCD0C9D586547060928'); // Firestone (FRS) - Deforest Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2D320947E8B2CFCF134A69780FD45F879'); // Firestone (FRS) - Deforest Landing Page
					}
				} elseif ($location == "frs-youngwood") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2155E0A0A6C7D91693EE0015D7DF0E8EF'); // Firestone (FRS) - Youngwood Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2D2305EE521ADBE727ECC3EB4E3B7BA5A'); // Firestone (FRS) - Youngwood Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2374033C9AEC3FB754631D25BC3BECF5F'); // Firestone (FRS) - Youngwood Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2A89A95B1F1D7A582FEF4F164AF60DA71'); // Firestone (FRS) - Youngwood Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2680014BC4CCDB141578AD052D54A926B'); // Firestone (FRS) - Youngwood ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2025FBDBEF8679A9045692FB07EB31465'); // Firestone (FRS) - Youngwood Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F28637741D1E88C314E0A829E06D7AEE1F'); // Firestone (FRS) - Youngwood Landing Page
					}
				} elseif ($location == "fty-bolingbrook") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2306A5E86C0B94A6445441DB4BDF27BA7'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F20159D4F439A33343B564E9890BEFB741'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F20101FF4BD9423D66DCD70CB8BD77E27F'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F29C92A3A9895BD6D9F45C3EAAF3D38286'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2145869CCA0265510D4471487B23B1F51'); // Fresh Thyme (Regional) (FTY) - Bolingbrook ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2BB129EEBEE1332654BB0B2D7F2EA8E4E'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F20F5E04E886B209FBFD48194A0B34D2FD'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Landing Page
					}
				} elseif ($location == "spc-cressona") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F26E9552319F1D062C31B67EB6F3A88C27'); // Sapa Cressona (SPC) - Cressona Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F239E56CD90B66A5A621DFD76DBEA7D251'); // Sapa Cressona (SPC) - Cressona Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2E273A4C0EA61B12040A49AFD1A2911E5'); // Sapa Cressona (SPC) - Cressona Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F22BDCF7425515A5E588796A6832BECE2E'); // Sapa Cressona (SPC) - Cressona Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2BCCDC0443EE1AA9426031D4CE2B4D78E'); // Sapa Cressona (SPC) - Cressona ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2B575F01C56CA6B04A6C1E3764D70A385'); // Sapa Cressona (SPC) - Cressona Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F273C95AD49BB59BE8BD465734AEEC3F4B'); // Sapa Cressona (SPC) - Cressona Landing Page
					}
				} elseif ($location == "spg-gainesville") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F25DA4F6684A886F33A0690A98AB2B8132'); // Sapa Gainesville (SPG) - Gainesville Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F26F9B97F57275A95F7B8CBAA2BAF0B114'); // Sapa Gainesville (SPG) - Gainesville Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F28F780836AFF5C079B4D99E8C3A7B39FA'); // Sapa Gainesville (SPG) - Gainesville Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2BB5142C3594EA6F67B2014E921964ECB'); // Sapa Gainesville (SPG) - Gainesville Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F29DA2A1817DF7DB238EC6474FC028C49F'); // Sapa Gainesville (SPG) - Gainesville ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2E4F3F692B6070118A80E97277EAA5ECC'); // Sapa Gainesville (SPG) - Gainesville Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F78250094E1A7E9F4C2761E5B84D6C40'); // Sapa Gainesville (SPG) - Gainesville Landing Page
					}
				} elseif ($location == "spi-elkhart") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2DAC8D737DD185CBE12F408717449146F'); // Sapa Indalloy (SPI) - Elkhart Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F24C9F20E1125DC78678D108B7FAE6D4A8'); // Sapa Indalloy (SPI) - Elkhart Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F29DE8B44695CA90441E939150C4F0F703'); // Sapa Indalloy (SPI) - Elkhart Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F234A9299D1E33026F530E6F05FB161305'); // Sapa Indalloy (SPI) - Elkhart Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2C615E882F63E7647F8823AAB3892AAE1'); // Sapa Indalloy (SPI) - Elkhart ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2DAFDC9D2095140133B61E03802AB7398'); // Sapa Indalloy (SPI) - Elkhart Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2672FFBAA62C63735789B9602A563ABBE'); // Sapa Indalloy (SPI) - Elkhart Landing Page
					}
				} elseif ($location == "spi-romulus") {
					if (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2DF412ED6DA3E45B808B2B5C4BBD5898B'); // Sapa Indalloy (SPI) - Romulus Indeed
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F6D444CB528C784A308DC28005B46522'); // Sapa Indalloy (SPI) - Romulus Social Edge
					} elseif (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2DE0F53D3A48DBE740A7E072DED2D5D8E'); // Sapa Indalloy (SPI) - Romulus Craigslist
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2EC996C6E6B06F0DDD7F21D63F947F51B'); // Sapa Indalloy (SPI) - Romulus Jobs2Careers
					} elseif (strpos($source, 'zipalerts') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2386CA218791655FFE4050BDB9EC03E38'); // Sapa Indalloy (SPI) - Romulus ZipAlerts
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F294CE702CABD2B42A0D4D2B0AAC55D3D2'); // Sapa Indalloy (SPI) - Romulus Google Adwords
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F26544E85BC6F87B8F9867A2E4615FAD99'); // Sapa Indalloy (SPI) - Romulus Landing Page
					}
				} elseif ($location == "ffm-cranberry-township") {
					if (strpos($source, 'craigslist') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F0CC699BCAFCCE96F8508E8E8B207FD5'); // craigslist
					} elseif (strpos($source, 'google') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F245F336456E70AC803F387B455E3E7B8D'); // google
					} elseif (strpos($source, 'indeed') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F202F6A2E6FCC233C7616BD70ED56FE577'); // indeed
					} elseif (strpos($source, 'jobs2careers') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2B4CA18AE1F9D191A5DF6001004509A02'); // jobs2careers
					} elseif (strpos($source, 'socialedge') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2CBC5E1ED71CE02D3B4C929CFE40B50FA'); // socialedge
					} elseif (strpos($source, 'cdljobnow') !== false) {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F5C46DCFCA4395A7529B87AB8381AC69'); // cdljobnow
					} else {
						$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F27DF0217F17E32A9C70BDDC8BC5533E17'); // upward
					}
				} else {
					// If all else fails I'm just gonna send them to the first Default Landing Page on the list .... it shouldn't make it here, ever.
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F297A51336AE6766A4450FF2C5F07647C5'); // Family Express (FXP) - Valparaiso Landing Page
				}

				curl_setopt_array($curl, array(
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => '{ "caller_name":"' . $fullname . '", "phone_number":"' . $phone . '", "custom_source":"' . $source . '" }',
				  CURLOPT_HTTPHEADER => array(
				    'Content-Type:application/json',
					'Authorization: Basic '. base64_encode("ec676d1f4d869b153af91796705d951e:dac8cbe2d2779ef7c816d2804731541f434b")
				  ),
				));

				$result = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

			// END FORM REACTOR


			// Send an email copy of the submitted data to RMW
			$to = $rmwemail . ', ' . $notify;
			$email_subject = "$companyName QuickApp: $source";
			$message = '<html><body>';
			$message .= '<p style="padding-right: 5px; padding-left: 5px; padding-top: 20px; padding-bottom: 20px; text-align: left; background-color: #fff;" align="left" bgcolor="#fff" font-size:18px;><strong>You\'ve received a new lead from'. $siteName .'! Here are the details:</strong></p>';
			$message .= '<table style="border-left-width: 2px; border-bottom-width: 2px; border-right-width: 2px; border-top-width: 2px; border-spacing: 2px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: #131416; border-left-color: #131416; border-top-color: #131416; border-bottom-color: #131416; border-collapse: collapse; background-color: #fff;" bgcolor="#fff">';
			$message .= '<tr><th colspan="2" style="padding-right: 5px; padding-left: 5px; padding-top: 5px; padding-bottom: 5px; text-align: left; background-color: #131416; color: #fff;" align="left" bgcolor="#131416"><h4 align="left" style="margin-left: 0; margin-top: 0; margin-bottom: 0; margin-right: 0; color: #fff !important;">Submitted Form Data</h4></th></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>First Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $first .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Last Name</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $last .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Email</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $email .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Phone Number</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $phone .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Street Address</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $address .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>City</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $city .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>State</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $state .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Zip</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $zip .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Years of Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $experience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Trailer Type</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $flatbed .' '. $van .' ' . $sliding . ' ' . $reefer . ' ' . $doubles . ' ' . $straight . '</td></tr>';
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

			$link = mysqli_connect( $db_host, $db_username, $db_password, $db_name);
			// $input = mysql_select_db($db_name, $link);
			// Check connection
			if($link === false){
			    die("ERROR: Could not connect. " . mysqli_connect_error());
			}

			// After sending and insertion let know it worked, or didn't
		    if (mysqli_query($link, $sql)) {
		    	// Redirect to the 'Success' page
		        $redirect = "Location: {$siteURL}success?source=$source&recruiterphone=$recruiterphone&name=$first";
		        mysqli_close($link);
		    } else {
		        $errors .= "Error: " . mysqli_error($link);
		    }
		}
	} else {
		// Redirect to the 'Error' page
		$errors = str_replace("\n", '', $errors);
		$redirect = "Location: {$siteURL}errors?error=$errors";
	}

	header($redirect);

?>

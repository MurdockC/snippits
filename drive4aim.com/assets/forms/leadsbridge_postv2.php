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
	$first = test_input($_POST['first_name']);
	$last = test_input($_POST['last_name']);
	$email = test_input($_POST['email']);
	$phone = test_input($_POST['phone_number']);
	$zip = test_input($_POST['zip_code']);
	$state = test_input($_POST['state']);
	$cdl = test_input($_POST['do_you_have_a_current_cdl-a_or_b_license?']);
	$experience = test_input($_POST['how_many_years_of_driving_experience?']);
	$flatbedexperience = test_input($_POST['do_you_have_flatbed_experience?']);
}

$recruiterphone	= $_POST['recruiterphone'];
$jobID = $_POST['jobid'];
$location = $_POST['adset_id'];
$source = $_POST['ad_id'];

$fullname = $first . ' ' . $last;

//Set date for sql entry
date_default_timezone_set("America/Chicago");
$date = date("y-m-d h:i:sa");

// This pulls the siteURL and strips the Scheme and the top domain and inputs it as the value of the database table variable
$databaseTable = str_replace('.com', '', $URL_stripped); //removes the .com from the url and places itself as the value for the database table name

$db_host = "mysql.rmwhost.com";
$db_username = "landingpages";
$db_password = "@||PaG3s";
$db_name = "_apps";
$sql = "INSERT INTO $databaseTable (First, Last, Email, Phone, Address, City, State, Zip, Experience, CDL, TrailerType, Source, UserIP, Date) VALUES ('$first', '$last', '$email' , '$phone' , '$address', ' ' , ' ' , '$zip' ,  '$experience' , '$cdl' , ' ' , '$source' , '$userIP' , '$date' )";

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
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>State</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $state .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Zip</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $zip .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Years of Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $experience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Flatbed Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $flatbedexperience .'</td></tr>';			
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Current CDL</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $cdl .'</td></tr>';
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
		        $redirect = "Location: {$siteURL}assets/forms/leadsbridge_success";
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
							<DisplayId>location</DisplayId>
							<DisplayPrompt>Location Applied For</DisplayPrompt>
							<DisplayValue>' . $location . '</DisplayValue>
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
				if ($source == "socialedge_fxp_valparaiso") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F23BD580AD4749AEDEE14CEFE6F02824C7'); // Family Express (FXP) - Valparaiso Social Edge
					
				} elseif ($source == "socialedge_frs_deforest") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F27AB7FFE37B3A00234D067713305E26F1'); // Firestone (FRS) - Deforest Social Edge
					
				} elseif ($$source == "socialedge_frs_youngwood") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2D2305EE521ADBE727ECC3EB4E3B7BA5A'); // Firestone (FRS) - Youngwood Social Edge
					
				} elseif ($$source == "socialedge_fty_bolingbrook") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F20159D4F439A33343B564E9890BEFB741'); // Fresh Thyme (Regional) (FTY) - Bolingbrook Social Edge
					
				} elseif ($source == "socialedge_spc_cressona") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F239E56CD90B66A5A621DFD76DBEA7D251'); // Sapa Cressona (SPC) - Cressona Social Edge
					
				} elseif ($source == "socialedge_spg_gainesville") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F26F9B97F57275A95F7B8CBAA2BAF0B114'); // Sapa Gainesville (SPG) - Gainesville Social Edge
					
				} elseif ($source == "socialedge_spi_elkhart") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F24C9F20E1125DC78678D108B7FAE6D4A8'); // Sapa Indalloy (SPI) - Elkhart Social Edge
					
				} elseif ($source == "socialedge_spi_romulus") {
					
					$curl = curl_init('https://api.calltrackingmetrics.com/api/v1/formreactor/FRT472ABB2C5B9B141A9B7F0230B39FA1F2F6D444CB528C784A308DC28005B46522'); // Sapa Indalloy (SPI) - Romulus Social Edge
					
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
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Zip</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $zip .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Years of Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $experience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Flatbed Experience</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $flatbedexperience .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Current CDL</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $cdl .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>Ad Source</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $source .'</td></tr>';
			$message .= '<tr><th style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 10px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #DDE0E1;" width="120" valign="top" align="right" bgcolor="#DDE0E1"><strong>TENSTREET SERVER RESPONSE</strong></th><td style="border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px; border-right-width: 1px; padding-left: 5px; padding-top: 5px; padding-right: 5px; padding-bottom: 5px; border-left-style: solid; border-bottom-style: solid; border-right-style: solid; border-top-style: solid; border-right-color: #999999; border-top-color: #999999; border-bottom-color: #999999; border-left-color: #999999; background-color: #f9f9f9;" width="400" valign="top" bgcolor="#f9f9f9">'. $result .'</td></tr>';
			$message .= '</table>';
			$message .= '<p style="padding-right: 5px; padding-left: 5px; padding-top: 20px; padding-bottom: 20px; text-align: left; background-color: #fff;" align="left" bgcolor="#fff" font-size:18px;><strong>Note: SocialEdge forms cannot require fields or do a mutli-select. Some fields may be left blank.</strong></p>';
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
		        $redirect = "Location: {$siteURL}assets/forms/leadsbridge_success.html";
		        mysqli_close($link);
		    } else {
		        $errors .= "Error: " . mysqli_error($link);
		        $redirect = "Location: {$siteURL}assets/forms/leadsbridge_error.html";
		    }
		}
	} else {
		// Redirect to the 'Error' page
		$redirect = "Location: {$siteURL}assets/forms/leadsbridge_error.html";
	}
	
	header($redirect);

?>

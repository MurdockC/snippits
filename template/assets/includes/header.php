<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once ('assets/source/source.php');

	// $_SERVER['DOCUMENT_ROOT'] .

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
?>
<html lang="en">

<head>
	<link rel="shortcut icon" href="<?php echo $siteURL; ?>favicon.ico?v=2">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script type="text/javascript" href="assets/js/main.js"></script>
	<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> | <?php echo $phone; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<div class="container full-width flex centered-contents padding-lg">
			<div class="container width-1200 flex nav">
				<img class="logo" src="assets/images/dist/logo.png" alt="Company Logo">
				<!--
					<span class="desktop-hidden flex">
						<a onclick="doThis()">
							<div class="nav-icon-container flex">
								<div class="nav-icon-text">Menu</div>
								<div class="nav-icon">
									<div class="icon-bar"></div>
									<div class="icon-bar"></div>
									<div class="icon-bar"></div>
								</div>
							</div>
						</a>
					</span>
				-->
					<div class="nav-icon-container flex">
						<span class="desktop-hidden flex"><a href="#"><button class="button button-primary flex centered-contents padding-md margin-sm"><span class="desktop-hidden flex">Call Us!</span></button></a></span>
					</div>
					<span class="desktop-visible">
						<!--
							<a href="#"><button class="button-secondary flex centered-contents padding-md margin-sm">Company Driver</button></a>
							<a href="#"><button class="button-secondary flex centered-contents padding-md margin-sm">Owner Operator</button></a>
						-->
						<a href="tel:<?php echo $phone; ?>"><button class="button button-primary flex centered-contents padding-md margin-sm"><span class="desktop-visible"><?php echo $phone; ?></span></button></a>
					</span>
				</div>
			</div>
			<!-- below content is hidden until hamburger button is pushed -->
			<div id="thisContent" class="mobile-nav flex-column-sm container">
				<a href="tel:<?php echo $phone; ?>"><div class="button-primary flex centered-contents padding-lg margin-sm">Give us a Call!</div></a>
					<!--
					<a href="#"><div class="button-secondary flex centered-contents padding-lg margin-sm">Company Driver</div></a>
					<a href="#"><div class="button-secondary flex centered-contents padding-lg margin-sm">Owner Operator</div></a>
					-->
			</div>
			<!-- this div becomes hidden while viewing mobile nav -->
				<section id="campaign" class="container fullwidth campaign-bg flex centered-contents relative">
					<div class="absolute-black-box"></div>
						<div class="container width-1200 flex  margin-tb-lg wrap ">
							<div class="flex grow-shrink margin-lg flex-column-sm white-text padding-tb-xl w-45">
								<div class="padding-tb-xl">
									<h1 style="font-size: 2.5em;">J&M TANK LINES IS THE PREMIER TRANSPORTATION LEADER IN THE SOUTHEAST</h1>
								</div>
								<div class="container flex wrappadding-tb-xl">
									<button class="button-primary button-campaign  margin-md margin-tb-lg flex-grow">Apply Now!</button> <button class="button-secondary-light button-campaign  margin-md margin-tb-lg flex-grow">Be Contacted!</button>
								</div>
							</div>
							<div class="flex margin-lg flex-column-sm centered-contents">
								<img class="truck absolute" src="assets/images/dist/truck.png" alt="Truck">
							</div>
						</div>
				</section>
		</header>

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
		<div class=" bg--primary container element--full-width flex ai--c jc--c padding--lg">
			<div class="nav container container--1200 flex">
				<a href="<?php echo $siteURL; ?>"><img class="header__logo--img" src="assets/images/dist/logo.png" alt="Company Logo"></a>
				<!-- <span class="desktop-hidden flex">
						<a onclick="doThis()">
							<div class="nav__phone flex">
								<div class="nav__menu--text">Menu</div>
								<div class="nav__menu--mobile">
									<div class="icon-bar"></div>
									<div class="icon-bar"></div>
									<div class="icon-bar"></div>
								</div>
							</div>
						</a>
				</span> -->
				<div class="nav__phone flex">
					<span class="desktop-hidden flex"><a href="#"><button class="button button--primary flex ai--c jc--c padding--md margin--sm"><span class="desktop-hidden flex">Call Us!</span></button></a></span>
				</div>
				<span class="desktop-visible">
					<!--
						<a href="#"><button class="button--secondary flex ai--c jc--c padding--md margin--sm">Company Driver</button></a>
						<a href="#"><button class="button--secondary flex ai--c jc--c padding--md margin--sm">Owner Operator</button></a>
					-->
					<a href="tel:<?php echo $phone; ?>"><button class="button button--primary flex ai--c jc--c padding--md margin--sm"><span class="desktop-visible"><?php echo $phone; ?></span></button></a>
				</span>
			</div>
		</div>
		</div>
		<!-- below content is hidden until hamburger button is pushed -->
		<!-- <div id="thisContent" class="header__nav--mobile container--column-300 container">
			<a href="tel:<?php echo $phone; ?>"><div class="button--primary flex ai--c jc--c padding--lg margin--sm">Give us a Call!</div></a> -->
				<!--
				<a href="#"><div class="button--secondary flex ai--c jc--c padding--lg margin--sm">Company Driver</div></a>
				<a href="#"><div class="button--secondary flex ai--c jc--c padding--lg margin--sm">Owner Operator</div></a>
				-->
		</div>
			<!-- this div becomes hidden while viewing mobile nav -->
			<section id="campaign" class="campaign-bg container element--full-width flex jc--c ai--c">
				<div class="container--1200 flex">
					<div class=" flex flex-column campaign--container-text">
						<h1 class="padding--lg">Safety is serious business. <span>That’s why we pay so much for it.</span></h1>
						<p class="padding--lg padding-tb--none callout-spacing">In our line of work, you can’t be too careful. That’s why we pay top dollar for expert Owner Operators to safely haul chemicals and hazardous waste. Drivers earn $187K on average and up to $240K for top performers.</p>
							<div class="campaign--container-buttons flex wrap">
								<a href="<?php echo $app; ?>?r=<?php echo $origin; ?>" class="flex campaign__button button--primary margin--lg grow ai--c jc--c grow"><button>Apply Now!</button></a>
								<a href="#form" class="flex campaign__button button--secondary-light  margin--lg grow ai--c jc--c"><button>Be Contacted!</button></a>
							</div>
						</div>
					</div>
					<!-- <div class="campaign__text--inner flex absolute">
						<h1>The proof’s in the paycheck.</h1>
						<p><b>The proof that we care about our drivers.</b> Our pay package provides a $1,000/week minimum guarantee for experienced drivers, plus practical mile pay and a sliding scale with higher rates for shorter hauls. That’s care in action.</p>
					</div> -->
				</div>
			</section>
		</header>

<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once ('assets/source/source.php');

	// $_SERVER['DOCUMENT_ROOT'] .

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
	//
	// // If no utm_source or cookie set use a specific default number for each page.
	// if(!isset($_GET['utm_source']) && !isset($_COOKIE["Drive4CoalCityCob"])){
	// 	if(strpos($_SERVER['REQUEST_URI'], "decatur") !== false){
	// 		$phone = '';
	// 	} else {
	// 		// Leave default from config file
	// 	}
	// }
?>

<html lang="en">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TKMJPZX');</script>
<!-- End Google Tag Manager -->

	<link rel="shortcut icon" href="<?php echo $siteURL; ?>favicon.ico?v=2">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script type="text/javascript" href="assets/js/main.js"></script>
	<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> | <?php echo $phone; ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKMJPZX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class=" bg--white container element--full-width flex ai--c jc--c padding--lg">
			<div class="nav container container--1200 flex">
				<a href="<?php echo $siteURL; ?>"><img id="logo" class="header__logo--img" src="assets/images/dist/logo.jpg" alt="Company Logo"></a>
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
					<a href="tel:<?php echo $phone; ?>"><button id="phoneNum" class="button button--primary flex ai--c jc--c padding--md margin--sm"><span class="desktop-visible"><?php echo $phone; ?></span></button></a>
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
			<?php if ($pageName == "privacy") : ?>
		<?php else : ?>
			<section class="bg--primary element--full-width flex jc--c ai--c desktop-hidden">
				<h1 style="text-align: center; text-transform: uppercase; color: white;" class="padding--lg primary-text">The Driver is our<br>first customer.</span></h1>
			</section>
			<section id="campaign" class="campaign-bg-reefer container element--full-width flex jc--c ai--c">
				<div class="container--1200 flex">
					<div class=" flex flex-column campaign--container-text">
						<h1 class="padding--lg white--text">The Driver is our first customer.</span></h1>
						<!-- <p class="padding--lg padding-tb--none callout-spacing dark-text">We serve lots of outside customers, but within the company, we serve drivers. They come first in every department—dispatch, maintenance, accounting, or management. We’ve found that when we put drivers first, everything else falls into line.</p> -->
							<div class="campaign--container-buttons flex wrap">
								<a href="<?php echo $app; ?>?r=<?php echo $origin; ?>" class="flex campaign__button button--primary margin--lg grow ai--c jc--c grow"><button>Apply Now!</button></a>
								<a href="#form" class="flex campaign__button button--secondary-light  margin--lg grow ai--c jc--c"><button style="color: white;">Be Contacted!</button></a>
							</div>
						</div>
					</div>
					<!-- <div class="campaign__text--inner flex absolute">
						<h1>The proof’s in the paycheck.</h1>
						<p><b>The proof that we care about our drivers.</b> Our pay package provides a $1,000/week minimum guarantee for experienced drivers, plus practical mile pay and a sliding scale with higher rates for shorter hauls. That’s care in action.</p>
					</div> -->
				</div>
			</section>
		<?php endif ; ?>
		</header>

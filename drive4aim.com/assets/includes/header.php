<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once $_SERVER['DOCUMENT_ROOT'] . ('/assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
	
	if (!isset($_GET['utm_source']) && !isset($_COOKIE["driveforaim"]))
		if ($location == "frs-deforest") 
			$phone = '877.862.8054';
		elseif ($location == "frs-youngwood")
			$phone = '855.279.2735';
		elseif ($location == "fty-bolingbrook")
			$phone = '844.311.5534';
		elseif ($location == "fxp-valparaiso")
			$phone = '855.736.4221';
		elseif ($location == "spc-cressona")
			$phone = '855.231.7346';
		elseif ($location == "spg-gainesville")
			$phone = '844.307.1402';
		elseif ($location == "spi-elkhart")
			$phone = '855.910.8966';
		elseif ($location == "spi-romulus")
			$phone = '855.781.8917';
		else 
			$phone = '';;
	
?>
<html>
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBP4N7D');</script>
<!-- End Google Tag Manager -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo $siteURL; ?>assets/css/style.css">
	<link rel="icon" type="image/png" href="favicon.ico"  />
	<link rel="icon" type="image/png" href="favicon.gif" />
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBP4N7D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
  <section class="campaign van-campaign">
		<div style="position: relative; z-index: 1;" class="container_nav">
			<div class="container_nav--padding">
				<a href="<?php echo $siteURL; ?>"><img class="logo" src="<?php echo $siteURL; ?>assets/images/logo.png" /></a>
				<?php if ($phone != '' && $phone != '000.000.0000'): ?>
				<a class="phoneIcon" href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
				<a class="phone" href="tel:<?php echo $phone; ?>">Call Us! <span><?php echo $phone; ?></span></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="container">
			<div class="campaign">
				<h1 style="max-width:500px;">Our routes lead you home.</h1>
				<p style="font-size:1.6em;max-width:500px;">At least 2 consecutive days a week. As a delivery driver with AIM, you can earn a living on the road without having to live there.</p>
				<?php if ($pageName == "Home") : ?>
				<?php else : ?>
				   <a class="button button-primary" href="#" id="toform">Start Now</a>
				<?php endif ?>
			</div>
		</div>
	</section>
</header>

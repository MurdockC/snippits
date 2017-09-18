<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once $_SERVER['DOCUMENT_ROOT'] . ('/assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
?>
<html>
<head>
	
</head>
<body>

<header>
	<section class="otr-campaign">
		<div class="container_nav">
			<div class="container_nav--padding">
				<a href="<?php echo $siteURL; ?>"><img class="logo" src="<?php echo $siteURL; ?>assets/images/logo.png" /></a>
				<a class="phoneIcon" href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i></a>
				<a class="phone" href="tel:<?php echo $phone; ?>"><p>Call Us!</p><span> <?php echo $phone; ?></span></a>
			</div>
		</div>
		<div class="container">
			<div class="campaign">
				<h1>Want to build a strong driving job?<br> Load up with protein.</h1>
				<p>Protein-power your job by joining JBS. As the transportation arm of the world’s leading meat processor, our truck drivers help feed America and enjoy the strength that comes with it.</p>
				<a href="#questions" class="button button-primary">Be Contacted!</a>
				<a href="<?php echo $app; ?>?r=<?php echo $origin; ?>" class="button-secondary">Or Fill Out Our Full Application</a>
			</div>
			<div class="hidden-on-mobile">&nbsp;<br><!--<img src="<?php echo $siteURL; ?>assets/images/truck.png">--></div>
		</div>
	</section>
</header>

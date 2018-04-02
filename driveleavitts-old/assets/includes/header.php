<?php
	require_once('assets/source/source.php');
	$siteURL = source::getUrl();
	$phone_no_string = str_replace(".", "" ,$phone);
	$title = source::getTitle();
	$tenstreet = source::getTenstreet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K8ZZ7W');</script>
<!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<title><?php echo $title; ?> | <?php echo $pageTitle; ?> | <?php echo $phone; ?></title>
	<meta name="description" content="<?php echo $metaDesc; ?>">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $siteURL; ?>assets/css/landing_page.css">
	<link rel="stylesheet" href="<?php echo $siteURL; ?>assets/css/slidebars.css">
	<link rel="stylesheet" href="<?php echo $siteURL; ?>assets/css/lightbox.css">
	<!--[if IE]><script src="<?php echo $siteURL; ?>assets/js/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><style>#mobile-fixed-header { display: none; }</style><![endif]-->
	<!--[if IE 8]><style>html { height: auto; }</style><![endif]-->
	<?php include ('assets/includes/tracking.php'); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8ZZ7W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div id="mobile-fixed-header" class="sb-slide">
		<div class="sb-toggle-left navbar-left">
			<div class="navicon-line"></div>
			<div class="navicon-line"></div>
			<div class="navicon-line"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="sb-site">
			<div id="wrapper-for-footer-push">
				<header id="siteHeader">
					<div class="container">
						<div class="sixteen columns" style="text-align:center;">
							<img class="logo" class="scale-with-grid" src="<?php echo $siteURL; ?>assets/images/logo.png" alt="Logo">
							<h1 class="hidden-on-mobile"><strong>Flatbedding</strong><br>↠ at its best ↞</h1>
							<!--<img class="scale-with-grid" src="<?php echo $siteURL; ?>assets/images/specialize.png" alt="Leavitts Specializes in Long Loads" />-->
						</div>
					</div>
				</header>
				<div class="container">
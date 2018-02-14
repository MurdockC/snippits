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

<?php
 if (!isset($_GET['utm_source']) && !isset($_COOKIE["forwardairdrivingjobs"])){
	if ($pageName == "tlx") :
	$phone = '855.908.4136';
	else :
		$phone = "855.466.4522";
	endif;
}
?>


<html lang="en">
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MD448MH');</script>
<!-- End Google Tag Manager -->
	<link rel="shortcut icon" href="<?php echo $siteURL; ?>favicon.ico?v=2">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script type="text/javascript" href="assets/js/main.js"></script>

	<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> |<?php echo $phone; ?></title>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD448MH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<div class="bg-white container container--full-width container--flex ai--c jc--c padding--lg">
			<div class="nav container container--1200 container--flex">
				<?php
				if ($pageName == "tlx") : ?>
				<a href="/tlx">
			  <?php elseif ($pageName =="ltl") : ?>
				<a href="/index">
			<?php endif ; ?>
					<img class="header__logo--img" src="assets/images/dist/logo.png" alt="Company Logo"></a>

				<!-- <span class="desktop-hidden container--flex">
						<a onclick="doThis()">
							<div class="nav__phone container--flex">
								<div class="nav__menu--text">Menu</div>
								<div class="nav__menu--mobile">
									<div class="icon-bar"></div>
									<div class="icon-bar"></div>
									<div class="icon-bar"></div>
								</div>
							</div>
						</a>
				</span> -->
				<div class="nav__phone container--flex">
					<span class="desktop-hidden container--flex"><a href="#"><button class="button button--primary container--flex ai--c jc--c padding--md margin--sm"><span class="desktop-hidden container--flex txt-w">Call Us!</span></button></a></span>
				</div>
				<span class="desktop-visible">
					<!--
						<a href="#"><button class="button--secondary flex ai--c jc--c padding--md margin--sm">Company Driver</button></a>
						<a href="#"><button class="button--secondary flex ai--c jc--c padding--md margin--sm">Owner Operator</button></a>
					-->

						<a href="tel:<?php echo $phone; ?>"><button class="button button--primary container--flex ai--c jc--c padding--md margin--sm"><span class="desktop-visible txt-w "><?php echo $phone; ?> Call us!</span></button></a>
				</span>
			</div>
		</div>
		<!-- below content is hidden until hamburger button is pushed -->
		<div id="thisContent" class="header__nav--mobile container--column-sm container">
			<a href="tel:<?php echo $phone; ?>"><div class="button--primary container--flex ai--c jc--c padding--lg margin--sm">Give us a Call!</div></a>
				<!--
				<a href="#"><div class="button--secondary container--flex ai--c jc--c padding--lg margin--sm">Company Driver</div></a>
				<a href="#"><div class="button--secondary container--flex ai--c jc--c padding--lg margin--sm">Owner Operator</div></a>
				-->
		</div>
			<!-- this div becomes hidden while viewing mobile nav -->
			<?php if ($pageName == "privacy") : ?>
	<?php else : ?>
				<section id="campaign" class="container container--full-width campaign-bg container--flex relative">
					<div class="campaign-container  padding--lg container--flex ai--c jc--c">
						<div class="container--1200 container--flex">
						<div class="campaign-text">
							<h1 style="font-size: 2em;" class="margin--md txt-w">Let's get right<br>to the point.</h1>
							<h4 style="color: white;" class="margin--md">That’s our job as an expedited carrier.</h4>
							<p class="margin--md txt-w">If you’re an owner operator who enjoys getting right
from point A to point B, and getting paid well for it, then we’re the carrier for you.</p>
							<div class="container campaign__buttons--container container--flex wrap">
								<a href="<?php echo $app ; ?>?r=rmw_<?php echo $origin ; ?>" class="container--flex campaign__button button--primary margin--md flex-grow ai--c jc--c flex-grow"><button>Apply Now!</button></a>
								<a href="#form" class="container--flex campaign__button button--secondary-light  margin--md flex-grow ai--c jc--c"><button>Be Contacted!</button></a>
							</div>
						</div>
						</div>
					</div>
				<?php endif ; ?>

					<!-- <div class="absolute-black-box"></div>
						<div class="container container--1200 flex  margin--tb-lg wrap ">
							<div class="container--flex grow-shrink margin--lg container--column-sm white-text padding--tb-xl w-45">
								<div class="padding--tb-xl">
									<h1 style="font-size: 2.5em;">Delivering health is a feel-good trucking job.</h1>
								</div>
								<div class="container container--flex wrappadding--tb-xl">
									<button class="button--primary campaign__button  margin--md margin--tb-lg flex-grow">Apply Now!</button> <button class="button--secondary-light campaign__button  margin--md margin--tb-lg flex-grow">Be Contacted!</button>
								</div>
							</div>
							<div class="container--flex margin--lg container--column-sm ai--c jc--c">
								<img class="truck absolute" src="assets/images/dist/truck.png" alt="Truck">
							</div>
						</div> -->
				</section>
		</header>

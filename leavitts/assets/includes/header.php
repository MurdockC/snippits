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


  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script type="text/javascript" href="assets/js/main.js"></script>

	<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> |<?php echo $phone; ?></title>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
		<link rel="shortcut icon" href="http://rmwsites.com/leavitts/favicon.ico?v=2">	<header>
		<div class="bg-white container container--full-width container--flex ai--c jc--c padding--lg">
			<div class="nav container container--1200 container--flex">
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
							<h1 class="margin--md txt-w">Money doesn't grow on trees,<br> but there's money in hauling&nbspthem.</h1>
							<h4 style="color: white;" class="margin--md">Our timber, lumber, and other flatbed loads might not have cash growing out of them, but they do offer more money than the typical carrier.</h4>
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

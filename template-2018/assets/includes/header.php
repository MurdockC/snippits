<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once ('assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="<?php echo $siteURL; ?>favicon.ico?v=2">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <script type="text/javascript" href="assets/js/main.js"></script>
	<meta name="description" content="Trucking Job <?php echo $company;?>"/>
	<meta name="author" content="Ramsey Mediaworks"/>
	<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> | <?php echo $phone; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
</head>

<body>
	<header>
		<!-- this div becomes hidden while viewing mobile nav -->
		<?php if ($pageTitle == 'Privacy') : ?>
		<?php else : ?>
		<section id="campaign" class="campaign__bg o--hidden w--full flex fadeLoad ">
			<div class="o--hidden w--full bg--t flex jc--c ai--c p--lg">
				<div class="nav o--hidden w--1200 flex">
					<a href="<?php echo $siteURL; ?>"><img id="logo" class="header__logo--img" src="assets/images/dist/logo.png" alt="<?php echo $company; ?> Logo"></a>
					<div class="nav__phone flex">
						<span class="desktop--hidden flex"><a href="tel:<?php echo $phone; ?>"><button class="button button--primary flex ai--c jc--c p--md m--sm"><span class="desktop--hidden flex">Call Us!</span></button></a></span>
					</div>
					<span class="desktop--visible"><a href="tel:<?php echo $phone; ?>"><button id="phoneNum" class="button button--primary flex ai--c jc--c p--md m--sm"><span class="desktop--visible"><?php echo $phone; ?></span></button></a></span>
				</div>
			</div>
			<div class="o--hidden w--full flex ai--c jc--c p--none">
				<div class="w--1200 flex">
				<div id="campText" class="flex flex-column campaign--container-text jc--c ai--c hidden bg--c">
						<h1 class="p--lg"><span>Big Trucks.</span><br>Bigger Careers.</h1>
						<div class="campaign--container-buttons flex wrap">
							<a href="<?php echo $app; ?>?r=<?php echo $origin; ?>" class="button flex campaign__button button--primary grow ai--c jc--c grow"><button>Apply Now!</button></a>
							<a href="#form" class="button flex campaign__button button--secondary-light grow ai--c jc--c"><button style="">Be Contacted!</button></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		</header>

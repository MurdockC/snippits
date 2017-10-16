<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once $_SERVER['DOCUMENT_ROOT'] . ('/assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
?>
<html lang="en">

<head>
	<!-- Google Tag Manager -->

		<link rel="shortcut icon" href="<?php echo $siteURL; ?>favicon.ico?v=2">

    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <script type="text/javascript" href="/assets/js/main.js"></script>
		<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> | <?php echo $phone; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<script type="text/javascript">
				function doThis() {
						var hidden = document.getElementById('mobile-hide');
						var menu = document.getElementById('thisContent');
						if (menu.style.display === 'none') {
								menu.style.display = 'flex';
								hidden.style.display = 'none';

						} else {
								menu.style.display = 'none';
								hidden.style.display = 'block';
						}
				}
		</script>
	</head>
	<body>

	<header>
    <div class="container full-width light-bg flex centered-contents padding-lg">
      <div class="container width-1200 flex nav">
        <img class="logo" src="/assets/images/dist/logo.png" alt="Company Logo">
				<!-- This is the hamburger menu - viewable on mobile size devices, use when more than one page is required -->
				<!--
	        <span class="desktop-hidden flex">
						<a onclick="doThis()">
							<div class="nav-icon-container flex">
								<div class="nav-icon-text">
										Menu
								</div>
								<div class="nav-icon">
										<div class="icon-bar"></div>
										<div class="icon-bar"></div>
										<div class="icon-bar"></div>
								</div>
						</div>
	        </a>
				</span>
				-->
				<span class="desktop-hidden flex">
					<div class="nav-icon-container flex">
						<a href="#"><button class="button button-primary flex centered-contents padding-md margin-sm">Call Us!</button></a>
					</div>
				</span>

					<!-- These are the nav buttons for desktop size screens -->
					<span class="desktop-visible">
					<!--
						<a href="#">
	              <button class="button-secondary flex centered-contents padding-md margin-sm">Company Driver</button>
	          </a>
	          <a href="#">
	              <button class="button-secondary flex centered-contents padding-md margin-sm">Owner Operator</button>
	          </a>
					-->
						<a href="#">
              <button class="button button-primary flex centered-contents padding-md margin-sm">000.000.0000</button>
            </a>
					</span>
      </div>
		</div>
				    <!-- below content is hidden until hamburger button is pushed -->
				    <div id="thisContent" class="mobile-nav flex-column-sm container">
			        <a href="#">
		            <div class="button-primary flex centered-contents padding-lg margin-sm">Give us a Call!</div>
			        </a>
		<!--
				        <a href="#">
				            <div class="button-secondary flex centered-contents padding-lg margin-sm">Company Driver</div>
				        </a>
				        <a href="#">
				            <div class="button-secondary flex centered-contents padding-lg margin-sm">Owner Operator</div>
				        </a>
		-->
				    </div>
				    <section id="campaign" class="container fullwidth campaign-bg flex centered-contents">
			        <div class="container width-1200 flex  margin-tb-lg wrap ">
		            <div class="flex grow-shrink margin-lg flex-column-sm white-text ">
  		            <div class="">
										<!-- pre-set up to contain an image -->
		               	<!-- <img style="height: auto; width: 100%;" src="assets/images/dist/doug-text.png" alt="same miles more money png" class=" padding-sm margin-tb-sm"></div> -->
										<div class=" padding-sm margin-tb-sm"><h1>Hello World</h1></div>
		                <div class="container flex wrap">
											<button class="button-primary button-campaign  margin-md margin-tb-lg flex-grow">Apply Now!</button>
		                	<button class="button-secondary-light button-campaign  margin-md margin-tb-lg flex-grow">Be Contacted!</button>
										</div>
			            </div>
				            <div class="flex margin-lg flex-column-sm centered-contents">
			                <img class="truck absolute" src="assets/images/dist/truck.png" alt="Truck">
				            </div>
				        </div>
				    </section>
				</header>

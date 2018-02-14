<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "404";
	$pageName = "404";


	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once('assets/source/source.php');

	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$application = source::getApplication();
	$company = source::getTitle();
?>

<!DOCTYPE html>



<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NB2PMXG');</script>
	<!-- End Google Tag Manager -->

	<title><?php echo $siteTitle; ?> | <?php echo $pageTitle; ?> | <?php echo $phone; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="shortcut icon" href="<?php echo $siteURL; ?>favicon.ico?v=2">

		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>
			<body class="full-height flex flex-column">
				<!-- Google Tag Manager (noscript) -->
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NB2PMXG"
				height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
				<!-- End Google Tag Manager (noscript) -->

		    <section id="404-error" class="container-full-width light-bg centered-contents flex flex-grow ">
	        <div class="container width-960 flex text-center wrap centered-contents">
            <div class="flex margin-lg flex-column-sm">
							<div class="margin-lg centered-contents flex">
							<img src="assets/images/logo.png">
						</div>
              <h1 class="margin-sm">Whoops! Looks like something went wrong.</h1>
 			        <h3 class-"margin-sm">Good news though, you can still apply!</h3>
							<div class="margin-lg centered-contents flex">
 			        <a href="<?php echo $application; ?>"><button class="button button-primary padding-lg padding-tb-sm ">Apply Now!</button></a>
							</div>
						</div>
	        </div>
		    </section>
				<?php include ('assets/includes/footer.php'); ?>
	</body>
</html>

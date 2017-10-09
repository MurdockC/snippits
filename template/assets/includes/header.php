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
    <script type="text/javascript" href="assets/js/main.js"></script>
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

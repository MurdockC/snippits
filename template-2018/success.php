<?php
	// CONTAINS PHONE NUMBERS, COOKIES, GLOBAL VARIABLES, ETC //
	require_once('assets/source/source.php');
	// THESE GET SET IN THE CONFIG & SOURCE FILES //
	$siteURL = source::getUrl();
	$siteTitle = source::getTitle();
	$app = source::getApplication();
	$company = source::getTitle();
?>
<!DOCTYPE html>
<html lang="en" style="background-color: #fff;">
<head>
	<meta charset="utf-8">
	<title>Success!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php // CSS INCLUDES ?>
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){

		    setTimeout(function(){
		        document.getElementById("content").style.display = "block";
		        document.getElementById("loading-image").style.display = "none";
		    },1000);
		});
	</script>
</head>
	<body>
		<div id="loading-image">
			<span class="loading"><i class="fa fa-cog fa-spin"></i></span>
		</div>
		<div id="content">
			<div class="o--hidden container--full-width jc--c ai--c container--column container--flex">
				<span class="success"><i class="fa fa-thumbs-up"></i></span>
				<h1 class="margin-lg margin-tb-sm">Success!</h1>
				<hr>
				<h2 style="color: black;" class="margin-lg">Now, take the next step</h2>
				<p class="margin-lg"><span><?php echo htmlspecialchars($_GET["name"]); ?></span>, we have received your form and someone will be in contact with you soon!</p>
				<p class="margin-lg">To be considered for this position, please take the next step and complete our full application.</p>
				<br><br>
				<a href="<?php echo $app ; ?>?r=rmw_<?php echo $origin ; ?>_successfullapp"> <button class="button button--primary button--campaign margin-md margin-tb-lg flex-grow success_button">Complete your application</button></a>
				<br><br>
				<br>
				<a  class="margin--lg" href="tel:<?php echo $phone; ?>"><p><span style="color: black; margin-top: 30px;">or call</span> <?php echo $phone; ?></p></a>
			</div>
		</div>
	</body>
</html>

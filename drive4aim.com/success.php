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
	<!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
 new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
 })(window,document,'script','dataLayer','GTM-WBP4N7D');</script>
 <!-- End Google Tag Manager -->


	<meta charset="utf-8">
	<title>Success!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php // CSS INCLUDES ?>
	<link rel="stylesheet" href="<?php echo $siteURL;?>assets/css/style.css"/>
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

<style>
 .icon {
   color: #2B2B2B;
   font-size: 3rem;
   padding: 20px;
 }

 .icon i {
   margin-right: 10px;
 }

 h3 {
   margin: 0px;
 }

 .social {

   padding: 15px;
 }

</style>


<body>
	<!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBP4N7D"
 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <!-- End Google Tag Manager (noscript) -->
<div style="background-color:#2b2b2b;">
  <div style="padding: 5px;" class="container">
	  <a href="<?php echo $siteURL; ?>"><img class="logo" src="<?php echo $siteURL; ?>assets/images/logo.png" /></a>
  </div>
</div>
<div id="loading-image">
	<span class="loading"><i class="fa fa-cog fa-spin"></i></span>
</div>

<div class="container">

	<div id="content">

		<span class="success"><i class="fa fa-thumbs-up"></i></span>
		<h1>Success!</h1>
		<hr>
		<h2>Now, take the next step</h2>
		<p><span><?php echo htmlspecialchars($_GET["name"]); ?></span>, we have received your form and someone will be in contact with you soon!</p>
		<p>If time permits today, please take the next step and complete our full application.</p>
		<br>
		<a class="button button-primary" href="<?php echo $app; ?>?r=<?php echo htmlspecialchars($_GET["source"]); ?>_successfullapp">Complete your application</a>
		<br>
		 <a href="tel:<?php echo $phone; ?>"><p><span style="color: black;">or call</span> <?php echo $phone; ?></a></p>
		 <br>

		 <br>
		 <br>
		 <hr>


	</div>
</div>

</body>
</html>

<?php 
     require_once 'assets/source/source.php';	
     // $source = $_GET['source'];
     // $conversion = source::getConversion($source);
     $siteURL = source::getUrl();
     //header("refresh:6;url=$siteURL");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K8ZZ7W');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<title>Success!</title>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<style type="text/css">

body {
	background: #f8f8f8;
	margin: 50px 30px 50px 30px; 
	font-family: 'PT Sans', Helvetica, Arial, sans-serif;
	font-size: 16px;
	color: #333;
	}
	
#content {
	background: #fff;
	padding: 22px 15px 25px 15px;
	border: #c2202e 1px solid;
	text-align: center;
	}
	
a { color: #c2202e; }

h2 { 
	font-family: 'Oswald', Helvetica, Arial, sans-serif;
	color: #333;
	font-weight: normal;
	text-transform: uppercase;
	}

</style>
<?php include ('assets/includes/tracking.php'); ?>

</head>

<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K8ZZ7W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="content">

<h2>Your Quick App was submitted successfully!</h2>

<p>One of our recruiters will contact you soon.</p>

</div>

</script>

</body>


</html>
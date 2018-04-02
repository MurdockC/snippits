<?php
	$siteURL = 'http://christensonref.com/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

<body>

<div id="loading-image">
	<span class="loading"><i class="fa fa-cog fa-spin"></i></span>
</div>

<div class="container">
	<div id="content">
		<span class="success"><i class="fa fa-thumbs-up"></i></span>
		<h1 style="color: white;">Success!</h1>
		<hr>
		<h4><span><?php echo htmlspecialchars($_GET["name"]); ?></span>, would you like to submit another referral?</h4>
		<br>
		<a class="button button-primary" id="fullApp" href="http://bunzlref.com/">Submit Another Referral Today!</a>
		<br>
	</div>
</div>

</body>
</html>

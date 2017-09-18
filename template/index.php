

<html>
<head>
	<link rel="stylesheet" type-="text/css" href="/assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	<script  type="text/javascript" href="/assets/js/main.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
	<header class="container_Fullwidth gradient_Bg">
<div class="nav container_960">
  <div class="logo_Container">
    <img class="logo" src="assets/images/logo.png">
  </div>
  <a onclick="showMobileNav()" class="nav_Anchor-wrapper" href"#">
  <div class="nav_Button">
    <div class="burger_Bar"></div>
    <div class="burger_Bar"></div>
    <div class="burger_Bar"></div>
  </div></a>
</div>

<div id="mobile_Nav--expanded" class="hidden">
  <div class="hidden_Button">Company Drivers</div>
  <div class="hidden_Button">Owner Operators</div>
</div>


	</header>

	<div class="container_Fullwidth campaign">
		<div class="container_960">
			<div class="column campain_Text-container">
				<h1>Come Work Here.</h1>
				<h2>It's alright, I guess.</h2>
				<p class="header_Callout-p">The pay is ok, and Rick occasionally brings donuts.</p>
					<div class="button_Container">
						<div class="button_Primary">Apply now!</div>
						<div class="button_Secondary">Fill Out Our Short Form</div>
					</div>
			</div>
			<div class="column img_Container">
				<img src="assets/images/truck.png" alt="Black Mac Truck">
			</div>
		</div>
	</div>

	<div class="container_Fullwidth light_Bg">
		<div class="container_960">
			<div class="column centered_Text">
				<h1 class="column_Title">Hello World</h1>
				<p class="column_Paragraph">as;k as;ks;loijfhuggd hfuidhfuagh aiduhfiuhf  asidhfiuhasdf asudhfiu fhiasdufhaiu</p>
			</div>
			<div class="column centered_Text">
				<h1 class="column_Title">Hello World</h1>
				<p class="column_Paragraph">as;k as;ks;loijfhuggd hfuidhfuagh aiduhfiuhf  asidhfiuhasdf asudhfiu fhiasdufhaiu</p>
			</div>
		</div>
	</div>

	<div class="container_Fullwidth gradient_Bg">
		<div class="container_960">
			<div class="column">
				<div class="form_Container">
					<h3 class="">Hello World</h3>
					<div class="form_Column-row">
						<form class="form_Column">
							<label class="form_Label" for="firstName">First Name</label>
							<input class="form_Input" type="text" name="firstname" placeholder="First Name">
							<label class="form_Label" for="lastName">Last Name</label>
							<input class="form_Input" type="text" name="lastname" placeholder="Last Name">
							<label class="form_Label" for="email">Email Address</label>
							<input class="form_Input" type="text" name="email" placeholder="Email Address">
							<label class="form_Label" for="phoneNumber">Phone Number</label>
							<input class="form_Input" type="text" name="phone" placeholder="Phone Number">
							<label class="form_Label" for="cdl">Do you have a CDL?</label>

							<section id="first" class="section">
    <div class="container">
      <input type="radio" name="group1" id="radio-1">
      <label for="radio-1"><span class="radio">Coffee</span></label>
    </div>
    <div class="container">
      <input type="radio" name="group1" id="radio-2">
      <label for="radio-2"><span class="radio">Tea</span></label>
    </div>
    <div class="container">
      <input type="radio" name="group1" id="radio-3">
      <label for="radio-3"><span class="radio">Cappuccino</span></label>
    </div>
</section>




							<input  class="radio_Button" type="radio" name="cdl" value="yes">Yes
							<input class="radio_Button" type="radio" name="cdl" value="no">No
							<div class="button button_Submit button_Primary">Submit</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer container_Fullwidth">
		<div class="centered_Text">
			<p>Hello World</p>
			<small><?php echo $company ?> is an Equal Opportunity Employer</small><br>
			<small><?php echo "&copy; " . date("Y"); ?> <?php echo $company ?> | <a href="/privacy">Privacy</a></small>
		</div>
	</footer>


</body>
</html>


<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";

	include('assets/includes/header.php');
?>
<header>
		    <div class="container-full-width primary-bg flex centered-contents padding-lg">
		        <div class="container-1200 flex nav">
		            <img class="logo" src="assets/images/logo.png" alt="Company Logo">
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
							<span class="desktop-visible">
								<a href="#">
		                <button class="button-secondary flex centered-contents padding-md margin-sm">Company Driver</button>
		            </a>
		            <a href="#">
		                <button class="button-secondary flex centered-contents padding-md margin-sm">Owner Operator</button>
		            </a>
							</span>
		        </div>
		    </div>
		    <!-- below content is hidden until hamburger button is pushed -->
		    <div id="thisContent" class="mobile-nav flex-column-sm ">
		        <a href="#">
		            <div class="button-mobile-nav flex centered-contents padding-lg margin-sm">One</div>
		        </a>
		        <a href="#">
		            <div class="button-mobile-nav flex centered-contents padding-lg margin-sm">Two</div>
		        </a>
		        <a href="#">
		            <div class="button-mobile-nav flex centered-contents padding-lg margin-sm">Three</div>
		        </a>
		    </div>

		    <!-- this div becomes hidden while viewing mobile nav -->
		    <section id="campaign" class="container-fullwidth campaign-bg flex centered-contents">
		        <div class="container-1200 flex  margin-tb-lg">
		            <div class="flex margin-lg flex-column-sm white-text">
		                <h1 class="margin-lg self-start margin-tb-sm">You could work here.</h1>
		                <h2 class="margin-lg self-start margin-tb-sm ">I guess.</h2>
		                <p class="self-start margin-lg margin-tb-md">The pay is okay, and sometimes Jim brings donuts.</p>
		                <button class="button button-primary margin-lg margin-tb-sm">Apply Now!</button>
		                <button class="button button-secondary margin-lg margin-tb-sm">Be Contacted!</button>
		            </div>
		            <div class="flex margin-lg flex-column-sm centered-contents">
		                <img class="truck" src="assets/images/truck.png" alt="Truck">
		            </div>
		        </div>
		    </section>
		</header>

		<div id="mobile-hide">
		    <section id="main-content container-full-width light-bg padding-tb-xl flex flex-column">
		    	<div class="container flex centered-contents">
		    		<h1>Reffer a Driver</h1>
		    	</div>
		    </section>

		    <section id="form" class="container-full-width alt-bg centered-contents padding-tb-xl flex flex-column">
					<?php include ('assets/forms/form.php'); ?>
		    </section>

		    <section id="secondary-content" class="container-full-width light-bg centered-contents flex">
		        <div class="container-960 flex wrap">
		            <div class="flex margin-lg  flex-column-sm">
		                <h2 class="margin-lg ">About</h2>
		                <div class="flex-column-sm">
		                    <p class="self-start margin-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
		                </div>
		            </div>
		        </div>
		    </section>
				<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

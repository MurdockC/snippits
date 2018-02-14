<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";
	include('assets/includes/header.php');
?>

<script>
// document.designMode = 'on';
</script>

		<div id="mobile-hide">
		    <section id="body-content" class="container full-width white-bg centered-contents flex-column flex">
						<div class="container width-1200 flex flex-column wrap">
							<div contenteditabel="true" class=" container width-960 margin-tb-sm padding-lg ">
  							<div class="flex wrap">
    							<div class="callout" ><h5 class="callout-text">Up to 42 CPM</h5><p class="callout-text-secondary">base pay and bonuses.</p></div>
    							<div class="callout callout-2"><h5 class="callout-text">2 CPM bonus</h5><p class="callout-text-secondary">for all new hires for the first six months.</p></div>
							  </div>
								<p class="intro text-left margin-tb-sm padding-sm">Caleb and Megh made this template. We are cool.  More cool than you. This template is cool, because we made it, and we are cool.<p>
							</div>
						</div>
					  <div id="benefits" class="container width-1200 flex wrap">
	            <div class="flex margin-lg flex-column-sm">
								<h2>Why Delivering Health Feels Good</h2>
									<br>
									<h2 class="margin-lg margin-tb-sm text-left">The Pay</h2>
									<h6 class="margin-lg margin-tb-sm text-left">Our drivers earn an average of $1,100 a week!</h6>
	                <p class="margin-lg margin-tb-sm text-left">Pay based on driving experience</p>
									<h6 class="margin-lg margin-tb-sm text-left">Bonuses</h2>
	                <ul class="margin-tb-sm margin-md">
                    <li class="margin-tb-md text-left">Safety - 1 CPM, based on incident-free driving</li>
                    <li class="margin-tb-md text-left">Mileage - 0 to 2 CPM, based on level of miles*</li>
                    <li class="margin-tb-md text-left">Fuel - 0 to 2 CPM, based on fuel efficiency*</li>
										<en>* All new drivers get a guaranteed 2 CPM bonus for their first six months.</en>
                	</ul>
									<h2 class="margin-lg margin-tb-sm margin-t-xl text-left">The Benefits</h2>
									<ul class="margin-tb-sm margin-md">
										<li class="margin-tb-xs text-left">Low-Cost Health Plan with BlueCross of Idaho - from $30/month for single coverage to $456/month for large families</li>
										<li class="margin-tb-md text-left">Many Supplemental Benefits - dental, vision, life, and flexible spending</li>
										<li class="margin-tb-md text-left">Money for Retirement - a program to help you automatically save</li>
										<li class="margin-tb-md text-left">Paid Time Off - vacation and holidays</li>
									</ul>
	            	</div>
	            <div class="flex margin-lg flex-column-sm">
								<h2 class="margin-lg margin-tb-sm text-left">The Drive</h2>
								<ul class="margin-tb-sm margin-md">
									<li class="margin-tb-xs text-left">Late Model Trucks - Freightliners and Peterbilts</li>
									<li class="margin-tb-md text-left">Very Reliable Miles - 2,800 to 3,200 a week (average haul is 1,250 miles)</li>
									<li class="margin-tb-md text-left">Mostly No-Touch Freight - You'll drive, not load</li>
									<li class="margin-tb-md text-left">Rider Program - Take your family on your route</li>
									<li class="margin-tb-md text-left">Home Time - 2 day home for every 7-8 days</li>
								</ul>
								<h2 class="margin-lg margin-tb-sm margin-t-xl text-left">The Training</h2>
								<p class="margin-lg margin-tb-sm text-left">For Recent CDL Graduates</p>
								<ul class="margin-tb-sm margin-md">
									<li class="margin-tb-xs text-left">Comprehensive Instruction - with a certified trainer</li>
									<li class="margin-tb-md text-left">6 Weeks - 2 local and 4 OTR</li>
									<li class="margin-tb-md text-left">Training Pay - $75/day</li>
									<li class="margin-tb-md text-left">Guaranteed Starting Rate - 34 CPM for the first six months</li>
								</ul>
	            </div>
		        </div>
		    </section>

		    <section id="form" class="container full-width primary-bg centered-contents padding-tb-xl flex margin-tb-lg flex-column">
					<?php include ('assets/forms/form.php'); ?>
		    </section>

		    <section id="secondary-content" class="container full-width light-bg centered-contents flex-column stretch flex">
					<h6 class="margin-md margin-t-xl">WHAT DRIVERS ARE SAYING</h6>
		        <div class="container width-960 flex wrap">
		            <div class="flex margin-lg margin-tb-md flex-column-sm">
		                <div class="flex-column-content">
		                    <blockquote class="text-left margin-lg quote ">"The best thing about working for Doug Andrus is that the owners are always working to improve the company by thinking of their drivers. The truck shop is always friendly and fix the trucks as soon as possible if there are any problems. When you walk into the office it feels like you are walking into your own home. The dispatchers are friendly and always answer my questions the best way possible."<br><br><cite><b>Cilviano Nochebuena</b> 7.5 yrs with Doug Andrus Distributing</cite></blockquote>
		                </div>
		            </div>
								<div class="flex margin-lg margin-tb-md flex-column-sm">
		                <div class="flex-column-content">
		                    <blockquote class="text-left margin-lg quote">I enjoy working for Andrus because they try to take care of you. If you have a problem, they try to fix it. You never have to worry about getting paid, it's there. The people in the office take care of you if there is ever a problem. <br><br><cite><b>Rob Howell</b>, 26.5 yrs with Doug Andrus Distributing</cite></blockquote>
		                </div>
		            </div>
		        </div>

						<div class="container width-960 flex wrap margin-lg margin-tb-xl stretch;">
					   <div class="video-container min-300 stretch">
					    <iframe  src="https://www.youtube.com/embed/8BRWESBwOt0" frameborder="0" allowfullscreen></iframe>
					    </div>
						</div>
		    </section>
				<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

<?php
    //SETS PAGE INFO AT THE TOP OF THE HEADER
    $pageTitle = "Home";
    $pageName = "home";

    include('assets/includes/header.php');
?>
    

    <div id="mobile-hide">
        <section id="body-content" class="container full-width white-bg centered-contents flex-column flex">

	        <div class="container width-1200 flex wrap">
  	        <div style="background-color: black; color: white; text-align: center; padding: 10px; margin: 20px; display: flex; "><h5 style=" font-size: 2em; display: flex; justify-content: center; width: 400px; margin: 5px; align-items: center;">$1,000 minimum guarantee per week</h5></div>
							 			<div style="background-color: black; color: white; text-align: center; padding: 10px; margin: 20px; display: flex; "><h5 style=" font-size: 2em; display: flex; justify-content: center; width: 400px; margin: 5px; align-items: center;">$4,000 Sign-On</h5></div>

                <div class="flex margin-lg flex-column-sm">
                    <h2 class="margin-lg margin-tb-sm text-left">Spartanburg, SC</h2>
                    <p class="margin-lg margin-tb-sm text-left">We offer excellent opportunities for drivers seeking to strive and flourish in the transportation industry, focusing on their professional as well as personal development.</p>
                </div>
	        </div>


            <div class="container width-1200 flex wrap">
                <div class="flex margin-lg flex-column-sm">
                    <h3 class="margin-lg margin-tb-sm text-left">The Pay</h3>
                    <h6 class="margin-lg margin-tb-sm text-left">Our drivers earn $1,000 a week!</h6>
                    <h6 class="margin-lg margin-tb-sm text-left">Plus get a $4,000 Sign-On Bonus!</h6>
                    <ul class="margin-tb-sm margin-md">
                        <li class="margin-tb-md text-left">Hauling plastic pellets in the southeastern region</li>
                        <li class="margin-tb-md text-left">Only out a couple nights per week.</li>
                    </ul>
                </div>

                <div class="flex margin-lg flex-column-sm">
                    <h3 class="margin-lg margin-tb-sm text-left">The Benefits</h3>
                    <ul class="margin-tb-sm margin-md">
                        <li class="margin-tb-xs text-left margin-tb-sm">Paid vacations & holidays</li>
                        <li class="margin-tb-xs text-left margin-tb-sm">401k, with company percentage match</li>
                        <li class="margin-tb-xs text-left margin-tb-sm">Performance and Referral Bonuses</li>
                        <li class="margin-tb-xs text-left margin-tb-sm">Medical, Vision and Dental insurance, starting as low as $10/week</li>
                        <li class="margin-tb-xs text-left margin-tb-sm">Company Paid $75,000 Life Insurance Policy</li>
                        <li class="margin-tb-xs text-left margin-tb-sm">Weekly Pay & many other great benefits</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="form" class="container full-width primary-bg centered-contents padding-tb-xl flex margin-tb-lg flex-column">
            <?php include ('assets/forms/form.php'); ?>
        </section>

        <section id="secondary-content" class="container full-width centered-contents flex-column flex">

            <div class="container width-1200 flex wrap">
                <div class="flex margin-lg flex-column-sm">
                <h3 class="margin-lg margin-tb-sm text-left">About J&M Tank Lines</h3>
                <p class="margin-lg margin-tb-sm text-left">J & M is a family owned trucking company that has been in business for over 60 years. We have terminals located in Alabama, Georgia, and Texas. We operate 550 pneumatic tanks, 50 food grade tanks and 25 flat beds to make transportation in the southeast as efficient as possible.<br><br>We truly believe that the success of our business depends on our employees.
We offer excellent opportunities for drivers seeking to strive and flourish
in the transportation industry, focusing on their professional as well as
personal development. Our distinctively safe environment offers careers
that are exciting, challenging and rewarding. We encourage our people to
learn, experiment and grow - for both their own personal benefit and the
company's.</p>
                </div>
                <div class="flex margin-lg flex-column-sm">
                <h3 class="margin-lg margin-tb-sm text-left">The Requirements</h3>
                 <ul class="margin-tb-sm text-left">
                    <li class="margin-tb-xs text-left">Minimum 25 years of age</li>
                    <li class="margin-tb-xs text-left">Minimum 18 months of verifiable tractor-trailer experience</li>
                    <li class="margin-tb-xs text-left">10 Year employment history – any gaps in employment must be explained</li>
                    <li class="margin-tb-xs text-left">South Carolina drivers must have Tanker Endorsement</li>
                    <li class="margin-tb-xs text-left">Must be able to pass DOT physical, Drug Screen & Agility test</li>
                </ul>
                </div>
            </div>

			<div id="map" style="width: 100%;; height: 400px;"></div>
		    <script>
				function initMap() {
					    var infowindow = new google.maps.InfoWindow();
					    var myLatLng = {lat: 33.748995, lng: -84.387982};
					    var locations = [
					      ['Americus, GA', 32.072386, -84.232688, 1],
					      ['Barnesville, GA', 33.054571, -84.155750, 1],
					      ['Douglasville/Temple, GA', 33.719603, -85.0219889, 1],
					      ['Holly Springs, GA', 34.173986, -84.501319, 1],
					      ['Birmingham, AL', 33.520661, -86.802490, 1],
					      ['Calera, AL', 33.102896, -86.753598, 1],
					      ['Sylacauga, AL', 33.173172, -86.251641, 1],
					      ['Hartsville, SC', 34.374043, -80.0734, 1],
					      ['Richburg, SC', 34.7052161, -81.0208141, 1],
					      ['Cockeysville, MD', 39.481217, -76.643860],
					      ['Hondo, TX', 29.349419, -99.143629, 1],
					      ['Marble Falls, TX', 30.578245, -98.2728, 1],
					      ['Midlothian/Cleburne, TX', 32.3071175, -97.3845777, 1],
					      ['Odessa, TX', 31.9489975, -102.1322667, 1],
					      ['Houston, TX', 30.0995966,-95.6363914, 1]
					    ];
					    var map = new google.maps.Map(document.getElementById('map'), {
					      scrollwheel: false,
					      navigationControl: false,
					      mapTypeControl: false,
					      scaleControl: false,
					      draggable: false,
					      center: myLatLng,
					      zoom: 5
					    });
					    for (i = 0; i < locations.length; i++) {
					      marker = new google.maps.Marker({
					        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					        map: map
					      });
					      google.maps.event.addDomListener(window, "resize", function() {
					          google.maps.event.trigger(map, "resize");
					          map.setCenter(myLatLng);
					      });
					      google.maps.event.addListener(marker, 'click', (function(marker, i) {
					        return function() {
					          infowindow.setContent(locations[i][0]);
					          infowindow.open(map, marker);
					        }
					      })(marker, i));
					    }
					  }

		    </script>
		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOmAk5RqpPbnTxyOBkK6qvVcoLaPWBTEU&callback=initMap">
		    </script>
        </section>
        <?php include ('assets/includes/footer.php'); ?>
    </div>
</body>
</html>

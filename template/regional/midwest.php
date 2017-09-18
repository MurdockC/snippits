<?php
$pageName = 'Midwest - Regional Drivers';
$company = 'JBS Carriers';
include('../assets/includes/header.php');
?>

<section>

	<div class="title_Container">
		<h2><?php echo $pageName; ?></h2>
	</div>

	<div class="container primaryContainer space_Around med_Margin med_Margin-top">
		<div style="margin: 0px 0px 20px 0px;"  class="callout">
			<i class="icon fa fa-tachometer" aria-hidden="true"></i>
			<span><h2>Drive strong.</h2>
			<p><b>No freight’s more reliable than food</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-area-chart" aria-hidden="true"></i>
			<span><h2>Make gains.</h2>
			<p><b>Half of drivers earn more than $60,000 a year.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Get home every week.</b></p></span>
		</div>
	</div>

	<div class="title_Container">
		<h1>Job Description</h1>
	</div>

	<div class="container primaryContainer">
		<div>
			<h2>Pay</h2>
			<ul>
				<li><b>41 to 47 CPM,</b> based on years of driving experience</li>
				<li><b>All miles paid</b> unless going home</li>
				<li><b>Short Haul:</b> $100 minimum on loads less than 200 miles</li>
				<li><b>Extra Stop/Pickup:</b> $20</li>
				<li><b>Unloading (optional for drivers):</b> $2.50 per thousand lbs.</li>
				<li><b>Lumper:</b> paid by JBS</li>
				<li><b>Layover:</b> $80/day</li>
				<li><b>Detention:</b> $12/hour (after 2 hours, up to 10 hours)</li>
				<li><b>Breakdown:</b> $12/hour (after 4 hours in shop, up to 10 hours)</li>
				<li><b>Local:</b> $12.50/hour</li>
			</ul>
		</div>
		<div>
			<h2>Benefits and Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
				<li><b>Rider Policy:</b> available after 3 months. No pets.</li>
				<li><b>Bonuses:</b> earn up to an additional .08 cpm in monthly bonuses. Fuel, safety, performance and weekly retention</li>
				<li><b>NYC Bonus:</b> $150 if drivers choose to run in New York City. It’s not required</li>
			</ul>
		</div>
	</div>
	<div class="container primaryContainer">
		<div>
			<h2>Route</h2>
			<ul>
				<li><b>Night Driving:</b> many late afternoon pick-ups for early morning deliveries</li>
				<li><b>Average Miles:</b> 2000-2200 per week</li>
				<li><b>Running Region - </b>MN, WI, IA, NE, IL, IN, OH, MI, WV, KY, PA and occasionally VA, NJ, MD, DE, NY, and NY City</li>
				<li><b>Home Time:</b> Most drivers are home weekly. Those from PA are home every two weeks</li>
			</ul>
		</div>
		<div>
			<style>
				.mapcontainer{
					position: relative;
				}
				.map svg {
					max-width: 400px;
					width: 100%;
				}
				.mapTooltip{
					background: #fff;
					font-size: smaller;
				}
			</style>
			<h2 style="margin-bottom: 20px;">Hiring Area</h2>
			<div class="mapcontainer">
				<div class="map"></div>
			</div>
		</div>
	</div>

</section>

<?php include('../assets/forms/form.php'); ?>

<section  class="white-bg">

	<div class="container">
		<div>
			<h2>Requirements</h2>
			<ul>
				<li>At least 21 years old</li>
				<li>CDL-A with 1 year of tractor trailer experience</li>
				<li>Mentor programs are available for drivers with less than a year of experience</li>
			</ul>
		</div>
		<div>
			<div class="video-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/9am1WL4eXf4?rel=0" frameborder="0" allowfullscreen></iframe></div>
		</div>
	</div>

</section>


	<script type="text/javascript" src="https://cdn.rawgit.com/DmitryBaranovskiy/raphael/v2.1.4/raphael-min.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/neveldo/jQuery-Mapael/1.1.0/js/jquery.mapael.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/neveldo/jQuery-Mapael/1.1.0/js/maps/usa_states.js"></script>

	<script>
		$(function(){
			$(".mapcontainer").mapael({

				map : {	name : "usa_states", defaultArea: {	attrs : { fill : "#999", stroke: "#fff"	}, attrsHover : { fill: "#999" }}},

				areas: {
			       "AK": {  attrs: { fill: "#fff" },},
			       "HI": {  attrs: { fill: "#fff" },},
				},

				plots: {
					'green bay': { type: "circle", size: 20, latitude: 44.519158, longitude: -88.01982, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Green Bay, WI<br>50 Mile Radius"} },
					'milwaukee': { type: "circle", size: 20, latitude: 43.038902, longitude: -87.90647, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Milwaukee, WI<br>50 Mile Radius"} },
					'madison': { type: "circle", size: 20, latitude: 43.073051, longitude: -89.401230, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Milwaukee, WI<br>50 Mile Radius"} },
					'eau-claire': { type: "circle", size: 20, latitude: 44.811349, longitude: -91.498494, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Eau Claire, WI<br>50 Mile Radius"} },
	        'worthington': { type: "circle", size: 20, latitude: 43.621098, longitude: -95.59414, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Worthington, MN<br>50 Mile Radius"} },
	        'minneapolis': { type: "circle", size: 20, latitude: 44.977753, longitude: -93.26501, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Minneapolis, MN<br>50 Mile Radius"} },
	        'sioux-falls': { type: "circle", size: 20, latitude: 43.544595, longitude: -96.73110, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Sioux Falls, SD<br>50 Mile Radius"} },
	        'omaha': { type: "circle", size: 20, latitude: 41.252363, longitude: -95.99798, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Omaha, NE<br>50 Mile Radius"} },
	        'des-moines': { type: "circle", size: 20, latitude: 41.600544, longitude: -93.609106, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Des Moines, IA<br>50 Mile Radius"} },
	        'marshalltown': { type: "circle", size: 20, latitude: 42.049467, longitude: -92.90803, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Marshalltown, IA<br>50 Mile Radius"} },
	        'sioux-city': { type: "circle", size: 20, latitude: 42.499994, longitude: -96.400306, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Sioux City, IA<br>50 Mile Radius"} },
	        'chicago': { type: "circle", size: 20, latitude: 41.878113, longitude: -87.62979, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Chicago, IL<br>50 Mile Radius"} },
	        'springfield': { type: "circle", size: 20, latitude: 39.781721, longitude: -89.65014, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Springfield, IL<br>50 Mile Radius"} },
	        'peoria': { type: "circle", size: 20, latitude: 40.693648, longitude: -89.58898, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Peoria, IL<br>50 Mile Radius"} },
	        'indianapolis': { type: "circle", size: 20, latitude: 39.768403, longitude: -86.15806, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Indianapolis, IN<br>50 Mile Radius"} },
	        'louisville': { type: "circle", size: 20, latitude: 38.252664, longitude: -85.758455, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Louisville, KY<br>50 Mile Radius"} },
	        'columbus': { type: "circle", size: 20, latitude: 39.961175, longitude: -82.998794, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Columbus, OH<br>50 Mile Radius"} },
	        'toledo': { type: "circle", size: 20, latitude: 41.663938, longitude: -83.555211, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Toledo, OH<br>50 Mile Radius"} },
	        'cincinnati': { type: "circle", size: 20, latitude: 39.103118, longitude: -84.512019, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Cincinnati, OH<br>50 Mile Radius"} },
	        'detroit': { type: "circle", size: 20, latitude: 42.331427, longitude: -83.045753, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Detroit, MI<br>50 Mile Radius"} },
	        'kalamazoo': { type: "circle", size: 20, latitude: 42.291706, longitude: -85.587228, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Kalamazoo, MI<br>50 Mile Radius"} },
	        'souderton': { type: "circle", size: 20, latitude: 40.311770, longitude: -75.325175, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Souderton, PA<br>50 Mile Radius"} },
	        'philadelphia': { type: "circle", size: 20, latitude: 39.952583, longitude: -75.165221, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Philadelphia, PA<br>50 Mile Radius"} },
	        'harrisburg': { type: "circle", size: 20, latitude: 40.273191, longitude: -76.886700, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Harrisburg, PA<br>50 Mile Radius"} },
	        'allentown': { type: "circle", size: 20, latitude: 40.608430, longitude: -75.490183, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Allentown, PA<br>50 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>

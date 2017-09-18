<?php
$pageName = 'Louisville, KY - Dedicated Pork Hauls';
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
			<p><b>No freight’s more reliable than food.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-area-chart" aria-hidden="true"></i>
			<span><h2>Make gains.</h2>
			<p><b>Earn a minimum of $150 a day.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Get two days off a week.</b></p></span>
		</div>
	</div>

	<div class="title_Container">
		<h1>Job Description</h1>
	</div>

	<div class="container primaryContainer">
		<div>
			<h2>Pay</h2>
			<ul>
				<li><b>42 to 75 CPM,</b> based on round trip miles</li>
				<li><b>Minimum Guarantee:</b> $175/day if driver and truck are available for dispatch</li>
				<li><b>Lumper:</b> paid by JBS</li>
				<li><b>Breakdown:</b> $12/hour (after 4 hours in shop, up to 10 hours)</li>
			</ul>
		</div>
		<div>
			<h2>Benefits and Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
				<li><b>Paid Holidays:</b> six a year, $150 a day</li>
				<li><b>Bonuses:</b> fuel, safety, performance and annual retention incentives</li>
				<li><b>Earn up to an additional .07 cpm</b> in monthly bonuses.  Fuel, safety, and retention</li>
			</ul>
		</div>
	</div>
	<div class="container primaryContainer">
		<div>
			<h2>Routes</h2>
			<ul>
				<li><b>Dedicated Runs:</b> for JBS pork plant in Louisville</li>
				<li><b>No-Touch Freight:</b> drop and hook at JBS plants; live unload by lumpers at customer locations.</li>
				<li><b>Main Freight Lanes:</b> KY and surrounding states; occasional longer loads.</li>
				<li><b>Average Miles:</b> 1,800/week</li>
				<li><b>5-Day Work Week:</b> Monday through Friday with occasional weekend runs.</li>
				<li><b>Home Time:</b> 2 days a week; drivers based in Louisville will also have mid-week home time for 10-hour breaks.</li>
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
					'Louisville': { type: "circle", size: 20, latitude: 38.252664, longitude: -85.758455, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Louisville, KY<br>50 Mile Radius"} },
					'Lima': { type: "circle", size: 15, latitude: 40.744557, longitude: -84.106955, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Lima, OH<br>30 Mile Radius"} },
					'Dayton': { type: "circle", size: 15, latitude: 39.760782, longitude: -84.193518, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Dayton, OH<br>30 Mile Radius"} },
					'Cincinnati': { type: "circle", size: 15, latitude: 39.105359, longitude: -84.507450, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Cincinnati, OH<br>30 Mile Radius"} },
					'Columbus': { type: "circle", size: 15, latitude: 39.962346, longitude: -82.996741, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Columbus, OH<br>30 Mile Radius"} },
					'Indianapolis': { type: "circle", size: 15, latitude: 39.773895, longitude: -86.160223, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Indianapolis, IN<br>30 Mile Radius"} },
					'Owingsville': { type: "circle", size: 15, latitude: 38.143539, longitude: -83.764301, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Owingsville, KY<br>30 Mile Radius"} },
					'Lexington': { type: "circle", size: 15, latitude: 38.042828, longitude: -84.518539, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Lexington, KY<br>30 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>

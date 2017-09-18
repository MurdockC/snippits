<?php
$pageName = 'Southeast - Hopper Trailer';
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
			<p><b>Earn a minimum of $160 a day.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Enjoy home time 2-3 nights a week.</b></p></span>
		</div>
	</div>

	<div class="title_Container">
		<h1>Job Description</h1>
	</div>

	<div class="container primaryContainer">
		<div>
			<h2>Pay</h2>
			<ul>
				<li><b>45 CPM</b></li>
				<li><b>$160 Daily Minimum</b></li>
			</ul>
			<h2>Benefits & Bonuses</h2>
			<ul>
				<li><b>Bonuses:</b> for fuel efficiency, safety, and retention</li>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
			</ul>
			<h2>Work & Route</h2>
			<ul>
				<li><b>Driving Area:</b> SC, GA, and AL</li>
				<li><b>Hiring Area:</b> Commerce and Gainesville, GA; Charleston, SC and Guntersville, AL</li>
				<li><b>Days:</b> Monday through Friday with occasional weekends</li>
				<li><b>Hours:</b> 2 AM to 7 AM start times; 2-3 overnights a week</li>
				<li><b>Home Time:</b> 2-3 nights a week</li>
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
  				'Commerce': { type: "circle", size: 20, latitude: 34.203997, longitude: -83.457105, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Commerce, GA<br>50 Mile Radius"} },
					'Guntersville': { type: "circle", size: 20, latitude: 34.358147, longitude: -86.294704, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Guntersvile, AL<br>50 Mile Radius"} },
					'Gainesville': { type: "circle", size: 20, latitude: 34.297879, longitude: -83.824066, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Gainesville, GA<br>50 Mile Radius"} },
					'Charleston': { type: "circle", size: 20, latitude: 32.776474, longitude: -79.931051, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Charleston, SC<br>50 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>

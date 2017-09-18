<?php
$pageName = 'Texas - Dedicated Hauls';
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
			<p><b>Earn 45 cents per mile.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Get home every 7-10 days.</b></p></span>
		</div>
	</div>

	<div class="title_Container">
		<h1>Job Description</h1>
	</div>

	<div class="container primaryContainer">
		<div>
			<h2>Pay</h2>
			<ul>
				<li><b>45 CPM</b> for all drivers</li>
				<li><b>Extra Stop/Pickup:</b> $20</li>
				<li><b>Layover:</b> $96/day</li>
				<li><b>Detention:</b> $12/hour (after 2 hours, up to 10 hours)</li>
				<li><b>Breakdown:</b> $12/hour (after 4 hours in shop, up to 10 hours)</li>
			</ul>
		</div>
		<div>
			<h2>Benefits and Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
				<li><b>Rider Policy:</b> available after 3 months. No pets.</li>
				<li><b>Bonuses:</b> fuel, safety, performance and retention</li>
				<li><b>Earn up to an additional .07 cpm</b> in monthly bonuses.  Fuel, safety, and retention</li>
			</ul>
		</div>
	</div>
	<div class="container primaryContainer">
		<div>
			<h2>Work and Routes</h2>
			<ul>
				<li><b>Average Miles:</b> 1,800 to 2,200 per week (potential for more)</li>
				<li><b>Main Driving Region:</b> TX, OK, LA, AR with some runs to AL, GA, and CO</li>
				<li><b>Home Time:</b> every 7-10 days. Weekends and 34-hour restarts aren't guaranteed to be at home.</li>
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
  				'Lufkin': { type: "circle", size: 20, latitude: 31.338240, longitude: -94.729097, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Lufkin, TX<br>50 Mile Radius"} },
  				'Nacogdoches': { type: "circle", size: 20, latitude: 31.6035129, longitude: -94.655487, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Nacogdoches, TX<br>50 Mile Radius"} },
  				'Waco': { type: "circle", size: 20, latitude: 31.549333, longitude: -97.146669, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Waco, TX<br>50 Mile Radius"} },
  				'Pittsburg': { type: "circle", size: 20, latitude: 32.995402, longitude: -94.965768, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Pittsburg, TX<br>50 Mile Radius"} },
  				'Mount Pleasant': { type: "circle", size: 20, latitude: 33.156786, longitude: -94.968268, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Mount Pleasant, TX<br>50 Mile Radius"} },
  				'Houston': { type: "circle", size: 20, latitude: 29.760426, longitude: -95.369802, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Houston, TX<br>50 Mile Radius"} },
  				'San Antonio': { type: "circle", size: 20, latitude: 29.42412, longitude: -98.493628, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "San Antonio, TX<br>50 Mile Radius"} },
  				'Mesquite': { type: "circle", size: 20, latitude: 32.766795, longitude: -96.599159, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Mesquite, TX<br>50 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>

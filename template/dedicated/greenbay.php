<?php
$pageName = 'Green Bay, WI - Dedicated Beef Hauls';
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
			<p><b>Earn an average of $1,000 a week.</b></p></span>
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
				<li><b>Average $1,000/week</b></li>
				<li><b>Minimum Guarantee:</b> $180/day loaded, $150/day without loads</li>
				<li><b>Lumper:</b> paid by JBS</li>
				<li><b>Breakdown:</b> $12/hour (after 4 hours in shop, up to 10 hours)</li>
			</ul>
		</div>
		<div>
			<h2>Benefits and Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
				<li><b>Paid Holidays:</b> six a year, $150 a day</li>
				<li><b>Bonuses:</b> fuel, safety, and annual retention incentives</li>
				<li><b>Earn up to an additional .07 cpm</b> in monthly bonuses.  Fuel, safety, and retention</li>
			</ul>
		</div>
	</div>
	<div class="container primaryContainer">
		<div>
			<h2>Routes</h2>
			<ul>
				<li><b>Dedicated Runs:</b> for JBS beef plants in Green Bay and Plainwell</li>
				<li><b>No-Touch Freight:</b> drop and hook at JBS plants; live unload by lumpers at customer locations.</li>
				<li><b>Green Bay Driving Region:</b> All of WI and IL, plus neighboring states as required by customers</li>
				<li><b>Plainwell Driving Region:</b> MI, OH, IN, IL</li>
				<li><b>5-Day Work Week:</b> Monday through Friday with occasional weekend runs.</li>
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
  				'Green Bay': { type: "circle", size: 20, latitude: 44.523584, longitude:  -88.009747, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Green Bay, WI<br>50 Mile Radius"} },/*

  				'Southern-California': { type: "circle", size: 40, latitude: 33.578015, longitude: -116.938477, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Southern California<br>100 Mile Radius"} },
  				'Seattle': { type: "circle", size: 30, latitude: 47.60621, longitude: -122.332071, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Seattle, WA<br>50 Mile Radius"} },
  				'Portland': { type: "circle", size: 30, latitude:  45.523062, longitude: -122.676482, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Portland, OR<br>50 Mile Radius"} },
  				'Salt Lake City': { type: "circle", size: 30, latitude:  40.760779, longitude: -111.891047, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Portland, OR<br>"} },
  				'Denver': { type: "circle", size: 30, latitude:  39.739236, longitude: -104.990251, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Denver, CO<br>"} },
*/
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>

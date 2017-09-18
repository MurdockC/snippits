<?php
$pageName = 'Souderton, PA - Short Haul';		
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
			<p><b>Earn at least $200 when dispatched under normal circumstances</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">	
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Enjoy home time most nights.</b></p></span>
		</div>
	</div>
	
	<div class="title_Container">
		<h1>Job Description</h1>
	</div>
	
	<div class="container primaryContainer">
		<div>	
			<h2>Pay</h2>
			<ul>
				<li><b>$200/day min:</b> when dispatched under normal circumstances</li>
				<li><b>45 to 67 CPM:</b> based on distance, for trips more than 30 miles from Souderton beef plant</li>
				<li><b>$16.53/hour:</b> for trips less than 30 miles from the plant</li>
				<li><b>Stops/Pick-ups:</b> $13</li>
				<li><b>Load/unload:</b> (optional for driver) $2.50 per thousand lbs</li>
				<li><b>Lumper:</b> paid by JBS</li>
				<li><b>NYC Surcharge:</b> $20/load</li>
				<li><b>Wait Time:</b> hourly rate (stats after 30 minutes)</li>
				<li><b>Breakdown:</b> hourly rate (up to 10 hours)</li>
				<li><b>Shuttle:</b> $7.50 per trailer</li>
			</ul>
			<h2>Benefits</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
			</ul>
		</div>
		<div>
			<h2>Work & Route</h2>
			<ul>
				<li><b>Workdays:</b> typically a five-day schedule, Mon-Fri or Sat-Wed; all drivers take turns with weekend work</li>
				<li><b>Hours:</b> deliveries as early as 12 AM; drivers should prepare to arrive early and work their full 14 hours</li>
				<li><b>Required Locations/Conditions:</b> NYC, NJ, and winter driving are required</li>
				<li><b>Equipment:</b> mix of daycabs and sleepers; new hires will be assigned sleepers and distance runs of 150+ miles</li>
				<li><b>Home Time:</b> most nights, but some layovers</li>
			</ul> 
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
					'souderton': { type: "circle", size: 20, latitude: 40.311770, longitude: -75.325175, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Souderton, PA<br>50 Mile Radius"} },
				}
			});
		});
	</script>


<?php include('../assets/includes/footer.php'); ?>
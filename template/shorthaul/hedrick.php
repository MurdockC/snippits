<?php
$pageName = 'Hedrick, IA - Short Haul Auger Trailer';		
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
			<p><b>Earn 45 to 50 CPM, plus $18 per load</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">	
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Enjoy daily home time.</b></p></span>
		</div>
	</div>
	
	<div class="title_Container">
		<h1>Job Description</h1>
	</div>
	
	<div class="container primaryContainer">
		<div>	
			<h2>Pay</h2>
			<ul>
				<li><b>45 CPM:</b> for days</li>
				<li><b>50 CPM:</b> for nights</li>
				<li><b>$18</b> per load</li>
				<li><b>Extra Drop:</b> $13</li>
				<li><b>Detention:</b> $16/hour (after 1 hour)</li>
			</ul>
			<h2>Work & Route</h2>
			<ul>
				<li><b>Work Days:</b> Monday through Friday with occasional Saturdays</li>
				<li><b>Hours:</b> day shift begins between 3 and 5 AM; night shift begins between 3 and 5 PM</li>
				<li><b>Loads:</b> average of 3.25 loads a day; average length of 86 miles</li>
				<li<b>Driving Area:</b> within 150 miles of Hedrick</ul>
				<li><b>Hiring Area:</b> within 50 miles of Hedrick</li>
				<li><b>Home Daily</b></li>
			</ul> 
		</div>
		<div>
			<h2>Benefits & Bonuses</h2>
			<ul>
				<li><b>Bonuses:</b> for fuel efficiency, safety, and retention</li>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
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
  				'Hedrick': { type: "circle", size: 20, latitude: 41.172513, longitude: -92.308794, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Hedrick, IA<br>50 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>
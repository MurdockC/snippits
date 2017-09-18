<?php
$pageName = 'Ottumwa, IA - Dedicated Run';
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
			<p><b>Earn at least $180 a day when hauling freight.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Get home every weekend.</b></p></span>
		</div>
	</div>

	<div class="title_Container">
		<h1>Job Description</h1>
	</div>

	<div class="container primaryContainer">
		<div>
			<h2>Pay</h2>
			<ul>
				<li><b>Current weekly average is $1,250+</b></li>
				<li><b>Minimum Guarantee:</b> $180/day loaded, $150/day without loads</li>
				<li><b>45 to 75 CPM</b> based on round trip miles</li>
				<li><b>Lumper:</b> paid by JBS</li>
				<li><b>Breakdown:</b> $10/hour up to 8 hours a day</li>
			</ul>
		</div>
		<div>
			<h2>Benefits and Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
				<li><b>Paid Holidays:</b> 6 days at $150</li>
				<li><b>Bonuses:</b> for fuel efficiency, safety, and retention</li>
				<li><b>Earn up to an additional .07 cpm</b> in monthly bonuses.  Fuel, safety, and retention</li>
			</ul>
		</div>
	</div>
	<div class="container primaryContainer">
		<div>
			<h2>Work and Routes</h2>
			<ul>
				<li><b>Dedicated Hauls:</b> for JBS pork plants in Ottumwa</li>
				<li><b>Work Week:</b> Monday through Friday with occasional weekends</li>
				<li><b>Home Time:</b> most weekends and occasional weeknights</li>
				<li><b>Main Driving Area:</b> IA, IL, MO, NE, and WI</li>
				<li><b>Hiring Area:</b> within 50 miles of Ottumwa, IA. Des Moines area, SE Iowa – Quad Cities, Cedar Rapids and Chicago, IL </li>
				<li><b>Average Miles:</b> 2,200 to 2,400 per week</li>
				<li><b>No-Touch Freight:</b> paid lumpers</li>
				<li><b>Equipment:</b> late-model Kenworth T-680s</li>
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
					'Ottumwa': { type: "circle", size: 20, latitude: 41.016029, longitude: -92.408302, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Ottumwa, IA<br>50 Mile Radius"} },
  				'Chicago': { type: "circle", size: 20, latitude: 41.878114, longitude: 41.878114, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Chicago, IL<br>50 Mile Radius"} },
				},

				links: {
                    'i80': {
                        factor: 0.15
                        // The source and the destination of the link can be set with a latitude and a longitude or a x and a y
                        , between: [{latitude: 41.1701009, longitude: -96.13878}, {latitude: 41.8781136, longitude: -87.629798}]
                        , attrs: { //         Council Bluffs, IA                               Teaneck, NJ
                            "stroke-width": 7,
                            stroke: "#a35553",
                        }
                        , tooltip: {content: "NE along I-80"}
                	}
                }

			});
		});
	</script>


<?php include('../assets/includes/footer.php'); ?>

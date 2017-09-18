<?php
$pageName = 'Cactus, TX - Cattle';		
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
			<p><b>Earn an average of $200 a day.</b></p></span>
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
				<li><b>Paid by the Load:</b> average of $200 a day</li>
			</ul>
			<h2>Work & Route</h2>
			<ul>
				<li><b>Pickups and Deliveries:</b> from various local feed yards</li>
				<li><b>Hiring Areas:</b> Amarillo to Stratford, TX and surrounding areas</li>
				<li><b>More than Driving:</b> the job requires coordinating load info with the plants, dispatch, and feed lots; drivers must also ensure the safe, humane handling of livestock.</li>
				<li><b>Daily Home Time</b></li>
			</ul>
		</div>
		<div>
			<h2>Benefits & Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 days</li>
				<li><b>Bonuses:</b> for fuel efficiency, safety, and retention</li>
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
				<li>Six months experience hauling cattle</li>
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
					//'Amarillo, TX': { type: "circle", size: 20, latitude: 35.230170, longitude:  -101.837387, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Amarillo, TX<br> and surrouding areas."} },
				},

				links: {
                    'i80': {
                        factor: 0.15
                        // The source and the destination of the link can be set with a latitude and a longitude or a x and a y
                        , between: [{latitude: 36.339038, longitude: -102.079048}, {latitude: 35.230170, longitude: -101.837387}]
                        , attrs: { //         Council Bluffs, IA                               Teaneck, NJ
                            "stroke-width": 15,
                            stroke: "#a35553",
                        }
                        , tooltip: {content: "Amarillo, TX - Stratford, TX and surrounding areas"}
                	}
                }
			});
		});
	</script>


<?php include('../assets/includes/footer.php'); ?>

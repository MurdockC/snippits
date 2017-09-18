<?php
$pageName = 'Southeast -  Dedicated Hauls';
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
			<p><b>Earn an minimum of $150 a day.</b></p></span>
		</div>
		<div style="margin: 0px 0px 20px 0px;" class="callout">
			<i class="icon fa fa-bed" aria-hidden="true"></i>
			<span><h2>Rest up.</h2>
			<p><b>Go home almost every night.</b></p></span>
		</div>
	</div>

	<div class="title_Container">
		<h1>Job Description</h1>
	</div>

	<div class="container primaryContainer">
		<div>
			<h2>Pay</h2>
			<ul>
				<li><b>$150/day</b> Athens, GA, Canton, GA, Gainesville, GA, Ellijay, GA, and Chattanooga, TN</li>
				<li><b>$160/day</b> Guntersville and Russellville, AL</li>
				<li><b>$170/day</b> in Sumpter, SC</li>
				<li><b>$180/day</b> in Douglas, AL</li>
				<li><b>Lumper:</b> paid by JBS. Some driver unload available but not mandatory</li>
				<li><b>Breakdown:</b> $12/hour (after 4 hours in shop, up to 10 hours)</li>
			</ul>
		</div>
		<div>
			<h2>Benefits and Bonuses</h2>
			<ul>
				<li><b>Health Benefits:</b> medical, prescription, dental, and vision after 60 Days</li>
				<li><b>Rider Policy:</b> available after 3 months. No pets.</li>
				<li><b>Paid Holidays</b></li>
				<li><b>Bonuses:</b> fuel, safety, and retention</li>
			</ul>
		</div>
	</div>
	<div class="container primaryContainer">
		<div>
			<h2>Work and Routes</h2>
			<ul>
				<li><b>Main Driving Areas:</b> within 250 miles of Pilgrim's plant operations in each location.</li>
				<li><b>Hiring Area:</b>Russellville, AL, Guntersville, AL, Chattanooga, TN, Ellijay, GA, Canton, GA, Gainesville, GA, Athens, GA, Sumter, SC, and Douglas, AL</li>
				<li><b>Hours and Days:</b> 8 to 14 hours a day; mandatory five days a week; voluntary extra days.</li>
				<li><b>Average Miles:</b> 1,100/week</li>
				<li><b>Home Time:</b> almost every night</li>
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
					'Russellville': { type: "circle", size: 20, latitude: 34.507872, longitude: -87.728643, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Russellville, AL<br>50 Mile Radius"} },
					'Guntersville': { type: "circle", size: 20, latitude: 34.358147, longitude: -86.294704, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Guntersville, AL<br>50 Mile Radius"} },
					'Chattanooga': { type: "circle", size: 20, latitude: 35.045629, longitude: -85.309680, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Chattanooga, TN<br>50 Mile Radius"} },
					'Ellijay': { type: "circle", size: 20, latitude: 34.694807, longitude: -84.482149, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Ellijay, GA<br>50 Mile Radius"} },
					'Canton': { type: "circle", size: 20, latitude: 34.236762, longitude: -84.490762, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Canton, GA<br>50 Mile Radius"} },
					'Gainesville': { type: "circle", size: 20, latitude: 34.297879, longitude: -83.824066, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Gainesville, GA<br>50 Mile Radius"} },
					'Athens': { type: "circle", size: 20, latitude: 33.951934, longitude: -83.357567, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Athens, GA<br>50 Mile Radius"} },
					'Sumter': { type: "circle", size: 20, latitude: 33.920435, longitude: -80.341469, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Sumter, SC<br>50 Mile Radius"} },
					'Douglas, AL': { type: "circle", size: 20, latitude: 31.508807, longitude: -82.849865, attrs: { fill: "#a35553" }, attrsHover: { fill: "#a35553" }, tooltip: {content: "Douglas, AL<br>50 Mile Radius"} },
				}
			});
		});
	</script>

<?php include('../assets/includes/footer.php'); ?>

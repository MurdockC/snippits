<?php
	$pageName = 'pennsylvania-event';
	$location = 'penn-event';
	include('assets/includes/header.php');
?>

<style>
h1 {
	margin-bottom: 0px;
}
</style>

<section>
	<div style="margin-top: 20px; margin-bottom: 0px;" class="introContainer">
  	<div>
			<h1 class="">Hiring Event</h1>
			<h2>Drivers & Mechanics</h2>
			<div class="flex hiring-event">
				<div class="flex datebox">
					<h4 class="date-title">Friday</h4>
					<h1 class="date-title date-hack">4/27</h1>
					<h4 class"">10am - 7pm</h4>
				</div>
				<div class="flex datebox">
					<h4 class="date-title">Saturday</h4>
					<h1 class="date-title date-hack">4/28</h1>
					<h4 class"">9am - 1pm</h4>
				</div>

    </div>
		<div  class="flex column location">
			<p style="margin-bottom: 20px;">
				Location:<br> <b>Residence Inn<br> 1308 Freedom Rd - Cranberry Township, PA</b><br><br>
			Stop by and participate in our $100 gift card giveaway!</p>
			<p style="text-align: left; font-size: 20px; border-top: 4px solid #143d8d; padding-top: 10px;">With AIM, you get the stability of a strong company focused on growth.  AIM is committed to advanced training and development, and we offer small company flexibility with large company opportunities.  AIM offers top industry pay and a highly competitive benefits package with low out of pocket costs.</p>
		</div>
		</div>
	</div>
</section>

<?php include('assets/forms/event-form.php'); ?>

<section  class="white-bg">
	<div class="container about">
		<div>
			<h2>About <?php echo $company;?></h2>
			<p><b>AIM Transportation Solutions</b> handles all types of cargo including food service, steel, aluminum, beverages, and specialized commodities. It operates a late model fleet comprised of Flatbed, Van, Sliding Tarp, Reefer, and Doubles Trailers over 22 Million miles annually in service to our clients. AIM Integrated Logistics has been named <i>Transport Topics'</i> 21st Largest Dedicated Provider, as well as a member of the EPA SmartWay program focused on improving fleet MPG while reducing our carbon footprint.</p>
		</div>
	</div>
</section>

<?php include('assets/includes/footer.php'); ?>

	<footer class="dark-bg">
		<section class="container centered">
			<div>
				<h4><a class="" href="tel: <?php $phone ?>"><?php echo $phone ?></a></h4><br>
				<small><?php echo $company ?> is an Equal Opportunity Employer</small><br>
				<small><?php echo "&copy; " . date("Y"); ?> <?php echo $company ?> | <a href="">Privacy</a></small>
			</div>
		</section>
	</footer>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Montserrat:300,600" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/h5Validate/0.9.0/jquery.h5validate.min.js"></script>

<script type="text/javascript">
	//<![CDATA[

		//FORM VALIDATION
		$(window).load(function(){
			$(document).ready(function () {

				$('form').h5Validate({errorClass:'validationError'});

			    $('#quickApp').submit(function () {
			        return $('#quickApp').h5Validate('allValid');
			    });

			    $("#quickAppSubmit").click(function() {
					$('#quickApp').addClass("novalidate");
				});
			});
		});

		//FILL IN CITY AND STATE FROM ZIPCODE
		$(function() {
			// IMPORTANT: Fill in your client key
			var clientKey = "js-2kfT5R3ogeZCj6pUzigt4dcZrxKTjZjmaKrDvusSbwnrCIRnUQxbNjTImihnHCBX";

			var cache = {};
			var container = $("#quickApp,#quickApp-full");
			var errorDiv = container.find("div.text-error");

			/** Handle successful response */
			function handleResp(data)
			{
				// Check for error
				if (data.error_msg)
					errorDiv.text(data.error_msg);
				else if ("city" in data)
				{
					// Set city and state
					container.find("input[name='city']").val(data.city);
					container.find("input[name='state']").val(data.state);
				}
			}

			// Set up event handlers
			container.find("input[name='zipcode']").on("keyup change", function() {
				// Get zip code
				var zipcode = $(this).val().substring(0, 5);
				if (zipcode.length == 5 && /^[0-9]+$/.test(zipcode))
				{
					// Clear error
					errorDiv.empty();

					// Check cache
					if (zipcode in cache)
					{
						handleResp(cache[zipcode]);
					}
					else
					{
						// Build url
						var url = "https://www.zipcodeapi.com/rest/"+clientKey+"/info.json/" + zipcode + "/radians";

						// Make AJAX request
						$.ajax({
							"url": url,
							"dataType": "json"
						}).done(function(data) {
							handleResp(data);

							// Store in cache
							cache[zipcode] = data;
						}).fail(function(data) {
							if (data.responseText && (json = $.parseJSON(data.responseText)))
							{
								// Store in cache
								cache[zipcode] = json;

								// Check for error
								if (json.error_msg)
									errorDiv.text(json.error_msg);
							}
							else
								errorDiv.text('Request failed.');
						});
					}
				}
			}).trigger("change");
		});

		//To make the header stretch to contain navigation
		var header = document.querySelector("header");

		//Show and Hide Dropdown menu
		var dropdown = document.querySelector(".dropdown");
		var secondaryList = document.querySelector("nav ul ul");

		dropdown.addEventListener("click", function() {
		  secondaryList.classList.toggle("toggle");
		  header.classList.toggle("height-auto");
		});

		//Show and Hide FULL menu on mobile
		var mobileMenu = document.querySelector(".mobile-menu");
		var fullList = document.querySelector("nav");

		mobileMenu.addEventListener("click", function() {
		  fullList.classList.toggle("toggle");
		  header.classList.toggle("height-auto");
		});


	//]]>
	</script>

	<div>
</body>
</html>

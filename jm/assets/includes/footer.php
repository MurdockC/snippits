<footer class="primary-bg container full-width centered-contents flex padding-md">
		<div class="container width-1200 centered-contents text-center margin-lg">
			<h4 class="margin-sm"><button id="footerapply" class="button button-secondary-light" href="<?php echo $app; ?>?r=<?php echo $origin; ?>">Apply Now!</button><span> - OR - </span><button class="button button-secondary-light" href="tel:<?php echo $phone; ?>">Call <?php echo $phone; ?></button></h4><br>
<small class"margin-sm"><?php echo $company ?> is an Equal Opportunity Employer</small><br>
<small><?php echo "&copy; " . date("Y"); ?> <?php echo $company ?> | <a href="/privacy.php">Privacy</a></small>
</div>

<div class="mobile-nav-footer container container full-width flex">
	<div class="flex flex-column mobile-footer-button padding-md centered-contents"><a href="#top"><i class="fa fa-home" aria-hidden="true"></i><br>Home</a></div>
	<div class="flex flex-column mobile-footer-button padding-md centered-contents"><a href="tel:<?php echo $phone; ?>"><i class="fa fa-phone" aria-hidden="true"></i><br>Call Us!</a></div>
	<div class="flex flex-column mobile-footer-button padding-md centered-contents"><a href="<?php echo $app; ?>?r=<?php echo $origin; ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i><br>Benefits!</a></div>
	<div class="flex flex-column mobile-footer-button mobile-footer-apply centered-contents contrast-bg flex2"><a href="#quickApp"><i class="fa fa-sign-in" aria-hidden="true"></i><br>Apply Now!</a></div>
</div>

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

		// zipcode api key is set to a cookie, use this function to get the cookie's value
		function getCookie(name) {
		  var value = "; " + document.cookie;
		  var parts = value.split("; " + name + "=");
		  if (parts.length == 2) return parts.pop().split(";").shift();
		}

		//FILL IN CITY AND STATE FROM ZIPCODE
		$(function() {
			// IMPORTANT: Fill in your client key
			var clientKey = getCookie("zipcode"); //call function above

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
	// AppNav Show/Hide functions
	$(function(){
		$(".showhide").show();
		["payandbenefits-toggle", "requirements-toggle", "quickapp-toggle"].forEach(function (method) {

		    $(" a." + method).click(function () {
		        $(".showhide:not(." + method + ")").slideUp("fast");
		        $("." + method + ".showhide").slideDown("fast");
		        $("." + method + ".showhide").width("100%");
		        //return false;
		    });
		});
		$("a.header-toggle").click(function () {
		    $(".showhide").slideDown("fast");
		    //return false;
		});
	});
//]]>
</script>

</div>
</footer>

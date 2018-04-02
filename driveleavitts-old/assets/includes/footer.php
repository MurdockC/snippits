				</div><!-- container -->
				<img class="scale-with-grid" src="assets/images/trucks.jpg" alt="Leavitts Trucks" />
				<div id="footer-push"></div>
			</div><!-- wrapper for footer push -->
		<footer>
			<small>Copyright &copy; <?php echo date('Y'); ?> Leavitt's Freight Service | <a href="<?php echo $siteURL; ?>privacy">Privacy</a></small>
		</footer>
	</div>
	<div class="sb-slidebar sb-left sb-style-push sb-width-thin">
		<ul class="sb-menu">
			<li><a <?php if($pageName=="home") echo "class='current'"; ?> href="<?php echo $siteURL; ?>">Home</a></li>
			<li><a href="<?php echo $siteURL; ?>privacy">Privacy</a></li>
			<li><a class="phone" href="tel:<?php echo $phone_no_string; ?>"><?php echo $phone; ?></a><br><small>&copy; Copyright &copy; <?php echo date('Y'); ?> Leavitt's Freight Service</small></li>
		</ul>
	</div><!-- end sb-slidebar sb-left -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/jquery.html5form.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/jquery.placeholder.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/additional-methods.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/lightbox.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $siteURL; ?>assets/js/slidebars.min.js"></script>
<script>



  //FILL IN CITY AND STATE FROM ZIPCODE
	$(function() {
		// IMPORTANT: Fill in your client key
		var clientKey = "js-a0MB0QMoEWW3rNWNQIojxzORkVTej1vu1i519SqOOmRgaN40wsj318Vl3OAmQ6RS";

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






    /*
Minitabs plugin
---------------

- Basic HTML structure:
<div class="minitabs">
    <ul class="tabnames">
        <li>Tab</li>
    </ul>
    <div class="tabcontent">Tab content</div>
</div>

- To run it:
$(selector).minitabs();
*/
(function($) {
    $.fn.minitabs = function() {
        return this.each(function() {
            $(this).find(".tabnames li").on('click', $.proxy(function(e){
                $(e.currentTarget).addClass('activetab').siblings().removeClass('activetab');
                $(this).find(".tabcontent").removeClass('activetab').eq($(e.currentTarget).index()).addClass('activetab');
            }, this)).eq(0).trigger('click');
        });
    };
})(jQuery);

/* Run it! */
$(document).ready(function() {
    $(".minitabs, .verticaltabs").minitabs();
});
    //@ sourceURL=pen.js
</script>

<script type="text/javascript">
	$(document).ready(function() {
		/* Plugin For Mobile Sidebar Menu */
		$.slidebars({
	     	disableOver: 767 // integer or false
	     });

		// Slidebars Submenus - Main Open/Close Functionality
		$('a.sb-toggle-submenu').click(function() {
			$(this).toggleClass('flip-caret');
			$submenu = $(this).parent('li').children('.sb-submenu');
			$submenu.toggleClass('sb-submenu-active');

			if ($submenu.hasClass('sb-submenu-active')) {
				$submenu.slideDown(200);
				$(this).parent('li').focus();
			} else {
				$submenu.slideUp(200);
				$(this).parent('li').blur();
			}
		});
	});

	/* HTML5 form placeholder plugin for legacy browser fallback */
	$('input').placeholder();

	/* Form validation plugin */
	$("#quickApp").validate();

	$(document).ready(function() {
		// Full Nav Submenus - Hover Open/Close Functionality
		$subnav = $('#careers-submenu');
		$subnav.slideUp(0);
		$navTab = $('#desktop-submenu-parent');

		$navTab.mouseenter(function() {
			if($subnav.hasClass('open-subnav')) {
				$subnav.removeClass('open-subnav');
				$subnav.stop( true, true );
				$subnav.slideUp(200);
			}
			else {
				$subnav.removeClass('open-subnav');
				$subnav.stop( true, true );
				$subnav.slideDown(200);
			}
			$subnav.mouseenter(function() {
				$subnav.addClass('open-subnav');
			});
		});
	});


</script>





<!-- End Document
================================================== -->
</body>
</html>

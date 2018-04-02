<footer>
	<div class="container">
		<span class="recruiter-phone">Talk to a recruiter now! <a href="tel:<?php echo $phone_no_string; ?>"><?php echo $phone; ?></a></span>
		<small>Copyright &copy; <?php echo date('Y'); ?> <?php echo $title; ?> | <a href="<?php echo $siteURL; ?>privacy">Privacy</a></small>
	</div>
</footer>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery.h5validate.js"></script>
<script type="text/javascript">
//<![CDATA[ 
	
	//HIDE APPNAV WHEN FILLING IN INPUT FIELDS
	document.write( '<style>#footer{visibility:hidden}@media(min-height:' + ($( window ).height() - 10) + 'px){#footer{visibility:visible}}</style>' );
	
	//FORM VALIDATION
	$(window).load(function(){
		$(document).ready(function () {
		    $('form').h5Validate({errorClass:'validationError' });
		    $('#quickApp').submit(function () {
		        return $('#quickApp').h5Validate('allValid');
		    });
		});
	});
	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
	    input.val('');
	    input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
	    input.addClass('placeholder');
	    input.val(input.attr('placeholder'));
	  }
	}).blur().parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
	    var input = $(this);
	    if (input.val() == input.attr('placeholder')) {
	      input.val('');
	    }
	  })
	});
//]]>  
</script>

<!--[if !(lte IE 9)]><!-->
<script type="text/javascript">
//<![CDATA[ 
	
	//FILL IN CITY AND STATE FROM ZIPCODE
	$(function() {
		// IMPORTANT: Fill in your client key
		var clientKey = "js-ZQvHvQ7bQQ5Cmid8dwl59jycJIdLLBIKserY4y9UoewLwKUKhfQrypDi7R3TtMEV";
		
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

<div id="appnav">
	<ul>
		<a class="header-toggle" href="#top"><li><i class="fa fa-home"></i><br><span style="font-size: 10px">All Details</span></li></a>
		<a class="payandbenefits-toggle" href="#top"><li><i class="fa fa-money"></i><br><span style="font-size: 10px">Pay & Benefits</span></li></a>
		<a class="requirements-toggle" href="#top"><li><i class="fa fa-list"></i><br><span style="font-size: 10px">Requirements</span></li></a>
		<a class="quickapp-toggle" href="#top"><li class="applynow"><i class="fa fa-sign-in"></i><br><span style="font-size: 10px">Apply Now!</span></li></a>
	</ul>
</div>
<!--<![endif]-->

<link type="text/plain" rel="author" href="humans.txt" />	
<? // THE END // ?>
</body>
</html>
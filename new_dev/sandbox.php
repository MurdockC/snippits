<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Home";
	$pageName = "home";
	include('assets/includes/header.php');
?>
<style>
.editor {
		 width: 500px;
		 height: 500px;
		 border: 2px solid black;
	 }
</style>

<script>
    window.addEventListener("load", function(){
        //first check if execCommand and contentEditable attribute is supported or not.
        if(document.contentEditable != undefined && document.execCommand != undefined)
       {
           alert("HTML5 Document Editing API Is Not Supported");
        }
        else
        {
            document.execCommand('styleWithCSS', false, true);
        }
    }, false);

    //underlines the selected text
    function underline()
    {
        document.execCommand("underline", false, null);
    }

    //makes the selected text as hyperlink.
    function link()
    {
        var url = prompt("Enter the URL");
        document.execCommand("createLink", false, url);
    }

    //displays HTML of the output
    function displayhtml()
    {
        //set textContent of pre tag to the innerHTML of editable div. textContent can take any form of text and display it as it is without browser interpreting it. It also preserves white space and new line characters.
        document.getElementsByClassName("htmloutput")[0].textContent = document.getElementsByClassName("editor")[0].innerHTML;
    }
</script>

		<div id="mobile-hide">
		    <section id="body-content" class="container full-width white-bg centered-contents flex-column flex">
						<div class="container width-1200 centered-contents flex flex-column wrap">
							<div class=" container width-960 centered-contents margin-tb-sm padding-lg ">
								<button onclick="underline()">Underline Text</button>
								<button onclick="link()">Link</button>
								<button onclick="displayhtml()">Display HTML</button>
							<!-- Make it content editable attribute true so that we can edit inside the div tag and also enable execCommand to edit content inside it.-->
								<div class="editor" contenteditable="true" spellcheck="false">
									This is the text editor
								</div>

								<div class="codeoutput">
									<!-- <pre> tags reserves whitespace and newline characters. -->
									<pre class="htmloutput">
									</pre>
								</div>
							</div>
						</div>
		    </section>

		    <section id="form" class="container full-width primary-bg centered-contents padding-tb-xl flex margin-tb-lg flex-column">
					<?php include ('assets/forms/form.php'); ?>
		    </section>

		    <section id="secondary-content" class="container full-width light-bg centered-contents flex-column stretch flex">
					<h6 class="margin-md margin-t-xl">WHAT DRIVERS ARE SAYING</h6>
		        <div class="container width-960 flex wrap">
		            <div class="flex margin-lg margin-tb-md flex-column-sm">
		                <div class="flex-column-content">
		                    <blockquote class="text-left margin-lg quote ">"The best thing about working for Doug Andrus is that the owners are always working to improve the company by thinking of their drivers. The truck shop is always friendly and fix the trucks as soon as possible if there are any problems. When you walk into the office it feels like you are walking into your own home. The dispatchers are friendly and always answer my questions the best way possible."<br><br><cite><b>Cilviano Nochebuena</b> 7.5 yrs with Doug Andrus Distributing</cite></blockquote>
		                </div>
		            </div>
								<div class="flex margin-lg margin-tb-md flex-column-sm">
		                <div class="flex-column-content">
		                    <blockquote class="text-left margin-lg quote">I enjoy working for Andrus because they try to take care of you. If you have a problem, they try to fix it. You never have to worry about getting paid, it's there. The people in the office take care of you if there is ever a problem. <br><br><cite><b>Rob Howell</b>, 26.5 yrs with Doug Andrus Distributing</cite></blockquote>
		                </div>
		            </div>
		        </div>

						<div class="container width-960 flex wrap margin-lg margin-tb-xl stretch;">
					   <div class="video-container min-300 stretch">
					    <iframe  src="https://www.youtube.com/embed/8BRWESBwOt0" frameborder="0" allowfullscreen></iframe>
					    </div>
						</div>
		    </section>
				<?php include ('assets/includes/footer.php'); ?>
		</div>
	</body>
</html>

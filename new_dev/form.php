<?php
	//SETS PAGE INFO AT THE TOP OF THE HEADER
	$pageTitle = "Form";
	$pageName = "form";
?>
<style>
.container {
  display: flex;
  height: 100vh;
  width: 100vw;
  justify-content: center;
  align-items: center;
  background-color: $bg;
}

.container__text {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px solid black;
  height: 50px;
  min-width: 300px;
  padding: 10px;
  font-size: 14px;
}

.button__input {
  margin-top: 20px;
  background-color: black;
  color: white;
  min-width: 100%;
  height: 50px;
}

.container {
	display: flex;
	flex-direction: column;
}
</style>

<script>
// const editor = document.querySelector('.container__text');
// editor.contentEditable = true;
// // editor.focus();
//
// let text = document.getElementById('this').innerText;
// document.getElementById('this').innerHTML = text;
</script>

		<div id="mobile-hide">
		    <section id="body-content" class="container full-width white-bg centered-contents flex-column flex">
					<div class="container flex-column flex">
						<h2>Sup Nerd</h2>
						<form action="http://localhost/new_dev/new_post.php" method="post">
							<input type="text" name="text_input" id="this" class="container__text">
							</input>
						<input class="button__input" type="submit">
						</form>
					</div>
		    </section>
		</div>
	</body>
</html>

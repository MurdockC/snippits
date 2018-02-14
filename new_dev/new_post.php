<html>
<body>
<style>
.container {
  height: 100vh;
  width: 100vw;
  display: flex;
  -ms-align-items: center;
  align-items: center;
  justify-content: center;
}

h1 {
  font-size: 25vh;
}

</style>
<div class="container">
  <h1><?php echo $_POST["text_input"]; ?></h1>
  <?php $email_to = "caleb@ramseymediaworks.com"; ?>
</div>

</body>
</html>

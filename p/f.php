<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center style="margin-top: 15%;">
		<?php if(isset($_SESSION['err'])): ?>
			<p id="err"><?php echo $_SESSION['err']; ?></p>
			<script>
				window.setTimeout(function(){
					document.getElementById('err').innerHTML = "";
				}, 4000);
			</script>
		<?php endif; ?>
		<form action="b.php" method="POST">
			<label>Username: </label><input type="text" name="uname"><br><br>
			<label>Password: </label><input type="password" name="pass" id=""><br><br>
			<input type="submit" name="b" id="" value="login">
		</form>
	</center>
	<?php 

		if(isset($_SESSION['err']))
		{
			unset($_SESSION['err']);
		}

	?>
</body>
</html>
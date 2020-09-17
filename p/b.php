<?php

	session_start();
	if(isset($_POST['b'])) 
	{
		if($_POST['uname'] == "abc@gmail.com" && $_POST['pass'] == "1234")
		{
			$_SESSION['err'] = "Correct Password";
		}
		else
		{
			$_SESSION['err'] = "Not Correct Password";
		}
	}
	echo "<script>window.location = './f.php';</script>";

?>
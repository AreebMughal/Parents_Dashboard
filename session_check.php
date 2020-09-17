<?php
	session_start();
if (!isset($_SESSION['chngpass']) && !isset($_SESSION['chng'])) {
	$_SESSION['chng'] = "true";
}
	if (!isset($_SESSION['email'])) 
	{
		echo "<script>window.location = './Login.php';</script>";
		// if($_SESSION['category'] == "admin")
		// {
		// 	echo "<script>window.location = './Admin.html';</script>";
		// }
		// else
		// {
		// 	echo "<script>window.location = './index.php';</script>";
		// }
	}

?>
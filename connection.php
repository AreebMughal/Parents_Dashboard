<?php
	$con = mysqli_connect("localhost", "root", "", "dashboard");
    if (!$con) 
    {
        $_SESSION['err'] = "Connection Not Done";
        echo "<script>window.location = './Login.php';</script>";
    }
?>


<?php
	session_start();
	$id = $_GET['id'];

	include('connection.php');
	$q = "UPDATE `feedback` SET `feedbk`= null WHERE `id` = '$id'";
    $run = mysqli_query($con,$q);

    $q = "SELECT `response` FROM `feedback` WHERE `id` = '$id'";
    $run = mysqli_query($con,$q);
    $row = $run->fetch_assoc();
    if ($row['response'] == null) 
    {
    	$q = "DELETE FROM `feedback` WHERE `id` = '$id'";
    	$run = mysqli_query($con,$q);
    }
    
    $q = "SELECT * FROM `feedback` WHERE `feedbk` IS NOT NULL";
    $run = mysqli_query($con,$q);
    if(mysqli_num_rows($run)==0)
    {
		unset($_SESSION['feed']);
		echo "<script>window.location = './Admin.php';</script>"; 
    }
    header("refresh: 0.1; url = Admin.php");
?>
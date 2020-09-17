<?php 
    session_start();
    require('connection.php');
    if(isset($_POST['check_old_pass'])) 
    {
        // echo 'string';
        $pass = $_POST['oldpass'];
        $id = $_SESSION['email'];
        // echo $id;
        $q = "SELECT * FROM `login` WHERE `id`= '$id' ";
        $run = mysqli_query($con,$q);
        // echo '$run->num_rows';
        $row = $run->fetch_assoc();
        if ($row['password'] != $pass) 
        {
            $_SESSION['err'] = "Wrong";
        }
        else
        {
            $_SESSION['err'] = "Confirm"; 
            unset($_SESSION['chng']);
        }
    }   
    else if(isset($_POST['change_pass'])) 
    {
        $id = $_SESSION['email'];
        $new_pass = $_POST['newpass'];
        $conform_pass = $_POST['confirm'];
        if ($new_pass == $conform_pass) 
        {
            $q = "UPDATE `login` SET `password`= '$new_pass' WHERE `id` = '$id'";
            $run = mysqli_query($con,$q);
            // echo "<script>window.location = './index.php';</script>";
            $_SESSION['chng'] = "true";
            $_SESSION['err'] = "done changed";
        }
        else
        {
            $_SESSION['err'] = "Not match";
            // echo "<script>window.location = './ChangePassword.php';</script>";
        }
    }
    echo "<script>window.location = './AChangePass.php';</script>"; 
?>
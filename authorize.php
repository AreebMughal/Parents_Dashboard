<?php
    session_start();
    require('connection.php');
    if(isset($_POST['btn']))
    {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $q = "SELECT * FROM `login` WHERE `id`= '$id' ";
        $run = mysqli_query($con,$q);
        if($run->num_rows!=0 )
        {
            $row = $run->fetch_assoc();
            if ($row['password'] != $password) 
            {
                $_SESSION['err'] = "You Enter Wrong Password";
            }
            else if($row['category'] == "admin")
            {
                $_SESSION['email'] = $id;
                $_SESSION['category'] = "admin";
                // include('feedcheck.php');
                
                echo "<script>window.location = './Admin.php';</script>";    
            }
            else
            {
                $_SESSION['email'] = $id;
                $_SESSION['category'] = "student";
                // 
                $_SESSION['chng'] = "true";
                // include('feedcheck.php');
                echo "<script>window.location = './index.php';</script>";
            }
        }
        else
        {
            $_SESSION['err'] = "You Enter Wrong ID";
        }
    }
    else if(isset($_POST['b']))
    {
        unset($_SESSION['updates']);  
        unset($_SESSION['feed']);  
        $id = $_SESSION['email'] ;
        $q = "UPDATE `feedback` SET `response`= null WHERE `id`= '$id'";
        mysqli_query($con, $q);
        $q = "SELECT `response` FROM `feedback` WHERE `id` = '$id'";
        $run = mysqli_query($con,$q);
        $row = $run->fetch_assoc();
        if ($row['response'] == null) 
        {
            $q = "DELETE FROM `feedback` WHERE `id` = '$id'";
            $run = mysqli_query($con,$q);
        }
        $q = "DELETE FROM `announcement` WHERE `id` = '$id'";
        mysqli_query($con, $q);
        echo "<script>window.location = './index.php';</script>"; 
    }
    else if(isset($_POST['fd']))
    {
        $feedback = $_POST['tarea'];
        $id = $_SESSION['email'];
        $t1 = $_POST['teacher'];
        $t2 = $_POST['school'];
        $t3 = $_POST['general'];
        $q = "INSERT INTO `feedback`(`id`, `feedbk`, `type`) VALUES ('$id','$feedback','$t1\r\n$t2\r\n$t3')";
        $run = mysqli_query($con, $q);
        $_SESSION['err'] = "done feedback";
        echo "<script>window.location = './Feedback.php';</script>"; 
    }
   

    echo "<script>window.location = './Login.php';</script>";    
    
?>
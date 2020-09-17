<?php
    include('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parents Dashboard</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheet.css">
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>
</head>
<style>
    table,td, tr{
        font-size: ;
        /*font-weight: bold;*/  
    }
    td{
        font-weight: 500;
        color: white;
    }
    .heading{
        color: black;
        font-weight: strong;
        font-size: 17px;
    }
    .nav-link{
        color: black;
        font-size:17px;
        font-weight: 500;
    }
    .navbar-brand
    {
        color:#e3d72d;
        font-weight: 1000;
        font-size: 20px;
    }
</style>
<body>
    <header>
        <div class="bg-image" style="background: rgba(0, 0, 0, 0.5); height: 100%"></div>
        <div class="container-fluid" style="background: rgba(0, 0, 0, 0.5); color: white;">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <!-- <img src="log.jpg" class="img-responsive"> -->
                    <h3>Parent's Dashboard</h3>
                </div>
            </div>
        </div>
        <div class="navi">
            <nav class="navbar navbar-expand-md  bg-info sticky-top">
                <a class="navbar-brand" href="index.php">
                    <span class=""></span> Profile Detail</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" 
                aria-controls="collapsibleNavId">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId" style="margin-left: 10%;">
                    <ul class="navbar-nav nav-right nav-tabs nav-fill">
                        <li class="nav-item active" >
                            <a class="nav-link" href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="n nav-item active" id="n">
                            <a class="nav-link " href="Feedback.php"><i class="fas fa-comment"></i>  Feedback</a>
                        </li>
                         </li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" ><i class="fas fa-file-signature"></i>
                                Academics</a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="AcademicRecord.php"><i style="margin-right: 5px;"class="fas fa-address-card"></i>Academic Record</a>
                                <a class="dropdown-item" href="ClassPerformance.php"><i style="margin-right: 5px;"class="fas fa-user-edit"></i>Class Performance</a>
                                <a class="dropdown-item" href="AttendanceDetail.php"><i style="margin-right: 5px;"class="fas fa-id-card"></i>Attendance Detail</a>
                                <a class="dropdown-item" href="TimeTable.php"><i style="margin-right: 5px;"class="fas fa-clock"></i>Time Table</a>
                                <a class="dropdown-item" href="DateSheet.php"><i style="margin-right: 5px;"class="fas fa-calendar-check"></i>Date Sheet</a>
                                <a class="dropdown-item" href="IssuedBook.php"><i style="margin-right: 5px;"class="fas fa-book"></i>Issued Book Record</a>
                                <a class="dropdown-item" href="SchoolCalendar.php"><i style="margin-right: 5px;"class="fas fa-calendar-alt"></i>School Calendar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"><img src="pictures/Detail.png" style="margin-bottom: 2px; height: 22px; width: 20px">
                                Details</a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="FeeDetail.php"><i style="margin-right: 5px;" class="fas fa-calculator"></i>Fee Details</a>
                                <a class="dropdown-item" href="TeacherDetail.php"><i style="margin-right: 5px;" class="fas fa-address-book"></i>Teacher Details</a>
                                <a class="dropdown-item" href="ScholarshipDetail.php"><i style="margin-right: 5px;" class="fas fa-file-invoice-dollar"></i>Scholarship Details</a>
                            </div>    
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"><i class="fas fa-user"></i>
                                Profile Setup</a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="ProfileDetail.php"><i style="margin-right: 5px;" class="fas fa-user-circle"></i>Profile Detail</a>
                                <a class="dropdown-item" href="ChangePassword.php"><i style="margin-right: 5px;" class="fas fa-user-lock"></i>Change Password</a>
                            </div>    
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="Logout.php"><i  style="color: #bd1515;"  class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>  
    <main>
        <?php 
            $id = $_SESSION['email'];
            include('connection.php');
            $q = "SELECT * FROM `profile details` WHERE `id` = '$id'";
            $run = mysqli_query($con,$q);
            if(mysqli_num_rows($run)!=0)
            {
                $row = $run->fetch_assoc();
                $html = '<div class="container col-md-8" style="display: flex; margin-top: 20px;padding: 20px">
                        <div class="table container" style="background-color:#545454;">
                            <table class="table" 
                                <tbody>
                                    <tr>
                                        <td colspan="" rowspan="5" ><img style="height:200px;width:200px;" src="'.$row['img'].'" class="">
                                        </td>    
                                    </tr>
                                    <tr>
                                        <td><span class="heading">ID: </span>'.$id.'</td>
                                        <td><span class="heading">Gender: </span>'.$row['Gender'].'</td>
                                    </tr>
                                    <tr>
                                        <td><span class="heading">Name: </span>'.$row['Name'].'</td>
                                        <td><span class="heading">Religion: </span>'.$row['Religion'].'</td>
                                    </tr>
                                    <tr>
                                        <td colspan = "2"><span class="heading">Father Name: </span>'.$row['Father_Name'].'</td>
                                        
                                    </tr>
                                    <tr>
                                        <td><span class="heading">CNIC: </span>'.$row['CNIC'].'th</td>
                                        <td><span class="heading">DOB: </span>'.$row['Date_of_birth'].'</td>
                                    </tr>
                                    <tr>
                                        <td><span class="heading">Phone_No: </span>'.$row['Phone_No'].'</td>
                                        <td colspan="2"><span class="heading">Nationality: </span>'.$row['Nationality'].'</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><span class="heading">Address: </span>'.$row['Address'].'</td>
                                    </tr>
                                    <tr>
                                        <td><span class="heading">Registration ID: </span>'.$row['Reg_Id'].'</td>
                                        <td colspan="2"><span class="heading">Registration Date: </span>'.$row['Reg_Year'].'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                    </div>';
                echo $html;
                $_SESSION['html'] = $html;
            }
            else
            {
                echo '<div class="marquee container">
                        <marquee behavior="" direction="" scrollamount="8"><h1>There is no Data in DataBase due to some Problems.</h1></marquee>
                    </div>';    
            }
        ?>
    </main>
    <footer>

    </footer>
    <!-- <script src="assets/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>
</html>
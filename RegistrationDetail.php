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
                    <span class=""></span> RegistrationDetail</a>
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
        <style >
            .D1{
                background-color: green;
                width: AUTO;
                text-align: center;
            }
            .fl{
                display: flex;
             margin-top: 50px;
            }
          
          .ff{
           margin-left: 200px;
          }
        </style>
        <div class="D1">
            <h3>STUDENT REGISTRATION DETAILS</h3>
        </div>
   
         <div align="left">
            <div class="container d">
            
                <center><img src="bcha.jpg" class="img-respoonsive"></center>
            
            </div>   
        </div>
        <div class="fl">
         <div class="container ff">

            <p><b class="border">Full Name :</b>  Saher Ikram</p>
            <p><b class="border">Reg. Id :</b> Aw-093</p>
            <p><b class="border">Reg. year :</b> 2007</p>
            <p><b class="border">Date of Birth</b> 03-JAN-00</p>  
            <p><b class="border">Gender:</b>Female</p>
            <p><b class="border">Religion:</b>    Islam</p>
            

         </div>
         <div class="container">
             <p><b class="border">Father Name :</b>  Muhammad Ikram</p>
             
            <p><b class="border">Nationality:</b>    Pakistan</p>
             <p><b class="border">Address: </b>   wazirabad DISST GUJRANWALA</p>
            <p><b class="border">CNIC No: </b>   3521852578314 </p> 
            <p><b class="border"> Guardian CNIC No: </b>   3521852577316 </p> 
            
             <p><b class="border"> Home Tele Ph: </b>  xxxxxxxx</p>
            
         </div>
         </div>
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
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
    <script src="index.js"></script>
</head>
<style>
table,tr, td{
    border-color:  black;
    color: black;   
    text-align: center;    
}
tr{
    /*border-bottom: 1px solid black;*/
    /*border-top: 1px solid black;*/
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
    <!-- <div style="background-color: rgba(0, 0, 0, 0.8); height: auto;"> -->
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
                    <span class=""></span> Academic Record</a>
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
        <section>
            <?php 
                $id = $_SESSION['email'];
                include('connection.php');
                $result = "";
                $q = "SELECT * FROM `profile details` WHERE `id` = '$id'";
                $run = mysqli_query($con,$q);
                $row = $run->fetch_assoc();
                $html = '<div class="container col-lg-6" style=" margin-top: 20px">
                           <h4><u>Student ID: '.$row['Id'].'</u></h4>
                    <h4><u>Name: '.$row['Name'].'</u></h4></div>';
                $q = "SELECT DISTINCT `class` FROM `subject` WHERE `id` = '$id' ";
                $run = mysqli_query($con,$q);
                if(mysqli_num_rows($run)!=0){
                    while ($row = mysqli_fetch_assoc($run)){
                        $class = $row['class'];
                        $q = "SELECT * FROM `subject` WHERE `id` = '$id' AND `class` = '$class' ";
                        $run1 = mysqli_query($con,$q);

                        $html .= '
                            <div class="container col-lg-6" style=" margin-top: 20px">
                                <h4 style="text-align: center"><u>Class: '.$row['class'].'th</u></h4>
                                <div class="table container">
                                    <table class="table table-striped table-hover   ">
                                        <tbody
                                            <tr>
                                                <td class="head">Subjects</td>
                                                <td class="head">Obtained Marks</td>
                                                <td class="head">Total Marks</td>
                                                <td class="head">Grade</td>
                                            </tr>';                            
                        while ($row1 = $run1->fetch_assoc()){
                            $html.= '<tr>
                                <td class="data">'.$row1['sub'].'</td>
                                <td class="data">'.$row1['obt'].'</td>
                                <td class="data">'.$row1['total'].'</td>
                                <td class="data">'.$row1['grade'].'</td>
                            </tr>';
                        } 
                        $html .= '</tbody></table></div></div><br><br>';
                    }
                    $_SESSION["html"] = $html;   
                    echo $html;
                    echo '<div class="printDownbutton">
                            <a class="btn btn-info" target="_blank" href = "p.php">Print</a>
                            
                        </div>';
                }
                else
                {
                    echo'<div class="marquee container">
                        <marquee behavior="" direction="" scrollamount="8"><h1>There is no Data in DataBase due to some Problems.</h1></marquee>     
                    </div>';
                } 
            ?>
        </section>
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

</div>
</body>
</html>
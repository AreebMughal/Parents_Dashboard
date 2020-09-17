<?php
    include('session_check.php');
    include('connection.php');
    $id = $_SESSION['email'];
    $q = "SELECT * FROM `announcement`  WHERE `id` = '$id'";
    $run = mysqli_query($con,$q);
    if(mysqli_num_rows($run)!=0)
    {
        $_SESSION['updates'] = "";
        while($row = $run->fetch_assoc()){
            $_SESSION['updates'] .= $row['announce'] .'<br>';
        }
        // echo isset($_SESSION['updates']);
    }
    $q = "SELECT * FROM `feedback` WHERE `id` = '$id' AND `response` IS NOT NULL";
    $run = mysqli_query($con,$q);
    if(mysqli_num_rows($run)!=0)
    {
        $row = $run->fetch_assoc();
        $_SESSION['feed'] = $row['response'];
    }
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
            <div class="row" style="display: flex;">
                <div class="col-md-3 col-xs-6">
                    <h3>Parent's Dashboard</h3>
                </div>
                <?php if(isset($_SESSION['category'])):?>
                    <div class="col-md-6 mt-2 pb-0 alert alert-success" id="c">
                       <p style="text-align:center;">Succesfully login!!!<br> Welcome to Parent's Dashboard.</p>
                    </div>
                    <script>
                        window.setTimeout(function() {
                            document.getElementById('c').style.display = 'none';
                        }, 2000);
                    </script>
                <?php unset($_SESSION['category']); endif; ?>   
            </div>
        </div>
        <div class="navi">
            <nav class="navbar navbar-expand-md  bg-info sticky-top">
                <a class="navbar-brand" href="index.php">
                    <span class=""></span>Dashboard</a>
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
                                <a class="dropdown-item"style="red" href="FeeDetail.php"><i style="margin-right: 5px;" class="fas fa-calculator"></i>Fee Details</a>
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
    <main >
        <style>
            .upd{
                background-color: white;
                color: brown; 
                padding: 10px;
                margin-top: 20px;
                border-radius: 10px;
                border: ridge;
                font-weight: 500;
                /*color: blue;*/
                font-size: 17px;
                text-align: center
            }
        </style>
        <?php if(isset($_SESSION['updates']) || isset($_SESSION['feed'])):?>
            <div class="upd container col-md-6" style = "">
                <?php if(isset($_SESSION['updates'])):?>
                    <div class="container">
                    <h3 style="color: red"><u>An Important Announcement</u></h3>
                    
                        <p> <?php echo $_SESSION['updates']; ?> </p><hr>
                <?php endif;?>  
                <?php if(isset($_SESSION['feed'])):?><div>
                    <h3 style="color: red"><u>Feedback Response</u></h3>
                        <p name="pa"> <?php echo $_SESSION['feed']; ?> </p> <hr> 
                <?php endif; ?>
                <form action="authorize.php" method="post">
                   <input style="margin-left: 90%" type="submit" name="b" class="btn btn-primary" value="Ok">
                    </form> </div>   
            </div>
        <?php else:?>
        <section>
            <div class="dash1 container col-sm-6">
                <div class="ic container">
                    <a class="dashLink" href="AcademicRecord.php">
                        <img class="image" src="pictures/Academic_Record-512.png" alt="" sizes="" srcset="">
                        Academics Record
                    </a>
                </div>
                <div class="ic container">
                    <a class="dashLink" href="TimeTable.php">
                        <img class="image" src="pictures/time.png" alt="" srcset="">
                        Time Table
                    </a>    
                </div>
                <div class="ic container" style="color:red;">
                    <a class="dashLink" href="FeeDetail.php">
                        <img class="image" src="pictures/fee.png" alt="" srcset="">
                        Fee Detail
                    </a>
                </div>
            </div>

            <div class="dash2 container col-sm-6">
                <div class="ic container">
                    <a class="dashLink" href="ProfileDetail.php">
                        <img class="image" src="pictures/profile.jpg" alt="" sizes="" srcset="">
                        Profile Detail
                    </a>
                </div>
                <div class="ic container">
                    <a class="dashLink" href="DateSheet.php">
                        <img class="image" src="pictures/timetable.png" alt="" srcset="">
                        Date Sheet
                    </a>    
                </div>
                <div class="ic container">
                    <a class="dashLink" href="ClassPerformance.php">
                        <img class="image" src="pictures/performance.png" alt="" srcset="">
                        Class Performance
                    </a>
                </div>
            </div>
            </div>
        </section>    
        <?php endif;?>                   
    </main>
    <footer>

    </footer>
    </div>
    <!-- <script src="assets/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script></script>
</body>
</html>
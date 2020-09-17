<?php
    include('session_check.php');
    $_SESSION['chngpass'] = 'true';
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
    #err{

    font-weight: 700;
    width: 280px;
    height: 33px;
    
    animation: myfirst 2s 1;
    animation-direction: alternate;
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

@keyframes myfirst {
    0%   {left:600px ; top: 0px; }
    50%  {left:0px ;top: 0px; }
    100% {left:0px;top: 0px; }
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
                    <span class=""></span> Change Password</a>
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
        <div class="changePassword form-group container col-sm-4">

            <?php if(isset($_SESSION['chng']) && $_SESSION['chng'] == "true"): ?>
                <?php if(isset($_SESSION['err']) && ($_SESSION['err'])=="Wrong"):?>
                        <div class="pt-0 pb-0 alert alert-danger" id="err">
                        <p style="text-align: center;">You Enter Wrong Password!!!</p></div>
                        <script>
                                // document.getElementById('err').style.visibility = 'visible';
                                window.setTimeout(function(){
                                document.getElementById('err').style.display = 'none';
                                }, 3000);
                        </script>   
                <?php endif;?>
                <h4 style="text-align: left;">Confirm Your Password First!</h4>
                <form action="passcheck.php" method="POST">
                    <input type="password" class="form-control" name="oldpass" id="opass" placeholder="Enter Old Password" required><br>
                    <input type="submit" name="check_old_pass" class="btn btn-primary" value="Change">
                </form>

            <?php else : ?>

                <?php if(isset($_SESSION['err']) &&($_SESSION['err'])=="Not match"): ?>
                       <div class="pt-0 pb-0 alert alert-danger" id="err">
                        <p style="text-align: center;">Password Not Matched!!!</p></div>
                        <script>
                            window.setTimeout(function(){
                            document.getElementById('err').style.display = 'none';
                            }, 3000);
                        </script>    
                <?php endif;?>

                <?php if(isset($_SESSION['err']) &&($_SESSION['err'])=="Confirm"): ?>
                <div class="pt-1 pb-0 alert alert-success" id="c">
                    <p style="text-align: center;" >Password Confirmed!!!</p>
                </div>
                <script>
                    // document.getElementById('c').style.visibility = 'visible';
                    window.setTimeout(function() {
                        document.getElementById('c').style.display = 'none';
                    }, 2000);
                </script>
                <?php unset($_SESSION['err']); endif;?>

                <h4 style="text-align: left;">Change Your Password...</h4>
                <form action="passcheck.php"  method="POST">
                    <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Enter New Password" required><br>
                    <input type="password" class="form-control" name="confirm" id="confirmpass" placeholder="Confirm Password" required><br>
                    <input type="reset" class="btn btn-primary" value="Reset">
                    <input type="submit" name="change_pass" class="btn btn-primary" value="Change">
                </form>
                

            <?php endif; ?>
        </div>
        <?php if(isset($_SESSION['err']) && $_SESSION['err'] == "done changed"): ?>
                <div class="container mt-3 col-md-4 alert alert-success">
                    <p style="text-align: center;">Your New Password has been saved Succesfully.</p>
                </div>
                <?php unset($_SESSION['err']); ?>
                <script>
                    window.setTimeout(function() {
                        window.location = './index.php';
                    }, 2000);
                </script>
            <?php endif;?>
    </main>
    <footer>
    </footer>
    <!-- <script src="assets/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnju     UD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
    <?php 
        if(isset($_SESSION['err']))
        {
            unset($_SESSION['err']);   
        }
        // unset($_SESSION['chngpass']);
    ?> 
</body>
</html> 
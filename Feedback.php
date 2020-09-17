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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="StyleSheet.css">
    <!-- <script src="assets/jquery.js"></script> -->
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>

</head>
<style>
.bg {
    position: absolute;
    justify-content: center;
    /*top: 0;*/
    height: 100%;
    width: 100%;
    /*visibility: hidden;*/
    /*background-color: black;*/
}
#err{
    
    /*color: white;*/
    font-weight: 700;
    width: 280px;
    /*height: 45px;*/
    position: relative;
    /*background-color: white;*/
    opacity: 0.8;
    /*margin-top: 117px;*/
    border-radius: 10px;
    text-align: center;
    margin-top:38px;
    /*padding: 10px;*/
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
                    <span class=""></span>Feedback</a>
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
    
            <div class="container mt-2 pb-2 pt-2 col-lg-8" style="border: 1px solid black; border-radius: 5px;">
                <form action="authorize.php" method="POST" onsubmit="return check();">
                    <div class="container" style="display: flex;">
                        <div>
                        <p style="font-size: 18px; text-decoration:underline; font-weight:500;">Select the category you want to give feedback:</p>
                        <input class="mr-1" type="checkbox" name="teacher" value="Teacher" id="tec">Teacher
                        <input class="mr-1 ml-3" type="checkbox" name="school" value="School" id="sch">School
                        <input class="mr-1 ml-3" type="checkbox" name="general" value="General" id="gen">General <br>
                        </div>
                        <div id="err" class="alert-danger" style="visibility: hidden;">
                        <p style="">Please select one of these category</p></div>
                    </div>

                    <div class="textarea">
                        <textarea class="form-text col-lg-10" name="tarea" id="txtarea" required="true" cols="100" rows="8" maxlength="250"  placeholder="Enter the feedback here..."></textarea>
                    </div>
                    <div>
                        <p id="charRemaining" style="color: blue;">250 Characters Remaining</p>
                    </div>
                    <!-- <p id="abc" style="visibility: hidden;">DOn not</p> -->
                    <script>
                        function check()
                        {
                            var tec = document.getElementById('tec');
                            var sch = document.getElementById('sch');
                            var gen = document.getElementById('gen');
                            if(tec.checked)
                            {
                                return true;
                            }
                            else if(sch.checked)
                            {
                                return true;
                            }
                            else if(gen.checked)
                            {
                                return true;
                            }
                            else
                            {
                                document.getElementById('err').style.visibility = 'visible';
                                window.setTimeout(function(){
                                // document.getElementById('err').innerHTML = " ";
                                document.getElementById('err').style.visibility = 'hidden';
                                }, 3000);
                                // document.getElementById("bgg").style.visibility = 'visible';
                                return false;
                            }
                        };
                        const maxlength = 250;
                        // val = 250;
                        document.getElementById('txtarea').addEventListener('input', () =>{
                            var remaining = maxlength - document.getElementById('txtarea').value.length;
                            // console.log(remaining);
                            // val = remaining;
                            // if(val < 1)
                            // {
                            //     document.getElementById('abc').style.visibility = 'visible';    
                            // } 
                            // else
                            // {
                            //     document.getElementById('abc').style.visibility = 'hidden';
                            // }
                            const color = remaining < maxlength * .1 ? 'red' : 'blue'; 
                            document.getElementById('charRemaining').textContent = remaining + ' Characters Remaining';
                            document.getElementById('charRemaining').style.color = color; });
                    </script>
                    <div>
                        <input type="submit" id="btn" name="fd" class="btn btn-primary" value="Submit"  >
                    </div>
                </form>
            </div>    
            <?php if(isset($_SESSION['err']) && $_SESSION['err'] == "done feedback"): ?>
                <div class="container mt-3 col-md-4 alert alert-success">
                    <p style="text-align: center;">Your Feedback has been send Succesfully.</p>
                </div>
                <?php unset($_SESSION['err']); ?>
                <script>
                    window.setTimeout(function() {
                        window.location = './index.php';
                    }, 2000);
                </script>
            <?php endif;?>
        </section>
    </main>
    <footer>

    </footer>
     
    <!--<script src="assets/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>
</html> 
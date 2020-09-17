<?php
    include('session_check.php');
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleSheet.css">
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>
</head>
<style>
    #btn{
        padding-right: 25px;
        text-align: right;
        width: 100px;
    }
    td{
        padding: 20px;
        border: 2px solid black;
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
.email-field{
    font-size: 17px;
    padding: 5px 7px;
    width: 230px;
    background-color: #ffffff; 
    border: 1px solid #ccd0d5;
    border-radius: 5px;
    margin: 0px 10px 10px 0px;
    font-family: Helvetica, Arial, sans-serif;
}
</style>
<body class="adminbd">
    <header>
       <div class="bg-image" style="background: rgba(0, 0, 0, 0.5); height: 100%"></div>
        <div class="container-fluid" style="background: rgba(0, 0, 0, 0.5); color: white;">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <!-- <img src="log.jpg" class="img-responsive"> -->
                    <h3>School Management System</h3>
                </div>
            </div>
        </div>
        <div class="navi">
            <nav class="navbar navbar-expand-md  bg-info sticky-top">
                <a class="navbar-brand" href="Admin.php">
                    <span class=""></span> Admin Feedback</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavId" 
                aria-controls="collapsibleNavId">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId" style="margin-left: 10%;">
                    <ul class="navbar-nav  mr-auto mt-2 mt-lg-0 nav-right nav-tabs nav-fill col-md-10">
                        <li class="nav-item active">
                            <a class="nav-link" href="Admin.php"> <i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li> 
                        <li class="nav-item ">
                            <a class="nav-link" href="AdminFeedback.php"><i class="fas fa-comment"></i>FeedBack</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="AChangePass.php"><i class="fas fa-user-lock"></i>Change Password</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="Logout.php"><i style="color: #bd1515;" class="fas fa-sign-out-alt"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> 
    <main>
         <section>
            <div class="container col-md-10 mt-2 " style="border: 1px solid black; border-radius: 5px;">
                <div class="container">
                       <h3>Parent's Feedback</h3>
                </div>
                    <?php 
                        include('connection.php');
                        $q = "SELECT * FROM `feedback` WHERE `id` = '$id'";
                        $run = mysqli_query($con,$q);
                        $feed = "";
                        if(mysqli_num_rows($run)!=0)
                        {
                            $row = $run->fetch_assoc();
                            $feed = $row['feedbk'];
                            $_SESSION['fed'] = $feed;
                            echo '<p class="container col-md-10" style="font-size:17px; font-weight:500;margin-left:;"><u>Feedback Type:</u> '.$row['type'].'</p>';
                            echo '<div class="feed container col-md-10">';
                            echo "<p>". $row['feedbk'] ."</p>";
                        }
                    ?>
                </div>
                
                    <div class="container col-md-10">
                        <?php echo '<input type="text" name="feed" style="display:none" value="'.$feed.'">'?>
                        <div style="display: flex;">
                            <div class="mt-1">
                        <form action="api.php" method="POST">
                        <input type="submit" name="send_Prin" title="" class="but btn btn-primary" value="Send to Principal"></form></div>
                        <div class="container col-md-10 mt-2">
                        <form action="api.php" method="POST">
                        <input type="email" name="tech_email" class="email-field" placeholder="Enter Teacher's email" required="" >
                        
                        <input type="submit" name="send_Tech" class="btn btn-primary" value="Send"></form></div></div>
                    </div>
                    <div class="textarea container col-md-10">
                        <form action="api.php" method="POST">
                        <textarea class="form-text col-md-10" name="tarea" id="txtarea" cols="100" rows="5" maxlength="250"  placeholder="Enter the response feedback to parents..." required=""></textarea>
                        <p id="charRemaining">250 Characters Remaining</p>
                    </div>
                    <script>
                        const maxlength = 250;
                        document.getElementById('txtarea').addEventListener('input', () =>{
                            var remaining = maxlength - document.getElementById('txtarea').value.length;
                            // console.log(remaining);
                            const color = remaining < maxlength * .1 ? 'red' : null; 
                            document.getElementById('charRemaining').textContent = remaining + ' Characters Remaining';
                            document.getElementById('charRemaining').style.color = color; });
                    </script>
                    <div class="container col-md-10">
                       <input type="submit" name="response" class="but btn btn-primary" value="Submit">
                    </div>
                </form> 
            </div>    
            <?php if(isset($_SESSION['err'])): ?>
                <div class="container mt-3 col-md-4 alert alert-info" id="fd">
                    <p style="text-align: center; font-weight:bold;"><?php echo $_SESSION['err']; ?></p>
                </div>
                <?php if($_SESSION['err']!="Your Response has been send Succesfully."): ?>
                    <script>
                        window.setTimeout(function() {
                            document.getElementById('fd').style.display = 'none';
                        }, 2000);
                    </script>
                    <?php unset($_SESSION['err']); ?>
                <?php else: ?>
                    <?php unset($_SESSION['err']); ?>
                    <script>
                        window.setTimeout(function() {
                            window.location = './Admin.php';
                        }, 2000);
                    </script>
                <?php endif; ?>
            <?php endif;?>
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
</body>
</html>
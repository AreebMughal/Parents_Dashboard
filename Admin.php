<?php
    include('session_check.php');
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
</style>
<body class="adminbd">
    <header>
       <div class="bg-image" style="background: rgba(0, 0, 0, 0.5); height: 100%"></div>
        <div class="container-fluid" style="background: rgba(0, 0, 0, 0.5); color: white;">
            <div class="row" style="display: flex;">
                <div class="col-md-4 col-xs-6">
                    <!-- <img src="log.jpg" class="img-responsive"> -->
                    <h3>School Management System</h3>
                </div>
                <?php if(isset($_SESSION['category'])):?>
                    <div class="col-md-6 mt-2 pb-0 alert alert-success" id="c">
                       <p style="text-align:center;">Succesfully login!!!<br> Welcome to Admin Dashboard.</p>
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
                <a class="navbar-brand" href="Admin.php">
                    <span class=""></span> Admin Dashboard</a>
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
                            <a class="nav-link" href="AChangePass.php"><i class="fas fa-user-lock"></i>Change Password</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="Logout.php"><i style="color: #bd1515;" class="fas fa-user-lock"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> 
    <main>
        <?php 
            include('connection.php');
            $q = "SELECT * FROM `feedback` WHERE `feedbk` IS NOT NULL";
            $run = mysqli_query($con,$q);
            if($run->num_rows!=0)
            {
                // $row = $run->fetch_assoc();
                $_SESSION['feed'] = "Yes there is a feedback";
                // echo isset($_SESSION['updates']);
            }
        ?>
        <?php if(!isset($_SESSION['feed'])): ?>
            <div class="marquee container">
                <marquee behavior="" direction="" scrollamount="8"><h1>There is no feedback from parent</h1></marquee>
            </div>
        <?php else: ?>
        <div class="container">
            <h2>FeedBack Record</h2>
            <!-- <p>All feedbacks will appear here!</p> -->
            <div class="D1 container">
                <table class="table table-dark table table-striped">
                    <tbody>
                        <?php 
                        include('connection.php');
                        $q = "SELECT * FROM `feedback` WHERE `feedbk` IS NOT NULL";
                        $run = mysqli_query($con,$q);
                        if(mysqli_num_rows($run)!=0)
                        {
                            while ($row = $run->fetch_assoc()) 
                            {
                                if ($row['feedbk'] != null) {
                                    $i = $row["id"];
                                    $subFeed = $row['feedbk'];
                                    if(strlen($subFeed)>50){
                                        $subFeed = substr($subFeed, 0, 50);
                                        $subFeed .= " . . .";
                                    }
                                    echo '<tr id="tt">' .
                                            '<td> 
                                                Feedback From ID: <span style="color:skyblue;">' . $row["id"] . "</span><br>". $subFeed . 
                                            '</td>' .
                                            // '<td>'. 
                                            //     $row['type'] . 
                                            // '</td>'.
                                            '<td id="btn"> 
                                                <a class="btn btn-info" id="al" href="AdminFeedback.php?id='.$i.'">Open</a>
                                            </td>'.
                                            '<td id="btn"> 
                                                <a class="btn btn-info" id="al" href="del.php?id='.$i.'">Delete</a>
                                            </td>'.
                                        '</tr>';
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>

</body>
</html>
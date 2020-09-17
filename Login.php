<?php 
    session_start();
    if (isset($_SESSION['email'])) 
    {
        if($_SESSION['category'] == "admin")
        {
            echo "<script>window.location = './Admin.php';</script>";
        }
        else
        {
            echo "<script>window.location = './index.php';</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="LoginStyleSheet.css">
    <script src="https://kit.fontawesome.com/91d0125610.js" crossorigin="anonymous"></script>
</head>

<body class="body">
    <?php if(isset($_SESSION['err'])): ?>
        <div class="bg-modal" >
            <div class="modal-error" id="err">
                <?php if($_SESSION['err'] != "Connection Not Done"): ?>
                <p style="font-weight: bold;"><?php echo $_SESSION['err']; ?></p>
                <script>
                        window.setTimeout(function(){
                        document.getElementById('err').innerHTML = " ";
                        document.getElementById('err').style = "background-color: rgba(0, 0, 0, 0)";
                    }, 3000);
                </script>
                <?php else: ?>
                    <p style="color: red;font-size: 40px;"><b>Databse not connected. Server error is not established.Please try after some time.</b></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <!-- <div class="d"> -->
   
    <div class="login container col-md-4">
        <p id="sp1"> <i>Login Page</i></p>
        <form class="container" action="authorize.php" method="POST" autocomplete="on">
            <div class="form-group container">
                <input type="text" class="f form-control" name="id" id=""  placeholder="Enter Your Id" tabindex="1" maxlength = "20" autofocus required><br>
                <input type="password" class="f form-control" name="password" id="" placeholder="Enter Password" tabindex="2" required><br>
                <a class = "button" href="ForgetPassword.php" tabindex="4">Forget Password?</a>
                <input type="submit" class="button" value="Login" tabindex="3" name="btn">
            </div>
        </form>
    </div>

    
    <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <?php 
        if(isset($_SESSION['err']))
        {
            unset($_SESSION['err']);   
        }
    ?>
</body>
</html>
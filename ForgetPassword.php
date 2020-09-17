
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
    <div class="login container col-sm-4 ">
        <p id="sp1"> <i>Retrieve Password</i></p>
        <form class="container" action="api.php" method="POST" autocomplete="on">
            <div class="form-group container">
                <input type="text" class="form-control" name="id" id=""  placeholder="Enter Your Roll No." required="" tabindex="1"><br>
                <input type="email" class="form-control" name="email" id=""  placeholder="Enter Your Email" required="" tabindex="2"><br>
                <a class="btn btn-primary" value="" tabindex="3" href="Login.php">Go to Login Page</a>
                <input type="submit" class="btn btn-primary" name="btn" value="Generate Password" tabindex="3">
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>
</html>
    
<?php
	session_start();
    
	if (isset($_POST['btn'])) 
    {
        $email_id = $_POST["email"];
        $id = $_POST['id'];
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // $charactersLength = strlen($characters);
        $randomString = '';
        $length = 6;
        for ($i = 0; $i < $length; $i++) 
        {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        // echo $randomString;
         $ff =  'https://docs.google.com/spreadsheets/d/1I5XjfEvIlbMClEYNsM6FPsFLYQy1_Rg-9wMRsNmpFSQ/edit?usp=sharing';
        require 'sendgrid-php/vendor/autoload.php';
    
        $sendgrid = new \SendGrid('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');
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("5683u27335@2727.ar", "GIFT Announcement");
        $email->setSubject("PIAIC Notification");
        $email->addTo( $email_id , "");
        // $email->addContent("text/plain", "Your System Generate Password Is: ");
        $email->addContent(
            "text/html", '<strong>Your System Generate Password Is: <span style="color:blue">'.
            $ff.'</span></strong>'
        );
        
   //      include('connection.php');
   //      $q = "UPDATE `login` SET `password`= '$randomString' WHERE `id` = '$id'";
   //      $run = mysqli_query($con,$q);

        if ($sendgrid->send($email)) 
        {
            $_SESSION['err'] = "New Password has been send to your Email Address"; 
            // echo $_SESSION['err'];
			echo "<script>window.location = './Login.php';</script>";  
        }
	}
    // else{
    //    echo "<script>window.location = './ForgetPassword.php';</script>";
    // }
    if (isset($_POST['send_Prin']) || isset($_POST['send_Tech'])) 
    {
        require 'sendgrid-php/vendor/autoload.php';
       
        $sendgrid = new \SendGrid('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');
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("5683u27665@2727.ar", "System Generate Mail");
        $email->setSubject("Parent's Feedback");

        if (isset($_POST['tech_email'])) {
            $email_id = $_POST["tech_email"];
            $email->addTo($email_id, "");
        }
        else if (isset($_POST['send_Prin'])){
            // $email_id = "areebmughal779@gmail.com";
            $email->addTo("areebmughal779@gmail.com", "");
        }
        $fd = $_SESSION['fed'];
        $id = $_SESSION['id'];
        
        
        // $email->addContent("text/plain", "Your System Generate Password Is: ");
        $email->addContent(
            "text/html", 'Feedback From a Parent: <br><span style="color:blue">'.
            $fd.'</span>'
        );

        if ($sendgrid->send($email)) 
        {
            $_SESSION['err'] = "Feedback has been send Succesfully."; 
            echo "<script>window.location = './AdminFeedback.php?id=".$id."';</script>";  
            // include('./AdminFeedback.php?id='.$id);
        }
    }
    if (isset($_POST['response'])) 
    {
        $id = $_SESSION['id'];
        $res = $_POST['tarea'];
        include('connection.php');
        $q = "UPDATE `feedback` SET `response`= '$res' WHERE `id` = '$id'";
        $run = mysqli_query($con,$q);
        $_SESSION['err'] = "Your Response has been send Succesfully.";
        echo "<script>window.location = './AdminFeedback.php?id=".$id."';</script>";  
    }

?>
<?php 


 require 'sendgrid-php/vendor/autoload.php';
        // $email_id = "areebmughal779@gmail.com";
        // $email_id = "aroojawan488@gmail.com";
        // $email_id = "181400149@gift.edu.pk";
        // $email_id = "191990077@gift.edu.pk";
        $email_id = "191990087@gift.edu.pk";


        $sendgrid = new \SendGrid('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');
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("Gift University", "GIFT Announcement");
        $email->setSubject("Java JDK");
     //     $emails = array (
     //    "181400149@gift.edu.pk",
     //    "areebmughal779@gmail.com"
     // );
        $email->addTo($email_id, "");
        
        // $fd = $_SESSION['fed'];
        // $id = $_SESSION['id'];
        
        // $fd =  "https://docs.google.com/spreadsheets/d/1I5XjfEvIlbMClEYNsM6FPsFLYQy1_Rg-9wMRsNmpFSQ/edit?usp=sharing";
        // $email->addContent("text/plain", "Your System Generate Password Is: ");
        $email->addContent(
            "text/html", 'Dear Arooj Sajjad: <br><br>

Go to this link : https://www.oracle.com/java/technologies/javase-jdk14-downloads.html <br>
and then download the second last file windows-x64_bin.exe. <br>
Thank You
'
);
        if ($sendgrid->send($email)) 
        {
            $_SESSION['err'] = "Feedback has been send Succesfully."; 
            echo $_SESSION['err'];
            // include('./AdminFeedback.php?id='.$id);
        }


?>

<!-- 
If any student had missed the previous classes due to any reason, please listen that missed lectures from our youtube channel:<br>https://www.youtube.com/channel/UC2Makv_pLAtvrjHNgg-pBLg <br><br>
<b>Today Friday Night:</b> <br><ul><u>Adil Altaf will be streaming live for Weekly General Q&A at <span style="color:red">9:00 PM</span>. </u> </ul>
  
<table style="text-align:center">
    <caption>Weekly Time Table</caption>
    <thead style="background-color:#e8f0fe">
        <tr>
            <th style="padding:5px">Course</th>
            <th style="padding:5px">Friday</th>
            <th style="padding:5px">Saturday</th>
            <th style="padding:5px">Sunday</th>
            <th style="padding:5px">Monday</th>
            <th style="padding:5px">Tuesday</th>
            <th style="padding:5px">Wednesday</th>
        </tr>
    </thead>
    <tbody>
        <tr style="background-color:#b9bdc4">
            <td style="padding:5px">PIAIC General</td>
            <th style="padding:5px">9 PM - 11 PM</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
        </tr>
        <tr style="background-color:#e8f0fe">
            <td style="padding:5px">Artificial Intelligence</td>
            <th style="padding:5px">-</th>
            <th style="padding:5px">4 PM - 6 PM & 9 PM - 11 PM</th>
            <th style="padding:5px">9 PM - 11 PM</th>
            <th style="padding:5px">9 PM - 11 PM</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
        </tr>
        <tr style="background-color:#b9bdc4">
            <td style="padding:5px">Internet of things</td>
            <th style="padding:5px">-</th>
            <th style="padding:5px">2 PM - 4 PM</th>
            <th style="padding:5px">12 PM - 2 PM</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
        </tr>
        <tr style="background-color:#e8f0fe">
            <td style="padding:5px">Cloud Native</td>
            <th style="padding:5px">-</th>
            <th style="padding:5px">4 PM - 6 PM</th>
            <th style="padding:5px">12 PM - 2 PM</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">9 PM - 11 PM</th>
        </tr>
        <tr style="background-color:#b9bdc4">
            <td style="padding:5px">Blockchain</td>
            <th style="padding:5px">-</th>
            <th style="padding:5px">2 PM - 4 PM</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">-</th>
            <th style="padding:5px">9 PM - 11 PM</th>
            <th style="padding:5px">-</th>
        </tr>
    </tbody>
</table><br>

You can also check your timetable from:<br>
https://docs.google.com/document/d/1iotgsbpgxEzrwS1tqmJ2SyF5knHoaZj5ofmlTyS9f1E/edit?usp=sharing
<br> -->
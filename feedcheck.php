<?php
    $q = "SELECT * FROM `feedback` WHERE `id` = '$id' AND `response` IS NOT NULL";
    $run = mysqli_query($con,$q);
    if(mysqli_num_rows($run)!=0)
    {
        $row = $run->fetch_assoc();
        $_SESSION['feed'] = $row['response'];
    }
?>
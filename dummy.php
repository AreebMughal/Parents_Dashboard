<?php
	
	// include 'connection.php';
	// $q = "INSERT INTO `feedback` (`id`, `feedbk`, `type`, `response`) VALUES ('18140132', 'hagf', 'tahsdfg', 'hjdsafghjdg'), ('181400149', 'ajh', 'fiuas', 'fuhcaiuuuuu')";	
	// $run = mysqli_query($con,$q);
	
	$subFeed = "Hisa dsad asnfmsadi vansmduisajvkn adsui gs";
	if(strlen($subFeed)>25){
        $subFeed = substr($subFeed, 0, 25);
        $subFeed .= "\t...";
    }
    echo $subFeed;

?>
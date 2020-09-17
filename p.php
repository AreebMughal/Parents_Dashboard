<?php
session_start();
// $arr = array('one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five','one','two','three','four','five');
// $html = "<div style='background:red;color:black;'>";
// foreach($arr as $value){
//     $html .= $value.'<br />';
// }
$html = $_SESSION['html'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>



	<div id="divToPrint" style="display:none;">
	  <div style="">
	    <?php echo $html; ?>      
	  </div>
	</div>
	<script type="text/javascript">   
	PrintDiv(); 
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
 </script>

</body>
</html>
<?php 
	// unset($_SESSION['html']);
?>
<!-- 
<?php echo "<script>window.location = './index.php';</script>"; ?> -->
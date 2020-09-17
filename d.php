<?php
session_start();
// $html = $_GET['id'];
include('./fpdf181/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 11);
$html = $_SESSION['html'];
$var = "";
$id = $_SESSION['email'];
include('connection.php');
$result = "";
$q = "SELECT DISTINCT `class` FROM `subject` WHERE `id` = '$id' ";
$run = mysqli_query($con,$q);
if(mysqli_num_rows($run)!=0){
	while ($row = $run->fetch_assoc()){
    	$class = $row['class'];
    	$q = "SELECT * FROM `subject` WHERE `id` = '$id' AND `class` = '$class' ";
    	$run1 = mysqli_query($con,$q);
		$pdf->Cell(40, 10,"Subjects" , 1);
		$pdf->Cell(40, 10,"Obtained Marks" , 1);
		$pdf->Cell(40, 10,"Total Marks" , 1, );
		$pdf->Cell(40, 10,"Grade ", 1, 1);
		while ($row1 = $run1->fetch_assoc()){
			$a1 = $row1['sub'];
			$a2 =	$row1['obt'];
			$a3 =	$row1['total'];
			$a4 =	$row1['grade'];
			$pdf->Cell(40, 10,$a1 , 1);
			$pdf->Cell(40, 10,$a2, 1);
			$pdf->Cell(40, 10,$a3, 1, );
			$pdf->Cell(40, 10,$a4, 1, 1);
		}
		$pdf->Cell(1, 10," ", 0,1);
	}
}
// echo $pdf->Output();
 $filename="test.pdf";
// //Output the document
$dir = "C:/Downloads/"; // full path like C:/xampp/htdocs/file/file/
$pdf->Output('doc.pdf','F');
// echo $pdf->Output();
?>
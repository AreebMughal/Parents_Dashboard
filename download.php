<?php
require('connection.php');
 
 
$result = mysqli_query($con, "SELECT * FROM `login` WHERE `id`= '181400149'");
 
$header = mysqli_query($con, "SELECT * FROM `login` WHERE `id`= '161718'");
    
    // $header = "ASRY School Managenment System";
    require ('fpdf181/fpdf.php');
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);
    $pdf->cell(35, 12, '<tr id="tt">' .
                                            '<td> 
                                                Feedback From ID: <span style="color:skyblue;">' . $row["id"] . "</span><br>". $subFeed . 
                                            '</td>' , 1);
 
// foreach ($header as $heading){
//         foreach ($heading as $column_heading) {
//             $pdf->cell(35, 12, $column_heading, 1);
//         }
//     }
 
//     foreach ($result as $row){
//         $pdf->Ln();
//         foreach ($row as $column){
//             $pdf->cell(35,12,$column,1);
//         }
//     }
 
    $pdf->output();
?>
<?php 
session_start();
require("connection.php");
include('pdf_mc_table.php');
$vids=$_GET['vid'];

  $result = mysqli_query($connection,"SELECT add_physician.p_name as ff ,tbl_response.* FROM `tbl_response`,
  `add_physician` where (tbl_response.p_id = add_physician.login_id) and(tbl_response.p_id=$vids)");
  $pdf = new PDF_MC_TABLE();
  $pdf->AddPage();

  $pdf->SetFont('Arial', 'B', 15);
  $pdf->Cell(176, 5, 'Appointment Details', 0, 0, 'C');
  $pdf->Ln();
  $pdf->Ln();
  $pdf->Ln();

 $pdf->SetFont('Arial','',10);
  
//   $pdf->SetWidths(Array(11,20,25,30,20,20,20,30));

//   $pdf->SetLineHeight(5);

//   $pdf->SetFont('Arial','B',10);
 
$row=mysqli_fetch_array($result);
  $pdf->Cell(0,12,"Date :  ".$row['date'],0,1);
  $pdf->Cell(0,12,"Physician Name :  ".$row['ff'],0,1);
  $pdf->Cell(0,12,"Response :  ".$row['response'],0,1);
  
  

  $pdf->Output();

?>
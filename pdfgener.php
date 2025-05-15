<?php
require('fpdf-1-6-es/fpdf.php');
session_start();
$scode = $_SESSION['subcode'];
$con = mysqli_connect('localhost', 'root', '','questionator');
$result = mysqli_query($con, "SELECT * FROM generateqp");
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','B',16);
$pdf->Cell(200,10,'CHRIST JUNIOR COLLEGE',0,1,'C');
if($scode==41)
	$subject="COMPUTER SCIENCE (41)";
$pdf->SetFont('Times','B',14);
$pdf->Cell(200,10,$subject,0,1,'C');
$pdf->SetFont('Times');
foreach($result as $row)
{
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(5,12,$column,0,0,'L');
}
$del = mysqli_query($con, "DELETE FROM generateqp");
$alt = mysqli_query($con, "ALTER TABLE generateqp AUTO_INCREMENT=1");
$pdf->Output();
?>

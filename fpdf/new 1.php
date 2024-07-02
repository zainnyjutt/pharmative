<?php
require('fpdf.php');

$pdf = new FPDF('P','mm',array(60,100));
$pdf->AddPage();



$pdf->SetFont('Arial','B',7);
$pdf->Cell(10,5,'Name',1,0,'C');
$pdf->Cell(10,5,'Unit',1,0,'C');
$pdf->Cell(10,5,'Qty',1,0,'C');
$pdf->Cell(10,5,'Price',1,0,'C');
$pdf->Cell(10,5,'Disc%',1,1,'C');
$pdf->Cell(10,5,'',0,1);
$pdf->Cell(10,5,'',0,1);
$pdf->Ln(0);
$pdf->Cell(0,0,'',1,1);

$pdf->Cell(10,5,'Total Items:',0,1);
$pdf->Cell(20,5,'',0,0);

$pdf->Cell(10,5,'Total Disc%:',0,1);
$pdf->Cell(23.5,5,'',0,0);

$pdf->Cell(10,5,'Net Total:',0,1);


$pdf->Cell(10,5,'Note:',0,1);
$pdf->Cell(10,5,'hkjhkjhjkjikjkjbakjbkjb',0,1);




$pdf->Output();


?>
<?php
require('fpdf.php');

$mname=$_POST['mname'];
$unit=$_POST['unit'];
$stock=$_POST['stock'];
$price=$_POST['price'];
$t=0;
//$t=$price*$stock;
$d=date("Y-m-d h:i:sa");
$pdf = new FPDF('P','mm',array(60,100));
$pdf->AddPage();



$pdf->SetFont('Arial','B',7);

$pdf->SetMargins(0,0,0,0);
//$pdf->Image('c.png',0,0);
$pdf->Cell(8,5,'Slip:',0,0,'C');
$pdf->Cell(7,5,'',0,0);
$pdf->Cell(5,5,'',0,0);

$pdf->Cell(10,5,$d,0,1);
$pdf->Cell(11.5,5,'Name',1,0,'C');

$pdf->Cell(11.5,5,'Unit',1,0,'C');

$pdf->Cell(11.5,5,'Qty',1,0,'C');

$pdf->Cell(11.5,5,'Price',1,0,'C');

$pdf->Cell(13.8,5,'Total Price',1,1,'C');
$pdf->Cell(11.5,5,$mname,0,0,'C');
$pdf->Cell(11.5,5,$unit,0,0,'C');
$pdf->Cell(11.5,5,$stock,0,0,'C');
$pdf->Cell(11.5,5,$price,0,0,'C');
$pdf->Cell(13.8,5,$t,0,0,'C');

$pdf->SetMargins(0,0,0,0);
$pdf->Cell(10,5,'',0,1);
$pdf->Cell(10,5,'',0,1);
$pdf->Ln(0);
$pdf->Cell(0,0,'',1,1);

$pdf->Cell(10,5,'Total Items:',0,1);
$pdf->Cell(20,5,'',0,0);

$pdf->Cell(10,5,'Total Amount:',0,1);
$pdf->Cell(23.5,5,'',0,0);


$pdf->Cell(10,5,'Total Disc%:',0,1);
$pdf->Cell(23.5,5,'',0,0);

$pdf->Cell(10,5,'Net Total:',0,1);


$pdf->Cell(10,5,'Note:',0,1);
$pdf->Cell(10,5,'hkjhkjhjkjikjkjbakjbkjb',0,1);




$pdf->Output();


?>
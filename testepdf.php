<?php
require('fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Image('imgs/Vamp_beta.jpg',0,0,200,300);
$pdf->Text(22,46.5, "teste1");
$pdf->Text(27.5,53, "teste2");
$pdf->Text(27,59, "teste3");
$pdf->Text(102,47, "teste4");
$pdf->Text(115,53, "teste5");
$pdf->Text(90,59, "teste6");
$pdf->Text(161,47, "teste7");
$pdf->Text(159,53, "teste8");
$pdf->Text(161,59, "teste9");

$pdf->Text(10,183, "teste10");
$pdf->Text(10,188, "teste11");
$pdf->Text(10,193.5, "teste12");
$pdf->Text(10,198.5, "teste13");
$pdf->Text(10,203.5, "teste14");
$pdf->Text(10,208.5, "teste15");
$pdf->Text(10,214, "teste16");

$pdf->Text(72,183, "teste17");
$pdf->Text(72,188, "teste18");
$pdf->Text(72,193.5, "teste19");
$pdf->Text(72,198.5, "teste20");
$pdf->Text(72,203.5, "teste21");
$pdf->Text(72,208.5, "teste22");
$pdf->Text(72,214, "teste23");

$pdf->Text(75,233, "teste24");

$pdf->Output();
?>
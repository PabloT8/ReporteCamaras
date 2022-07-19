<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF
{

function Header(){

$this->Image('images/logo.png',100,4,20);
$this->SetFont('Arial', 'B' , 15);
$this->Cell(30);
$this->Cell(150,10,'Reporte de Camaras General',0,0,'R');
$this->Ln(20);

}

 
 function Footer()

 {

$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');






 }





}






?>
<?php

session_start();

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {


    // Logo
        $this->Image('../img/logo.png',200,4,150);
    // Arial bold 15
        $this->SetFont('Arial','B',16);
    // Movernos a la derecha
        $this->Cell(95);
    // Título
        $this->Cell(350,50,'Reporte por Estado de Camaras',0,0,'C');
    // Salto de línea
        $this->Ln(35);


        $this->Cell(20,10,'Sitio',1,0,'C',0);
        $this->Cell(35,10,'Dispositivo',1,0,'C',0);
        $this->Cell(137,10,utf8_decode('Dirección'),1,0,'C',0);
        $this->Cell(30,10,'Estado',1,0,'C',0);
        $this->Cell(55,10,'Ciudad',1,0,'C',0);
        $this->Cell(58,10,'Mal Enfoque',1,0,'C',0);
        $this->Cell(240,10,'Observacion',1,1,'C',0);
    }

// Pie de página
    function Footer()
    {
    // Posición: a 1,5 cm del final
        $this->SetY(-15);
    // Arial italic 8
        $this->SetFont('Arial','',10);
    // Número de página
        $this->Cell(0,10,'Sistema Nacional de Emergencias 911',0,0,'C');
        $this->Cell(0,10,$this->PageNo().'/{nb}',0,0,'C');
    }

}


include("../controllers/conexion.php");
$conexion=conexion();
$ACT= $_GET['reporteid'];

$sql="SELECT * FROM estado,dispositivo,ciudad,reporte where ciudadid=ciudadfk and dispositivoid=dispositivofk and reporteid=reportefk and reporteid='$ACT' and ciudadnombre='Santa Rosa de Copan' and estadoenfoque='Si' order by dispositivositio";
$resultado=$conexion->query($sql);

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm',array(600,600));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(20,10,$row['dispositivositio'],1,0,'C',0);
    $pdf->Cell(35,10,$row['dispositivoid'],1,0,'C',0);
    $pdf->Cell(137,10,utf8_decode($row['dispositivodireccion']),1,0,'C',0);
    $pdf->Cell(30,10,$row['dispositivoping'],1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode($row['ciudadnombre']),1,0,'C',0);
    $pdf->Cell(58,10,utf8_decode($row['estadoenfoque']),1,0,'C',0);
    $pdf->Cell(240,10,utf8_decode($row['estadoobservacion']),1,1,'C',0);
}

$pdf->Output();


?>  
<?php
session_start();

require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        $conexion=conexion();
        
    // Logo
        $this->Image('../img/logo.png',30,4,150);
        $this->Ln(30);
    // Arial bold 15
        $this->SetFont('Arial','B',18);
    // Movernos a la derecha
        $this->Cell(95);
    // Título
        $this->Cell(6,-3,utf8_decode('Resumen de Dispositivos'),0,0,'C');
        $this->SetFont('Arial','',25);
    // Salto de línea
        $this->Ln(5);


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
        $this->Cell(-20,10,$this->PageNo().'/{nb}',0,0,'C');
    }

}

include("../controllers/conexion.php");
$conexion=conexion();

//---------------------------------------------Consultas----------------------------------------------------
$sql1="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadid=ciudadfk";
$result1=mysqli_query($conexion,$sql1);

$sql2="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadid=ciudadfk";
$result2=mysqli_query($conexion,$sql2);

$sql3="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
$result3=mysqli_query($conexion,$sql3);

$sql4="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
$result4=mysqli_query($conexion,$sql4);

$sql5="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
$result5=mysqli_query($conexion,$sql5);

$sql6="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
$result6=mysqli_query($conexion,$sql6);

$sql7="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
$result7=mysqli_query($conexion,$sql7);

$sql8="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
$result8=mysqli_query($conexion,$sql8);

$sql9="SELECT dispositivoping,count(dispositivoid) as EnLinea FROM ciudad,dispositivo where dispositivoping='EnLinea' and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$result9=mysqli_query($conexion,$sql9);

$sql10="SELECT dispositivoping,count(dispositivoid) as FueraLinea FROM ciudad,dispositivo where dispositivoping='FueraLinea' and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$result10=mysqli_query($conexion,$sql10);

// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

//--------------------------------------------Resultados---------------------------------------------
$pdf->SetFont('Arial','',14);

	 $pdf->SetFont('Arial','B',18);
	$pdf->Cell(194,20,utf8_decode('Dispositivos Totales'),0,1,'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(130,-10,'Estado',1,0,'C',0);
    $pdf->Cell(60,-10,'Total',1,1,'C',0);

	$pdf->SetFont('Arial','B',12);
    while ($row = $result1->fetch_assoc()) {
    $pdf->Cell(130,30,"Dispositivos Totales En Linea",1,0,'C',0);
    $pdf->Cell(60,30,$row['EnLinea'],1,1,'C',0);
    }
    
    while ($row = $result2->fetch_assoc()) {
    $pdf->Cell(130,-10,"Dispositivos Totales Fuera de Linea",1,0,'C',0);
    $pdf->Cell(60,-10,$row['FueraLinea'],1,1,'C',0);
    }
    //---------------------------------------------------------------------
    $pdf->SetFont('Arial','B',18);
	$pdf->Cell(195,60,utf8_decode('Santa Rosa de Copan'),0,1,'C');
    $pdf->Ln(-12);
       $pdf->SetFont('Arial','B',16);
    $pdf->Cell(130,-10,'Estado',1,0,'C',0);
    $pdf->Cell(60,-10,'Total',1,1,'C',0);

	$pdf->SetFont('Arial','B',12);
    while ($row = $result3->fetch_assoc()) {
    $pdf->Cell(130,30,"Dispositivos En Linea",1,0,'C',0);
    $pdf->Cell(60,30,$row['EnLinea'],1,1,'C',0);
    }
    
    while ($row = $result4->fetch_assoc()) {
    $pdf->Cell(130,-10,"Dispositivos Fuera de Linea",1,0,'C',0);
    $pdf->Cell(60,-10,$row['FueraLinea'],1,0,'C',0);
    }
    //---------------------------------------------------------------------
    $pdf->SetFont('Arial','B',18);
	$pdf->Cell(-190,45,utf8_decode('Copan Ruinas'),0,1,'C');
    $pdf->Ln(-5);
       $pdf->SetFont('Arial','B',16);
    $pdf->Cell(130,-10,'Estado',1,0,'C',0);
    $pdf->Cell(60,-10,'Total',1,1,'C',0);

	$pdf->SetFont('Arial','B',12);
    while ($row = $result5->fetch_assoc()) {
    $pdf->Cell(130,30,"Dispositivos En Linea",1,0,'C',0);
    $pdf->Cell(60,30,$row['EnLinea'],1,1,'C',0);
    }
    
    while ($row = $result6->fetch_assoc()) {
    $pdf->Cell(130,-10,"Dispositivos Fuera de Linea",1,0,'C',0);
    $pdf->Cell(60,-10,$row['FueraLinea'],1,0,'C',0);
    }
    //---------------------------------------------------------------------
    $pdf->SetFont('Arial','B',18);
	$pdf->Cell(-190,45,utf8_decode('La Entrada Copan'),0,1,'C');
    $pdf->Ln(-5);
       $pdf->SetFont('Arial','B',16);
    $pdf->Cell(130,-10,'Estado',1,0,'C',0);
    $pdf->Cell(60,-10,'Total',1,1,'C',0);

	$pdf->SetFont('Arial','B',12);
    while ($row = $result7->fetch_assoc()) {
    $pdf->Cell(130,30,"Dispositivos En Linea",1,0,'C',0);
    $pdf->Cell(60,30,$row['EnLinea'],1,1,'C',0);
    }
    
    while ($row = $result8->fetch_assoc()) {
    $pdf->Cell(130,-10,"Dispositivos Fuera de Linea",1,0,'C',0);
    $pdf->Cell(60,-10,$row['FueraLinea'],1,1,'C',0);
    }
   //---------------------------------------------------------------------
    $pdf->SetFont('Arial','B',18);
	$pdf->Cell(192,20,utf8_decode('Gracias Lempira'),0,1,'C');
    $pdf->Ln(8);
       $pdf->SetFont('Arial','B',16);
	 $pdf->Cell(130,-10,'Estado',1,0,'C',0);
    $pdf->Cell(60,-10,'Total',1,1,'C',0);

	$pdf->SetFont('Arial','B',12);
    while ($row = $result9->fetch_assoc()) {
    $pdf->Cell(130,30,"Dispositivos En Linea",1,0,'C',0);
    $pdf->Cell(60,30,$row['EnLinea'],1,1,'C',0);
    }
    
    while ($row = $result10->fetch_assoc()) {
    $pdf->Cell(130,-10,"Dispositivos Fuera de Linea",1,0,'C',0);
    $pdf->Cell(60,-10,$row['FueraLinea'],1,1,'C',0);
    }
//----------------------------------//----------------------------------------------------//-------------------------------------------------------------//

	

$pdf->Output();


?>  
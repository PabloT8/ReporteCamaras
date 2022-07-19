<?php
session_start();
 
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $username = $_SESSION["username"];
 
    // Logo

    $this->Image('../img/logo.png',155,8,400);
    $this->Ln(30);
    // Arial bold 15
    $this->SetFont('Arial','B',30);
    // Movernos a la derecha
    $this->Cell(95);
    // Título
    $this->Cell(500,95,utf8_decode('Reporte de Cámaras'),0,0,'C');
    $this->SetFont('Arial','',25);
    $this->Cell(1,95,"Tecnico: ".$username,0,0,'C');
    // Salto de línea
    $this->Ln(50);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->Image('../img/fondo.jpg',0,680,700);
    $this->SetFont('Arial','',14);
    // Número de página
    $this->Cell(0,10,'Sistema Nacional de Emergencias 911',0,0,'C');
    $this->Cell(-20,10,$this->PageNo().'/{nb}',0,0,'C');
}

}
 
include("../controllers/conexion.php");
$conexion=conexion();

$id = $_SESSION["id_reporte"];

//---------------------------------------------Consultas----------------------------------------------------
$sql="SELECT count(dispositivotipo) as Total from dispositivo where dispositivotipo='FIJA' or dispositivotipo='PTZ'";
$resultado=$conexion->query($sql);

$sql1="SELECT count(dispositivotipo) as Total from dispositivo,ciudad where (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
$resultado1=$conexion->query($sql1);

$sql2="SELECT count(dispositivotipo) as Total from dispositivo,ciudad where (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$resultado2=$conexion->query($sql2);

$sql3="SELECT count(dispositivotipo) as Total from dispositivo,ciudad where (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
$resultado3=$conexion->query($sql3);

$sql4="SELECT count(dispositivotipo) as Total from dispositivo,ciudad where (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
$resultado4=$conexion->query($sql4);

$sql5="SELECT count(dispositivotipo) as Total from dispositivo where dispositivotipo='LPR'";
$resultado5=$conexion->query($sql5);

$sql6="SELECT count(dispositivotipo) as Total from dispositivo";
$resultado6=$conexion->query($sql6);

$sql9="SELECT * FROM dispositivo,ciudad,estado,reporte where ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk and dispositivoid=dispositivofk and reporteid=reportefk and reporteid='$id' order by dispositivositio";
$resultado9=$conexion->query($sql9);

$sql10="SELECT * FROM reporte where reporteid='$id'";
$resultado10=$conexion->query($sql10);

//--------------------------------------------------------------------------------
$sql7="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='EnLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
$resultado7=$conexion->query($sql7);
 
$sql8="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='FueraLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Santa Rosa de Copan' and ciudadid=ciudadfk";
$resultado8=$conexion->query($sql8);

$sql11="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='EnLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$resultado11=$conexion->query($sql11);
 
$sql12="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='FueraLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Gracias' and ciudadid=ciudadfk";
$resultado12=$conexion->query($sql12);

$sql13="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='EnLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
$resultado13=$conexion->query($sql13);
 
$sql14="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='FueraLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='Copan Ruinas' and ciudadid=ciudadfk";
$resultado14=$conexion->query($sql14);

$sql15="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='EnLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
$resultado15=$conexion->query($sql15);
 
$sql16="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='FueraLinea' and (dispositivotipo='FIJA' or dispositivotipo='PTZ') and ciudadnombre='La Entrada' and ciudadid=ciudadfk";
$resultado16=$conexion->query($sql16);

$sql17="SELECT * FROM dispositivo,ciudad,estado,reporte where ciudadnombre='Gracias' AND ciudadid=ciudadfk and dispositivoid=dispositivofk and reporteid=reportefk and reporteid='$id' order by dispositivositio";
$resultado17=$conexion->query($sql17);
 
 $sql18="SELECT * FROM dispositivo,ciudad,estado,reporte where ciudadnombre='Copan Ruinas' AND ciudadid=ciudadfk and dispositivoid=dispositivofk and reporteid=reportefk and reporteid='$id' order by dispositivositio";
$resultado18=$conexion->query($sql18);

$sql19="SELECT * FROM dispositivo,ciudad,estado,reporte where ciudadnombre='La Entrada' AND ciudadid=ciudadfk and dispositivoid=dispositivofk and reporteid=reportefk and reporteid='$id' order by dispositivositio";
$resultado19=$conexion->query($sql19);

 $sql20="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='EnLinea' and dispositivotipo='LPR' and ciudadid=ciudadfk";
$resultado20=$conexion->query($sql20);
 
$sql21="SELECT count(dispositivoping) as Total from dispositivo,ciudad where dispositivoping='FueraLinea' and dispositivotipo='LPR' and ciudadid=ciudadfk";
$resultado21=$conexion->query($sql21);
 //--------------------------------------------------------------------------------
 
// Creación del objeto de la clase heredada
$pdf = new PDF('P','mm',array(700,700));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

//--------------------------------------------Resultados---------------------------------------------
    $pdf->SetFont('Arial','',14);
    while ($row = $resultado10->fetch_assoc()) {
    $pdf->Cell(241,50,"Adjunto reporte de camaras del ".$row['reportefecha'].", ".$row['reportegrupo'].", ".$row['reporteturno'].". Actualmente se cuenta ",0,0,'C',0);
    }

    while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(-30,50,"con ".$row['Total']." ",0,0,'C',0);
    }

    while ($row = $resultado1->fetch_assoc()) {
    $pdf->Cell(138,50,utf8_decode("cámaras, ".$row['Total']." en Santa Rosa de Copán, "),0,0,'C',0);
    }
    
    while ($row = $resultado7->fetch_assoc()) {
    $pdf->Cell(43,50,utf8_decode("de las cuales ".$row['Total']." se encuentran en linea "),0,0,'C',0);
    }
    
    while ($row = $resultado8->fetch_assoc()) {
    $pdf->Cell(122,50,utf8_decode("y ".$row['Total']." se encuentran fuera de linea, "),0,0,'C',0);
    }

    while ($row = $resultado2->fetch_assoc()) {
    $pdf->Cell(1,50," ".$row['Total']." en Gracias Lempira,",0,0,'C',0);
    }
    
     while ($row = $resultado11->fetch_assoc()) {
    $pdf->Cell(145,50,utf8_decode("de las cuales ".$row['Total']." se encuentran en linea y"),0,1,'C',0);
    }
    
    while ($row = $resultado12->fetch_assoc()) {
    $pdf->Cell(118,-30,utf8_decode("".$row['Total']." se encuentran fuera de linea, "),0,0,'C',0);
    }

    while ($row = $resultado3->fetch_assoc()) {
    $pdf->Cell(1,-30,utf8_decode(" ".$row['Total']." en Copán Ruinas y"),0,0,'C',0);
    }
    
     while ($row = $resultado13->fetch_assoc()) {
    $pdf->Cell(140,-30,utf8_decode("de las cuales ".$row['Total']." se encuentran en linea y"),0,0,'C',0);
    }
    
    while ($row = $resultado14->fetch_assoc()) {
    $pdf->Cell(24,-30,utf8_decode("".$row['Total']." se encuentran fuera de linea, "),0,0,'C',0);
    }

    while ($row = $resultado4->fetch_assoc()) {
    $pdf->Cell(105,-30,utf8_decode(" ".$row['Total']."  en La Entrada Copán, "),0,0,'C',0);
    }
    
     while ($row = $resultado15->fetch_assoc()) {
    $pdf->Cell(48,-30,utf8_decode("de las cuales ".$row['Total']." se encuentran en linea y"),0,0,'C',0);
    }
    
    while ($row = $resultado16->fetch_assoc()) {
    $pdf->Cell(118,-30,utf8_decode("".$row['Total']." se encuentran fuera de linea, "),0,0,'C',0);
    }

    while ($row = $resultado5->fetch_assoc()) {
    $pdf->Cell(25,-30,utf8_decode(" además de ".$row['Total']." LPR, de las cuales "),0,0,'C',0);
    }
    
    while ($row = $resultado20->fetch_assoc()) {
    $pdf->Cell(85,-30,utf8_decode("".$row['Total']." se encuentran"),0,1,'C',0);
    }
    
    while ($row = $resultado21->fetch_assoc()) {
    $pdf->Cell(138,50,utf8_decode("en linea y ".$row['Total']." se encuentran fuera de linea"),0,0,'C',0);
    }

    while ($row = $resultado6->fetch_assoc()) {
    $pdf->Cell(60,50,utf8_decode("lo que suma un total parcial de ".$row['Total']." dispositivos."),0,0,'C',0);
    }
	
	$pdf->SetFont('Arial','B',20);
	$pdf->Cell(280,65,utf8_decode('Santa Rosa de Copan'),0,1,'C');
	
    $cont=0;
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(10,-10,'#',1,0,'C',0);
    $pdf->Cell(18,-10,'Sitio',1,0,'C',0);
    $pdf->Cell(35,-10,'Dispositivo',1,0,'C',0);
    $pdf->Cell(137,-10,utf8_decode('Dirección'),1,0,'C',0);
    $pdf->Cell(28,-10,'Estado',1,0,'C',0);
    $pdf->Cell(52,-10,'Tipo',1,0,'C',0);
    $pdf->Cell(20,-10,'REC',1,0,'C',0);
    $pdf->Cell(20,-10,'P/C',1,0,'C',0);
    $pdf->Cell(20,-10,'Scratch',1,0,'C',0);
    $pdf->Cell(20,-10,'Sin/Mov',1,0,'C',0);
    $pdf->Cell(20,-10,'Mal/Enf',1,0,'C',0);
    $pdf->Cell(20,-10,'Vis/Obs',1,0,'C',0);
    $pdf->Cell(280,-10,'Observacion',1,1,'C',0);
    $pdf->Ln(10);

    $pdf->SetFont('Arial','',14);
    while ($row = $resultado9->fetch_assoc()) {
    $pdf->Cell(10,10,++$cont,1,0,'C',0);
    $pdf->Cell(18,10,$row['dispositivositio'],1,0,'C',0);
    $pdf->Cell(35,10,$row['dispositivoid'],1,0,'C',0);
    $pdf->Cell(137,10,utf8_decode($row['dispositivodireccion']),1,0,'C',0);
    $pdf->Cell(28,10,$row['dispositivoping'],1,0,'C',0);
    $pdf->Cell(52,10,utf8_decode($row['dispositivotipo']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadorec'],1,0,'C',0);
    $pdf->Cell(20,10,$row['estadopc'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoscratch']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadomovilidad'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoenfoque']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadovision'],1,0,'C',0);
    $pdf->Cell(280,10,utf8_decode($row['estadoobservacion']),1,1,'C',0);
    
    }
    
    $pdf->SetFont('Arial','B',20);
	$pdf->Cell(670,65,utf8_decode('Gracias'),0,1,'C');
	
    $cont=0;
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(10,-10,'#',1,0,'C',0);
    $pdf->Cell(18,-10,'Sitio',1,0,'C',0);
    $pdf->Cell(35,-10,'Dispositivo',1,0,'C',0);
    $pdf->Cell(137,-10,utf8_decode('Dirección'),1,0,'C',0);
    $pdf->Cell(28,-10,'Estado',1,0,'C',0);
    $pdf->Cell(52,-10,'Tipo',1,0,'C',0);
    $pdf->Cell(20,-10,'REC',1,0,'C',0);
    $pdf->Cell(20,-10,'P/C',1,0,'C',0);
    $pdf->Cell(20,-10,'Scratch',1,0,'C',0);
    $pdf->Cell(20,-10,'Sin/Mov',1,0,'C',0);
    $pdf->Cell(20,-10,'Mal/Enf',1,0,'C',0);
    $pdf->Cell(20,-10,'Vis/Obs',1,0,'C',0);
    $pdf->Cell(280,-10,'Observacion',1,1,'C',0);
    $pdf->Ln(10);

    $pdf->SetFont('Arial','',14);
    while ($row = $resultado17->fetch_assoc()) {
    $pdf->Cell(10,10,++$cont,1,0,'C',0);
    $pdf->Cell(18,10,$row['dispositivositio'],1,0,'C',0);
    $pdf->Cell(35,10,$row['dispositivoid'],1,0,'C',0);
    $pdf->Cell(137,10,utf8_decode($row['dispositivodireccion']),1,0,'C',0);
    $pdf->Cell(28,10,$row['dispositivoping'],1,0,'C',0);
    $pdf->Cell(52,10,utf8_decode($row['dispositivotipo']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadorec'],1,0,'C',0);
    $pdf->Cell(20,10,$row['estadopc'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoscratch']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadomovilidad'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoenfoque']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadovision'],1,0,'C',0);
    $pdf->Cell(280,10,utf8_decode($row['estadoobservacion']),1,1,'C',0);

}

    $pdf->SetFont('Arial','B',20);
	$pdf->Cell(670,65,utf8_decode('Copan Ruinas'),0,1,'C');
	
    $cont=0;
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(10,-10,'#',1,0,'C',0);
    $pdf->Cell(18,-10,'Sitio',1,0,'C',0);
    $pdf->Cell(35,-10,'Dispositivo',1,0,'C',0);
    $pdf->Cell(137,-10,utf8_decode('Dirección'),1,0,'C',0);
    $pdf->Cell(28,-10,'Estado',1,0,'C',0);
    $pdf->Cell(52,-10,'Tipo',1,0,'C',0);
    $pdf->Cell(20,-10,'REC',1,0,'C',0);
    $pdf->Cell(20,-10,'P/C',1,0,'C',0);
    $pdf->Cell(20,-10,'Scratch',1,0,'C',0);
    $pdf->Cell(20,-10,'Sin/Mov',1,0,'C',0);
    $pdf->Cell(20,-10,'Mal/Enf',1,0,'C',0);
    $pdf->Cell(20,-10,'Vis/Obs',1,0,'C',0);
    $pdf->Cell(280,-10,'Observacion',1,1,'C',0);
    $pdf->Ln(10);

    $pdf->SetFont('Arial','',14);
    while ($row = $resultado18->fetch_assoc()) {
    $pdf->Cell(10,10,++$cont,1,0,'C',0);
    $pdf->Cell(18,10,$row['dispositivositio'],1,0,'C',0);
    $pdf->Cell(35,10,$row['dispositivoid'],1,0,'C',0);
    $pdf->Cell(137,10,utf8_decode($row['dispositivodireccion']),1,0,'C',0);
    $pdf->Cell(28,10,$row['dispositivoping'],1,0,'C',0);
    $pdf->Cell(52,10,utf8_decode($row['dispositivotipo']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadorec'],1,0,'C',0);
    $pdf->Cell(20,10,$row['estadopc'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoscratch']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadomovilidad'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoenfoque']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadovision'],1,0,'C',0);
    $pdf->Cell(280,10,utf8_decode($row['estadoobservacion']),1,1,'C',0);

}

   $pdf->SetFont('Arial','B',20);
	$pdf->Cell(670,65,utf8_decode('La Entrada'),0,1,'C');
	
    $cont=0;
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(10,-10,'#',1,0,'C',0);
    $pdf->Cell(18,-10,'Sitio',1,0,'C',0);
    $pdf->Cell(35,-10,'Dispositivo',1,0,'C',0);
    $pdf->Cell(137,-10,utf8_decode('Dirección'),1,0,'C',0);
    $pdf->Cell(28,-10,'Estado',1,0,'C',0);
    $pdf->Cell(52,-10,'Tipo',1,0,'C',0);
    $pdf->Cell(20,-10,'REC',1,0,'C',0);
    $pdf->Cell(20,-10,'P/C',1,0,'C',0);
    $pdf->Cell(20,-10,'Scratch',1,0,'C',0);
    $pdf->Cell(20,-10,'Sin/Mov',1,0,'C',0);
    $pdf->Cell(20,-10,'Mal/Enf',1,0,'C',0);
    $pdf->Cell(20,-10,'Vis/Obs',1,0,'C',0);
    $pdf->Cell(280,-10,'Observacion',1,1,'C',0);
    $pdf->Ln(10);

    $pdf->SetFont('Arial','',14);
    while ($row = $resultado19->fetch_assoc()) {
    $pdf->Cell(10,10,++$cont,1,0,'C',0);
    $pdf->Cell(18,10,$row['dispositivositio'],1,0,'C',0);
    $pdf->Cell(35,10,$row['dispositivoid'],1,0,'C',0);
    $pdf->Cell(137,10,utf8_decode($row['dispositivodireccion']),1,0,'C',0);
    $pdf->Cell(28,10,$row['dispositivoping'],1,0,'C',0);
    $pdf->Cell(52,10,utf8_decode($row['dispositivotipo']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadorec'],1,0,'C',0);
    $pdf->Cell(20,10,$row['estadopc'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoscratch']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadomovilidad'],1,0,'C',0);
    $pdf->Cell(20,10,utf8_decode($row['estadoenfoque']),1,0,'C',0);
    $pdf->Cell(20,10,$row['estadovision'],1,0,'C',0);
    $pdf->Cell(280,10,utf8_decode($row['estadoobservacion']),1,1,'C',0);

}

$pdf->Output();


?>  
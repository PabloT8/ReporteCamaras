<?php

 session_start();
  if (!isset($_SESSION["username"])) {
    header("location:../registro/login.php");
  }

  $usuario = $_SESSION["username"];
 



include 'plantilla.php';
require_once("../conexion.php");

date_default_timezone_set ( 'America/Tegucigalpa' ) ;
$hora=date("h:i:s");
$id = $_SESSION["id_incidente"];


global $db;


$q = "SELECT incidente.ID, incidente.HORA, incidente.AGENTE, incidente.SUPER_GENERAL,incidente.SUPER_AREA,incidente.ESTACION,incidente.ASIGNACION,incidente.GRUPO, incidente.TURNO,incidente.NO_TICKET,incidente.NO_CARPETA,incidente.TIPOLOGIA,incidente.SUB_TIPOLOGIA,incidente.FECHA_INCIDENTE,incidente.FECHA_INCIDENTE, incidente.FECHA_CREACION,incidente.REPRODUCCION,incidente.DESCRIPCION_INCIDENTE,incidente.OBSERVACION
  FROM incidente  WHERE  incidente.ID = ".$id." ";
 $stmt = $db->prepare($q);
 $stmt->execute(array(':ID'=> $id ));
 $data = $stmt->fetchAll();

 if (count($data)==0) {
    echo "no se encontro registro ".$id;
    return;
 }



$pdf = new PDF('L','mm',array(400,600));
//$pdf->AliasPages();
$pdf->AddPage();
$pdf->AliasNbPages();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial', 'B', 10 );



$pdf->Cell(60,6,'HORA DE CREACION',1,0,'C',0);
$pdf->Cell(60,6,'AGENTE',1,0,'C',0);
$pdf->Cell(60,6,'SUPERVISOR_GENERAL',1,0,'C',0);
$pdf->Cell(60,6,'SUPER_AREA',1,0,'C',0);
$pdf->Cell(60,6,'ESTACION',1,0,'C',0);
$pdf->Cell(60,6,'MEDIANTE',1,0,'C',0);
//$pdf->SetXY(380,70);
$pdf->Cell(60,6,'OBSERVACION',1,0,'C',0);

$pdf->SetXY(10,50);
$pdf->Cell(60,6,'ASIGNACION',1,0,'C',0);
$pdf->SetXY(70,50);
$pdf->Cell(60,6,'GRUPO',1,0,'C',0);
$pdf->SetXY(130,50);
$pdf->Cell(60,6,'TURNO',1,0,'C',0);
$pdf->SetXY(190,50);
$pdf->Cell(60,6,'NO_TICKET',1,0,'C',0);
$pdf->SetXY(250,50);
$pdf->Cell(60,6,'NO_CARPETA',1,0,'C',0);
$pdf->SetXY(10,70);
$pdf->Cell(60,6,'TIPOLOGIA',1,0,'C',0);
$pdf->SetXY(70,70);
$pdf->Cell(60,6,'SUB_TIPOLOGIA',1,0,'C',0);
$pdf->SetXY(130,70);
$pdf->Cell(60,6,'FECHA_INCIDENTE',1,0,'C',0);
$pdf->SetXY(190,70);
$pdf->Cell(60,6,'FECHA_CREACION',1,0,'C',0);


$pdf->SetFont('Arial', '', 8 );
$pdf->Ln();

$pdf->SetXY(10,37);
$pdf->Cell(60,6,$data[0]['HORA'],0,0,'C',1);
$pdf->SetXY(70,37);
$pdf->Cell(60,6,utf8_decode($data[0]['AGENTE']),0,0,'C',1);

$pdf->SetXY(130,37);
$pdf->Cell(60,6,utf8_decode($data[0]['SUPER_GENERAL']),0,0,'C',1);

$pdf->SetXY(190,37);
$pdf->Cell(60,6,utf8_decode($data[0]['SUPER_AREA']),0,0,'C',1);

$pdf->SetXY(250,37);
$pdf->Cell(60,6,utf8_decode($data[0]['ESTACION']),0,0,'C',1);

$pdf->SetXY(10,57);
$pdf->Cell(60,6,utf8_decode($data[0]['ASIGNACION']),0,0,'C',1);

$pdf->SetXY(310,37);
$pdf->Cell(60,6,utf8_decode($data[0]['REPRODUCCION']),0,0,'C',1);
$pdf->SetXY(370,37);
$pdf->MultiCell(60,6,utf8_decode($data[0]['OBSERVACION']),1,1,'C',1);

$pdf->SetXY(70,57);
$pdf->Cell(60,6,utf8_decode($data[0]['GRUPO']),0,0,'C',1);

$pdf->SetXY(130,57);
$pdf->Cell(60,6,utf8_decode($data[0]['TURNO']),0,0,'C',1);

$pdf->SetXY(190,57);
$pdf->Cell(60,6,utf8_decode($data[0]['NO_TICKET']),0,0,'C',1);

$pdf->SetXY(250,57);
$pdf->Cell(60,6,utf8_decode($data[0]['NO_CARPETA']),0,0,'C',1);

$pdf->SetXY(10,77);
$pdf->Cell(70,6,utf8_decode($data[0]['TIPOLOGIA']),0,0,'C',1);

$pdf->SetXY(70,77);
$pdf->Cell(60,6,utf8_decode($data[0]['SUB_TIPOLOGIA']),0,0,'C',1);

$pdf->SetXY(130,77);
$pdf->Cell(60,6,utf8_decode($data[0]['FECHA_INCIDENTE']),0,0,'C',1);

$pdf->SetXY(190,77);
$pdf->Cell(60,6,utf8_decode($data[0]['FECHA_CREACION']),0,0,'C',1);





$pdf->Ln();
$pdf->Ln();


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   $pdf->Cell(60,6,'HORA DE CREACION',1,0,'C',0);
 //$pdf->SetXY(10,90);
  $pdf->Cell(60,6,'SITO_DISPOSITIVO',1,0,'C',0);

  //$pdf->SetXY(70,90);
  $pdf->Cell(60,6,'HORA_INICIO',1,0,'C',0);

  //$pdf->SetXY(130,90);
  $pdf->Cell(60,6,'HORA_HECHO',1,0,'C',0);

  //$pdf->SetXY(190,90);
  $pdf->Cell(60,6,'HORA_FINAL',1,0,'C',0);

  //$pdf->SetXY(250,90);
  $pdf->Cell(60,6,'RESULTADO',1,1,'C',0);

   

 $q = "SELECT * FROM `camaras` WHERE AGENTE='$usuario' AND  ID_INCIDENTE = :ID";
 $stmt = $db->prepare($q);
 $stmt->execute(array(':ID'=> $data[0]['ID']));
 $camara = $stmt->fetchAll();

 for ($i=0; $i < count($camara); $i++) { 

    $pdf->Cell(60,6,utf8_decode($camara[$i]['HORA']),1,0,'C',1);

   $pdf->Cell(60,6,utf8_decode($camara[$i]['SITO_DISPOSITIVO']),1,0,'C',1);

  //$pdf->SetXY(70,97);
  $pdf->Cell(60,6,utf8_decode($camara[$i]['HORA_INICIO']),1,0,'C',1);

  //$pdf->SetXY(130,97);
  $pdf->Cell(60,6,utf8_decode($camara[$i]['HORA_HECHO']),1,0,'C',1);

  //$pdf->SetXY(190,97);
  $pdf->Cell(60,6,utf8_decode($camara[$i]['HORA_FINAL']),1,0,'C',1);


  //$pdf->SetXY(250,97);
  $pdf->Cell(60,6,utf8_decode($camara[$i]['RESULTADO']),1,1,'C',1);
 }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 $pdf->Ln();
 $pdf->Ln();

// $pdf->SetXY(10,125);
 $pdf->Cell(60,6,'HORA DE CREACION',1,0,'C',0);

 //$pdf->SetXY(70,125);
 $pdf->Cell(60,6,'UNIDAD',1,0,'C',0);

//$pdf->SetXY(130,125);
$pdf->Cell(60,6,'HORA_HECHO',1,0,'C',0);

//$pdf->SetXY(190,125);
$pdf->Cell(60,6,'HORA_FINAL',1,0,'C',0);

//$pdf->SetXY(10,355);

//$pdf->SetXY(370,125);
$pdf->Cell(60,6,'REVISADO',1,0,'C',0);

//$pdf->SetXY(310,125);
$pdf->Cell(60,6,'AUTORIZADO',1,1,'C',0);


//$pdf->Cell(120,6,'DESCRIPCION_INCIDENTE',1,1,'C',0);



 $q = "SELECT * FROM `unidad` WHERE AGENTE='$usuario' AND ID_INCIDENTE = :ID";
 $stmt = $db->prepare($q);
 $stmt->execute(array(':ID'=> $data[0]['ID']));
 $unidad = $stmt->fetchAll();


for ($i=0; $i < count($unidad); $i++) { 

//$pdf->SetXY(10,130);
$pdf->Cell(60,6,utf8_decode($unidad[$i]['HORA']),1,0,'C',1);

 //$pdf->SetXY(70,130);
 $pdf->Cell(60,6,utf8_decode($unidad[$i]['UNIDAD']),1,0,'C',1);

//$pdf->SetX(130,130);
$pdf->Cell(60,6,utf8_decode($unidad[$i]['HORA_HECHO']),1,0,'C',1);

//$pdf->SetX(190,130);
$pdf->Cell(60,6,utf8_decode($unidad[$i]['HORA_FINAL']),1,0,'C',1);

//$pdf->SetXY(250,130);
$pdf->Cell(60,6,utf8_decode($unidad[$i]['REVISADO']),1,0,'C',1);

//$pdf->SetXY(310,130);
$pdf->Cell(60,6,utf8_decode($unidad[$i]['AUTORIZADO']),1,1,'C',1);

//$pdf->SetXY(370,130);


//$pdf->SetXY(10,340);
//$pdf->MultiCell(120,8,utf8_decode($unidad[$i]['DESCRIPCION_INCIDENTE']),1,1,'C',1);
}
$pdf->Ln();
$pdf->Ln();

//$pdf->SetXY(10,250);
$pdf->Cell(120,6,'DESCRIPCION_INCIDENTE',1,1,'C',0);

$q = "SELECT incidente.ID, incidente.HORA, incidente.AGENTE, incidente.SUPER_GENERAL,incidente.SUPER_AREA,incidente.ESTACION,incidente.ASIGNACION,incidente.GRUPO, incidente.TURNO,incidente.NO_TICKET,incidente.NO_CARPETA,incidente.TIPOLOGIA,incidente.SUB_TIPOLOGIA,incidente.FECHA_INCIDENTE,incidente.FECHA_INCIDENTE, incidente.FECHA_CREACION,incidente.REPRODUCCION,incidente.DESCRIPCION_INCIDENTE,incidente.OBSERVACION
  FROM incidente  WHERE  incidente.ID = ".$id."  ";

 $stmt = $db->prepare($q);
 $stmt->execute(array(':ID'=> $data[0]['ID']));
 $unidad = $stmt->fetchAll();

for ($i=0; $i < count($unidad); $i++) { 
//$pdf->SetXY(10,255);
$pdf->MultiCell(120,8,utf8_decode($unidad[$i]['DESCRIPCION_INCIDENTE']),1,1,'C',1);

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 $q = "SELECT * FROM `imagenes` WHERE AGENTE='$usuario' AND ID_INCIDENTE = :ID";
 $stmt = $db->prepare($q);
 $stmt->execute(array(':ID'=> $data[0]['ID']));
 $imagenes = $stmt->fetchAll();

 $pdf->Ln();
 $pdf->Ln();

 //$pdf->SetXY(10,170);
 $pdf->Cell(70,6,'IMAGEN',1,1,'C',1);
 $pdf->Ln();

 for ($i=0; $i < count($imagenes); $i++) { 
  //$pdf->SetXY(10,180);
  $pdf->Cell(20,6,utf8_decode($imagenes[$i]['HORA']),1,0,'C',0);
  $pdf->Cell( 100, 60, $pdf->Image($imagenes[$i]['IMAGEN'], $pdf->GetX()+5, $pdf->GetY()+3, 85), 1, 0, 'C', false );
 }






$pdf->Output('');

?>








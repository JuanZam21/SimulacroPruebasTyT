<?php
	require '../require/plantilla_informe_aprendiz.php';
	require '../require/conexion.php';
	session_start();
	$query = "SELECT a.di_apre, r.total_respu,r.correctas,r.incorrectas,r.puntaje, r.fecha_prueba,r.total_puntaje,a.apellido_apre, a.nombre_apre FROM aprendiz AS a INNER JOIN resultado AS r ON a.di_apre=r.di_apre where a.di_apre='".$_SESSION['di_apre']."'";
	$resultado = $conexion->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	


	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(63,11,'DI',1,0,'C',1);
	$pdf->Cell(63,11,'NOMBRE',1,0,'C',1);
	$pdf->Cell(63,11,'NUMERO DE PREGUNTAS',1,1,'C',1);	
	$pdf->Cell(63,10,utf8_decode($row['di_apre']),1,0,'C');
	$pdf->Cell(63,10,utf8_decode($row['nombre_apre']." ".$row['apellido_apre']),1,0,'C');
	$pdf->Cell(63,10,$row['total_respu'],1,1,'C');
	$pdf->Ln();
    $pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(63,11,'RESPUESTAS CORRECTAS',1,0,'C',1);
	$pdf->Cell(63,11,'RESPUESTAS INCORRECTAS',1,0,'C',1);
	$pdf->Cell(63,11,'PUNTAJE',1,1,'C',1);
	
	$pdf->Cell(63,10,utf8_decode($row['correctas']),1,0,'C');
	$pdf->Cell(63,10,utf8_decode($row['incorrectas']),1,0,'C');
	$pdf->Cell(63,10,$row['puntaje']."/".$row['total_puntaje'],1,1,'C');
	
	$pdf->Ln();
	$pdf->Cell(103,11,'FECHA PRESENTACION DE PRUEBA',1,1,'C',1);
	$pdf->Cell(103,10,$row['fecha_prueba'],1,1,'C');

	}
    
		

	$pdf->Output();
?>
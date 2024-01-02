<?php 
      require "../require/conexion.php";
        session_start();
        if (isset($_SESSION["di_apre"])) {
        }else{

            echo "<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' type='text/css' href='../sweetalert2/dist/sweetalert2.css'>
</head>

<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'> </script>
<script src='../sweetalert2/dist/sweetalert2.js'></script>

</body>
</html>

	
<script>
  	swal({
		title:'Debes iniciar sesión', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='login_aprendiz.php'
		
		}
	})

  
</script>";
die();
		}




        $consulta = "SELECT * from aprendiz";
        $resultado = mysqli_query($conexion, $consulta);

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenido Aprendiz</title>
    <link rel="icon" type="icon/jpg" href="../image/logo.jpg">

    <link rel="stylesheet" href="../css/ionicons.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">

    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="../css/sweetalert.css">

    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
      <!-- Navlateral -->
    <?php require "require_aprendiz/navlateral_aprendiz.php";	?>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- header -->
        <?php require "require_aprendiz/header_aprendiz.php";	?>

        <!-- Contenido Calificaciones Individual -->
        <div class="container">
            <article class="col s12">
                <div class="row"><br>

	
	 <?php  

	$query=mysqli_query($conexion, "select * from resultado where di_apre='".$_SESSION['di_apre']."'");
	$row=mysqli_num_rows($query);
	if($row==0){
echo	'<br><center><h3><b>No hay resultados disponibles, por favor presenta la prueba.</b></h3></center><br><br><br>';	
	}else{
		?>
			<center><h3><b>Tus resultados</b></h3></center>

		<div class="row">
  
	<?php
	 	$calificacion="select * from resultado where di_apre='".$_SESSION['di_apre']."'";
	  	$resultado=mysqli_query($conexion,$calificacion);
	  	while($row=mysqli_fetch_array($resultado)){
	?>
		
	
	  <table>
        <thead>
          <tr>
    
		
           	<th>TOTAL RESPUESTAS</th>
			<th>RESPUESTAS CORRECTAS</th>
		  	<th>RESPUESTAS INCORRECTAS</th>
		  	<th> PUNTAJE</th>
		  	<th> <center>FECHA PRESENTACION PRUEBA</center></th>
		  	<th> </th>
		  	
			  
              
          </tr>
        </thead>

        <tbody>
          
		<tr>
            <td><?php echo $row['total_respu'] ?></td>
            <td><?php echo $row['correctas'] ?></td>
            <td><?php echo $row['incorrectas'] ?></td>
            <td><?php echo $row['puntaje']."/". $row['total_puntaje'] ?></td>
            <td><?php echo $row['fecha_prueba'] ?></td>
			<td><a href="reporte_pdf_aprendiz.php" class="btn red">REPORTE PDF</a></td>
		</tr>
			<br>
			
        </tbody>
      </table>
            
	 
	 
	
  </div>

	<?php } } ?>

                                </div>

 
		    
               
            </article>
      
               
           </div> 
    
          
        

       <!-- Footer -->
		<br>

		
		
		
		
         <?php require "require_aprendiz/footer_aprendiz.php";	?>
    </section>
  
  
  
  



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.2.0.min.js"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>

    <!-- Malihu jQuery custom content scroller JS -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>
</body>

</html>
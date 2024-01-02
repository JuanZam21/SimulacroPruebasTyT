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
    <?php require "require_aprendiz/navlateral_aprendiz.php" ?>

 <section class="ContentPage full-width">
	
<!-- Header -->
	<?php require "require_aprendiz/header_aprendiz.php"?>
	
	 <?php  

	$query=mysqli_query($conexion, "select * from resultado where di_apre='".$_SESSION['di_apre']."'");
	$row=mysqli_num_rows($query);
	if($row==0){
		?>
	<!-- Contenido de la pagina  -->
        <div class="container">
            <article class="col s12">
			<div class="row">
				<center>
					<br>
					<h5><b>DETALLES DE LA PRUEBA</b></h5>
		<div style="border-bottom:solid;"></div>
				</center>
<!--
				<p>Nuestro principal objetivo al realizar este sitio web es brindarte una sencilla fuente de preparación, en función de que obtengas un excelente resultado en tu examen  TyT. Seguramente si te preparas a conciencia lo lograrás. Ánimo!</p>
				
-->
               	<center>
					
      <table>
        <thead>
          <tr>
              <th>ÁREAS</th>
              <th>NUMERO DE PREGUNTAS</th>
              
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>LECTURA CRITICA</td>
            <td><?php  $query="select * from pregunta where id_mate=1";
$rs=mysqli_query($conexion,"select * from pregunta where id_mate=1 "); 
$row= mysqli_num_rows($rs);	echo $row ?></td>
            
          </tr>
          <tr>
            <td>RAZONAMIENTO CUANTITATIVO </td>
            <td><?php  $query="select * from pregunta where id_mate=2";
$rs=mysqli_query($conexion,"select * from pregunta where id_mate=2 "); 
$row= mysqli_num_rows($rs);	echo $row ?></td>
            
          </tr>
          <tr>
            <td>COMUNICACIÓN ESCRITA</td>
            <td><?php  $query="select * from pregunta where id_mate=3";
$rs=mysqli_query($conexion,"select * from pregunta where id_mate=3 "); 
$row= mysqli_num_rows($rs);	echo $row ?></td>
            
          </tr>
			<tr>
            <td>INGLÉS</td>
            <td><?php  $query="select * from pregunta where id_mate=4";
$rs=mysqli_query($conexion,"select * from pregunta where id_mate=4 "); 
$row= mysqli_num_rows($rs);	echo $row ?></td>
            
          </tr>
			<tr>
            <td>COMPETENCIAS CIUDADANAS</td>
            <td><?php  $query="select * from pregunta where id_mate=5";
$rs=mysqli_query($conexion,"select * from pregunta where id_mate=5 "); 
$row= mysqli_num_rows($rs);	echo $row ?></td>
            
          </tr>
			<tr>
            <td><b>TOTAL PREGUNTAS</b></td>
            <td><?php  $query="select * from pregunta";
$rs=mysqli_query($conexion,"select * from pregunta  "); 
$row= mysqli_num_rows($rs);	echo $row ?></td>
            
          </tr>
			
			
        </tbody>
      </table>
				</center>
				
			 </div>
            </article>
      	</div> 	
                
       <center>
	<a href="prueba.php" class="waves-effect waves-light btn blue darken-4">Presentar prueba</a>
	
	
	 		</center> 	
	
	<?php }else{
		echo "<br><br><br><br><div class='container'><h4><center>Oh! Parece que ya haz presentado la prueba, ¿Deseas ver tus resultados de nuevo?</center></h4></div>";
				echo "<h3 align=center><a href=resultado_aprendiz.php>Ver mis resultados</a></h3>";

	} ?>
	
           
    <br>
 
        <!-- Footer -->
        <?php require "require_aprendiz/footer_aprendiz.php" ?>
  
           
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
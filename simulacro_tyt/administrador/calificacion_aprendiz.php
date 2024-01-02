<?php 
      require "../require/conexion.php";
        session_start();
        if (isset($_SESSION["email_admin"])) {

        }else if (isset($_SESSION["telefono_admin"])){
            
        
        }else{

           echo "
<!DOCTYPE html>
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
			window.location='login_admin.php'
		
		}
	})
</script>";
        	die();
		}




        $consulta = "SELECT * from administrador";
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

     <!-- datatable -->
<!--     <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.css">-->
<!--  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">-->
   <!-- script -->
  
</head>

<body class="cuerpo" >
    <!-- Navlateral -->
 <?php require"require_admin/navlateral_admin.php" ?>

<section class="ContentPage full-width">
	
<!-- Header -->
	<?php require "require_admin/header_admin.php"?>
    <!-- final menu lateral-->
<!--    <div class="container">-->
        <!--Jumbotron-->
<div class="jumbotron jumbotron-fluid jum">
  <div class="container">
    <div class="row">
    <?php

 //$id_mate=$_GET['id_mate'];
   //           $id_prue=$_GET['id_prue'];   
$consulta="select * from resultado";
$result=mysqli_query($conexion,$consulta);
if($fila=mysqli_num_rows($result)==0) {
  echo "<br><br><br><br><center><h3><b>No hay informes disponibles</b></h3></center><br>
  <br>
  <br>
  <br>
  <br>
  ";
}else{
     $con="select * from resultado";
              $resp=mysqli_query($conexion,$con);
              if ($fil=mysqli_fetch_array($resp));  
?>

    
      
        

     
<br>
<div class="col-md-12"></div>

  <div class="col-md-9">
    
		<center><h5 style="text-decoration: underline"><b>RESULTADOS DE LOS APRENDICES </b></h5></center><a style="float:right" href="reporte_pdf_grupal.php" class="btn red">REPORTE PDF </a>

<table id="example" class="table table-responsive table-bordered" style="width: 100;"  >
        <thead>
            <tr style="text-transform: uppercase;">

              <th scope="col">Número documento de identidad</th>
              <th >Nombre aprendiz</th>
              <th>Numero de preguntas</th>
              <th>Respuestas correctas</th>
              <th>Respuestas incorrectas</th>
              <th>Puntaje</th>
              
           

            </tr>
        </thead>
        <tbody>
          <!--  consulta para mostrar la tabla clientes de la base de datos ***********************-->
<?php 
             


 $clientes="select resultado. di_apre,resultado.total_respu,resultado.correctas,resultado.incorrectas,resultado.puntaje,resultado.total_puntaje,resultado.    id_resultado , aprendiz.nombre_apre ,aprendiz.apellido_apre  from resultado inner join aprendiz on resultado.di_apre=aprendiz.di_apre";
              $result = mysqli_query($conexion,$clientes);
              while ($datos=mysqli_fetch_array($result)) {
  
              
            ?>
	
            <tr>
                <td><?php echo  $datos['di_apre']; ?></td>
                <td><?php echo $datos['nombre_apre']." ".$datos['apellido_apre']; ?></td>
                <td><?php echo $datos['total_respu']; ?></td>
                <td><?php echo $datos['correctas']; ?></td>
                <td><?php echo $datos['incorrectas']; ?></td>
                <td><?php echo $datos['puntaje']."/".$datos['total_puntaje']; ?></td>
             
                
            </tr>
<?php  
}
    mysqli_close($conexion);

 ?>
   </tbody>
    </table>
<?php 
} 
?>  
</div>


<div class="col-md-3"></div>



            </div>

    </div>

</div>
<!--Jumbotron-->

        
        <!--footer-->


           
  	<?php require"require_admin/footer_admin.php"?>

	</section>	





 
    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.2.0.min.js"><\/script>')</script>
     
 	<script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap4.min.js"></script>
	
	<!-- Malihu jQuery custom content scroller JS -->
   	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
	    
	<!-- Materialize JS -->
 	<script src="../js/materialize.min.js"></script>

    <!-- MaterialDark JS -->
	<script src="../js/main.js"></script>
<script>
        $(document).ready(function() {
    $('#example').DataTable({
        "order":[[1,"asc"]],
        "language":{
            "lengthMenu": " ",
            "info": "",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": " Tomado de _MAX_ registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesado...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron coincidentes",
            "paginate":{
                    "next": "Siguiente",
                    "previous": "Anterior"
            },
            

        }
    });
});
    </script> 


</body>

</html>

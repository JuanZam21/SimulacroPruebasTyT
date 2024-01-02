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
    <title>Aprendices registrados</title>
    <link rel="icon" type="icon/jpg" href="../image/logo.jpg">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.css">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/materialize.css">

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
    <?php require"require_admin/navlateral_admin.php"?>


    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- header -->
   <?php require"require_admin/header_admin.php"?>

        <!-- Timeline -->
        <div class="container">

<center>
<h5>
               <B>Aprendices Registrados</B>
            </h5>
</center>
			<br>
<table >
    <thead>
        <tr>
<b>            
<td>Numero de Identificacion</td>        
<td> Nombre Aprendiz </td>
<td>Apellido Aprendiz</td>
<td>Telefono</td>
<td>Correo Electronico</td>
</b>


        </tr>
    </thead>
    <tbody>
        
        <?php

        $consulta="select * from aprendiz";
        $resultado=mysqli_query($conexion, $consulta);

        while ($datos=mysqli_fetch_array($resultado)) { ?>
        <tr>
            <td><?php echo $datos ['di_apre'];?></td>
            <td><?php echo $datos ['nombre_apre'];?></td>
            <td><?php echo $datos ['apellido_apre'];?></td>
            <td><?php echo $datos ['telefono_apre'];?></td>
            <td><?php echo $datos ['email_apre'];?></td>
                        <td><a href="eliminar_aprendiz.php?id=<?php echo $datos['di_apre'] ?>" class="btn red" ><b>X</b></a> </td>

        </tr>

        <?php } ?>

    </tbody>




</table>




		</div>

        <!--footer-->
		<br>
		<br>
		<br>
		<br>
	
		
	<?php require"require_admin/footer_admin.php"?>

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
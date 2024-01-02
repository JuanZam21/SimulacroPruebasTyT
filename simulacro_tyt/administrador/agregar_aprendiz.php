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
    <title>Administrador</title>
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

            
            
            
    <!--CONTENIDO DE LA PAGINA-->
<div class="container">
     <br>

                
                        
<!--Form add aprendiz-->
<form action="agregar_aprendiz_val.php" method="POST" class="col s12">
      <div class="row">


          <div class="input-field col s6">
                                <select name="id_tipo_doc" required>
                                    <option disabled selected value="">Selecciona tipo de documento</option>
                                   <?php
                                    $sql=$conexion->query("select * from tipo_documento");
 
                                        while($fila=$sql->fetch_array()){
                                            echo "<option value=". $fila['id_tipo_doc'].">".$fila['tipo_doc']."</option>";
                                        }
                                    ?>
                                </select>
                         
                            </div>
      
        <div class="input-field col s6">
          <input name="identificacion" id="dni" required type="number" class="validate">
          <center><label for="identificación"><center>Número de Identificación</center></label></center>
        </div>
     
          
          <div class="input-field col s6">
          <input name="nombre" id="name" type="text" required class="validate">
          <center><label for="name"><center>Nombres</center></label></center>
        </div>
     


        <div class="input-field col s6">
          <input name="apellidos" id="last_name" required type="text" class="validate">
          <center><label for="last_name"><center>Apellidos</center></label></center>
        </div>
          
          
        
        <div class="input-field col s6">
          <input name="telefono" id="number" type="number" required class="validate">
         <center> <label for="telefono"><center>Número teléfonico</center></label></center>
        </div>
          <div class="input-field col s6">
          <input name="email" id="email" type="email" class="validate">
          <center><label for="email" >Correo electrónico</label></center>
        </div>
        
         
       <div class="row">
          <div class="col s4"></div>
        <div class="input-field col s4">
          <input name="clave" id="password" type="password" required minlength="8" class="validate">
         <center> <label for="password">Contraseña</label></center>
        </div>
                 <div class="col s4"></div>

  </div>

  
  
  
                          
						<div class="row">
							 <center> 
                            <input type="submit" class="btn red" value="AGREGAR APRENDIZ" >
                       </center>
							   </div>
		  
                 </div>
                </form>

           
       
</div>
	
		
            
 <!--END Form add aprendiz--> 
	
        <!--footer-->
	<?php require"require_admin/footer_admin.php"?>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.2.0.min.js"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>

    <!-- Malihu jQuery custom content scroller JS -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>

    <script src="../js/sweetalert.min.js"></script>

    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });

        function onSubmit() {
            if ($("#drpArea").val() === "" || $("#textarea1").val() === "" || $("#respuesta1").val() === "") {
                return alert("Revisar los campos del formulario");

            }
            else{
                swal({
                    type: 'success',
                    title: 'Registro Completo',
                    text: 'Bienvenido a Simulacro de Pruebas TYT ¡Mucha Suerte!' 
                })
                $("#frmPreguntas").trigger('reset');
            }
        }
    </script>
</body>

</html>
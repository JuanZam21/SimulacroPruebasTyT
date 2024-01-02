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
				 
<!--     Form add admin                   -->
    <form action="agregar_admin_val.php" method="POST" class="col s12">
      <div class="row">


          <div class="input-field col s6">
			  <select name="id_tipo_doc_admin" required>
                                    <option disabled selected value="">Selecciona tipo de documento</option>
                                   <?php
                                    $sql=$conexion->query("select * from tipo_documento_admin");
 
                                        while($fila=$sql->fetch_array()){
                                            echo "<option value=". $fila['id_tipo_doc_admin'].">".$fila['tipo_doc_admin']."</option>";
                                        }
                                    ?>
                                </select>
                         
                            </div>
      
        <div class="input-field col s6">
          <input name="identificacion_admin"  id="telephone"  type="number" class="validate" >
          
          <center><label for="identificación">Número de identificación</label></center>
        </div>
     
          
          <div class="input-field col s6">
          <input name="nombre_admin" id="name" type="text" required class="validate">
          <center><label for="name"><center>Nombres</center></label></center>
        </div>
     


        <div class="input-field col s6">
          <input name="apellido_admin" id="last_name" type="text" required class="validate">
          <center><label for="last_name"><center>Apellidos</center></label></center>
        </div>
          
          
        
		 <div class="input-field col s6">
          <input name="telefono_admin" required id="number" type="number" class="validate">
         <center> <label for="telefono"><center>Numero teléfonico</center></label></center>
        </div>
          
          <div class="input-field col s6">
          <input name="email_admin" required id="email" type="email" class="validate">
          <center><label for="email" >Correo electrónico</label></center>
        </div>
        
         
       <div class="row">
          <div class="col s4"></div>
        <div class="input-field col s4">
          <input name="clave_admin" id="password" required minlength="8" type="password" class="validate">
         <center> <label for="password">Contraseña</label></center>
        </div>
                 <div class="col s4"></div>

  </div>

  
  
  
 <center>	<div class="row">
	 			<input type="submit" class="btn red " value="AGREGAR ADMINISTRADOR" >
	 		</div>
 </center>
                </div>
                </form>
        </div>
            
<!--END Form add admin-->

        
        <!--footer-->
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
                    text: '¡Bienvenido Administrador!' 
                })
                $("#frmPreguntas").trigger('reset');
            }
        }
    </script>
</body>

</html>
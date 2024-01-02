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
   <?php require"require_admin/navlateral_admin.php"?>

    <!-- Page content -->
    <section class="ContentPage full-width">
        
		<!-- header -->
   <?php require"require_admin/header_admin.php"?>
       
            
 <!-- Timeline -->
      <div class="container">
        <article class="col s12">
             <center>
			<h5>
               <B>BIENVENIDO AL SISTEMA ADMINISTRADOR</B>
            </h5>
            </center>
         
            <center>
                <H6>Aqui podrá:</H6>
            </center>

            <ul class="timeline">
                <li>
                    <div class="timeline-badge bg-info">
                        <a href="agregar_pregunta.php"><i class="ion-android-add"></i></a>
                            
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h5 class="timeline-title">Agregar preguntas</h5>

                        </div>
                        <div class="timeline-body">
                            <p>Agregar preguntas, organizandolas primeramente por materias y despúes marcando la respuesta correcta.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge bg-primary">
                        <a href="editar_pregunta.php"><i class="ion-gear-b"></i></a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h5 class="timeline-title">Editar preguntas</h5>

                        </div>
                        <div class="timeline-body">
                            <p>En caso de querer visulaizar, editar y/o eliminar una preguntas registradas. </p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge bg-success">
                        <a href="calificacion.php"><i class="ion-checkmark-round"></i></a>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h5 class="timeline-title success">Consultar calificaciones</h5>

                        </div>
                        <div class="timeline-body">
                            <p>Consulta las calificaciones de los aprendices que han presentado la prueba</p>
                        </div>
                    </div>
                </li>

                <li class="timeline-inverted">
                    <div class="timeline-badge bg-danger">
   <!-- Modal Trigger -->

 <a class="modal-trigger" href="#modal1"><i class="ion-person"></i></a>
   
                                                               
   <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="black-text" >Tipo de usuario</h4>
        <div class="row">
			<a class="btn blue darken-4"  href="agregar_aprendiz.php">Aprendiz</a>
     		<a class="btn red darken-4"  href="agregar_admin.php">Administrador</a>
		</div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
    </div>
  </div>


        </div>
                    <div class="timeline-panel">
                         
                        <div class="timeline-heading">
                            <h5 class="timeline-title">Agregar usuarios</h5>
                            
                        </div>
                        <div class="timeline-body">
                            <p>Agrega usuarios al sistema dependiendo de su rol (Aprendiz, Administrador).</p>
                        </div>
                    </div>
                </li>
            </ul>
        </article>
      </div>
        

    

        <!-- Footer -->
          <?php require"require_admin/footer_admin.php"?>

		
    </section>

   
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.2.0.min.js"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>

    <!-- Malihu jQuery custom content scroller JS -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>
<script>
    $(document).ready(function(){
    $('.modal').modal();
  });
</script>

</body>

</html>
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
    <title>Ayuda Aprendiz</title>
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


                <center><h5 style="text-decoration: underline" ><b>AYUDA AL APRENDIZ</b><br></h5></center>



                                </div>

 <div class="row">
	 <div class="col s6 m6">
		 <br>
		 <br>
		 <br>
		 
      <div class="card blue darken-1" style="width: 300px" >
        <div class="card-content white-text">
          <span class="card-title"><b>¡Siguenos en Facebook!</b></span>
          <p>En nuestra red social Facebook, prodras interactuar con los desarroladores asi como ver posibles actualizaciones.</p>
        </div>
        <div class="card-action" >
         <center> <a target="_blank" href="https://www.facebook.com/Simulacro-Pruebas-TyT-167819760807723/?modal=admin_todo_tour">Click aqui para ver nuestro perfil de Facebook</a></center>
        </div>
        </div>
  </div>
    <div class="col s6 m6">
      <div class="card red darken-1" style="width: 300px" >
        <div class="card-content white-text">
			<span class="card-title"><b>¡Encuentra tutoriales de uso de la pagina en nuestro canal de Youtube!</b></span><p>Nuestra red social YouTube, te permirtira aprender a interactuar con nuestro sistema de informacion, conociendo de manera detallada cada una de sus funciones y como utilizarla.</p>
        </div>
        <div class="card-action" >
         <center> 
			 <a  target="_blank" href="https://www.youtube.com/channel/UC7-SL-v6FQmmE32Q81IVRxA?guided_help_flow=3">Click aqui para ver nuestros Tutoriales sobre la pagina</a>
		</center>
        </div>
        </div>
    </div>
 
    

   <center><div class="col s12 m12">
      <div class="card green darken-1" style="width: 80%" >
        <div class="card-content white-text">
			<center><span class="card-title"><b>¡Contactanos!</b></span><br>
          <p>Para más información acerca de nosotros y nuestro sistema de información, puedes comunicarte a los siguientes correos electronicos y atenderemos tu solicitud. <br><br>
			simulacropruebatyt@gmail.com - correo de la pagina  <br>
            Juan Diego Zambrano (Programador)- Juanzambrano021@gmail.com <br>
            Nicolas Diaz Ortiz  (Diseñador)  - Diaznicolas031@gmail.com<br>
            y mariana</p></span></center>



          </p></div>
        </div>
  
        </div>
  </div>

            
                
               
               
            </article>
      
               
           </div> 
    
          
        </div>

       <!-- Footer -->
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
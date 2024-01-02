<?php 
      require "../require/conexion.php";
         




        $consulta = "SELECT * from administrador";
        $resultado = mysqli_query($conexion, $consulta);

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reestablecimiento</title>
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

   
    <?php   
    
    require"../require/header.php";
    
    
    
    ?> 

    
    
    
    
    
                <center>
					<h5 style="text-decoration: underline; padding-top:30px;"><b>Reestablece tu contraseña</b></h5>
				</center>
						



                              
<center>
 <div class="row">
    <div class="col s12 m12">
      <div class="card blue darken-4" style="width:500px "  >
        <div style="height:400px" class="card-content white-text">

<form action="reestablecer_admin_val.php" method="POST" >

    <b><span style="padding-top:100px;" class="card-title"><b>Digite su correo electronico</b></p></span></b>
<input type="email" name="correo"><br><br>
<button class=" btn white darken-4 black-text "   type="submit">Reestablecer</button> 
            <a href="login_admin.php"><button class=" btn white darken-4 black-text "  type="button" >Cancelar</button></a>
            </center>

</form>
 

        </div>
              
      
                
 <?php require "../require/footer.php"; ?>
  
  



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
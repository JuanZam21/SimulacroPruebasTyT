<?php require "../require/conexion.php"?>
<html lang="es">

<head>
    
	<meta charset="UTF-8">
	<meta http-equiv="content-type" content="text/html; charset= UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ingreso aprendiz</title>
    <link rel="icon" type="icon/jpg" href="../image/logo.jpg">

    <link rel="stylesheet" href="../css/ionicons.css">

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
    <link rel="stylesheet" href="../css/lgon.css">
	
	<!--Mi archivo js-->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/efectos.js"></script>
	
</head>

<body > 
<?php require"../require/header.php"; ?>
	
<!--Container contenido margenes-->
    <div class="container-fluid">
      <div class="col s12 m6 offset-s4">
     <div class="row">
<br><br>
<!--form-->                 
<div class="col s12 m6 l4">
    <p></p>
</div>
    <div class="col s12 m4 l4">
        <div class="card grey darken-3 z-depth-5" >
            <div class="card-content white-text">
                <span class="card-title">
                <center> 
                    <h6>
                        Ingresa con el numero de documento y contraseña que tienes registrado en sofia plus
                    </h6>
                </center>
                </span>
				<div class="card-action"></div>	
                 <div class="row">
                    <form action="login_aprendiz_val.php" method="POST" class="col s12">
                       <div class="row">
						<div class="input-field col s12">
                                 <select name="id_tipo_doc" required>
                                    <option value="" disabled selected>Tipo de documento</option>
                                   <?php
                                    $sql=$conexion->query("select * from tipo_documento");
 
                                        while($fila=$sql->fetch_array()){
                                            echo "<option value=". $fila['id_tipo_doc'].">".$fila['tipo_doc']."</option>";
                                        }
                                    ?>
                                </select>
                        </div>
                         
						  
						
						<div class="input-field col s12">
                                  <input name="di_apre" id="number" type="number"  required class="validate">
                                  <label for="document">Número de documento de identidad</label>
                                </div>
							
                        
						
                                        <div class="input-field col s12">
                                            <input name="clave_apre" minlength="8" id="password" type="password" class="validate" required>
                                            <label for="password">Contraseña</label>
                                        </div>
                                   </div>
                        <div class="row">
						<center>
                                           
                                                <button class=" btn blue darken-4"  type="submit">Ingresar</button>

                                                <buttom class="btn blue darken-4" onclick="Cancelar()">Cancelar</buttom> 
                                              
							  </center>
							</div> 
						<center>
                                            <div class="card-action">
                                                    <a href="reestablecer_aprendiz.php">¿Haz olvidado tu contraseña?</a>
                                                </div> 
                                            <div class="card-action">
                                                    <a href="../administrador/login_admin.php">¿Eres Administrador? </a>
                                                </div>  
                                                 <div class="card-action"></div>
                                      
				</center>
							</form>
<!--END form-->
                </div>
		</div>
			</div>
<div class="col s12 m4 l4">
    <p></p>
</div>
        
</div>
		  </div>
	</div>
	</div>
	
	<?php require"../require/footer.php" ?>
    
		  <!-- jQuery -->
  
     <script src="../js/activar_select.js"></script>
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
        // function Login() {
        //     var email = document.getElementById('email');
        //     var password = document.getElementById('password');
        //     if (email.value === "nicolasdiaz@admin.com" & password.value === "123")
        //         location.href = "dashboard.html";
        

        //   else{(email.value === "juandiego@usuario.com" & password.value === "1234")
        //         location.href = "usuario.html";
               

                
        //     }
        // }   

        function Cancelar(){
            location.href="../index.html"
        }
    </script>
     <script>
    $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

</body>
</html>
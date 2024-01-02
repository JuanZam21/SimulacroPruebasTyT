<?php
        require "../require/conexion.php";

        $correo=$_POST['correo'];

        $consulta=mysqli_query($conexion,"select * from aprendiz where
email_apre='".$correo."'");

        if ($datos=mysqli_fetch_array($consulta)) {

                //GENERAR CONTRASEÑA ALEATORIA
                $numero_a= rand(1,10000);
            $nombre="Simulacrotyt";
            $email_empl=$datos['email_apre'];
            $clave_nueva=$nombre.$numero_a;
            $clave_nueva_e=md5($nombre.$numero_a);
                //GENERAR CONTRASEÑA ALEATORIA

            //ACTUALIZAR NUEVA CONTRASEÑA EN LA BASE DE DATOS
            $actualizar=mysqli_query($conexion,"update aprendiz set
clave_apre='$clave_nueva_e' where email_apre='$email_empl'");
            //ACTUALIZAR NUEVA CONTRASEÑA EN LA BASE DE DATOS

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //ENVIAR NUEVA CONTRASEÑA AL CORREO

            $destino=$datos['email_apre'];

            $asunto="CONTRASEÑA REESTABLECIDA";

            $contenido= '<html>'.
                                        '<head><title>wwww.simulacrotyt.cadph.com</title></head>'.
                                        '<body><h1>SIMULACRO TYT</h1>'.
                                        '<img src="https://www.confexistem.cadph.com/img/logo-n.jpg"
width="200px" height="200px"> <br>'.
                                        'Hola '.
                                        $datos['nombre_apre'].$datos['apellido_apre'].
                                        ' hemos reestablecido su contraseña'.
                                        '<hr>'.
                                        'Contraseña: '.
                                        $clave_nueva.
                                        '</body>'.
                                        '</html>';

        $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    mail($destino,$asunto,$contenido,$cabeceras);

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
		title:'A tu correo a sido enviada la nueva contraseña,inicia sesión', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='login_aprendiz.php'
		
		}
	})
</script>";
                //window.location="login_aprendiz.php" </script>';


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
		title:'Correo electronico no registrado', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='reestablecer_aprendiz.php'
		
		}
	})
</script>";
        }

 ?>

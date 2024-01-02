<?php
	require "../require/conexion.php";

	$email_admin = $_POST['email_admin'];
	$clave_admin= $_POST['clave_admin'];
    $clave_admin_cifrado= md5 ($clave_admin);

    
        
/*        Validar campos vacios
if ($email_admin =="" and $clave_admin =="") {
         echo "     
		<script>alert('Debes digitar los campos requeridos');
		window.location='login_admin.php';
 		</script>
 		";
}
if ($email_admin=="") {
         echo "
		<script>alert('Debes digitar un correo electronico');
		window.location='login_admin.php';
 		</script>
 		";
}
   
if ($clave_admin=="") {
         echo "
		<script>alert('Debes digitar la contraseña');
		window.location='login_admin.php';
 		</script>
 		";
}*/

	$consulta = "SELECT * FROM administrador WHERE email_admin='$email_admin' AND clave_admin='$clave_admin_cifrado' || telefono_admin='$email_admin' AND clave_admin='$clave_admin_cifrado' ";

	$ejecutar = mysqli_query($conexion,$consulta);

	$filas= mysqli_num_rows($ejecutar);


	if ($filas==1) {
		$consulta2 = "SELECT * FROM administrador WHERE email_admin='$email_admin' || telefono_admin='$email_admin'";
		$ejecutar2 = mysqli_query($conexion,$consulta2);

		$extraer=mysqli_fetch_array($ejecutar2);

		$nombre_admin=$extraer['nombre_admin'];
		$apellido_admin=$extraer['apellido_admin'];
		$email_admin=$extraer['email_admin'];
		$telefono_admin=$extraer['telefono_admin'];
		$di_admin=$extraer['di_admin'];
		


		session_start();
		$_SESSION["email_admin"]=$email_admin; 
		$_SESSION["nombre_admin"]=$nombre_admin; 
		$_SESSION["apellido_admin"]=$apellido_admin; 
		$_SESSION["telefono_admin"]=$telefono_admin; 
		$_SESSION["di_admin"]=$di_admin; 
	
		
		echo " 		
		<script>				
		window.location='administrador.php';
		</script>
 		";
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
		title:'Datos incorrectos', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='login_admin.php'
		
		}
	})

  
</script>
 		";
 	}

 ?>

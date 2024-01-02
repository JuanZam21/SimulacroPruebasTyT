<?php
	require "../require/conexion.php";


    $di_apre = $_POST['di_apre'];
    $id_tipo_doc=$_POST['id_tipo_doc'];
    $clave_apre= $_POST['clave_apre'];
    $clave_apre_cifrado= md5($clave_apre);

//Validar campos vacios
/*if ($di_apre =="" and $clave_apre =="") {
         echo "     
		<script>alert('Debes digitar los campos requeridos');
		window.location='login_apre.php';
 		</script>
 		";
}
if ($id_tipo_doc=="") {
         echo "     
		<script>alert('Debes seleccionar tipo de documento');
		window.location='login_apre.php';
 		</script>
 		";
}

if ($di_apre=="") {
         echo "
		<script>alert('Debes digitar un numero de documento');
		window.location='login_apre.php';
 		</script>
 		";
}
   
if ($clave_apre=="") {
         echo "
		<script>alert('Debes digitar la contraseña');
		window.location='login_apre.php';
 		</script>
 		";
}
s
*/

          
	$consulta = "SELECT * FROM aprendiz WHERE id_tipo_doc='$id_tipo_doc' and di_apre='$di_apre' AND clave_apre='$clave_apre_cifrado'";

    $ejecutar = mysqli_query($conexion,$consulta);

	$filas= mysqli_num_rows($ejecutar);
    


if ($filas==1) {
    $consulta2 = "SELECT * FROM aprendiz WHERE di_apre='$di_apre'";
    $ejecutar2 = mysqli_query($conexion,$consulta2);

    $extraer=mysqli_fetch_array($ejecutar2);

    $nombre_apre=$extraer['nombre_apre'];
    $apellido_apre=$extraer['apellido_apre'];
    $email_apre=$extraer['email_apre']; 
	$telefono_apre=$extraer['telefono_apre'];
	$di_ape=$extraer['di_apre'];	


 	session_start();
	$_SESSION["di_apre"]=$di_apre;
 	$_SESSION["nombre_apre"]=$nombre_apre; 
 	$_SESSION["apellido_apre"]=$apellido_apre; 
	$_SESSION["email_apre"]=$email_apre; 
	$_SESSION["telefono_apre"]=$telefono_apre; 
	

echo"   <script>		
            window.location='aprendiz.php';
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
			window.location='login_aprendiz.php'
		
		}
	})

  
</script>
 		";
 	}
?>                
   

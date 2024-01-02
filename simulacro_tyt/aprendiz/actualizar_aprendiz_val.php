<?php 
require "../require/conexion.php";
        session_start();
        if (isset($_SESSION["di_apre"])) {
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
			window.location='login_aprendiz.php'
		
		}
	})
</script>";
        	die();
		}




        $consulta = "SELECT * from aprendiz";
        $resultado = mysqli_query($conexion, $consulta);

	$di_apre=$_POST['identificacion_apre'];
	$id_tipo_doc_admin=$_POST['id_tipo_doc_admin'];
	$nombre_apre=$_POST['nombre_apre'];
	$apellido_apre=$_POST['apellido_apre'];
	$telefono_apre=$_POST['telefono_apre'];
	$email_apre=$_POST['email_apre'];
	$clave_apre=$_POST['clave_apre'];
    $clave_apre_cifrado=md5($clave_apre);

	$actualizar ="UPDATE aprendiz SET id_tipo_doc='".$id_tipo_doc_admin."', di_apre='".$di_apre."',  nombre_apre= '".$nombre_apre."', apellido_apre= '".$apellido_apre."', telefono_apre='".$telefono_apre."', email_apre='".$email_apre."', clave_apre='".$clave_apre_cifrado."' where di_apre='".$_SESSION["di_apre"]."' ";



 

	$ejecutar=mysqli_query($conexion, $actualizar);

	echo ' <script type="text/javascript">
  window.location="aprendiz.php"; 
 </script>';

 ?>

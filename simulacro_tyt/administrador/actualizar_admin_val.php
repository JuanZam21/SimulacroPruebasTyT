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
		title:'Debes jreje iniciar sesión', 
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




        $consulta = "SELECT * from aprendiz";
        $resultado = mysqli_query($conexion, $consulta);

      

 

	$di_admin=$_POST['identificacion_admin'];
	$id_tipo_doc_admin=$_POST['id_tipo_doc_admin'];
	$nombre_admin=$_POST['nombre_admin'];
	$apellido_admin=$_POST['apellido_admin'];
	$telefono_admin=$_POST['telefono_admin'];
	$email_admin=$_POST['email_admin'];
	$clave_admin=$_POST['clave_admin'];
    $clave_admin_cifrado=md5($clave_admin);



	$actualizar ="UPDATE administrador SET id_tipo_doc_admin='".$id_tipo_doc_admin."', di_admin='".$di_admin."',  nombre_admin= '".$nombre_admin."', apellido_admin= '".$apellido_admin."', telefono_admin='".$telefono_admin."', email_admin='".$email_admin."', clave_admin='".$clave_admin_cifrado."' where email_admin='".$_SESSION["email_admin"]."' ";



 

	$ejecutar=mysqli_query($conexion, $actualizar);

	if ($ejecutar){

	echo ' <script type="text/javascript">
 	window.location="administrador.php";
 </script>';
}
 ?>





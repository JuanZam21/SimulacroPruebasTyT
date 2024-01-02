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


 $email_admin=$_POST['email_admin'];

 $buscarcorreo = "SELECT * FROM administrador where email_admin='$email_admin'";

 $resultado = mysqli_query($conexion,$buscarcorreo);

 if (mysqli_num_rows($resultado)==0) {
    $nombre_admin=$_POST['nombre_admin'];
    $apellido_admin=$_POST['apellido_admin'];
	$identificacion_admin=$_POST['identificacion_admin'];
    $id_tipo_doc_admin=$_POST['id_tipo_doc_admin'];
	$telefono_admin=$_POST['telefono_admin'];
	$clave_admin=$_POST['clave_admin'];
    $clave_admin_cifrado= md5($clave_admin);

	$insertar = "insert into administrador ( di_admin, id_tipo_doc_admin, nombre_admin, apellido_admin, telefono_admin, email_admin, clave_admin) values ('".$identificacion_admin."', '".$id_tipo_doc_admin."', '".$nombre_admin."', '".$apellido_admin."','".$telefono_admin."', '".$email_admin."', '".$clave_admin_cifrado."')";

	$ejecutar =mysqli_query($conexion, $insertar);
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
		title:'Correo electronico ya registrado', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='agregar_admin.php'
		
		}
	})

   
</script>";
}
if ($ejecutar){
echo 	
"
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
		title:'Administrador registrado correctamente', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='agregar_admin.php'
		
		}
	})

   
</script>";
	
}
?>
 

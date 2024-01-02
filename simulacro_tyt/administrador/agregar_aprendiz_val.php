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

$identificacion=$_POST['identificacion'];

 $buscardocumento = "SELECT * FROM aprendiz where di_apre='$identificacion'";

 $resultado = mysqli_query($conexion,$buscardocumento);

 if (mysqli_num_rows($resultado)==0) {
    $email_apre=$_POST['email'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
	
    $id_tipo_doc=$_POST['id_tipo_doc'];
	$telefono=$_POST['telefono'];
	$clave=$_POST['clave'];
    $clave_apre_cifrado= md5($clave);

	$insertar = "insert into aprendiz ( di_apre, id_tipo_doc, nombre_apre, apellido_apre, telefono_apre, email_apre, clave_apre) values ('".$identificacion."', '".$id_tipo_doc."', '".$nombre."', '".$apellidos."','".$telefono."', '".$email_apre."', '".$clave_apre_cifrado."')";

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
		title:'Documento de identidad ya registrado', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='agregar_aprendiz.php'
		
		}
	})
</script>";
}if ($ejecutar){
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
		title:'Aprendiz registrado correctamente', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='agregar_aprendiz.php'
		
		}
	})

   
</script>";
	
}
?>
 
        

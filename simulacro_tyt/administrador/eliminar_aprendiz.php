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
        	//die();
		}


     /*   $consulta = "SELECT * from administrador";
        $resultado = mysqli_query($conexion, $consulta);
*/


	$di_apre= $_GET['id'];

	$eliminar="DELETE FROM aprendiz where di_apre='".$di_apre."' ";

	$ejecutar = mysqli_query($conexion,$eliminar);

echo "<script> window.location='listar_aprendiz.php' </script>";
 ?>

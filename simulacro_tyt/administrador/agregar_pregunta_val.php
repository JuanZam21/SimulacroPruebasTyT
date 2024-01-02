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

 



$nombre_img=$_FILES['enu_img']['name'];
$archivo=$_FILES['enu_img']['tmp_name'];

$ruta="../image/enu_img";
$ruta=$ruta."/".$nombre_img;

move_uploaded_file($archivo, $ruta);


	$respu_corre=$_POST['group1'];
	$valor_pregu=$_POST['valor_pregu'];
    $id_mate=$_POST['id_mate'];
	$indicacion=$_POST['indicacion'];
    $enu_mate=$_POST['enu_mate'];
    $refer=$_POST['refer'];
    $enu_respu=$_POST['enu_respu'];
	$respu1_mate=$_POST['respu1_mate'];
	$respu2_mate=$_POST['respu2_mate'];
	$respu3_mate=$_POST['respu3_mate'];
	$respu4_mate=$_POST['respu4_mate'];

	$insertar = "insert into pregunta ( id_pregu, id_mate,  indicacion, enu_mate, enu_img, refer, enu_respu, respu1_mate,respu2_mate, respu3_mate, respu4_mate, valor_pregu, respu_corre) values (NULL, '".$id_mate."', '".$indicacion."', '".$enu_mate."', '".$ruta."', '".$refer."', '".$enu_respu."', '".$respu1_mate."', '".$respu2_mate."', '".$respu3_mate."', '".$respu4_mate."', '".$valor_pregu."', '".$respu_corre."')";

	$ejecutar =mysqli_query($conexion, $insertar);
 
if ($ejecutar){
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
		title:'Pregunta agregada correctamente', 
		type:'succes',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='agregar_pregunta.php'
		
		}
	})

  
</script>"; 
 }
?>
 

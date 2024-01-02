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
    
    $id_pregu=$_POST['id_pregu'];
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

    $insertar = "update pregunta set  id_mate=".$id_mate . ",  indicacion='".$indicacion . "', enu_mate='".$enu_mate . "', enu_img='".$nombre_img . "', refer='".$refer . "', enu_respu='".$enu_respu . "', respu1_mate='".$respu1_mate . "',respu2_mate='".$respu2_mate . "', respu3_mate='".$respu3_mate . "', respu4_mate='".$respu4_mate . "', valor_pregu=".$valor_pregu . ", respu_corre=".$respu_corre ." where id_pregu=".$id_pregu ;

    $ejecutar =mysqli_query($conexion, $insertar);
 
    if ($ejecutar){

    echo ' <script type="text/javascript">
    window.location="editar_pregunta.php";
 </script>';
}
 ?>

 

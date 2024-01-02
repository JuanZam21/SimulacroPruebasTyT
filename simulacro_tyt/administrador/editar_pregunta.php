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

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
     <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrador</title>
    <link rel="icon" type="icon/jpg" href="../image/logo.jpg">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.css">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">

    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="../css/sweetalert.css">

    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="../css/style.css">
<!--    Titulo y logo de la pagina-->
<!--    Sweetaler2-->
    <link rel="stylesheet" type="text/css" href="sweetalert2/dist/sweetalert2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <!-- Navlateral -->
    <?php require"require_admin/navlateral_admin.php"?>

    <!-- Page content -->
    <section class="ContentPage full-width">
        
<!-- header -->
   <?php require"require_admin/header_admin.php"?>
		
		
<!-- Timeline -->
		 
		
  

	
  <div style="width: 80%;margin-right: 100px;margin-left: 100px">
    
<!--    Sweetalert2-->
	 	<script src="../sweetalert2/dist/jquery.min.js"> </script>
		<script src="../sweetalert2/dist/sweetalert2.js"></script> 
		<script>
		$('#btnAlert').click(function(e){
		swal({
		title:'¿Seguro que quieres cerrar la sesión?', 
	 	text:'Si cierras la sesión en medio de la prueba perderas todas las respuestas marcadas',
		type:'succes',
		showCancelButton:true,
		cancelButtonText:'Cancelar',
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='salir_apre.php'
		
		}
	})	
		})
	
</script>

<table class="table table-responsive" style="overflow-x: scroll;font-size:14px "  >
  <thead>
    <tr>
    <th>Indicacion</th>
    <th>Enunciado Pregunta</th>
    <th>Referencia</th>
    <th>Opción A</th>
      <th>Opción B</th>
      <th>Opción C</th>
      <th>Opción D</th>
      <th>Valor</th>
      <th>Acción</th>
     </tr>    
    </thead>
      <tbody>

            <b><i><h4 class="text-center" style="padding-top:20px;"> PREGUNTAS</h4></i></b>

   <?php
      
	   require "../require/conexion.php";



	  
	  $por_pagina=5;
	  //paginacion - cantidad de registros por pagina
	  $pagina=@$_GET["pagina"];
	  
	  if(!$pagina){
		  
		  $inicio=0;
		  $pagina=1;
	  }else{
		  //la pagina inicia en 0 y se multiplica $por_pagina
	  	  $inicio=($pagina-1)*$por_pagina;
	  }
	  
	  //seleccionar los registros de la tabla usuarios con LIMIT
	  $pregunta="select * from pregunta limit $inicio, $por_pagina";
    $numero_filas = (mysqli_num_rows($resultado));
	  $resultado=mysqli_query($conexion,$pregunta);
    $total_paginas = ceil($numero_filas / $por_pagina );



	  while($datos=mysqli_fetch_array($resultado))
	  {
		?>

<?php //$id_pregunta = $datos[0]; ?>

      <tr>
			<td><?php echo $datos['indicacion'];?></td>
        <td>
         <div style="width: 300px;height: 150px;overflow-y: scroll;"> <?php echo $datos['enu_mate'];?>
      </div>
       </td>
        <td><?php echo $datos['refer'];?></td>
          <td><?php echo $datos['respu1_mate'];?></td>
        	<td><?php echo $datos['respu2_mate'];?></td>
       		<td><?php echo $datos['respu3_mate'];?></td>
        	<td><?php echo $datos['respu4_mate'];?></td>
          <td><?php echo $datos['valor_pregu'];?></td>
            <td><a href="actualizar_pregunta.php?id=<?php echo $datos['id_pregu'] ?>" class="btn green" ><b>Editar</b></a> <br>            <td><a href="eliminar_pregunta.php?id=<?php echo $datos['id_pregu'] ?>" class="btn red" ><b>X</b></a> </td>

     
        
      	</tr></tbody>

      <?php } ?>

    </table></div>
        
       
        <!--<td><a href="modificar.php?id=<?//php echo $datos['id'];?>"><button type="button"opcion_a name="opcion_a" value="0"  class="btn btn-success">A</button></a></td>
         <td><a href="modificar.php?id=</?php echo $datos['id'];?>"><button type="button" name="opcion_b" value="1" class="btn btn-warning">B</button></a></td>
         <td><a href="eliminar.php?id=<//?php echo $datos['id'];?>"><button type="button" name="opcion_c" value="2" class="btn btn-danger">C</button></a></td> 
      <td><a href="modificar.php?id=<//?php echo $datos['id'];?>"><button type="button" name="opcion_d" value="3"  class="btn btn-primary">D</button></a></td>  
      
   
    
  </tbody>
</table>

 <?php
		//seleccionamos todo de la tabla pregunta
		$pregunta="select * from pregunta";
	    $resultado=mysqli_query($conexion,$pregunta);
		//contar el total de registros
		$total_registros=mysqli_num_rows($resultado);
		
		//utilizo la funcion ceil para redoendear la division del total de regisstro entre $por_pagina
		$total_paginas=ceil($total_registros/$por_pagina);
		
	?>
	<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
   <?php
	  if($total_paginas>1){
		  if($pagina!=1)
		  {
	  	  ?>
    <li>
      <a class="page-link" href="editar_pregunta.php?pagina=<?php echo ($pagina-1);?>" tabindex="-1">Anterior</a>
        
    
      </li>
    <?php
		  }
	  for($i=1;$i<=$total_paginas;$i++){
		  if($pagina==$i){
			  
		  
	  ?>
	   <li class="page-item"><a class="page-link" ><?php echo $pagina;?></a></li>
	   <?php
		  }
		  else{
		  ?>
    <li class="page-item"><a class="page-link" href="editar_pregunta.php?pagina=<?php echo $i;?>"><?php echo $i;?></a></li>
  <?php	  
	  }
	  }
			 
		  if($pagina!=$total_paginas)
		  {
			  
		  	  ?>
    <li class="page-item">
      <a class="page-link" href="editar_pregunta.php?pagina=<?php echo ($pagina+1);?>">Siguiente</a>
    </li>
    <?php
		  }
	  }
		   
		  ?>
  </ul>
</nav>		
			
		</div>


 
	<script src="js/jquery-3.2.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>
          
            </article>

        </div>
        
   </section>
        <!--footer-->

 

   

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.2.0.min.js"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>

    <!-- Malihu jQuery custom content scroller JS -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>
<?php 
      require "../require/conexion.php";

	/*$consulta2 = "SELECT * FROM pregunta WHERE id_pregu;
    $ejecutar2 = mysqli_query($conexion,$consulta2);

    $extraer=mysqli_fetch_array($ejecutar2);

    $id_pregu=$extraer['id_pregu'];
    */

				
	error_reporting(1);
 	session_start();
	extract($_POST);
	extract($_GET);
	extract($_SESSION);
	//$_SESSION["id_pregu"]=$id_pregu; 
	 
if (isset($_SESSION["di_apre"])) {
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

 ?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  
<!--	  Titulo y logo de la pagina-->
	  <title>Prueba</title>
	  <link rel="icon" type="icon/jpg" href="../image/logo.jpg">
<!--	  Sweetaler2-->
<link rel="stylesheet" type="text/css" href="../sweetalert2/dist/sweetalert2.css">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  
<body>

	
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark   bg-primary">
  <a class="navbar-brand blue darken 4" href="#" >PRUEBA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
     <ul class="navbar-nav ml-auto">
     
<!--
      <li class="nav-item">
        <a class="nav-link" href="#">Ayuda</a>
        
      </li>
-->
    <li class="nav-item">
        <a  class="nav-link" id="btnAlert">Salir</a>
		
        
      </li>
    </ul>
  
  </div>
</nav>
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
   <?php
      
  	require "../require/conexion.php";
	
		
	  
	/*  $por_pagina=1;
	  //paginacion - cantidad de registros por pagina
	  $pagina=@$_GET["pagina"];
	  
	  if(!$pagina){
		  
		  $inicio=0;
		  $pagina=1;
	  }else{
		  //la pagina inicia en 0 y se multiplica $por_pagina
	  	  $inicio=($pagina-1)*$por_pagina;
	  }
	  */
	 
		
	  //seleccionar los registros de la tabla usuarios con LIMIT
	   /*$rs=mysqli_query($con,"select * from pregunta") or die(mysqli_error());
if(!isset($_SESSION[qn]))*/	
	  $query="select * from pregunta";

$rs=mysqli_query($conexion,"select * from pregunta "); //or die(mysqli_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysqli_query($conexion,"delete from respuesta where id_aprendiz='" . $_SESSION["di_apre"] ."'"); //or die(mysqli_error());
	$_SESSION[trueans]=0;
	$_SESSION[puntaje]=0;
	$_SESSION[total_puntaje]=0;
	
}
else
{	
		if($submit=='Siguiente pregunta' && isset($ans))
		{
            
           
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);		
				mysqli_query($conexion,"insert into respuesta (id_pregu,di_apre,respu_marcada,valor_pregu,respu_corre) values ('$row[0]','".$_SESSION["di_apre"]."','$ans','$row[11]','$row[12]')") or die(mysqli_error());
				if($ans==$row[12])
				{
				$_SESSION[trueans]=$_SESSION[trueans]+1;
				$_SESSION[puntaje]=$_SESSION[puntaje]+$row[11];
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
                $_SESSION[total_puntaje]=$_SESSION[total_puntaje]+$row[11];		
		}
		else if($submit=='Obtener resultado' && isset($ans))
		{
    
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
					mysqli_query($conexion,"insert into respuesta (id_pregu,di_apre,respu_marcada,valor_pregu,respu_corre) values ('$row[0]','".$_SESSION["di_apre"]."','$ans','$row[11]','$row[12]')") or die(mysqli_error());
				if($ans==$row[12])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
							$_SESSION[puntaje]=$_SESSION[puntaje]+$row[11];
				}
				echo "<br><center><h1 class=head1> Resultado</h1></center><br>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				$_SESSION[total_puntaje]=$_SESSION[total_puntaje]+$row[11];	
				echo "<center>Puntaje: $_SESSION[puntaje]/$_SESSION[total_puntaje] ";
				echo "<br></center>";
				echo "<Table align=center><tr class=tot><td> Total preguntas:<td> $_SESSION[qn]";
				echo "<tr class=tans><td>Respuestas correctas:<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				
			
			echo "<tr class=fans><td>Respuestas incorrectas:<td> ". $w;
			echo "</table>";
			echo "<h1 align=center><a href=aprendiz.php>Volver al inicio</a> </h1>";

			
		mysqli_query($conexion,"insert into resultado(di_apre,total_respu,correctas,incorrectas,puntaje,total_puntaje) values('".$_SESSION["di_apre"]."','".$_SESSION[qn]."','".$_SESSION[trueans]."',$w,'".$_SESSION[puntaje]."','".$_SESSION[total_puntaje]."')") or die(mysqli_error());
				
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				unset ($_SESSION[puntaje]);
				unset ($_SESSION[total_puntaje]);
				exit;
		}
}
$rs=mysqli_query($conexion,"select * from pregunta");//or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Algún error ocurrió</h1>";
session_destroy();
echo "<a href=aprendiz.php> Empezar de nuevo</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
	
			//echo $datos['id_pregu'];
		  //echo $_SESSION["id_pregu"];
	
		  ?>
    <h1 class="text-center" style="padding-top:20px;"> PREGUNTA</h1>



<table class="table table-responsive">
  <thead class="thead-inverse">
    
	
		    <tr>
				<th colspan="4"><center><p style="font-size:121%;"><?php echo $row[6];?></p></center></th>
	  </tr>
	    <tr>
	  <th>Opción A</th>
      <th>Opción B</th>
      <th>Opción C</th>
      <th>Opción D</th>
     </tr>
      
      
    
  </thead>
  <tbody>
	  	<tr>
			<center><p style="font-size:121%;"><?php echo $row['2'];?></p></center>
	  	</tr>
		<tr>
     		<p><center><?php echo $row['3'];?></center></p>
     		<p><?php 
				if($row['4']!='../image/enu_img/'){
				echo "<img style='margin:auto;display:block' src='".$row['4']."'  class='img-fluid'>";	
				}else {
			
			}
				
				?></p>
		</tr>
	<tr>
			<center><p style="font-size:100%;"><?php echo $row[5];?></p></center>
	  	</tr>
		<tr>
			<td><?php echo $row[7];?></td>
        	<td><?php echo $row[8];?></td>
       		<td><?php echo $row[9];?></td>
        	<td><?php echo $row[10];?></td>
      	</tr>
       
       <?php
		  	  require "../require/conexion.php";
    echo '<form action="prueba.php" method="post">';
	

	$n=$_SESSION[qn]+1;
	echo '<td><input name="ans" type="radio" value="0" required />
        	<span>Marcar como respuesta correcta</span></td>
         <td><input name="ans" type="radio" value="1" required  />
        	<span>Marcar como respuesta correcta</span></td>
         <td><input name="ans" type="radio" value="2" required  />
        	<span>Marcar como respuesta correcta</span></td> 
      <td><input name="ans" type="radio" value="3" required  />
        	<span>Marcar como respuesta correcta</span></td>  
	
	' ;
		
   ?>
      <?php
		  
		  
			 
	  //}
	  ?>
  </tbody>
</table>

 <?php
		//seleccionamos todo de la tabla pregunta
	/*	$pregunta="select * from pregunta";
	    $resultado=mysqli_query($conexion,$pregunta);
		//contar el total de registros
		$total_registros=mysqli_num_rows($resultado);
		
		//utilizo la funcion ceil para redoendear la division del total de regisstro entre $por_pagina
		$total_paginas=ceil($total_registros/$por_pagina);
	*/	
	?>
	<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
   <?php
	  if($_SESSION[qn]<mysqli_num_rows($rs)-1){ 
echo "<tr><td><input type=submit class='btn btn-primary btn-lg' name=submit value='Siguiente pregunta'></form>";
      }else{
echo "<tr><td><input type=submit class='btn btn-danger btn-lg' name=submit value='Obtener resultado'></form>";
echo "</table></table>";}
	  /*if($total_paginas>1){
		  if($pagina!=1)
		  {*/
	  	  ?>
	  <!--<li>
      	<a class="page-link" href="prueba.php?pagina=<?php //echo ($pagina-1);?>" tabindex="-1">Anterior</a>
	  </li>->
    <?php
		  //}
		  /*
	  for($i=1;$i<=$total_paginas;$i++){
		  if($pagina==$i){
			  
		  
	  ?>
	   <li class="page-item"><a class="page-link" ><?php echo $pagina;?></a></li>
	   <?php
		  }
		  else{*/
		  ?>
   <!-- <li class="page-item"><a class="page-link" href="prueba.php?pagina=<?php //echo $i;?>"><?php //echo $i;?></a></li>-->
 
  <?php	  
	//  }
	  //}
		/*	 
		  if($pagina!=$total_paginas)
		  {
			  
		  	  ?> 
 	  <?php
	  //if($_SESSION[qn]<mysqli_num_rows($rs)-1)
/*	echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
	else
	echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
	echo "</table></table>";*/
		?>
<!--
    <li class="page-item">
      <input class="page-link" type="submit" href="prueba.php?pagina=<?php// echo ($pagina+1);?>">Siguiente
    </li>
-->
	 
    <?php
		//  }
	  //}
		   
		  ?>
		

		</ul>
		</nav>		
			
		</div>


 
	<script src="../js/jquery-3.2.1.slim.min.js"></script>
   <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
  </body>
</html>
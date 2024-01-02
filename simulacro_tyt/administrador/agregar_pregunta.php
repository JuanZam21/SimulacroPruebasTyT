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
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador</title>
    <link rel="icon" type="icon/jpg" href="../image/logo.jpg">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.css">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../css/normalize.css">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/materialize.css">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">

    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="../css/sweetalert.css">

    <!-- MaterialDark CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
     <!-- Nav Lateral -->
    
<!-- Navlateral -->
   <?php require"require_admin/navlateral_admin.php"?>



            
 
    <!-- Page content -->
    <section class="ContentPage full-width">

        <!-- header -->
   <?php require"require_admin/header_admin.php"?>

        <!-- Form add questons -->
        <div class="container">
         
                <br>
                
                
                    <form method="POST" action="agregar_pregunta_val.php" enctype="multipart/form-data" class="col s12">
                      <div class="row">
						   <div class="input-field col s6">
                                <select name="id_mate" required>
                                    <option disabled selected value="">Selecciona área</option>
                                   <?php
                                    $sql=$conexion->query("select * from materia");
 
                                        while($fila=$sql->fetch_array()){
                                            echo "<option value=". $fila['id_mate'].">".$fila['nombre_mate']."</option>";
                                        }
                                    ?>
                                </select>
                         
                            </div>
                             <div class="input-field col s6">
                                                <input placeholder="Indicación y/o titulo de la pregunta" name="indicacion"  type="text" class="validate">
                                              
                                                </div>
						</div>
						<div class="row">
                             <div class="input-field col s12">
								 <textarea placeholder="Pregunta y/o enunciado" name="enu_mate" id="textarea1" type="textarea" class="materialize-textarea"></textarea>
                             </div>
                        </div>
						
			   <div class="row">
					<div class="file-field input-field col s6">
						<div class="btn red">
							<span>Imagen</span>
							<input type="file">
						</div>
						<div class="file-path-wrapper">
						<input class="file-path validate" type="text" placeholder="Inserta una imagen como enunciado">
						</div>
						
						<input placeholder="Insertar una imagen" name="enu_img" type="file" class="validate">
					</div>
					<div class="input-field col s6">
                    	<input placeholder="Copyright o referencia del texto y/o imagen" name="refer" type="text" class="validate">
                    </div>
				</div>

			<div class="row">
                <div class="input-field col s12">
                    	<input placeholder="Enunciado de las respuestas" name="enu_respu" type="text" class="validate">
                    </div>        
			</div>           
                        <div class="row">
                            <div class="col s12">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="" name="respu1_mate" id="name" required type="text" class="validate">
                                                <label for="respuesta1">Opción A</label>
									<p>
									  <label>
										<input name="group1" type="radio" value="0" required  />
										<span>Marcar como respuesta correcta</span>
									  </label>
									</p>
          
                                            </div>
                                           
                                        </div><br>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="input-field col s12 ">
                                                <input placeholder=""  name="respu2_mate" required type="text" class="validate">
                                                <label for="respuesta2">Opción B</label>
                                   	<p>
										<label>
											<input name="group1" type="radio" value="1" required   />
											<span>Marcar como respuesta correcta</span>
										</label>
    								</p>
          
                                            </div>
                                            
                                        </div><br>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder=""  name="respu3_mate" required type="text" class="validate">
                                                <label for="respuesta4">Opción C</label>
                                                <div class="input-field col s12">	
												<p>
      													<label>
        													<input name="group1" type="radio" value="2"  required  />
        													<span>Marcar como respuesta correcta</span>
      														</label>
    												</p>
         									</div>
                                         
                                        </div><br>
										</div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="" name="respu4_mate" required type="text" class="validate">
                                                <label for="respuesta4">Opción D</label>
                                                <div class="input-field col s12">
                                        <p>
      										<label>
        										<input name="group1" type="radio" value="3" required  />
        											<span>Marcar como respuesta correcta</span>
      										</label>
    										
										</p>
                                            </div>
                                            
                                            </div>
										</div>
											
											<div class="row">
												<div class="col s4">
													 <p></p>
											</div>
 											<div class="input-field col s4">
                                                <input placeholder=" De 1 a 5" name="valor_pregu" min="1" max="5"  required type="number" class="validate">
                                                <center><label for="valor_pregu">Valor pregunta</label></center>
											</div>
                                            
												<!--<input type="text" class="datepicker">-->
												<div class="col s4">
													 <p></p>
											</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
							 <div class="input-field col s12">
                          	<center>
							  <input type="submit" class="btn red " Value="Agregar pregunta">
							</center>
							</div> 
                        </div>
               
                    </form>

        </div>
<!-- END Form add questons -->
   
        <!-- Footer -->
          <?php require"require_admin/footer_admin.php"?>
    </section>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-2.2.0.min.js"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="../js/materialize.min.js"></script>

    <!-- Malihu jQuery custom content scroller JS -->
    <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- MaterialDark JS -->
    <script src="../js/main.js"></script>

    <script src="../js/sweetalert.min.js"></script>

     <script>
        $(document).ready(function () {
            $('select').formSelect();
        });

        function onSubmit() {
            if ($("#drpArea").val() === "" || $("#textarea1").val() === "" || $("#respuesta1").val() === "") {
                return swal("Revisar los campos del formulario");

            }
            else{
                swal({
                    type: 'success',
                    title: 'Guardar...',
                    text: 'Registro guardado con exito.'
                })
                $("#frmPreguntas").trigger('reset');
            }
        }
    </script>
</body>

</html>
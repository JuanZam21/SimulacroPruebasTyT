<?php 
	session_start();
	session_destroy();
	
	echo "
		<script>
			window.location='../index.html'
		</script>
	";
	

?>
<!--
<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' type='text/css' href='sweetalert2/dist/sweetalert2.css'>
</head>

<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'> </script>
<script src='sweetalert2/dist/sweetalert2.js'></script>

</body>
</html>
-->
	
<script>
/*  	swal({
		title:'Sesíon cerrada', 
		type:'succes',
		showCancelButton:true,
		confirmButtonText:'OK',
	}).then((result) => {
		if (result.value) {
			window.location='index.html'
		
		}else if(result.dismiss === swal.DismissReason.cancel){
			window.location='prueba.php'
		}
	})

 */ 
</script>


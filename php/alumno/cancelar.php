<?php
	//Inicia Sesión
	session_start();

	//Archivo de conexión a la base de datos.
	include_once "../../conexion.php";

	//Código de Eliminación de Asesoría.
	$idAsesoria=$_SESSION['idAsesoria'];
	$sql="DELETE FROM asesoria WHERE idAsesoria='$idAsesoria'";
	$resultado=mysqli_query($con,$sql) or die(mysqli_error());

	//Condicional para el botón Regresar
	if(isset($_POST['btnRegresar'])&& isset($_POST['btnRegresar'])=="Regresar")
	{
	    header("Location: cancelaral.php");
	}

	else
	{

?>
		<!--Documento HTML-->
		<!DOCTYPE html>
		<html>

			<head> 
				<!--Acentos-->
				<meta charset="utf-8"> 

				<!--Título-->
				<title>Perfil de Alumno</title> 

				<!--Hojas de Estilo-->
				<link rel="stylesheet" type="text/css" href="estilos.css" media="screen"/>
				<link rel="stylesheet" type="text/css" href="solicitar.css" media="screen"/>

				<!--Responsive-->
				<meta name="viewport" content="width=device-width, initial-scale=1">
				
				<!--Enlaces a Bootstrap, JQuery y Ajax-->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			</head>

			<!--Body-->
			<body class="fondo">
				<main>
					<!--Encabezado-->
					<br>
					<div class="container"><center><h1>Asesorías</h1></center></div>
					<div class="container"><center><h1>Académicas TICS</h1></center></div>
					<div class="table-responsive">
						
						<!--Aviso de Eliminación Exitosa-->
						<form action="#" method="post">				
							<br>
							<br>
							<center><h2>Su asesoría fue eliminada exitosamente.</h2></center>
							<br>
							<center><tr><input type="submit" value="Regresar" name="btnRegresar" id="btnRegresar" style="width:100px;height:50px;margin-right:20px;background:#D6ECDE;font-family:calibri;font-size:1.3em;"></tr>
							<br>
							<br>
						</form>
					</div>
				</main>

				<!--Cierra Script PHP-->
				<?php 
					}
				?>

				<!--Footer-->
				<footer>
					<div style="background-color:#e5e5e5;text-align:center;padding:10px;margin-top:7px;">© Copyright GDS0132 | Alyn | Fernando | Antonio | Armando |</div>
				</footer>
			</body>
		</html>
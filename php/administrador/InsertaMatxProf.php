<?php // Este script es el que realizara la inserccion a la base de datos.
	session_start(); 

	require "../../conexion.php"; //Este codigo hace referencia al codigo que abre la conexion xon la base de datos.

	// Recuperar en variables de php, los datos que estan en las variables de sesion.
	$idMateria=$_SESSION['idMat'];
	$idUsuario=$_SESSION['idProf'];
	
	//Generar la cadena sql, que contiene la instruccion en sql que se realizara en la base de datos.
	$sql="INSERT INTO materiaxprofesor VALUES ('$idMateria', '$idUsuario')";

	//echo $sql;
	//ejecuta la operacion para que se realice la insercion de los datos el la base de datos.

	$resultadoInsertaMat=mysqli_query($connect,$sql) or die (mysqli_error());
	//Ejecutamos la operacion sobre la base de datos.

	header("Location: actualizarmp.php");
?>
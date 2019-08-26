<?php
	
	require ('../conexion.php');
	
	$idMateria = $_POST['idMateria'];
	
	$queryM = "SELECT U.nombreP,U.idUsuario FROM usuario as U INNER JOIN impartenma as MP ON U.idUsuario = MP.idUsuario WHERE MP.idMateria = '$idMateria' ORDER BY U.nombreP";
	$resultadoM = $mysqli0->query($queryM);
	
	$html= "<option value='0'>Selecciona profesor</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['idUsuario']."'>".$rowM['nombreP']."</option>";
	}
	
	echo $html;
?>		

<?php
	require ('../conexion.php');
	
	$idUsuario = $_POST['idUsuario'];
	
	$queryL = "SELECT h.dia,h.idHorario FROM horario AS h INNER JOIN contihorario AS hp ON h.idHorario = hp.idHorario where hp.idUsuario = '$idUsuario' ORDER BY h.dia";
	$resultadoL=$mysqli0->query($queryL);

	$htmlL= "<option value='0'>Selecciona fecha</option>";
	
	while($rowL = $resultadoL->fetch_assoc())
	{
		$htmlL.= "<option value='".$rowL['idHorario']."'>".$rowL['dia']."</option>";
	}
	echo $htmlL;
?>

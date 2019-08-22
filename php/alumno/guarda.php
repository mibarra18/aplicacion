<?php 
	session_start();

	require "conexion.php"; //estamos incluyendo el script que hace la conexion a la base de datos 


	//$usr=$_SESSION['usuario'];<--este lo activas hasta que tengas el logn	
	$mat=$_SESSION['cmat'];
	$pro=$_SESSION['cpro'];
	$cf=$_SESSION['cfe'];
	$tema=$_SESSION['tema'];
	$estatus=1;



	$sql= "INSERT INTO asesoria(idMateria,tema,idEstatus,idHorario) VALUES('$mat','$tema',1,'$cf')";
	$resultado=mysqli_query($mysqli0,$sql) or die(mysqli_error());
	

?>

<!doctype html>
    <head>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo.css">
        <meta charset="utf-8">
        <title>Cambios guardados</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href='css/fullcalendar.css' rel='stylesheet' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="calendar.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href="calendar.min.css" rel="stylesheet">
    </head>
    <body class="fondo">
        <main>
            <div class="container"><h1>Solicitud de asesoria completa </h1></div>
           
            <button type="button" class="btn btn-primary" onclick="location.href='solicitarAsesoria.php'"><span ></span> Regresar</button><br>
        </main>
    </body>
</html>

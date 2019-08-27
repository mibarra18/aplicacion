<?php 
	session_start();

	require "conexion.php"; //estamos incluyendo el script que hace la conexion a la base de datos 


	//$usr=$_SESSION['usuario'];<--este lo activas hasta que tengas el logn	
	$mat=$_SESSION['cmat'];
	$pro=$_SESSION['cpro'];
	$cf=$_SESSION['cfe'];
	$tema=$_SESSION['tema'];
	$estatus=1;
    $usr=$_SESSION['usr'];

    $nomPro= "SELECT idUsuario From usuario WHERE usuario.username='$usr'";
    
    $resultadox=mysqli_query($mysqli0,$nomPro) or die(mysqli_error());
    $arreglox=mysqli_fetch_array($resultadox) or die(mysqli_error());
    $idUsuario=$arreglox[0];


    $sql= "INSERT INTO asesoria(tema,idEstatus,idMateria,idHorario) VALUES('$tema','$estatus','$mat','$cf')";
    $resultado=mysqli_query($mysqli0,$sql)or die(mysqli_error());
    $sql2="SELECT idAsesoria from asesoria where tema='$tema' and idEstatus='$estatus' and idMateria='$mat' and idHorario='$cf'";
    $resultadoA=mysqli_query($mysqli0,$sql2) or die(mysqli_error());
    $arregloA=mysqli_fetch_array($resultadoA) or die(mysqli_error());
    $idAsesoria=$arregloA[0];

    $sql3= "INSERT INTO asesoriaalumno(idAsesoria,idUsuario) VALUES('$idAsesoria','$idUsuario')";
    $resultado3=mysqli_query($mysqli0,$sql3)or die(mysqli_error());
    $sql4= "INSERT INTO asesoriaprofesor(idAsesoria,idUsuario) VALUES('$idAsesoria','$pro')";
    $resultado4=mysqli_query($mysqli0,$sql4)or die(mysqli_error());


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
    <body background="../../imagenes/fundo.jpg">
        <main>
            <div class="container"><h2>Solicitud de asesoria completada </h2></div>
           
            <button type="button" class="btn btn-primary" onclick="location.href='solicitarAsesoria.php'"><span ></span> Regresar</button><br>
        </main>
    </body>
</html>

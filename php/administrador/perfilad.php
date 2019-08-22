<?php
include_once '../../conexion.php';
session_start();

if (!isset($_SESSION['tipo'])){

    header('location: ../../index.php');
}else{

    if($_SESSION['tipo'] != 3){

        header('location: ../../index.php');
    }
}


$user=$_SESSION['tipo'];

$sql="SELECT * FROM usuario WHERE idUsuario=1 AND idTipoUsuario='$user'";

        $consulta=mysqli_query($connect,$sql);
        $arreglo=mysqli_fetch_array($consulta);
        $resultado=mysqli_query($connect,$sql);

        
        $idUsuario=$arreglo[0];
        $username=$arreglo[2];
        $nombre=$arreglo[4];
		
?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo.css">

    <title>Asesorias UTNG</title>



<body background="../../imagenes/fundo.jpg">

    <div class="container ">

        <div class="row">
            <div class="col-md-7">

            </div>

            <div class="col-md-4">

                <nav class="navbar navbar-expand-lg navbar-light ">


                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@<?php echo "$username"?></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../../salir.php">Cerrar sesión</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>




        <!--seccion header-->
        <div class="row cabecera">
            <div class="col-md-4">
                <img src="../../imagenes/ut.jpeg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h1>Asesorias Academicas UTNG</h1>
            </div>

        </div>






        <!--seccion barra de contenido-->

        <div class="row menu">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="#">|   Inicio   |</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="actualizarad.php" tabindex="-1"aria-disabled="true">|   Actualizar profesores   |</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">|   Reportes   |</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="reporteasesorias.php">Reporte de Asesorias</a>
                                    <a class="dropdown-item" href="reportehorario.php">Reporte de Horario</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="actualizarmad.php" tabindex="-1" aria-disabled="true">|   Actualizar materias   |</a>
                            </li>
                          
                        </ul>
                    </div>
                </nav>

            </div>
        </div>

        <div class="row home">
            <div class="col-md-1">
            </div>
           
        <div class="col-md-7">
            <h2>Datos del administrador</h2>
            <br>
            <br>
            <p>Nombre del administrador:</p> 
            <input type="text" readonly="readonly" class="form-control" name="nombre" id="Nombre" value="<?php echo "$nombre"?>"  />
            <br>
            <p>Área:</p>
            <input type="text" class="form-control" id="validationCustom01" readonly="readonly"  value="<?php echo "$carrera"?>">
            <br>
        </div>
        
        <div class="col-md-4">

            <center>
                <img src="../../imagenes/profe.png" width="200px" class="img-fluid" alt="Responsive image">
                <div class="col-md-7">
                </div>
                <div class="col-md-5">
                <p>Número de Empleado:</p>
                <input type="text" readonly="readonly" class="form-control" name="nombre" id="Nombre" value="<?php echo "$idUsuario"?>"  />
                </div>
            </center>

        </div>

        </div>

        <!--seccion pie de página-->
        <div class="row">
            <div class=col-md-12>
                <footer class="pie">
                    Derechos reservados 2019
                </footer>

            </div>

        </div>




    </div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
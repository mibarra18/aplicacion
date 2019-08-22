<?php
include_once '../../conexion.php';
session_start();

if (!isset($_SESSION['tipo'])){

    header('location: ../../index.php');
}else{

    if($_SESSION['tipo'] != 1){

        header('location: ../../index.php');
    }
}

$user=$_SESSION['tipo'];

$sql="SELECT * FROM usuario WHERE idUsuario=1218100520 AND idTipoUsuario='$user'";

        $consulta=mysqli_query($connect,$sql);
        $arreglo=mysqli_fetch_array($consulta);
        $resultado=mysqli_query($connect,$sql);

        
        $idUsuario=$arreglo[0];
        $username=$arreglo[2];
        $nombre=$arreglo[4];
        $grupo=$arreglo[6];
        $carrera=$arreglo[7];

		

?>



<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo.css">

    <title>Inicio</title>


<body background="../../imagenes/fundo.jpg">

    <div class="container ">

        <div class="row">
            <div class="col-md-7">

            </div>

            <div class="col-md-4">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">


                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="notificacionesal.html">Notificaciones</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" name="username" href="#" id="navbarDropdownMenuLink" role="button"
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
                                <a class="nav-link" href="solicitarAsesoria.php" tabindex="-1"aria-disabled="true">|   Solicitar asesoria   |</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cancelaral.php" tabindex="-1" aria-disabled="true">|   Cancelar asesoria   |</a>
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
            <h2>Datos del alumno</h2>
            <br>
            <br>
            <p>Nombre del alumno:</p> 
            <input type="text" readonly="readonly" class="form-control" name="nombre" id="Nombre" value="<?php echo "$nombre"?>"  />
            <br>
            <p>Carrera:</p>
            <input type="text" class="form-control" readonly="readonly" name="carrera" id="validationCustom01" value="<?php echo "$carrera"?>"/>
            <br>
            <p>Grupo:</p>
            <input type="text" class="form-control" readonly="readonly" name="grupo" id="validationCustom01" value="<?php echo "$grupo"?>"/>
            <p>Cuatrimestre:</p>
            <input type="text" class="form-control"  readonly="readonly" id="validationCustom01" placeholder="Tercero">
            <br>
            </div>
        
        <div class="col-md-4">

            <center>
                <img src="../../imagenes/profe.png" class="img-fluid" alt="Responsive image">

                <div class="col-md-5">
                </div>
                <div class="col-md-7">
                <p>Numero de control:</p><input type="text" readonly="readonly" name="idUsuario" class="form-control" id="validationCustom01" value="<?php echo "$idUsuario"?>"/>
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
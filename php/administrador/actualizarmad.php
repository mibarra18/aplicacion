<?php
include_once '../../conexion.php';
session_start();

$user=$_SESSION['tipo'];
$a=$_SESSION['username'];

$sql="SELECT * FROM usuario WHERE username='$a' AND idTipoUsuario='$user'";

        $consulta=mysqli_query($connect,$sql);
        $arreglo=mysqli_fetch_array($consulta);
        $resultado=mysqli_query($connect,$sql);

        
        $idUsuario=$arreglo[0];
        $username=$arreglo[2];
        $nombre=$arreglo[4];
        $carrera=$arreglo[8];

/*Requerir conexion con la BD*/
    $host = "localhost";
    $usuario ="root";
    $clave ="";
    $db = "asesoria";
   
   $conexion = new mysqli($host, $usuario, $clave, $db);

   if($conexion->connect_error){
     die("Conexion fallida: " . $conexion->connect_error);
   }

  $message = '';

  if (isset($_POST['idMateria']) && isset($_POST['nombreM'])){
    /*Vincular parametros*/
    $idMateria = $_POST ['idMateria'];
    $nombreM = $_POST ['nombreM'];

    
    /*Agregar datos a la BD*/
    $sql1 = "INSERT INTO materia (idMateria, nombreM) 
    VALUES ('$idMateria', '$nombreM')"; 
    
    /*Ejecutar consulta para evitar usuarios repetidos*/

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM materia WHERE idMateria = '$idMateria'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
      $verificar_usuario = "Una materia ya esta registrada con esos datos";

      include_once 'actualizarmad.php';
    }

  if ($conexion->query($sql1) === true){
    $message = 'Registro exitoso!!';
} else{
    die ("Error al registrar la materia" . $conexion->error);
}
$conexion->close();

}
?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo.css">

    <title>Actualizar</title>



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
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@<?php echo "$a"?></a>
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
                    <a class="navbar-brand" href="perfilad.php">| Inicio |</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="actualizarad.php" tabindex="-1" aria-disabled="true">|
                                    Actualizar
                                    profesores |</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">| Reportes |</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="reporteasesorias.php">Reporte de Asesorias</a>
                                    <a class="dropdown-item" href="reportehorario.php">Reporte de Horario</a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="actualizarmad.php" tabindex="-1" aria-disabled="true">|
                                    Actualizar materias |</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="actualizarmp.php" tabindex="-1" aria-disabled="true">|
                                    Actualizar materias a profesor |</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>

        <div class="row home">
      <div class="col-md-12">
        <h2 class="recuperar">Registro de nueva Materia</h2>

        <form action="#" method="POST">

          

          <div class="form-row">
             <div class="form-group col-md-6">
              <label for="inputEmail4">Id Materia</label>
              <input type="idUsuario" name="idMateria" class="form-control" id="idMateria" placeholder="Ej. AW">
            </div>

            <div class="form-group col-md-6">
              <label for="inputEmail4">Nombre de la Materia</label>
              <input type="text" name="nombreM" class="form-control" id="nombreM" placeholder="Aplicaciones Web">
            </div>

          </div>
          <input type="submit" class="btn btn-primary" value="Registrar" >
         
        </form>

            

            

       
      </div>
    </div>

    <!--seccion pie de página-->
    <div class="row">
      <div class="col-md-12">
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
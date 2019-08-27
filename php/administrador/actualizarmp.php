<?php
session_start(); //Esta dentro de un inicio de sesion

//ComboBox

require "../../conexion.php";

//Profesor
$sql = "SELECT idUsuario, nombreP, idTipoUsuario FROM usuario WHERE (idTipoUsuario =2)";

$resultadoProf = mysqli_query($connect,$sql) or die("Problemas al Consultar".mysqli_error($connect));

$resultadoProf1 = mysqli_query($connect,$sql) or die("Problemas al Consultar".mysqli_error($connect));

$resultadoProf2 = mysqli_query($connect,$sql) or die("Problemas al Consultar".mysqli_error($connect));

//Materia
$sql1 = "SELECT idMateria, nombreM FROM materia";

$resultadoMat = mysqli_query($connect,$sql1) or die("Problemas al Consultar".mysqli_error($connect));

$resultadoMat1 = mysqli_query($connect,$sql1) or die("Problemas al Consultar".mysqli_error($connect));

$resultadoMat2 = mysqli_query($connect,$sql1) or die("Problemas al Consultar".mysqli_error($connect));

//ComboBox

if (isset($_POST['btnInsertar']) && isset($_POST['btnInsertar'])=="Inserta") {
    $_SESSION['idMat'] = $_POST['sltMatIns'];
    $_SESSION['idProf'] = $_POST['sltProfIns'];
    header("Location: InsertaMatxProf.php");
}

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
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">|
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

        
         
        <form name="formAdmProf" action="#" method="post">
			<p>
				<h2>Asignar Materia</h2>
			</p>
			
			<p>
			<label>Materia</label>
			<select name="sltMatIns" class="custom-select mb-3-3" title="Seleccionar Profesor" id="sltMatIns">
				<option selected="">Selecciona Materia</option>
				<?php while ($rowMat=mysqli_fetch_array($resultadoMat)) { ?>
				<option value="<?php echo $rowMat['idMateria']; ?>"><?php echo $rowMat['nombreM']; ?></option>
				<?php } ?>
			</select>
			</p>
			<p>
			<label>Profesor</label>
			<select name="sltProfIns" class="custom-select mb-3-3" title="Seleccionar Profesor" id="sltProfIns">
				<option selected="">Selecciona Profesor</option>
				<?php while ($rowProf=mysqli_fetch_array($resultadoProf)) { ?>
				<option value="<?php echo $rowProf['idUsuario']; ?>"><?php echo $rowProf['nombreP']; ?></option>
				<?php } ?>
			</select>
			</p>
			<p>
				<input type="submit" value="Insertar" class="btn btn-primary" name="btnInsertar" id="btnInsertar"/>
			</p>
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
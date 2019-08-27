<?php
session_start();
include_once "../../conexion.php";
include_once "conexion.php";

//Archivo de conexión a la base de datos.

$usr=$_SESSION['tipo'];
$a=$_SESSION['username'];



$sql2="SELECT asesoria.idAsesoria, asesoria.tema, estatus.estatus, materia.nombreM, horario.dia, usuario.nombreP, lugar.nomLug, usuario.idUsuario,asesoriaprofesor.idUsuario FROM asesoria, usuario, estatus, materia, horario, lugar, asesoriaprofesor WHERE asesoriaprofesor.idUsuario=usuario.idUsuario ";

		$consulta2=mysqli_query($connect,$sql2);
		$arreglo2=mysqli_fetch_array($consulta2);
		$resultado2=mysqli_query($connect,$sql2);

		$idAsesoria=$arreglo2[0];
		$tema=$arreglo2[1];
        $estatus=$arreglo2[2];
		$nombreM=$arreglo2[3];
        $dia=$arreglo2[4];
        $nombreP=$arreglo2[5];
        $nomLug=$arreglo2[6];

        if(isset($_POST['btnCancelar'])&& isset($_POST['btnCancelar'])=="Cancelar")
        {
            $sql="DELETE FROM asesoria WHERE idAsesoria='$idAsesoria'";
            $resultado=mysqli_query($connect,$sql) or die(mysqli_error());
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

    <title>Cancelar asesoría</title>



<body background="../../imagenes/fundo.jpg">

    <div class="container">

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
                    <a class="navbar-brand" href="perfilal.php">|   Inicio   |</a>
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
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">|   Cancelar asesoria   |</a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>
        </div>


        <div class="row contenido">
        <style>
          table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
          }

          td,
          th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }

          tr:nth-child(even) {
            background-color: #dddddd;
          }
        </style>
        </head>


<form action="#" method="POST"
        <center><h2>Cancelar asesorias</h2></center>

          
     
     <table role="table">
  <thead role="rowgroup">
    <tr role="row">
      <th role="columnheader">Número</th>
      <th role="columnheader">Tema</th>
      <th role="columnheader">Estatus</th>
      <th role="columnheader">Materia</th>
      <th role="columnheader">Horario</th>
      <th role="columnheader">Profesor</th>
      <th role="columnheader">Lugar</th>
      <th role="columnheader">Cancelar</th>
   
    </tr>
  </thead>
  <tbody role="rowgroup">
  <?php
	
    while ($row=mysqli_fetch_array($resultado2)) {
	?>
    <tr role="row">
            <td><p  id="idAsesoria" name="idAsesoria" ><?php echo "$idAsesoria"?></p></td>
            <td><p  id="tema" name="tema" ><?php echo "$tema"?></p></td>
            <td><p  id="estatus" name="estatus" ><?php echo "$estatus"?></p></td>
            <td><p  id="nombreM" name="nombreM" ><?php echo "$nombreM"?></p></td>
            <td><p  id="dia" name="dia" ><?php echo "$dia"?></p></td>
            <td><p  id="nombreP" name="nombreP" ><?php echo "$nombreP"?></p></td>
            <td><p  id="nomLug" name="nomLug" ><?php echo "$nomLug"?></p></td>
            <td><input type="submit" value="Cancelar" name="btnCancelar" id="btnCancelar"></td>
    </tr>
   
    <?php
    }

    ?>
    
    
    
   
  </tbody>
</table>
</form>    

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






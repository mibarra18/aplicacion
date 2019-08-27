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
        $carrera=$arreglo[7];
		
 $sql1="SELECT * FROM usuario WHERE idUsuario>1 AND idUsuario<1000 AND idTipoUsuario=2";
        $consulta1=mysqli_query($connect,$sql1);
        $arreglo=mysqli_fetch_array($consulta1);
        $resultado1=mysqli_query($connect,$sql1);

        $idUsuario=$arreglo[0];
        $username=$arreglo[2];
        $nombreP=$arreglo[5];
        $carrera=$arreglo[7];


        if(isset($_POST['btnBaja'])&& isset($_POST['btnBaja'])=="Baja")
        {
            $sql="DELETE FROM usuario WHERE idUsuario='$idUsuario'";
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">| Actualizar profesores
                  |</a>
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
                <a class="nav-link" href="actualizarmad.php" tabindex="-1" aria-disabled="true">| Actualizar materias  |</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="actualizarmp.php" tabindex="-1" aria-disabled="true">| Actualizar materias a profesor |</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>

  <div class="row home">  
  <div class="col-md-12">
  
  <center><h2>Actualizar profesores</h2></center>
  <br>
  <center>
  
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


<form action="#" method="POST">
       

          
     
    <center> <table role="table>
  <thead role="rowgroup">
          
    <tr role="row">
      <td role="columnheader">Número de empleado</td>
      <td role="columnheader">Nombre</td>
      <td role="columnheader">Baja</td>
   
    </tr>
  </thead>
  <tbody role="rowgroup">
  <?php

  $sql2="SELECT * from usuario WHERE idTipoUsuario=2";
  $result=mysqli_query($connect,$sql2);
	while ($row=mysqli_fetch_array($result)) {
	?>
    <tr role="row">
            
            <td><p  id="idUsuario" name="idUsuario" ><?php echo $row['idUsuario']?></p></td>
            <td><p  id="nombre" name="nombre" ><?php echo $row['nombreP']?></p></td>
            <td><input type="submit" value="Baja" name="btnBaja" id="btnBaja"></td>
    </tr>
   
    <?php
     }
    
    ?>
    
    
    
   
  </tbody>
</table></center>
</form>  </center>      
<br>
<br>
<form action="registrop.php" method="GET">
<center><input type="submit" class="btn btn-primary" value="Registrar nuevo profesor"></center>
</form>


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
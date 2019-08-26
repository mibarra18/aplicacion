<?php
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

  if (isset($_POST['idUsuario']) && isset($_POST['correo']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nombreP']) && isset($_POST['idTipoUsuario']) && isset($_POST['carrera'])){
    /*Vincular parametros*/
    $idUsuario = $_POST ['idUsuario'];
    $correo = $_POST ['correo'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];
    $nombreP = $_POST ['nombreP'];
    $idTipoUsuario = $_POST ['idTipoUsuario'];
    $carrera = $_POST ['carrera'];
    
    /*Agregar datos a la BD*/
    $sql = "INSERT INTO usuario (idUsuario, correo, username, password, nombreP, idTipoUsuario, carrera) 
    VALUES ('$idUsuario', '$correo', '$username', '$password', '$nombreP', '$idTipoUsuario', '$carrera')"; 
    
    /*Ejecutar consulta para evitar usuarios repetidos*/

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo = '$correo'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
      $verificar_usuario = "Alguien ya esta registrado con esos datos";

      include_once 'registrop.php';
    }

  if ($conexion->query($sql) === true){
    $message = 'Registro exitoso!!';
} else{
    die ("Error al registrarse" . $conexion->error);
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

  <title>Registro</title>
</head>

<body background="../../imagenes/fundo.jpg">

  <div class="container">

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

    <div class="row">
      <div class="col-md-12">
        <h2 class="recuperar">Registro de nuevo Profesor</h2>

        <form action="#" method="POST">

          

          <div class="form-row">
             <div class="form-group col-md-3">
              <label for="inputEmail4">No. Empleado</label>
              <input type="idUsuario" name="idUsuario" class="form-control" id="idUsuario" placeholder="No. Empleado">
            </div>

            <div class="form-group col-md-5">
              <label for="inputEmail4">Email</label>
              <input type="correo" name="correo" class="form-control" id="correo" placeholder="Email">
            </div>

            <div class="col-md-4">
                <label for="validationCustomUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="username" name="username" class="form-control" id="username" placeholder="Username"
                      aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
            </div>
          </div>
         
            <div class="form-row">

              <div class="form-group col-md-4">
                <label for="inputPassword4">Contraseña</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>

              <div class="col-md-8">
                <label for="validationCustom01">Nombre Completo</label>
                <input type="nombre" name="nombreP" class="form-control" id="nombreP" placeholder="Nombre Completo" required>
              </div>

            </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Ingresa el número del tipo de usuario</label>
              <input type="idTipoUsuario" name="idTipoUsuario" class="form-control" id="idTipoUsuario" placeholder="2-Profesor">
            </div>


            <div class="form-group col-md-6">
              <label for="inputEmail4">Programa Educativo</label>
              <input type="carrera" name="carrera" class="form-control" id="carrera" placeholder="Programa Educativo">
            </div>

        </div>
<br>
        <div class="form-row">

            

            <div class="col-md-12 ">
                <center>
                    <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Registrar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="10" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Aviso</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Registro completado
                                </div>
                                <div class="modal-footer">
                                        
                                    <button data-dismiss="modal" type="button" class="btn btn-primary">Aceptar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </center>
            </div>
            <div class="col-md-12 ">
            <br>
            <br>
            <center><a class="btn btn-primary" href="actualizarad.php">RGRESAR</a></center>
             </div>          
        </div>

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
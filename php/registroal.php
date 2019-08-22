<?php
/*Requerir conexion con la BD*/
require '../conexion.php';

  $message = '';

  if (!empty($_POST['idUsuario']) && !empty($_POST['correo']) && !empty($_POST['password']) && !empty($_POST['nombre']) && !empty($_POST['username']) && !empty($_POST['idGrupo'])&& !empty($_POST['idTipoUsuario'])) {
      /*Agrgar datos a la BD*/
      $sql = "INSERT INTO usuario (idUsuario, correo, username, password, nombre, idGrupo, idTipoUsuario) 
      VALUES (:idUsuario, :correo, :username, :password, :nombre, :idGrupo, :idTipoUsuario)"; 
      /*Ejecutar metodo prepare (Prepara una consulta)*/
      $stmt = $connect->prepare($sql);
      /*Vincular parametros*/
      $stmt->bindParam(':idUsuario', $_POST['idUsuario']);
      $stmt->bindParam(':correo', $_POST['correo']);
      $stmt->bindParam(':username', $_POST['username']);
      $stmt->bindParam(':password', $_POST['password']);
      //$password = password_hash($_POST['password'], PASSWORD_BCRYPT); /*Almacenar en una variabla y cifrar la PASS*/
     // $stmt->bindParam(':password', $password);
      $stmt->bindParam(':nombre', $_POST['nombre']);
      $stmt->bindParam(':idGrupo', $_POST['idGrupo']);
      $stmt->bindParam(':idTipoUsuario', $_POST['idTipoUsuario']);


    if ($stmt->execute()){
      $message = 'Tu usuario ha sido creado exitosamente';
    } else{
      $message = 'Lo sentimos ha ocurrido un error al intentar registrarlo';
    }
  }
?>

<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">

  <title>Registro</title>
</head>

<body background="../imagenes/fundo.jpg">

  <div class="container">

  <?php if(!empty($message)): ?>
  <p> <?= $message ?> </p>
  <?php endif; ?>

    <!--seccion header-->
    <div class="row cabecera">
      <div class="col-md-4">
        <img src="../imagenes/ut.jpeg" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-md-8">
        <h1>Asesorias Academicas UTNG</h1>
      </div>

    </div>

    <!--seccion barra de contenido-->

    <div class="row">
      <div class="col-md-12">
        <h2 class="recuperar">Registro de nuevo usuario</h2>
        <form action="#" method="POST">
          <div class="form-row">
             <div class="form-group col-md-3">
              <label for="inputEmail4">No. Control</label>
              <input type="idUsuario" name="idUsuario" class="form-control" id="idUsuario" placeholder="No. Control">
            </div>
            <div class="form-group col-md-5">
              <label for="inputEmail4">Email</label>
              <input type="correo" name="correo" class="form-control" id="correo" placeholder="Email">
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Contraseña</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
          </div>
         
            <div class="form-row">
              <div class="col-md-8">
                <label for="validationCustom01">Nombre Completo</label>
                <input type="nombre" name="nombre" class="form-control" id="nombre" placeholder="Nombre Completo" required>
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
              <div class="col-md-8 mb-8">
                <label for="validationCustom01">Ingresa el número de tu Grupo:</label>
                <input type="text" name="idGrupo" class="form-control" id="IdGrupo" placeholder="1-GIR0131  2-GIR0132  3-No aplica  4-GDS0131  5-GDS0132  6-GDD0131" required>
              </div>
              <div class="col-md-4 mb-4">
                <label for="validationCustom02">Ingresa el número del tipo de usuario: </label>
                <input type="text" name="idTipoUsuario" class="form-control" id="idTipoUsuario" placeholder="1-Alumno   2-Profesor" required>
              </div>
            </div>
            <input type="submit" value="Registrarse">
          
          <a href="../index.php">¿Ya tienes una cuenta? Inicia Sesión</a>
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
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>

</html>
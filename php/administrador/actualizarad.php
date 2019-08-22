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
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@admin</a>
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
                <a class="nav-link" href="actualizarmad.php" tabindex="-1" aria-disabled="true">| Actualizar Datos
                  |</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div class="row home">
      <div class="col-md-2">
      </div>

      <div class="col-md-8">

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



        <h2>Actualizar profesores</h2>

        <table>
          <tr>
            <th>Profesor</th>
            <th>Estado</th>

          </tr>
          <tr>
            <td>Daniel Sustaita Cruces</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td>Gerardo Reyna Ibarra</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Gerardo Parra Rodriguez</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td>Guilermo Hernandez Ojeda</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td>Gabriel barrón Rodriguez</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>

          </tr>
          <tr>
            <td>Ricardo Muro Gomez</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>José Refugio Rubio Hernández </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Ricardo Muro </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Daniel Eduardo Torrejon Rojel </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Elsa Veronica Martinez Mejia</td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
          <tr>
            <td>Pamela Villanueva Gaitan </td>
            <td>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios1" value="option1"
                  checked>
                <label class="form-check-label" for="exampleRadios1">
                  Contrato renovado
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="exampleRadios" id="exampleRadios2"
                  value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Contarto no renovado
                </label>
              </div>
            </td>
          </tr>
        </table>

      </div>
      <div class="col-md-2">
      </div>


      <div class="col-md-12 ">
        <br>
        <center>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Agregar
            nuveo profesor</button>

          <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="col-md-12">
                  <h2 class="recuperar">Registro de nuevo profesor</h2>

                </div>
                <form class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom01">Nombre(s)</label>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre(s)" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom02">Apellido Paterno</label>
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom02">Apellido Materno</label>
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustomUsername">Número de empleado</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <input type="text" class="form-control" id="validationCustomUsername" placeholder="Número"
                            aria-describedby="inputGroupPrepend" required>
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">

                      <button data-dismiss="modal" type="button" class="btn btn-primary">Guardar</button>
                    </div>

                  </div>
              </div>
            </div>
          </div>
        </center>
      </div>
    





    <div class="col-md-12 ">
      <center>
        <!-- Button trigger modal -->
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Guardar cambios
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="0" role="dialog"
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
                Los profesores han sido actualizados..
              </div>
              <div class="modal-footer">

                <button data-dismiss="modal" type="button" class="btn btn-primary">Aceptar</button>
              </div>
            </div>
          </div>
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
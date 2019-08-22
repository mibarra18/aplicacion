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

                <nav class="navbar navbar-expand-lg navbar-light bg-light">


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
                        </ul>
                    </div>
                </nav>

            </div>
        </div>


        <div class="row home">
            
            <div class="col-md-12">
                <h2>Actualizar materias de profesores.</h2>
            </div>

            <div class="col-md-5">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                </br>
    
                <select class="custom-select">
                    <option selected>Profesor</option>
                    <option value="1">Anzo Vázquez David Mokhtar</option>
                    <option value="2">Rubio Hernández J.Refigio</option>
                    <option value="3">Parra Rodríguez Gerardo</option>
                    <option value="4">Barrón Rodrguez Gabriel</option>
                    <option value="5">Hernández Sandoval Juana Martha</option>
                    <option value="6">Torres Rivera Jaime</option>
                    <option value="7">Villanueva Gaytán Pamela</option>
                </select>
    
            </div>
            <div class="col-md-2">

            </div>
            
            <div class="col-md-5">
    
                <div class="tema">
                    <label for="exampleFormControlTextarea1" >Actualizar materias:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Actualización."></textarea>
               </div>
           
            </div>

            
        <div class="col-md-12">
             
        </div>

        <div class="col-md-12 ">
            <center>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Guardar
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
                                Las materias han sido actualizadas.
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
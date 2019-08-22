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
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@conachitagoba</a>
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
                                <a class="nav-link" href="asesoriaal.php" tabindex="-1"aria-disabled="true">|   Solicitar asesoria   |</a>
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
            <div class="col-md-12">
                <h2>Cancelar asesoría</h2>
                    <br></br>

                <select class="custom-select">
                    <option selected>Asesorías agendadas</option>
                    <option value="1">Formación Sociocultural III - Anzo Vázquez David Mokhtar - Lunes 4:00p.m. a 6:00p.m.</option>
                    <option value="2">Sistemas Operativos - Rubio Hernández J.Refigio - Martes 5:00p.m. a 6:00p.m.</option>
                    <option value="3">Conmutación de Redes de Datos - Parra Rodríguez Gerardo - Miércoles 4:00p.m. a 5:00p.m.</option>
                    <option value="4">Aplicaciones Web - Barrón Rodrguez Gabriel - Jueves 4:00p.m. a 6:00p.m.</option>
                    <option value="5">Integradora I - Barrón Rodrguez Gabriel - Viernes 4:00p.m. a 5:00p.m.</option>
                    <option value="6">Cálculo Diferencial - Hernández Sandoval Juana Martha - Sábado 8:00a.m. a 10:00a.m.</option>
                    <option value="7">Inglés III - Torres Rivera Jaime - Lunes 4:00p.m. a 6:00p.m.</option>
                    <option value="8">Infraestructura de Redes de Datos - Villanueva Gaytán Pamela - Martes 5:00p.m. a 6:00p.m.</option>
                </select>
               
            </div>
        
        <div class="col-md-12">

            <div class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tema">
                    <label for="exampleFormControlTextarea1" >Motivos de cancelación:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Agregar un comentario"></textarea>

            </br>
            <center>
                    <button type="button" class="btn btn-red" data-toggle="" data-target="">
                            <a href="#">Guardar cambios</a>
                        </button>
                    </center>           
            </div>
            <!--<div class="tema"> 
                <input class="form-control" type="text" placeholder="Tema a tratar">  
            </div>-->
            
 
            <div class="col-md-12 ">
                <center>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Cancelar Cita
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
                                    La cita a sido exitosamente cancelada
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

    </div>
        <!--seccion pie de página-->
        <div class="row">
            <div class=col-md-12>
                <footer class="pie">
                    Derechos reservados 2019
                </footer>

            </div>

        </div>






    



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
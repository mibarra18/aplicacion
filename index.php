<?php
include_once 'conexion.php';


session_start();


if(isset($_GET['salir'])){
    session_unset();

    session_destroy();
}


    if(isset($_SESSION['tipo'])){

        switch ($_SESSION['tipo']) {
            case 1:
                header ('location: perfilal.php');
                break;
            
            case 2:
            header ('location: perfilp.php');
                break;

            case 3:
            header ('location: perfilad.php');
            break;

            default:
        }
    }



    if(isset($_POST['username'])  && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db = new Database();
        $query=$db->connect()->prepare('SELECT*FROM usuario WHERE username = :username AND password = :password');
        $query->execute(['username'=> $username, 'password'=> $password]);

        $row = $query->fetch(PDO::FETCH_NUM);

        if($row == true){
            
            $tipo = $row[5];
            $_SESSION['tipo'] = $tipo;
           
            switch ($_SESSION['tipo']) {
                case 1:
                    header ('location: php/alumno/perfilal.php');
                    break;

                case 2:
                header ('location: php/profesor/perfilp.php');
                    break;
    
                case 3:
                header ('location: php/administrador/perfilad.php');
                break;
    
                default:
            }

        }else{
            $errorLogin = "El usuario o contraseña son incorrectos";
            include_once 'index.php';
        }


    }

?>


<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Asesorías UTNG</title>
</head>

<body background="imagenes/fundo.jpg">

    <div class="container">

        <!--seccion header-->
        <div class="row cabecera">
            <div class="col-md-4">
                <img src="imagenes/ut.jpeg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h1>Asesorias Academicas UTNG</h1>
            </div>

        </div>






        <!--seccion barra de contenido-->
        <div class="row">
            <div class="col-md-3">
                <section class="ingresar">

                    <h3 class="ini">Iniciar sesion</h3>

                <form action="#" method="POST">

                <?php
                        if(isset($errorLogin)){
                            echo $errorLogin;
                        }
                ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de Usuario:</label>
                        <input type="text" name="username" placeholder="Nombre de Usuario">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña:</label>
                        <input type="password" name="password" placeholder="Constraseña">
                    </div>

                    <input type="submit" value="Ingresar">
                </form>
                    <br>
                    <br>
                    <a class="reg" href="php/registroal.php">Registrate</a>
                    <br>
                    <br>
                <a class="contra" href="html/recuperaral.html">¿Olvidaste tu usuario o contraseña?</a>
                </section>

            </div>
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/carreras.jpg" class="d-block w-100" alt="" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/carreras2.jpg" class="d-block w-100" alt="200px" height="350px">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/carrera3.png" class="d-block w-100" alt="200px" height="350px">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <section class="politica">
                    <article>
                        <h2>Misión</h2>
                        <p>Somos una institución de educación superior tecnológica que forma profesionistas competitivos
                            a través de programas de calidad para contribuir al desarrollo del estado.</p>
                    </article>
                    <article>
                        <h2>Visión</h2>
                        <p>En el 2020 seremos reconocidos por nuestros egresados formados integral y globalmente, con
                            empleabilidad
                            acorde a +su perfil superior a la media estatal; por nuestros programas de grado acreditados
                            o evaluados al
                            100% y por contar con un postgrado; 15% de nuestros profesores participarán en programas de
                            movilidad y
                            50% de los cuerpos académicos estarán consolidados.

                            Nos distinguiremos por un ambiente de equidad y sustentabilidad reconocidas y participaremos
                            en 3 programas
                            de investigación aplicada orientados a la innovación y transferencia tecnológica en
                            proyectos sociales y
                            productivos</p>
                    </article>

                    <article>
                        <h2>Valores</h2>
                        <p>Para la UTNG los valores son el marco del comportamiento que deben tener sus integrantes,
                            estos se
                            determinaron en
                            base a la razón de ser; al propósito de creación</p>
                    </article>
                </section>
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
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
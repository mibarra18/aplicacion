<?php
	session_start(); /*Es la primer linea que debe tener en cuenta al momento de usar php*/
	require ('conexion.php');
	if (isset($_POST['Guardar'])&& isset($_POST['Guardar'])=="Solicitar") {
		//$_SESSION['idAsesoria']=$_POST['idAsr'];
		
		$_SESSION['cmat']=$_POST['comboMateria'];
		$_SESSION['cpro']=$_POST['comboProfesor'];
		$_SESSION['cfe']=$_POST['comboFecha'];
		$_SESSION['tema']=$_POST['tema'];
		
		header("Location: guarda.php");
		
	}
	$a=$_SESSION['username'];
	?>
<?php
	require ('conexion.php');
	
	$query0 = "SELECT idMateria, nombreM FROM materia ORDER BY nombreM";
	$resultado0=$mysqli0->query($query0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Solicitar Asesoria</title>
	<meta charset="utf-8">
		<title>Alumno</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo.css">

		<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
		
		<script language="javascript">
			$(document).ready(function(){
				$("#comboMateria").change(function () {

					$('#comboFecha').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#comboMateria option:selected").each(function () {
						idMateria = $(this).val();
						$.post("includes/getMunicipio.php", { idMateria: idMateria }, function(data){
							$("#comboProfesor").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#comboProfesor").change(function () {
					$("#comboProfesor option:selected").each(function () {
						idUsuario = $(this).val();
						$.post("includes/getLocalidad.php", { idUsuario: idUsuario }, function(data){
							$("#comboFecha").html(data);
						});            
					});
				})
			});
		</script>
</head>
<body background="../../imagenes/fundo.jpg">

<div class="container ">
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
                                <a class="nav-link dropdown-toggle" href="solicitarAsesoria.php" id="navbarDropdownMenuLink" role="button"
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

		<div class="row cabecera">
            <div class="col-md-4">
                <img src="../../imagenes/ut.jpeg" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-8">
                <h1>Asesorias Academicas UTNG</h1>
            </div>
        </div>

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
                                <a class="nav-link" href="cancelaral.php" tabindex="-1" aria-disabled="true">|   Cancelar asesoria   |</a>
                            </li>
                        </ul>
                    </div>
                </nav>
			</div>
        </div>

		<div class="row home">
			<div class=" table-responsive">
			<center><h2>Solicitar asesoría</h2></center>
			<form class="form1" method="post" action="solicitarAsesoria.php">
				<div class=" table-responsive">
					<div class="form-row">
						<div class="form-group col-md-6">
						<label>Selecciona una materia:</label>
						<select name="comboMateria" id="comboMateria" class="custom-select">
							<option value="0">Selecciona materia
							</option><?php while($row = $resultado0->fetch_assoc()) { ?>
							<option value="<?php echo $row['idMateria']; ?>"><?php echo $row['nombreM']; ?></option><?php } ?>
						</select>
						</div>

						<div class="form-group col-md-6">
						<label>Selecciona un profesor:</label>
						<select name="comboProfesor" id="comboProfesor" class="custom-select">								
							<td class="opcion" id="nombreP" name="nombreP">
						</select>
						</div>

						
					</div>

					<div class="form-row">
					<div class="col-md-5">
						<label>Selecciona fecha y hora:</label>
						<select name="comboFecha" id="comboFecha" class="custom-select">
							<option></option>
						</select>
						</div>

						<div class="col-md-7">
						<label for="exampleFormControlTextarea1">Menciona el tema a tratar:</label><br>
						<textarea type="text" class="texto" name="tema" id="tema" class="form-control" placeholder="Tema a tratar en asesoria" cols="68" rows="3" required></textarea>
					</div>

					<div class="form-row">
						<div class="form-group col-md-1">
						</div>

						<div class="col-md-5">
						<input  type="submit" class="btn btn-primary"  name="Guardar" id="Guardar" value="Solicitar">
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>	
		
		<div class="row">
      <div class=col-md-12>
        <footer class="pie">
          Derechos reservados 2019
        </footer>
      </div>
    </div>
</div>									
</body>
</html>



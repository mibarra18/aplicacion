<?php 
  require_once('conexion/conexion.php');  
  $usuario = 'SELECT nombreP,dia,periodo FROM usuario,contihorario,horario where contihorario.idUsuario=usuario.idUsuario AND contihorario.idHorario=horario.idHorario';  
  $usuarios=$mysqli->query($usuario);
  
if(isset($_POST['create_pdf'])){
  require_once('tcpdf/tcpdf.php');
  
  $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
  
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Reporte de Horario de Asesorias');
  $pdf->SetTitle($_POST['reporte_name']);
  
  $pdf->setPrintHeader(false); 
  $pdf->setPrintFooter(false);
  $pdf->SetMargins(20, 20, 20, false); 
  $pdf->SetAutoPageBreak(true, 20); 
  $pdf->SetFont('Helvetica', '', 10);
  $pdf->addPage();

  $content = ' <div class="row padding">
          <div class="col-md-12" style="text-align:center;">
          <img src="images/logoUTNG.png"
          alt="Logo" width="50" height="50">
          <br>
              <span> </span>
            </div>
        </div>
        ';
  
  $content .= '
    <div class="row">
          <div class="col-md-12">
              <h1 style="text-align:center;">'.$_POST['reporte_name'].'</h1>
        
      <table border="1" cellpadding="5">
        <thead>
          <tr bgcolor=#C4C4C4>
             <th>Nombre</th>
            <th>Dia</th>
            <th>Periodo</th>
          </tr>
        </thead>
  ';
  
  
  while ($user=$usuarios->fetch_assoc()) { 
  $content .= '
    <tr>
            <td>'.$user['nombreP'].'</td>
            <td>'.$user['dia'].'</td>
            <td>'.$user['periodo'].'</td>
            
        </tr>
  ';
  }
  
  $content .= '</table>';
  
  $content .= '
    <div class="row padding">
          <div class="col-md-12" style="text-align:center;">
              <span>Universidad Tecnológica del Norte de Guanajuato</span>
              <br>
              <br>
              <span>Reporte de Horario de Asesorias </span>
              <br>
              <br>
              <span>Tecnologías de la Información y de la Comunicación</span>
          
            </div>
        </div>
      
  ';
  
  $pdf->writeHTML($content, true, 0, true, 0);

  $pdf->lastPage();
  $pdf->output('ReporteHorario.pdf', 'I');
}

?>
     
<!--// Chiphysi programación suscribete -->
<!--// V 0.1 original -->
<!--// Autor: Chiphysi  --><!--// Autor: Jhonatan Cardona  -->
<!--// Derechos de autor(Suscribete)  -->       
        
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Convertidor</title>
<meta name="keywords" content="">
<meta name="description" content="">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../estilosadmin/estilos.css" media="screen"/>
</head>


<!--<style>
  
body {

background-image: url(../estilosLogin/imagen2.jpg);


}


</style> -->

<body class="fondo">
  <div class="container-fluid">
        <div class="row padding">
          <div class="col-md-12">
              <?php $h1 = "Reporte de Asesorias";  
               echo '<h1 style="color:black;">'.$h1.'</h1>'
        ?>
            </div>
        </div>

      <div class="row">
      <table class="table table-hover" border="black" bgcolor="white">
        <thead>
          <tr bgcolor=#C4C4C4>
          <th>Nombre</th>
            <th>Dia</th>
            <th>Periodo</th>
            
          
          </tr>
        </thead>
        <tbody>
        <?php 
      while ($user=$usuarios->fetch_assoc()) {   ?>
          <tr>
            <td bgcolor="white"><?php echo $user['nombreP']; ?></td>
            <td bgcolor="white"><?php echo $user['dia']; ?></td>
            <td bgcolor="white"><?php echo $user['periodo']; ?></td>
            
          </tr>
         <?php } ?>
        </tbody>
      </table>
              <div class="col-md-12">
                <center>
                <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <input type="submit" name="create_pdf" class="btn btn-danger pull" value="Generar PDF">
                </form>
                <br>
                      <form action="../reporteHorario.php">
                      <input type="submit"  class="btn btn-success" value="Regresar" style="color: white; background-color: blue;">
                      </form>
                <center>
              </div>
        </div>
    </div>
</body>
</html>
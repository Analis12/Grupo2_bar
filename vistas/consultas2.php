<html>

<head>
  <title>Consulta 2 </title>
  
  <link rel="stylesheet" href="../css/estilos.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<body>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <center>
        <h1>BAR</h1>
      </center>
      <form method="POST" action="index.php">
        <div class="form-group">
          <label for="nombre">Id del Bar</label>
          <input type="text" name="bar_id" class="form-control" id="bar_id">
        </div>
        <center>
          <input type="submit" value="Consultar" class="btn btn-info" name="btn1">
        </center>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <center>
        <h1>BUZON</h1>
      </center>
      <form method="POST" action="index.php">
        <div class="form-group">
          <label for="nombre">Id del Buzon</label>
          <input type="text" name="buz_id" class="form-control" id="buz_id">
        </div>
        <center>
          <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
        </center>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <center>
        <h1>CAMPUS</h1>
      </center>
      <form method="POST" action="index.php">
        <div class="form-group">
          <label for="nombre">Id del Campus</label>
          <input type="text" name="cam_id" class="form-control" id="buz_id">
        </div>
        <center>
          <input type="submit" value="Consultar" class="btn btn-info" name="btn3">
        </center>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>

  <?php
  if (isset($_POST['btn1'])) {
    include("../includes/class_conection.php");

    $bar_id = $_POST['bar_id'];
    if ($bar_id == "") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
    {
      echo "Digita un documento por favor. (Ej: 123)";
    } else {
      $resultados = mysqli_query($conexion, "SELECT * FROM bar WHERE bar_id = $bar_id");
      while ($consulta = mysqli_fetch_array($resultados)) {
        echo
        "
               <table width=\"100%\" border=\"1\">
                 <tr>
                   <td><b><center>Id Bar</center></b></td>
                   <td><b><center>Nombre</center></b></td>
                   <td><b><center>Abierto/Cerrado</center></b></td>
                 </tr>
                 <tr>
                   <td>" . $consulta['bar_id'] . "</td>
                   <td>" . $consulta['bar_nombre'] . "</td>
                   <td>" . $consulta['bar_abierto'] . "</td>
                 </tr>
               </table>
             ";
      }
      include("../includes/cerrar_conexion.php");
    }
  }
  ?>

  <?php
  if (isset($_POST['btn2'])) {
    include("../includes/class_conection.php");

    $buz_id = $_POST['buz_id'];
    if ($buz_id == "") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
    {
      echo "Digita un documento por favor. (Ej: 123)";
    } else {
      $resultados = mysqli_query($conexion, "SELECT * FROM buzon WHERE buz_id = $buz_id");
      while ($consulta = mysqli_fetch_array($resultados)) {
        echo
        "
               <table width=\"100%\" border=\"1\">
                 <tr>
                   <td><b><center>Id Buzon</center></b></td>
                   <td><b><center>Fecha</center></b></td>
                   <td><b><center>Descripción</center></b></td>
                 </tr>
                 <tr>
                   <td>" . $consulta['buz_id'] . "</td>
                   <td>" . $consulta['buz_fecha'] . "</td>
                   <td>" . $consulta['buz_descripcion'] . "</td>
                 </tr>
               </table>
             ";
      }
      include("../includes/cerrar_conexion.php");
    }
  }
  ?>

  <?php
  if (isset($_POST['btn3'])) {
    include("../includes/class_conection.php");

    $cam_id = $_POST['cam_id'];
    if ($cam_id == "") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
    {
      echo "Digita un documento por favor. (Ej: 123)";
    } else {
      $resultados = mysqli_query($conexion, "SELECT * FROM campus WHERE cam_id = $cam_id");
      while ($consulta = mysqli_fetch_array($resultados)) {
        echo
        "
               <table width=\"100%\" border=\"1\">
                 <tr>
                   <td><b><center>Id Campus</center></b></td>
                   <td><b><center>Nombre</center></b></td>
                   <td><b><center>Dirección</center></b></td>
                 </tr>
                 <tr>
                   <td>" . $consulta['cam_id'] . "</td>
                   <td>" . $consulta['cam_nombre'] . "</td>
                   <td>" . $consulta['cam_direccion'] . "</td>
                 </tr>
               </table>
             ";
      }
    }
  }
  ?>
</body>

</html>
<?php
 require "includes/class_conection.php"
?><html>
<head>
  <title>Consulta 1 </title>
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
    <form method="POST" action="#" >
    <center><h1>BAR</h1></center>
      <div class="form-group">
        <label for="nombre">Id del Bar</label>
        <input type="text" name="bar_id" class="form-control" id="bar_id">
      </div>
      <center>
        <input type="submit" value="Consultar" class="btn btn-info" name="btn1">
      </center>
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
            <table class='row2' width=\"70%\" border=\"1\">
            <tr class='titulo'>
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

      <!-- BUZON -->
      <center><h1>BUZON</h1></center>
      <div class="form-group">
          <label for="nombre">Id del Buzon</label>
          <input type="text" name="buz_id" class="form-control" id="buz_id">
        </div>
        <center>
          <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
        </center>
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
        <table class='row2' width=\"70%\" border=\"1\">
        <tr class='titulo'>
                   <td><b><center>Id Buzon</center></b></td>
                   <td><b><center>Fecha</center></b></td>
                   <td><b><center>Descripci??n</center></b></td>
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

      <!-- CAMPUS -->
      <center><h1>CAMPUS</h1></center>
      <div class="form-group">
          <label for="nombre">Id del Campus</label>
          <input type="text" name="cam_id" class="form-control" id="buz_id">
        </div>
        <center>
          <input type="submit" value="Consultar" class="btn btn-info" name="btn3">
        </center>
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
        <table class='row2' width=\"70%\" border=\"1\">
        <tr class='titulo'>
                   <td><b><center>Id Campus</center></b></td>
                   <td><b><center>Nombre</center></b></td>
                   <td><b><center>Direcci??n</center></b></td>
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
        <!-- MENU -->
        <center><h1>MENU</h1></center>
        <div class="form-group">
        <label for="nombre">Id del Menu</label>
        <input type="text" name="men_id" class="form-control" id="men_id" >
        </div>
        <center>  
        <input type="submit" value="Consultar" class="btn btn-info" name="btn4">
        </center>
        <?php
if(isset($_POST['btn4']))
{
  include("../includes/class_conection.php");

     $men_id = $_POST['men_id'];
      if($men_id=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
        {echo "Ingrese el Id del Men??";}
      else
      {  
       $resultados = mysqli_query($conexion,"SELECT * FROM menu WHERE men_id = $men_id");
       while($consulta = mysqli_fetch_array($resultados))
       {
         echo 
         "
         <table class='row2' width=\"70%\" border=\"1\">
         <tr class='titulo'>
               <td><b><center>Id Bar</center></b></td>
               <td><b><center>Id Men??</center></b></td>
               <td><b><center>Nombre</center></b></td>
               <td><b><center>Precio</center></b></td>
               <td><b><center>Disponible</center></b></td>
               <td><b><center>Descripci??n</center></b></td>
             </tr>
             <tr>
               <td>".$consulta['bar_id']."</td>
               <td>".$consulta['men_id']."</td>
               <td>".$consulta['men_nombre']."</td>
               <td>".$consulta['men_precio']."</td>
               <td>".$consulta['men_disponible']."</td>
               <td>".$consulta['men_descripcion']."</td>
             </tr>
           </table>
         ";
       
     }
  include("../includes/cerrar_conexion.php");
    }
}
?>
         <!-- PREFERENCIAS -->
         <center><h1>PREFERENCIAS</h1></center>
        <div class="form-group">
        <label for="nombre">Id del Preferencias</label>
        <input type="text" name="pre_id" class="form-control" id="pre_id" >
        </div>
        <center>  
        <input type="submit" value="Consultar" class="btn btn-info" name="btn5">
        </center>
        <?php
if(isset($_POST['btn5']))
{
  include("../includes/class_conection.php");

     $pre_id = $_POST['pre_id'];
      if($pre_id=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
        {echo "Ingrese el Id de preferencias";}
      else
      {  
       $resultados = mysqli_query($conexion,"SELECT * FROM preferencias WHERE pre_id = $pre_id");
       while($consulta = mysqli_fetch_array($resultados))
       {
         echo 
         "
         <table class='row2' width=\"70%\" border=\"1\">
         <tr class='titulo'>
               <td><b><center>Id Men??</center></b></td>
               <td><b><center>Id Preferencias</center></b></td>
               <td><b><center>Fecha</center></b></td>
               <td><b><center>Observaci??n</center></b></td>
             </tr>
             <tr>
               <td>".$consulta['men_id']."</td>
               <td>".$consulta['pre_id']."</td>
               <td>".$consulta['pre_fecha']."</td>
               <td>".$consulta['pre_observacion']."</td>}
             </tr>
           </table>
         ";
       
     }
  include("../includes/cerrar_conexion.php");
    }
}
?>


        <!-- SNACK -->
        <center><h1>SNACK</h1></center>
        <div class="form-group">
        <label for="nombre">Id del Snack</label>
        <input type="text" name="sna_id" class="form-control" id="sna_id" >
        </div>
        <center>  
        <input type="submit" value="Consultar" class="btn btn-info" name="btn6">
        </center>

    </form>
   
    <?php
    if(isset($_POST['btn6']))
    {
      include("../includes/class_conection.php");

         $sna_id = $_POST['sna_id'];
          if($sna_id=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
            {echo "Digita un documento por favor. (Ej: 123)";}
          else
          {  
           $resultados = mysqli_query($conexion,"SELECT * FROM snack WHERE sna_id = $sna_id");
           while($consulta = mysqli_fetch_array($resultados))
           {
             echo 
             "
             <table class='row2' width=\"70%\" border=\"1\">
             <tr class='titulo'>
                   <td><b><center>Id Bar</center></b></td>
                   <td><b><center>Id Snack</center></b></td>
                   <td><b><center>Nombre</center></b></td>
                   <td><b><center>Precio</center></b></td>
                   <td><b><center>Disponible</center></b></td>
                 </tr>
                 <tr>
                   <td>".$consulta['bar_id']."</td>
                   <td>".$consulta['sna_id']."</td>
                   <td>".$consulta['sna_nombre']."</td>
                   <td>".$consulta['sna_precio']."</td>
                   <td>".$consulta['sna_disponible']."</td>
                 </tr>
               </table>
             ";
           
         }
      include("../includes/cerrar_conexion.php");
        }
    }
?>
    </div>
    <div>
      <a class="regresar" href="#">Regresar</a>
    </div>
    <div>
    <a class="cerrar" href="includes/logout.php">Cerrar sesi??n</a>
    </div>
   
  </div>
  <div class="col-md-4"></div>



</body>
</html>
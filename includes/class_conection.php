<?php
     $server = "localhost";
     $user = "root";
     $pass = "";
     $database = "datostienda";

     $conexion = new mysqli($server,$user,$pass,$database);
     if($conexion->connect_errno)
     {
        echo "No hay conexion...";
        exit();
     }
?>
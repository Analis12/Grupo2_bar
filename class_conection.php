<?php
    class conection
    {
        private $server;
        private $user;
        private $database;
        private $con;
        function __construct($data)
        {
            $this->server = "localhost";
            $this->user = "root";
            $this->pass = "";
            $this->database = "dastostiendas";
            $this->con = mysqli_connect($this->server,$this->user,$this->pass,$this->database);
            if(!$this->con){
                die("Conexion fallida: ". mysqli_connect_error() );
            }
            
        }

    }
    $db = new conection ("Ejemplo");
?>
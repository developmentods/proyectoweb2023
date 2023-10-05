<?php
    class Connect{

        public static function Conectar(){
        $servidor = "containers-us-west-86.railway.app";
        $db = "railway";
        $user = "root";
        $pass = "piYf9Jpa2turlzlyMLcu";
        $port = 6446;

            $conexion = new PDO("mysql:host=$servidor; port=6446; dbname=$db;",$user,$pass);
            
            return $conexion;
        }

    }

?>
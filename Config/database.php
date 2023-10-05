<?php
    class Connect{

        public static function Conectar(){
        $servidor = "containers-us-west-86.railway.app";
        $db = "railway";
        $user = "root";
        $pass = "piYf9Jpa2turlzlyMLcu";

            $conexion = new PDO("mysql:host=$servidor;dbname=$db;",$user,$pass);
            
            return $conexion;
        }

    }

?>
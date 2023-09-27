<?php
    class Connect{

        public static function Conectar(){
            $servidor = "127.0.0.1";
        $db = "biblioteca";
        $user = "root";
        $pass = "admin1234";

            $conexion = new PDO("mysql:host=$servidor;dbname=$db;",$user,$pass);
            
            return $conexion;
        }

    }

?>
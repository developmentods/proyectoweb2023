<?php
require_once("../Config/database.php");

    class EditorialModels{

        private $db;
        private $editorial;
        private $id;

        public function __construct($parametros){
            $this->editorial = $parametros["nombre"];
            $this->id = $parametros["codigo"];
        }

        public function insertar(){
            try{
                $db = Connect::Conectar()->prepare("INSERT INTO editorial (codigo, nombre) VALUES ('$this->id', '$this->editorial')");
                $db->execute();
            }catch(PDOEXception $e){
                echo $e->getMessage();
                die();
            }

            require_once("../Views/AgregarEditorial.php");
        }

    }
?>
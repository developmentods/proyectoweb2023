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

        public function get_editoriales(){
            $db = Connect::Conectar()->prepare("SELECT * FROM editorial");
            $db->execute();
            if($db->rowCount()>=0){
                try{
                    require_once("../Views/AdminEditorial.php");
                    while($row = $db->fetch()):
                        return;
                    endwhile;
                }catch(PDOEXception $e){
                    echo $e->getMessage();
                    die();
                }
            }
            return $this->editorial;
        }

        //Los siguientes metodos deben ajustarse-----

        public function delete_editorial($cod){
            $sql = "DELETE FROM editorial WHERE codigoEditorial=".$cod;
            $res = $this->db->query($sql);
            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function get_id($codigo){
            $sql = "SELECT * FROM editorial WHERE codigoEditorial=".$codigo;
            $res = $this->db->query($sql);
            if($row = $res->fetch_assoc()){
                $this->editorial[] = $row;
            }
            return $this->editorial;
        }

        public function actualizar($codigo, $nombre){
            $resultado = $this->db->query("UPDATE editorial SET nombreEditorial='$nombre' where codigoEditorial='$codigo'");
        }

    }
?>
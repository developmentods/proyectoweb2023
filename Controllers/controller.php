<?php
    require_once("../Models/carroModels.php");  

        $objeto = new carroModels();
        $objeto->Encender();

        $nom = $_POST["nombre"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $edad = $_POST["edad"];
        $res = Validar($edad);
        $fecha = 2023-$edad;
        echo "Su nombre es: ".$nom."<br>";
        echo "Su correo es: ".$email."<br>";
        echo "Su telefono es: ".$tel."<br>";
        echo "Usted es ".$res."<br>";
        echo "Nacio en el año ".$fecha."<br>";
        /*
        if(1>3){
            ?>
                <h1>Si es mayor</h1>
            <?php
        }else{
            ?>
                <h1>Es menor</h1>
            <?php
        }

        function suma($var1, $var2){
            $suma = $var1+$var2;
            return $suma;
        }*/
        function Validar($edad){
            if($edad>=18){
                $msg = "Mayor de edad";
            }else{
                $msg = "Menor de edad";
            }
            return $msg;
        }
?>
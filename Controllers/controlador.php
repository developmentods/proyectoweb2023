<?php
    $clase = $_POST["Clase"];
    $funcion = $_POST["Funcion"];

    include_once '../Models/'.$clase.'.php';
    $objeto = new $clase($_POST);
    $objeto->$funcion();
?>
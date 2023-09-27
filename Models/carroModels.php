<?php

class carroModels{

    //Caracteristicas - Atributos
    private $puerta;
    private $color;
    private $kms;

    public function __construct(){
        $this->puerta = 4;
        $this->color = "Plata";
        $this->kms = 15000;
    }

    //Acciones - Métodos
    public function Encender(){
        echo "Carro encendido";
    }



}



?>
<?php

require_once("Persona.php");


class Cliente extends Persona {
    var $cif; 
    var $repostajes;

    function __construct ($nombre,$cif) {
        parent::__construct ($nombre);
        $this->cif = $cif;
        $this->repostajes = array();
    }
    function setCif ($cif) {
        $this->cif = $cif;
    }
    function getCif () {
        return $this->cif;
    }
    function mostrar () {
        parent::mostrar();
        
        echo "Cif :".$this->getCif();
    }
}
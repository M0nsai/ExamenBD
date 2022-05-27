<?php

class IndexModel {

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::getInstance();
    }//constructor

    public function logIn($usuario, $contrasenia){
        return $usuario." ".$contrasenia;
    }

}//fin clase


?>
<?php

class IndexModel {

    private $db;

    public function __construct() {
        
    }//constructor

    public function logIn(){
        require 'libs/SPDO.php';
        $this->db= SPDO::getInstance();
        
    }

}//fin clase


?>
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of productoModel
 *
 * @author saygo
 */
class ProductoModel {
    
    private $db;
    
    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::getInstance();
    }//constructor
    
    public function registrar($nombre, $precio){
        $consulta= $this->db->prepare("INSERT INTO dbo.PERSONAS ([ID], [NOMBRE])VALUES   (".$nombre.",'".$precio."')");
        $consulta->execute();
    }//registrar
    
    public function listarproductos(){
        $consulta= $this->db->prepare('call sp_listar_productos()');
        $consulta->execute();
        $resultado= $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }//listarproductos
    
}//fin clase

?>
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ProductoController
 *
 * @author saygo
 */
class ProductoController {
    
    public function __construct() {
        $this -> view= new View();
    }//constructor
    
    public function mostrar(){
        $this->view->show("registrarProductoView.php",null);
    } //mostrar 
    
    public function registrar(){
        
        require 'model/ProductoModel.php';
        $productoModel= new ProductoModel();
        
        $productoModel->registrar($_POST['nombre'], $_POST['precio']);
        $data = array("Producto Registrado");
        $this->view->show("registrarProductoView.php",$data);
        
    }//registrar
    
    public function listar(){
        require 'model/ProductoModel.php';
        $productoModel= new ProductoModel();
        $data['listado']=$productoModel->listarproductos();
        $this->view->show("listarProductosView.php",$data);
    }//listar
    
}// fin clase

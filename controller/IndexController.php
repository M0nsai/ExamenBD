<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of IndexController
 *
 * @author saygo
 */
class IndexController {
    public function __construct() {
        $this->view= new View();
    }// constructor
    
    public function mostrar(){
        $data['listado']=null;
        $this->view->show("indexView.php",$data);
    }// mostrar
    
    public function logIn(){
        require 'model/IndexModel.php';
        $indexModel = new IndexModel(); 
        $data['logInfo']= $indexModel ->logIn($_POST['nombreUsuario'], $_POST['contraseniaUsuario']);
        
        $this->view->show("menuView.php",$data);
    }//logIn
    
}//fin clase

?>

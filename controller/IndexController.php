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
        //inicia una sesion
        session_start();
        $_SESSION["usuario"] = $_POST['nombreUsuario'];
        $_SESSION["contrasenia"] = $_POST['contraseniaUsuario'];

        require 'model/IndexModel.php';
        $indexModel = new IndexModel(); 
        $indexModel ->logIn();
        $this->view->show("menuView.php",null);
    }//logIn

    public function logOut(){
        session_unset();
        $this->view->show("indexView.php",null);
    }
   
    
}//fin clase

?>

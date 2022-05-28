<?php 

class UsuarioController {

    public function __construct() {
        $this->view= new View();
    }// constructor

    public function mostrarCrearUsuario(){
        $this->view->show("crearUsuarioView.php",null);
    }// mostrar

    public function mostrarAdministrarPermiso(){
        $this->view->show("administrarPermisoUsuarioView.php",null);
    }// mostrar



}


?>
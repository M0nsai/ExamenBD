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

    public function registrarUsuario(){

        session_start();
        require 'model/UsuarioModel.php';
        $usuarioModel = new UsuarioModel();
        $data['Mensaje']=$usuarioModel ->registrarUsuario($_POST['nombreCrearUsuario'], $_POST['contraseniaCrearUsuario']);   
        
        $this->view->show("crearUsuarioView.php",null);
        if($data['Mensaje'][0][1]==1){
            echo "<span > El usuario ya existe. </span>";
        }else{
            echo "<span> Usuario Registrado. </span>";
        }
    }//registrarUsuairo

    public function cargarPermisosUsuario(){
        session_start();
        require 'model/UsuarioModel.php';
        $usuarioModel = new UsuarioModel();
        $data['cargarPermisosUsuario']=$usuarioModel->cargarPermisosUsuario($_POST['consultaNombreUsuario']);
        $this->view->show("administrarPermisoUsuarioView.php",$data);
    }

    public function editarPermisosUsuario(){
        session_start();
        require 'model/UsuarioModel.php';
        $usuarioModel = new UsuarioModel();
        if(isset($_POST['permTransacciones'])){
            $permTransacciones = 1;
        }else{
            $permTransacciones = 0;
        }

        if(isset($_POST['permCustomers'])){
            $permCustomers = 1;
        }else{
            $permCustomers = 0;
        }
        if(isset($_POST['permUsers'])){
            $permUsers = 1;
        }else{
            $permUsers = 0;
        }


        if(isset($_POST['permEncrypt'])){
            $permEncrypt = 1;
        }else{
            $permEncrypt = 0;
        }
        

        if(isset($_POST['permCreateUsers'])){
            $permCreateUsers = 1;
        }else{
            $permCreateUsers = 0;
        }

        $usuarioModel->editarPermisosUsuario($_POST['editarPermisoNombreUsuario'], $permTransacciones,$permCustomers,$permUsers,$permCreateUsers, $permEncrypt);

        $this->view->show("menuView.php",null);
    }


}


?>
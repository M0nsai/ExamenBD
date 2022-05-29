<?php

class UsuarioModel {

    private $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::getInstance();
    }//constructor

    public function registrarUsuario($usuario, $contrasenia){
        $consulta= $this->db->prepare("EXEC dbo.sp_Creacion_Usuarios @param_Nombre_Usuario ='".$usuario."', @param_Contraseña = '".$contrasenia."'");
        $consulta->execute();
        $consulta->closeCursor();
    }
     
    public function cargarPermisosUsuario($usuario){
        
        $consulta= $this->db->prepare("EXEC dbo.sp_Buscar_Permisos @param_User = '".$usuario."'");
        $consulta->execute();
        $resultado= $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }

    public function editarPermisosUsuario ($usuario,$permTransacciones,$permCustomers,$permUsers,$permCrearUsers, $permEncrypt ){
        $consulta= $this->db->prepare("EXECUTE dbo.sp_Permisos @param_User='".$usuario."',@param_Perm_Transacciones='".$permTransacciones."',@param_Perm_Customers='".$permCustomers."',@param_Perm_Users='".$permUsers."',@param_Perm_Crear_Users='".$permCrearUsers."',@param_Perm_Encript='".$permEncrypt."'");
        $consulta->execute();
        $consulta->closeCursor();
    }

}//fin clase

?>
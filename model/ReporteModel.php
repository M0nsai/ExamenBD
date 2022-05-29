<?php 

class ReporteModel{

    private $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::getInstance();
    }//constructor

    public function reporteUsuarios($nombreReporteU,$permTransaccionReporteU,$permCustomersReporteU,$permUsersReporteU,$permEncryptReporteU,$permActivoReporteU){
        $consulta= $this->db->prepare("EXECUTE dbo.sp_Reporte_Usuarios @param_Nombre_Usuario='".$nombreReporteU."',@param_Perm_Transacciones='".$permTransaccionReporteU."',@param_Perm_Customers='".$permCustomersReporteU."',@param_Perm_Users='".$permUsersReporteU."',@param_Perm_Encript='".$permEncryptReporteU."',@param_Activos_Inactivos='".$permActivoReporteU."'");
        $consulta->execute();
        $resultado= $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }

}

?>
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

    public function reporteTransacciones($fechaInicioTransaccion,$fechaFinTransaccion,$montoTransaccion,$montoMMI,$idTransaccion,$moneda,$tipoPago,$customerAccountID,$cliente){
        //$consulta= $this->db->prepare("EXECUTE dbo.sp_Reporte_Transacciones @param_Fecha_inicio_de_la_transacción='".$fechaInicioTransaccion."',@param_Fecha_fin_de_la_transacción='".$fechaFinTransaccion."',@param_Monto_de_la_transacción='".$montoTransaccion."',@param_Monto_MMI=".$montoMMI.",@param_Id_de_la_transacción=".$idTransaccion.",@param_Moneda='".$moneda."',@param_Tipo_de_pago='".$tipoPago."',@param_CustomerAccountId=".$customerAccountID.",@param_Cliente=".$cliente);
        $consulta= $this->db->prepare("
        DECLARE @RC int
        DECLARE @param_Fecha_inicio_de_la_transacción varchar(20) = ".$fechaInicioTransaccion."
        DECLARE @param_Fecha_fin_de_la_transacción varchar(20) = ".$fechaFinTransaccion."
        DECLARE @param_Monto_de_la_transacción numeric(9,2) =".$montoTransaccion."
        DECLARE @param_Monto_MMI int =".$montoMMI."
        DECLARE @param_Id_de_la_transacción int =".$idTransaccion."
        DECLARE @param_Moneda varchar(20) =".$moneda."
        DECLARE @param_Tipo_de_pago varchar(20) =".$tipoPago."
        DECLARE @param_CustomerAccountId int =".$customerAccountID."
        DECLARE @param_Cliente varchar(20) =".$cliente."
        
        EXECUTE @RC = [dbo].[sp_Reporte_Transacciones] 
           @param_Fecha_inicio_de_la_transacción
          ,@param_Fecha_fin_de_la_transacción
          ,@param_Monto_de_la_transacción
          ,@param_Monto_MMI
          ,@param_Id_de_la_transacción
          ,@param_Moneda
          ,@param_Tipo_de_pago
          ,@param_CustomerAccountId
          ,@param_Cliente

        ");
        $consulta->execute();
        $resultado= $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;

    }

    public function reporteCustomerAccount(){
        
    }

}

?>
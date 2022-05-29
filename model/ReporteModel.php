<?php 

class ReporteModel{

    private $db;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->db= SPDO::getInstance();
    }//constructor

    public function reporteUsuarios($nombreReporteU,$permTransaccionReporteU,$permCustomersReporteU,$permUsersReporteU,$permEncryptReporteU,$permActivoReporteU){
        $consulta= $this->db->prepare("
        DECLARE @RC int
        DECLARE @param_Nombre_Usuario varchar(50) = ".$nombreReporteU."
        DECLARE @param_Perm_Transacciones bit = ".$permTransaccionReporteU."
        DECLARE @param_Perm_Customers bit = ".$permCustomersReporteU."
        DECLARE @param_Perm_Users bit = ".$permUsersReporteU."
        DECLARE @param_Perm_Encript bit = ".$permEncryptReporteU."
        DECLARE @param_Activos_Inactivos bit = ".$permActivoReporteU."

        -- TODO: Set parameter values here.

        EXECUTE @RC = [dbo].[sp_Reporte_Usuarios] 
        @param_Nombre_Usuario
        ,@param_Perm_Transacciones
        ,@param_Perm_Customers
        ,@param_Perm_Users
        ,@param_Perm_Encript
        ,@param_Activos_Inactivos
        ");
        $consulta->execute();
        $resultado= $consulta->fetchAll();
        $consulta->closeCursor();
        return $resultado;
    }

    public function reporteTransacciones($fechaInicioTransaccion,$fechaFinTransaccion,$montoTransaccion,$montoMMI,$idTransaccion,$moneda,$tipoPago,$customerAccountID,$cliente){
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

    public function reporteCustomerAccount($fechaCreacionInicioReporteCA,$fechaCreacionFinReporteCA,
        $customerAccountBorradoReporte,$clienteReporteCA,$telefonoReporteCA,$direccionReporteCA,$tarjetaCreditoReporteCA,$nombreReporteCA,$apellidoReporteCA,$customerAccountIDReporteCA){
            $consulta= $this->db->prepare("
            DECLARE @RC int
            DECLARE @param_Fecha_de_creacion_inici varchar(20) =".$fechaCreacionInicioReporteCA."
            DECLARE @param_Fecha_de_creacion_fin varchar(20) =".$fechaCreacionFinReporteCA."
            DECLARE @param_Customers_eliminados bit =". $customerAccountBorradoReporte."
            DECLARE @param_Cliente_al_que_pertenecen varchar(20) =".$clienteReporteCA."
            DECLARE @param_Telefono varchar(15) =".$telefonoReporteCA."
            DECLARE @param_Dirección varchar(200) =".$direccionReporteCA."
            DECLARE @param_Tarjeta_de_credito varchar(16) =".$tarjetaCreditoReporteCA."
            DECLARE @param_Nombre varchar(25) =".$nombreReporteCA."
            DECLARE @param_Apellido varchar(25) =".$apellidoReporteCA."
            DECLARE @param_CustomerAccountId int =".$customerAccountIDReporteCA."

            -- TODO: Set parameter values here.

            EXECUTE @RC = [dbo].[sp_Reporte_Customers] 
            @param_Fecha_de_creacion_inici
            ,@param_Fecha_de_creacion_fin
            ,@param_Customers_eliminados
            ,@param_Cliente_al_que_pertenecen
            ,@param_Telefono
            ,@param_Dirección
            ,@param_Tarjeta_de_credito
            ,@param_Nombre
            ,@param_Apellido
            ,@param_CustomerAccountId
    
            ");
            $consulta->execute();
            $resultado= $consulta->fetchAll();
            $consulta->closeCursor();
            return $resultado;
    }

}

?>
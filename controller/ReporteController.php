<?php 

class ReporteController {

    public function __construct() {
        $this->view= new View();
    }// constructor

    public function mostrarCustomerAccounts(){
        $this->view->show("customerAccountsView.php",null);
    }// mostrar

    public function mostrarTransacciones(){
        $this->view->show("transaccionesView.php",null);
    }// mostrar

    public function mostrarReporteUsuarios(){
        $this->view->show("reporteUsuariosView.php",null);
    }// mostrar

    public function reporteUsuarios(){
        session_start();
        require 'model/ReporteModel.php';
        $reporteModel = new ReporteModel();
       
        if($_POST['nombreReporteU']==''){
           
            $nombreReporteU = 'null';
        }else{
            $nombreReporteU = "'".$_POST['nombreReporteU']."'";
        }

        if(isset($_POST['permTransaccionReporteU'])){
            $permTransaccionReporteU = 1;
        }else{
            $permTransaccionReporteU = 'null';
        }

        if(isset($_POST['permCustomersReporteU'])){
            $permCustomersReporteU = 1;
        }else{
            $permCustomersReporteU = 'null';
        }

        if(isset($_POST['permUsersReporteU'])){
            $permUsersReporteU = 1;
        }else{
            $permUsersReporteU = 'null';
        }
        
        if(isset($_POST['permEncryptReporteU'])){
            $permEncryptReporteU = 1;
        }else{
            $permEncryptReporteU = 'null';
        }
        
        if(isset($_POST['permActivoReporteU'])){
            $permActivoReporteU = 1;
        }else{
            $permActivoReporteU = 'null';
        }
        $data['cargarReporteUsuario']=$reporteModel->reporteUsuarios($nombreReporteU,$permTransaccionReporteU,$permCustomersReporteU,$permUsersReporteU,$permEncryptReporteU,$permActivoReporteU);
        $this->view->show("reporteUsuariosView.php",$data);
        
    }

    public function reporteTransacciones(){
        session_start();
        require 'model/ReporteModel.php';
        $reporteModel = new ReporteModel();

        $montoMMI = 0;
        
        if($_POST['fechaCreacionInicioReporteT']==''){
            $fechaCreacionInicioReporte = 'null';
        }else{
            $fechaCreacionInicioReporte = "'".$_POST['fechaCreacionInicioReporteT']."'";
        }

        if($_POST['fechaCreacionFinReporteT']==''){
            $fechaCreacionFinReporte = 'null';
        }else{
            $fechaCreacionFinReporte = "'".$_POST['fechaCreacionFinReporteT']."'";
        }

        if(isset($_POST['mayorTransaccionReporteT'])){
            $montoMMI = 1;
        }else if(isset($_POST['menorTransaccionReporteT'])){
            $montoMMI = 2;
        }else if(isset($_POST['igualTransaccionReporteT'])){
            $montoMMI = 3;
        }

        if($_POST['montoTransaccionReporteT']==''){
            $montoTransaccionReporte='null';
        }else{
            $montoTransaccionReporte = $_POST['montoTransaccionReporteT'];
        }

        if($_POST['IDTransaccionReporteT']==''){
            $IDTransaccionReporte = 'null';
        }else{
            $IDTransaccionReporte = $_POST['IDTransaccionReporteT'];
        }

        if($_POST['nombreMonedaReporteT']==''){
            $nombreMonedaReporte = 'null';
        }else{
            $nombreMonedaReporte = "'".$_POST['nombreMonedaReporteT']."'";
        }

        if($_POST['tipoPagoReporteT']==''){
            $tipoPagoReporteT = 'null';
        }else{
            $tipoPagoReporteT = "'".$_POST['tipoPagoReporteT']."'";
        }

        if($_POST['customerAccountIDReporteT']==''){
            $customerAccountIDReporte= 'null';
        }else{
            $customerAccountIDReporte= $_POST['customerAccountIDReporteT'];
        }

        if( $_POST['clientIDReporteT']==''){
            $clientIDReporte='null';
        }else{
            $clientIDReporte ="'".$_POST['clientIDReporteT']."'";
        }

        $data['cargarReporteTransaccion']=$reporteModel->reporteTransacciones(
            $fechaCreacionInicioReporte ,
            $fechaCreacionFinReporte,
            $montoTransaccionReporte,
            $montoMMI,
            $IDTransaccionReporte,
            $nombreMonedaReporte,
            $tipoPagoReporteT,
            $customerAccountIDReporte,
            $clientIDReporte
        );
        $aux = $data['cargarReporteTransaccion'][0];

        $this->view->show("transaccionesView.php",$data);


    }

    public function reporteCustomerAccount(){
        session_start();
        require 'model/ReporteModel.php';
        $reporteModel = new ReporteModel();

        if($_POST['customerAccountIDReporteCA']==''){
            $customerAccountIDReporteCA = 'null';
        }else{
            $customerAccountIDReporteCA = $_POST['customerAccountIDReporteCA'];
        }

        if($_POST['nombreReporteCA']==''){
            $nombreReporteCA = 'null';
        }else{
            $nombreReporteCA = "'".$_POST['nombreReporteCA']."'";
        }

        if($_POST['apellidoReporteCA']==''){
            $apellidoReporteCA = 'null';
        }else{
            $apellidoReporteCA = "'".$_POST['apellidoReporteCA']."'";
        }

        if($_POST['tarjetaCreditoReporteCA']==''){
            $tarjetaCreditoReporteCA = 'null';
        }else{
            $tarjetaCreditoReporteCA = "'".$_POST['tarjetaCreditoReporteCA']."'";
        }

        if($_POST['direccionReporteCA']==''){
            $direccionReporteCA = 'null';
        }else{
            $direccionReporteCA = "'".$_POST['direccionReporteCA']."'";
        }

        if($_POST['telefonoReporteCA']==''){
            $telefonoReporteCA = 'null';
        }else{
            $telefonoReporteCA = "'".$_POST['telefonoReporteCA']."'";
        }
        
        if($_POST['clienteReporteCA']==''){
            $clienteReporteCA = 'null';
        }else{
            $clienteReporteCA = "'".$_POST['clienteReporteCA']."'";
        }

        if(isset($_POST['customerAccountBorradoReporte'])){
            $customerAccountBorradoReporte = 1;
        }else{
            $customerAccountBorradoReporte = 'null';
        }

        if($_POST['fechaCreacionInicioReporteCA']==''){
            $fechaCreacionInicioReporteCA = 'null';
        }else{
            $fechaCreacionInicioReporteCA = "'".$_POST['fechaCreacionInicioReporteCA']."'";
        }

        if($_POST['fechaCreacionFinReporteCA']==''){
            $fechaCreacionFinReporteCA = 'null';
        }else{
            $fechaCreacionFinReporteCA = "'".$_POST['fechaCreacionFinReporteCA']."'";
        }

        $data['cargarReporteCustomerAccounts']=$reporteModel->reporteCustomerAccount($fechaCreacionInicioReporteCA,$fechaCreacionFinReporteCA,
                    $customerAccountBorradoReporte,$clienteReporteCA,$telefonoReporteCA,$direccionReporteCA,$tarjetaCreditoReporteCA,$nombreReporteCA,$apellidoReporteCA,$customerAccountIDReporteCA);
        $this->view->show("customerAccountsView.php",$data);

    }

}

?>
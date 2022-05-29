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
        if(isset($_POST['permTransaccionReporteU'])){
            $permTransaccionReporteU = 1;
        }else{
            $permTransaccionReporteU = 0;
        }

        if(isset($_POST['permCustomersReporteU'])){
            $permCustomersReporteU = 1;
        }else{
            $permCustomersReporteU = 0;
        }

        if(isset($_POST['permUsersReporteU'])){
            $permUsersReporteU = 1;
        }else{
            $permUsersReporteU = 0;
        }
        
        if(isset($_POST['permEncryptReporteU'])){
            $permEncryptReporteU = 1;
        }else{
            $permEncryptReporteU = 0;
        }
        
        if(isset($_POST['permActivoReporteU'])){
            $permActivoReporteU = 1;
        }else{
            $permActivoReporteU = 0;
        }
        $data['cargarReporteUsuario']=$reporteModel->reporteUsuarios($_POST['nombreReporteU'],$permTransaccionReporteU,$permCustomersReporteU,$permUsersReporteU,$permEncryptReporteU,$permActivoReporteU);
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
        echo $aux[0];

        $this->view->show("transaccionesView.php",$data);


    }

    public function reporteCustomerAccount(){
        
    }

}

?>
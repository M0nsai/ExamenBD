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

}

?>
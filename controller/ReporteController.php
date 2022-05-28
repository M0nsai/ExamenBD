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

}

?>
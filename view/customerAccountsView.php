<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=" method="post" id="formReporteCustomerAccount">
        
        <h1>Reporte Customer Account</h1>
        <div>
            <input class="inputReporteCustomerAccount" type="text" name="customerAccountIDReporteCA" placeholder="ID"/>
            <input class="inputReporteCustomerAccount" type="text" name="nombreReporteCA" placeholder="nombre" />
            <input class="inputReporteCustomerAccount" type="text" name="apellidoReporteCA" placeholder="apellido" />
            <input class="inputReporteCustomerAccount" type="text" name="tarjetaCreditoReporteCA" placeholder="tarjeta de credito" />
            <input class="inputReporteCustomerAccount" type="text" name="direccionReporteCA" placeholder="direccion" />
            <input class="inputReporteCustomerAccount" type="text" name="telefonoReporteCA" placeholder="telefono" />
            <input class="inputReporteCustomerAccount" type="text" name="clienteReporteCA" placeholder="cliente" />
            <div class="checkbox">
                <input type="checkbox" name="customerAccountBorradoReporte" /> 
                <label>Borrado</label>
            </div>
            <input class="inputReporteCustomerAccount" type="date" name="fechaCreacionInicioReporteCA"  /> Fecha Creacion Inicio
            <input class="inputReporteCustomerAccount" type="date" name="fechaCreacionFinReporteCA"  /> Fecha Creacion Fin
        </div>
        
            
    </form>  

<?php
    include_once './public/footer.php';
?>
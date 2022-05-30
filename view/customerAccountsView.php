<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=reporteCustomerAccount" method="post" id="formReporteCustomerAccount">
        
        <h1>Reporte Customer Account</h1>
        <div class="reporteCustomerAccount">
            <h1>Customer ID</h1><input class="inputReporteCustomerAccount" type="text" name="customerAccountIDReporteCA" placeholder="Customer ID"/>
            <h1>Nombre</h1><input class="inputReporteCustomerAccount" type="text" name="nombreReporteCA" placeholder="nombre" />
            <h1>Apellido</h1><input class="inputReporteCustomerAccount" type="text" name="apellidoReporteCA" placeholder="apellido" />
            <h1>Tarjeta Credito</h1><input class="inputReporteCustomerAccount" type="text" name="tarjetaCreditoReporteCA" placeholder="tarjeta de credito" />
            <h1>Direccion</h1><input class="inputReporteCustomerAccount" type="text" name="direccionReporteCA" placeholder="direccion" />
            <h1>Telefono</h1><input class="inputReporteCustomerAccount" type="text" name="telefonoReporteCA" placeholder="telefono" />
            <h1>Cliente</h1><input class="inputReporteCustomerAccount" type="text" name="clienteReporteCA" placeholder="cliente" />
            <div class="checkbox">
                <input type="checkbox" name="customerAccountBorradoReporte" /> 
                <label>Borrado</label>
            </div>
            <input class="inputReporteCustomerAccount" type="date" name="fechaCreacionInicioReporteCA"  /> Fecha Creacion Inicio
            <input class="inputReporteCustomerAccount" type="date" name="fechaCreacionFinReporteCA"  /> Fecha Creacion Fin
            <input  id="buttonReporteCustomerAccount" type="submit" value="Filtrar"/>
        </div>
        
        <div class="tableContainer">
            <table class="table">
               <thead>
                    <tr>
                        <th class="sticky">Customer Account ID</th>
                        <th class="sticky">Nombre</th>
                        <th class="sticky">Apellido</th>
                        <th class="sticky">Nombre Cliente</th>
                        <th class="sticky">Eliminado</th>
                        <th class="sticky">Fecha de Registro</th>
                    </tr>
               </thead>
                <tbody>
                    <?php 
                    if(isset($vars['cargarReporteCustomerAccounts' ])){
                    //print_r($vars['listado']);
                        foreach($vars['cargarReporteCustomerAccounts' ]as $reporte){
                    ?>
                    <tr>
                        <td><?php echo $reporte[0] ?></td>
                        <td><?php echo $reporte[2]  ?></td>
                        <td><?php echo $reporte[3] ?></td>
                        <td><?php echo $reporte[1]  ?></td>
                        <td><?php echo $reporte[4]  ?></td>
                        <td><?php echo $reporte[5] ?></td>
                    </tr>
                    <?php 
                        }
                    }
                    ?>
                </tbody>
                
            </table>
        </div>
        
    </form> 
    <form action="?controlador=Reporte&accion=reporteCustomerAccountTelefonos" method="post" id="formReporteCustomerAccountTelefonos">
        <input id="botonTelefonos" type="submit" value="Telefonos">
    </form> 
    <form action="?controlador=Reporte&accion=reporteCustomerAccountDirecciones" method="post" id="formReporteCustomerAccountDirecciones">
        <input id="botonDirecciones" type="submit" value="Direcciones">       
    </form>
    <form action="?controlador=Reporte&accion=reporteCustomerAccountTarjetaCredito" method="post" id="formReporteCustomerAccountTarjetaCredito">
        <input id="botonTarjetaCredito" type="submit" value="Tarjeta Credito">
    </form>

<?php
    include_once './public/footer.php';
?>
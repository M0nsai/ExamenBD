<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=reporteCustomerAccount" method="post" id="formReporteCustomerAccount">
        
        <h1>Reporte Customer Account</h1>
        <div>
            <input class="inputReporteCustomerAccount" type="text" name="customerAccountIDReporteCA" placeholder="Customer ID"/>
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
            <input  id="buttonReporteCustomerAccount" type="submit" value="Filtrar"/>
        </div>
        
        <div class="tableContainer">
            <table class="tableCustomerAccount">
                <tr>
                    <th>ID Transaccion</th>
                    <th>Cliente</th>
                    <th>Tipo Transaccion</th>
                    <th>Customer</th>
                    <th>Monto</th>
                    <th>Forma Pago</th>
                    <th>Moneda</th>
                    <th>Fecha</th>
                </tr>
                <?php 
                if(isset($vars['cargarReporteTransaccion' ])){
                //print_r($vars['listado']);
                    foreach($vars['cargarReporteTransaccion' ]as $reporte){
                ?>
                <tr>
                    <td><?php echo $reporte[0] ?></td>
                    <td><?php echo $reporte[1]  ?></td>
                    <td><?php echo $reporte[2] ?></td>
                    <td><?php echo $reporte[3]  ?></td>
                    <td><?php echo $reporte[4]  ?></td>
                    <td><?php echo $reporte[5] ?></td>
                    <td><?php echo $reporte[6] ?></td>
                    <td><?php echo $reporte[7] ?></td>
                </tr>
                <?php 
                    }
                }
                ?>
            </table>
        </div>
            
    </form>  

<?php
    include_once './public/footer.php';
?>
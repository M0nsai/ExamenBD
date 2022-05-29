<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=reporteTransacciones" method="post" id="formReporteTransacciones">
        
        <h1>Reporte Transacciones</h1>
        <div>
            <input class="inputReporteTransacciones" type="text" name="clientIDReporteT" placeholder="Cliente ID"/>
            <input class="inputReporteTransacciones" type="text" name="customerAccountIDReporteT" placeholder="Customer Account ID" />
            <input class="inputReporteTransacciones" type="text" name="tipoPagoReporteT" placeholder="Tipo de Pago" />
            <input class="inputReporteTransacciones" type="text" name="nombreMonedaReporteT" placeholder="Moneda" />
            <input class="inputReporteTransacciones" type="text" name="IDTransaccionReporteT" placeholder="ID Transaccion" />
            <input class="inputReporteTransacciones" type="text" name="montoTransaccionReporteT" placeholder="Monto"/>
            <div class="checkbox">
                <input type="checkbox" name="mayorTransaccionReporteT" /> 
                <label>Mayor</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="menorTransaccionReporteT" /> 
                <label>Menor</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="igualTransaccionReporteT" /> 
                <label>Igual</label>
            </div>
            <input class="inputReporteTransacciones" type="date" name="fechaCreacionInicioReporteT"  /> Fecha Transaccion Inicio
            <input class="inputReporteTransacciones" type="date" name="fechaCreacionFinReporteT"  /> Fecha Transaccion Fin
            <input  id="buttonReporteTransacciones" type="submit" value="Filtrar"/>
        </div>
        
        <div class="tableContainer">
                <table class="tableTransacciones">
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
<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=" method="post" id="formReporteTransacciones">
        
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
        </div>
        
            
    </form> 
<?php
    include_once './public/footer.php';
?>
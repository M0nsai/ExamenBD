<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=" method="post" id="formReporteUsuarios">
        
        <h1>Reporte Usuarios</h1>
        <div>
            <input class="inputReporteUsuarios" type="text" name="nombreReporteU" placeholder="Nombre"/>
            <div class="checkbox">
                <input type="checkbox" name="permTransaccionReporteU" /> <label>Transacciones</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="permCustomersReporteU" /> <label>Customers</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="permUsersReporteU" /> <label>Users</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="permEncryptReporteU" /><label>Encrypt</label>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="permActivoReporteU" /><label>Activo</label>
            </div>
        </div>
        
            
    </form> 
<?php
    include_once './public/footer.php';
?>
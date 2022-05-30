<?php
    include './public/header.php';
?>
    <form action="?controlador=Reporte&accion=reporteUsuarios" method="post" id="formReporteUsuarios">

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
            <div class="checkbox">
                <input type="checkbox" name="permCrearUsuarioReporteU" /><label>Crear Usuarios</label>
            </div>
            <input  id="buttonReporteUsuarios" type="submit" value="Filtrar"/>
        </div>
        
        <div class="tableContainerUsarios">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Usuario</th>
                            <th>Reporte Transaccion</th>
                            <th>Reporte Customers</th>
                            <th>Reporte Usuarios</th>
                            <th>Datos Encriptados</th>
                            <th>Activo</th>
                            <th>Crear Usuarios</th>
                        </tr>
                    </thead>
                   <tbody>
                    <?php 
                        if(isset($vars['cargarReporteUsuario' ])){
                        //print_r($vars['listado']);
                            foreach($vars['cargarReporteUsuario' ]as $reporte){
                        ?>
                        <tr>
                            <td><?php echo $reporte[0] ?></td>
                            <td><?php if($reporte[1]){echo 'Si';}else{echo 'No';}  ?></td>
                            <td><?php if($reporte[2]){echo 'Si';}else{echo 'No';}  ?></td>
                            <td><?php if($reporte[3]){echo 'Si';}else{echo 'No';}  ?></td>
                            <td><?php if($reporte[4]){echo 'Si';}else{echo 'No';}  ?></td>
                            <td><?php if($reporte[5]){echo 'Si';}else{echo 'No';}  ?></td>
                            <td><?php if($reporte[6]){echo 'Si';}else{echo 'No';} ?></td>
                        </tr>
                        <?php 
                                }
                            }
                        ?>
                   </tbody>
                </table>
        </div>
            
    </form> 
<?php
    include_once './public/footer.php';
?>
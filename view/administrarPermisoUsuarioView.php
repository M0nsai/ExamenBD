<?php
    include './public/header.php';
?>
        <form action="?controlador=Usuario&accion=cargarPermisosUsuario" method="post" id="formConsultarPermisoUsuario">
            
            <div>
                <h1>ConsultaPermisos de Usuario</h1>
                <input class="inputPermisoUsuario" type="text" name="consultaNombreUsuario" placeholder="Nombre de usuario" required/>
                <input  id="consultarPermisoUsuario" type="submit" value="Consultar"/>
            </div>
           
            
        </form> 

        <form action="?controlador=Usuario&accion=editarPermisosUsuario" method="post" id="formEditarPermisoUsuario">
            
            <div>
                <h1>Permisos de Usuario</h1>
                <input name="editarPermisoNombreUsuario" value="<?php if(isset( $vars ['cargarPermisosUsuario' ])){
                        $permisos=$vars ['cargarPermisosUsuario' ][0];
                        echo $permisos[0];
                    } ?>"></input>
                <?php 
                    
                   
                    
                
                ?>
                <?php 
                    if(isset( $vars ['cargarPermisosUsuario' ])){
                        foreach( $vars['cargarPermisosUsuario']as $permisos){

                            if($permisos[1]=='1'){
                                echo '<label class="checkbox"><input type="checkbox" name="permTransacciones"   checked/> Permiso Reporte Transacciones</label>';
                            }else{
                                echo '<label class="checkbox"><input type="checkbox" name="permTransacciones" /> Permiso Reporte Transacciones</label>';
                            }

                            if($permisos[2]=='1'){
                                echo '<label class="checkbox"><input type="checkbox" name="permCustomers"  checked/> Permiso Reporte Customers</label>';
                            }else{
                                echo '<label class="checkbox"><input type="checkbox" name="permCustomers" /> Permiso Reporte Customers</label>';
                            }

                            if($permisos[3]=='1'){
                                echo '<label class="checkbox"><input type="checkbox" name="permUsers"  checked/> Permiso Reporte Usuarios</label>';
                            }else{
                                echo '<label class="checkbox"><input type="checkbox" name="permUsers"  /> Permiso Reporte Usuarios</label>';
                            }

                            if($permisos[4]=='1'){
                                echo '<label class="checkbox"><input type="checkbox" name="permEncrypt"  checked/> Permiso Encriptacion</label>';
                            }else{
                                echo '<label class="checkbox"><input type="checkbox" name="permEncrypt"  /> Permiso Encriptacion</label>';
                            }

                            if($permisos[6]=='1'){
                                echo '<label class="checkbox"><input type="checkbox" name="permCreateUsers"  checked/> Permiso Crear Usuarios</label>';
                            }else{
                                echo '<label class="checkbox"><input type="checkbox" name="permCreateUsers" /> Permiso Crear Usuarios</label>';
                            }
                        }
                        echo '<input  id="buttonPermisoUsuario" type="submit" value="Asignar Permisos"/>';
                    }
                ?>
                   
               
            </div>
           
            
        </form> 

<?php
    include_once './public/footer.php';
?>
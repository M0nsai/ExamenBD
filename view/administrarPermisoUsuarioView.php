<?php
    include './public/header.php';
?>
        <form action="?controlador=Usuario&accion=permisoUsuario" method="post" id="formConsultarPermisoUsuario">
            
            <div>
                <h1>ConsultaPermisos de Usuario</h1>
                <input class="inputPermisoUsuario" type="text" name="nombreUsuario" placeholder="Nombre de usuario" required/>
                <input  id="consultarPermisoUsuario" type="submit" value="Consultar"/>
            </div>
           
            
        </form> 

        <form action="?controlador=Usuario&accion=permisoUsuario" method="post" id="formEditarPermisoUsuario">
            
            <div>
                <h1>Permisos de Usuario</h1>
                <label class="checkbox"><input type="checkbox" name="permTransacciones" /> Permiso Transacciones</label>
                <label class="checkbox"><input type="checkbox" name="permCustomers" /> Permiso Clientes</label>
                <label class="checkbox"><input type="checkbox" name="permUsers" /> Permiso Usuarios</label>
                <label class="checkbox"><input type="checkbox" name="permCrearUsers" /> Permiso Crear Usuarios</label>
                <label class="checkbox"><input type="checkbox" name="permEncrypt" /> Permiso Encriptacion</label>
                <input  id="buttonPermisoUsuario" type="submit" value="Asignar Permisos"/>
            </div>
           
            
        </form> 

<?php
    include_once './public/footer.php';
?>
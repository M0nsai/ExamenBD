<?php
    include './public/header.php';
?>
      <form action="?controlador=Usuario&accion=registrarUsuario" method="post" id="formRegistroUsuario">
            <h1>Registrar Usuario</h1>
            <input class="inputRegistroUsuario" type="text" name="nombreUsuario" placeholder="Nombre de usuario" required/>
            <input  class="inputRegistroUsuario" type="password" name="contraseniaUsuario" placeholder="Contraseña" required/>
            <input  id="buttonRegistroUsuario" type="submit" value="Registrar Usuario"/>
        </form>  

<?php
    include_once './public/footer.php';
?>
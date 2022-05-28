<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IF5100_ExamenI</title>
    <meta name="description" content="IF5100_ExamenI">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./public/css/estilo.css" rel="stylesheet" type="text/css"/>
</head>
<body id="bodyLogin">
    <section id="principal">
        <form action="?controlador=Index&accion=logIn" method="post" id="formLogin">
            <h1 id="h1UCR">Universidad De Costa Rica</h1>
            <p>IF5100 Examen 1</p>
            <input class="inputLogin" type="text" name="nombreUsuario" placeholder="Nombre de usuario" required/>
            <input  class="inputLogin" type="password" name="contraseniaUsuario" placeholder="Contraseña" required/>
            <input  id="buttonLogin" type="submit" value="Iniciar sesión"/>
        </form>
    </section>
</body>
</html>

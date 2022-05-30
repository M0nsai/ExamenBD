<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejemplo HTML</title>
        <meta name="description" content="Este es un ejemplo de pagina web">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="./public/css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="bodyLogin">
        <header>
            <nav class="navegacion">
                <ul class="menu">
                    <li><a >Usuarios</a>
                        <ul class="submenu">
                            <li><a href="?controlador=Usuario&accion=mostrarCrearUsuario">Crear usuario</a></li>
                            <li><a href="?controlador=Usuario&accion=mostrarAdministrarPermiso">Administrar Permisos</a></li>
                        </ul>
                    </li>
                    <li><a >Reportes</a>
                        <ul class="submenu">
                            <li><a href="?controlador=Reporte&accion=mostrarCustomerAccounts">Customer_Accounts</a></li>
                            <li><a href="?controlador=Reporte&accion=mostrarTransacciones">Transacciones</a></li>
                            <li><a href="?controlador=Reporte&accion=mostrarReporteUsuarios">Usuarios</a></li>
                        </ul>
                    </li>
                    
                    <!-- <li>
                        <form action="?controlador=Index&accion=logOut" method="post" id="formLogOut">
                            <input  id="logOut" type="submit" value="Cerrar Sesion"/>
                        </from>
                    </li> -->
                    
                    
                </ul>
            </nav>
            <!-- 
            <h1><a href="?controlador=Index"><img class="logoUCR" src="public/img/ucr.png" alt=""/></a></h1>
            -->
        </header>

        <section id="contenido">
                <section id="principal">


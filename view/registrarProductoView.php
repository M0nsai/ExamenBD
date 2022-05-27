<?php
    include './public/header.php';
?>
            <article>
                <h2>Registrar Producto</h2>
                
                <form action="?controlador=Producto&accion=registrar" method="post">
						<legend>Información del producto</legend>
						<div>
							<label for="nombre">Nombre:</label>
							<input type="text" id="nombre" name="nombre" required />
						</div>
						<div>
							<label for="precio">Precio:</label>
                                                        <input type="text" id="precio" name="precio" required/>
						</div>

						<div>
							<input type="submit" value="Registrar"/>
							
						</div>
						<div>
							<span id="mensaje"></span>
						</div>
					</form>
                
            </article>
<?php
    include_once './public/footer.php';
?>


<?php
    include './public/header.php';
?>
            <article>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                    <?php 
                    //print_r($vars['listado']);
                    foreach($vars['listado' ]as $producto){
                    ?>
                    <tr>
                        <td><?php echo $producto[0] ?></td>
                        <td><?php echo $producto[1] ?></td>
                        <td><?php echo $producto[2] ?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </table>
            </article>
<?php
    include_once './public/footer.php';
?>


<?php
    include './public/header.php';
?>
    
    <div class="tableContainer">
        <table class="table">
            <thead>
                <tr>
                    <th class="sticky"> <?php echo $vars['action']?></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($vars['cargarReporteCustomerAccountSubConsulta' ])){
                //print_r($vars['listado']);
                    foreach($vars['cargarReporteCustomerAccountSubConsulta' ]as $reporte){
                ?>
                <tr>
                    <td><?php echo $reporte[0] ?></td>
                </tr>
                <?php 
                    }
                }
                ?>
            </tbody>
            
        </table>
    </div>

<?php
    include_once './public/footer.php';
?>
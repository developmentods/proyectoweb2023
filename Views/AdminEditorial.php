<?php
    require_once("templates/header.php");
?>
<div class="table-responsive">
    <table border="1" width="80%" class="table">
        <thead>
            <tr class="table-primary">
                <th>Código Editorial</th>
                <th>Nombre Editorial</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $db->fetch()):?>
                <tr>
                    <th><?php echo $row[0]; ?></th>
                    <th><?php echo $row[1]; ?></th>
                    <th><a href="#">Editar</a></th>
                    <th><a href="#">Borrar</a></th>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>
<?php
    require_once("templates/footer.php");
?>
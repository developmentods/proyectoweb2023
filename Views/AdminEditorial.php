<?php
    require_once("templates/header.php");
?>
<div class="table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarEditorial">Agregar Editorial</button>

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
                    <th><button type="button" value="<?php echo $row[0]; ?>" name="EditarEditorial" data-bs-toggle="modal" data-bs-target="#exampleModal" class="modalEditar" >Editar</button></th>
                    <th><a href="../Controllers/controlador.php?C=EditorialModels&F=delete_editorial&Parametro=1&nombre=prueba&codigo=<?php echo $row[0]; ?>">Borrar</a></th>
                </tr>
            <?php endwhile;?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Editorial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"></textarea>
          </div>
          <div class="mb-3">
            <input type="hidden" name="Clase" value="EditorialModels">
            <input type="hidden" name="Funcion" value="actualizar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Boton">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="agregarEditorial" tabindex="-1" aria-labelledby="agregarEditorial" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="agregarEditorial">Agregar Editorial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../Controllers/controlador.php" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"></textarea>
          </div>
          <div class="mb-3">
            <input type="hidden" name="Clase" value="EditorialModels">
            <input type="hidden" name="Funcion" value="insertar">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary" name="Boton">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
    require_once("templates/footer.php");
?>
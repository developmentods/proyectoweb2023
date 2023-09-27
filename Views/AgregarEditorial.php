<?php
    require_once("templates/header.php");
?>
<h1>Agregar Editorial</h1>
<form action="../Controllers/controlador.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Código Editorial</label>
    <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre Editorial</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <input type="hidden" name="Clase" value="EditorialModels">
  <input type="hidden" name="Funcion" value="insertar">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <button type="reset" class="btn btn-primary">Cancelar</button>
</form>
<?php
    require_once("templates/footer.php");
?>
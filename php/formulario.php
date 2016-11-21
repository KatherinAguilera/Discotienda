<?php
/* Pedir datos al usuario*/
include "conexion.php";

$user_id=null;
$sql1= "select * from discos where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->name; ?>" name="name" required>
  </div>
  <div class="form-group">
    <label for="album">Album</label>
    <input type="text" class="form-control" value="<?php echo $person->album; ?>" name="album" required>
  </div>
  <div class="form-group">
    <label for="year">Año</label>
    <input type="text" class="form-control" value="<?php echo $person->year; ?>" name="year" required>
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" value="<?php echo $person->categoria; ?>" name="categoria" required >
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="boton">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>

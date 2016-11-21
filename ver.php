<!DOCTYPE html>
	<head>
		<title>Discos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/estilos.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar_out.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Discos de los Usuarios</h2>
  <a data-toggle="modal" href="#myModal" class="boton1">Agregar Discos</a>
<br><br>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar Discos</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="name">Nombre del Disco</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group">
    <label for="album">Album</label>
    <input type="text" class="form-control" name="album" required>
  </div>
  <div class="form-group">
    <label for="year">Año</label>
    <input type="text" class="form-control" name="year" required>
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <input type="text" class="form-control" name="categoria" >
  </div>
  <button type="submit" class="boton">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>

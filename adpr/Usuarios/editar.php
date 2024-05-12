<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Formulario animado</title>
  <link rel="stylesheet" href="editar/editar.css">

</head>
<body>
    <?php $idUsuario = $_GET['usuario'];  
    echo $idUsuario;?>
<!-- partial:index.partial.html -->
<form method="post" action="../../php/editaru.php?id=<?php echo $idUsuario; ?>" class="formulario">
  <h1 class="formulario__titulo">Editar usuario</h1>
  <input type="text" name="usuario" class="formulario__input">
  <label for="" class="formulario__label">Usuario</label>
  <input type="text" name="nombre" class="formulario__input">
  <label for="" class="formulario__label">Nombres</label>
  <input type="text" name="correo" class="formulario__input">
  <label for="" class="formulario__label">Correo</label>
  <input type="text" name="rol" class="formulario__input">
  <label for="" class="formulario__label">Rol</label>
  <input type="submit" class="formulario__submit">
</form>
<!-- partial -->
  <script  src="editar/editar.js"></script>

</body>
</html>

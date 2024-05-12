<?php 
  require("../../php/conexion.php");
  session_start();

  $consulta = "SELECT id as Id, nombre as Nombre, correo as Correo FROM usuarios WHERE rol = '2'";
  $usuarios = mysqli_query($conn, $consulta);
  $Id = array();
  $Nombre = array();
  $Correo = array();
    while ($fila = mysqli_fetch_assoc($usuarios)) {
      $Id[] = $fila['Id'];
      $Nombre[] = $fila['Nombre'];
      $Correo[] = $fila['Correo'];
    }

  $menor = count($Nombre);
?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Bootstrap-pagination&amp;selectNumberOfRows-</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href="usuarios.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container" style="margin-top: 35px;">
  <h4>Todos los clientes del sitio</h4>
  <div class="form-group">
    <select name="state" id="maxRows" class="form-control" style="width: 150px">
      <option value="5000">Seleccionar todo</option>
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
      <option value="50">50</option>
      <option value="75">75</option>
      <option value="100">100</option>
    </select>
  </div>

  <table id="mytable" class="table table-bordered table-striped">
    <thead>
      <tr style="background-color: rgb(67, 66, 71);">
        <th> <b> Nombre </b> </th>
        <th>Correo</th>
        <th>Eliminar</th>
        <th>Editar</th>
      </tr>
    </thead>
    <tbody style="background-color: rgb(219, 17, 106);">
        <?php for($i = 0; $i < $menor; $i++){ ?>
            <tr><td style="color: white;"> <?php echo $Nombre[$i]; ?> </td>
            <td style="color: white;"> <?php echo $Correo[$i]; ?> </td>
            <td> <a href="" style="color: white;">Eliminar</a> </td>
            <td> <a href="" style="color: white;">Editar</a> </td></tr>
        <?php } ?>
    </tbody>
  </table>
  <div class="pagination-container">
    <nav>
      <ul class="pagination"></ul>
    </nav>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script  src="usuario.js"></script>

</body>
</html>

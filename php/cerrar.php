<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Loading</title>
  <link rel="stylesheet" href="cargando.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div id='Cargando'/>
<!-- partial -->
  
</body>
</html>

<?php
    sleep(3);
    session_start();
    session_destroy();
    header("location: ../index.php");
?>
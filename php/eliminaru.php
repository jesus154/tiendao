<?php 
    require("conexion.php");
    session_start();
    $idUsuario = $_GET['usuario']; 
    echo $idUsuario;
    $delteu = "DELETE FROM usuarios WHERE Id = '$idUsuario'";
    $usuarios = mysqli_query($conn, $delteu);
    header("location: ../adpr/usuarios/usuarios.php");
?>

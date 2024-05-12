<?php 
    require("conexion.php");
    session_start();
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $rol = $_POST['rol'];
    $idUsuario = $_GET['id']; 

    // Construir la consulta SQL de actualización
    $consulta = "UPDATE usuarios SET Nombre='$nombre', Correo='$correo', Usuario='$usuario', rol='$rol' WHERE id = '$idUsuario'";
  
    // Ejecutar la consulta utilizando mysqli_query()
    if (mysqli_query($conn, $consulta)) {
        echo "Los datos fueron actualizados correctamente";
        header("location: ../adpr/usuarios/usuarios.php");
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    }
?>

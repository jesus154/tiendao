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
    require("conexion.php");
    session_start();

    if(!empty($_POST['usuario'] && $_POST['clave'])){
        $usuario = $_POST['usuario'];
        $pass = $_POST['clave'];
        $_SESSION['sec'] = $usuario;
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND pass = '$pass'";

        $rol = "";
        $user = "";
        $passw = "";

        $datos = mysqli_query($conn, $consulta);

        while($fila = mysqli_fetch_array($datos)){
            $_SESSION["id"] = $fila["Id"]; 
            $_SESSION["usu"] = $fila["Usuario"];   
            $_SESSION["cor"] = $fila["Correo"];  
            $_SESSION["nom"] = $fila["Nombre"];  
            $_SESSION["fot"] = $fila["Foto"];  
            $_SESSION["ror"] = $fila["rol"];
            $rol = $fila["rol"];
            $user = $fila["Usuario"];
            $passw = $fila["pass"];
        }

        if($rol == "1" && $usuario == $user && $pass == $passw){
            header("location: ../adpr/dashboard.php");
        }elseif($rol != "1" && $usuario == $user && $pass == $passw){
            header("location: ../index.php");
            echo "<script>alert('Correcto, presiona continuar')</script>";
        }else{
            echo "<script>alert('El usuario no existe')</script>";
            header("location: ../login.php");

        }
    }
?>
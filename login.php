<?php
    require("php/conexion.php");
    session_start();
    if(isset($_SESSION['ror'])){
        switch($_SESSION['ror']){
            case 1:
                header('location: adpr/dashboard.php');
            break;

            case 2:
                header('location: index.php');
            break;

            default:
        }
    }
    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <center>
        <a href="index.php">
            <img src="imgs/logocs.png" width="300">
        </a>
    </center>
    <div class="login">
	    <h1>Entrar</h1>
        <form action="php/validaru.php" method="post">
    	    <input type="text" name="usuario" placeholder="Usuario" required="required" />
            <input type="password" name="clave" placeholder="Contraseña" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">Iniciar</button>
        </form>
        <br>
        <center>
            <a href="registro.php" style="color: white; text-decoration:none;">¿No tienes una cuenta?</a>
            <br>
            <a href="index.php" style="color: white; text-decoration:none;">Inicio</a>
        </center>
    </div>
</body>
</html>
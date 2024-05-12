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
	    <h1>Registrate</h1>
        <form action="php/validarr.php" method="post" enctype="multipart/form-data">
            <input type="text" name="email" placeholder="Correo" required="required" />
            <input type="text" name="name" placeholder="Nombre" required="required" />
    	    <input type="text" name="user" placeholder="Nombre de usuario" required="required" />
            <input type="password" name="pass" placeholder="Contraseña" required="required" />
            <input type="file" name="archivo" accept="image/png, image/jpeg">
            <button type="submit" class="btn btn-primary btn-block btn-large">Registrar</button>
        </form>
        <br>
        <center>
            <a href="login.php" style="color: white; text-decoration:none;">Inicia secion</a>
            <br>
            <a href="index.php" style="color: white; text-decoration:none;">Inicio</a>
        </center>
    </div>
</body>
</html>
<?php 
    require("php/conexion.php");
    session_start();
    if(isset($_SESSION['ror'])){
        // No se hace nada 
    }else{
        // Envia al index en caso de no estar logueado
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jesus Alberto Ramirez Yañez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cuenta.css">
    <script src="js/cuenta.js"></script>
</head>
<body>


    <div class="container">
		<header class="cabecalho">
			<div class="perfil">
				<img class="perfil-foto" src=" <?php echo "php/imgp/".$_SESSION['fot']; ?> ">
				<div class="titulo">
					<h1>
                        <?php echo $_SESSION["nom"]; // Nombre del usuario?>
                    </h1>
					<h3> <?php echo $_SESSION["usu"]; // Usuario ?> <div> <?php echo $_SESSION["cor"]; // Correo del usuario ?> </div>
					</h3>
				</div>
			</div>
			<button class="darkMode" onclick="alterarTema()"><img src="https://cdn4.iconfinder.com/data/icons/music-ui-solid-24px/24/moon_dark_mode_night-2-512.png" class="imgDark"></button>
		</header>
		<main class="projetos">
			<div>
				<h2>Pedidos</h2>
				<ul id="lista"></ul>
			</div>
			<div id="imagens"></div>
		</main>
		<footer>
			<a href="https://github.com/SergioJunior13" target="_blank"><img src="https://github.com/SergioJunior13/Imagens/raw/main/GitHub-Mark-32px.png" class="github-logo"></a>
			<a href="https://codepen.io/sergiojunior13" target="_blank">
				<img src="https://maxcdn.icons8.com/Android_L/PNG/512/Logos/codepen-512.png">
			</a>
			<a href="https://www.linkedin.com/in/sergiojunior15" target="_blank">
				<img src="https://cdn-icons-png.flaticon.com/512/49/49656.png?w=1060">
			</a>
		</footer>
	</div>


    

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
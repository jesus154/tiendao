

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir al carrito</title>
</head>
<body>
<style>
		/* Estilos CSS para el botón */
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
		
		/* Estilos CSS para el botón cuando se pasa el mouse por encima */
		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
<?php 
    require("conexion.php");
    session_start();
    $idProducto = $_GET['producto']; 
    $idUsuario = $_SESSION['id'];
    if(isset($_SESSION['ror'])){
        $sql = "INSERT INTO carrito (Id_Producto, Id_Cliente) VALUES ($idProducto, $idUsuario)";
        if (mysqli_query($conn, $sql)) {
            ?>
            <script>
                alert('Ya púedes ir a tu carrito')
                
            </script>
            
        <?php
        header("location: ../cuenta.php");
        } else {
            ?>
            
            <?php
        }
    }else{
        echo "<script>alert('No has iniciado secion')</script>";
            header("location: ../login.php");
    }
?>
</body>
</html>
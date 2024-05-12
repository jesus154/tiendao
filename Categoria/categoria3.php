<?php 
    require("../php/conexion.php");
    session_start();
    $categoria = $_GET['categoria']; 
    $consulta = "SELECT * FROM producto WHERE Categoria = '$categoria'";
    $productos = mysqli_query($conn, $consulta);
    $Id[] = array();
    $Nombre[] = array();
    $Talla[] = array();
    $Foto[] = array();
    $Descripcion[] = array();
    $Moda[] = array();
    $SKU[] = array();
    $Costo[] = array();

    while ($fila = mysqli_fetch_assoc($productos)) {
        $Id[] = $fila['Id'];
        $Nombre[] = $fila['Nombre'];
        $Talla[] = $fila['Talla'];
        $Foto[] = $fila['Foto'];
        $Descripcion[] = $fila['Descripcion'];
        $Moda[] = $fila['Moda'];
        $SKU[] = $fila['Sku']; 
        $Costo[] = $fila['Costo']; 
    }


    $tama = count($Moda);
    $Total_producto = $tama - 1;
?>

<style>
	img {
  width: 200px;
  height: 250px;
}
</style>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Carrusel </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css'>
<link rel="stylesheet" href="archivos/categoria.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>Carrusel</title>
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Googlefont -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	</head>
  
  <body>
	<!-- Insertar Aquí contenido -->
	<div class="contenedor">
		<div class="titulo">
			<div class="shape right-skew">
				<i class="fas fa-laptop"></i>
				<h2> <?php echo $categoria; ?> </h2>
			</div>
			<span class="txt-titulo">Mostrando 4 de <?php echo $Total_producto; ?> elementos</span>
		</div>
		<div class="slider carousel">
            <?php for($i = 1; $i < $tama; $i++){ ?>
			<div class="producto item">
				<div class="contenedor-imagen">
					<a href="#" class="link"></a>
                    <?php $imagen = "../imgt/Productos/".$Foto[$i]; ?>
					<img src="<?php echo $imagen; ?>" >
				</div>				
				<div class="datos">
					
					<small>Talla: <?php echo $Talla[$i]; ?></small>
					<h3> <?php echo $Nombre[$i]; ?> </h3>
					<small>Existencia: <?php echo $SKU[$i]; ?> </small>
                    <br>
                    <small>Vendidas: <?php echo $Moda[$i]; ?> </small>
				</div>
				<div class="precios">
					<div class="internet">
						<small>Costo</small>
						<span>$ <?php echo $Costo[$i] ?> </span>
					</div>
					<?php $idpro = $Id[$i]; ?>
				</div>
				<a href="../php/addcar.php?producto=<?php echo $idpro; ?>" class="btn-carrito"><i class="fas fa-shopping-basket"></i> Agregar al carrito</a>
			</div>
			<?php }?>
		</div>
	</div>
	</body>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<script src='https://rawcdn.githack.com/UnTipografico/Carrusel-eCommerse/3b4b54cdfd58b5c6bfa29a4239e584a268e5403b/js/starrr.js'>

</script><script  src="archivos/categoria.js"></script>

</body>
</html>

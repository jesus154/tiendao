<?php 
    require("../php/conexion.php");
    session_start();
    $idUsuario = $_SESSION['id'];
    $sql = "SELECT * FROM carrito where Id_Cliente = '$idUsuario'";
    $items = mysqli_query($conn, $sql);
    $Id[] = array();
    $IdPro[] = array();
    if(isset($_SESSION['ror'])){
       
        while ($fila = mysqli_fetch_assoc($items)) {
            $Id[] = $fila['Id'];
            $IdPro[] = $fila['Id_Producto'];
        }
    }else{
        ?>
        <script>
            alert('No has inicioado secion')
        </script>
        <?php
    }



    $tama = count($Id);
    $Total_producto = $tama - 1;
?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - HTML5/CSS3 Shopping Cart Layout</title>
  <link rel="stylesheet" href="car.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
  <center>
  <div id="w">
    <header id="title">
      <h1>Tu carrio</h1>
    </header>
    <div id="page">
      <table id="cart">
        <thead>
          <tr>
            <th class="first">Imagen</th>
            <th class="second">Cnt</th>
            <th class="third">Producto</th>
            <th class="fourth">Total</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <!-- shopping cart contents -->
          <?php 
            $total_costo = 0; // variable para almacenar el costo total de los productos
            for($i = 1; $i< $tama; $i++){ 
            $product = "SELECT * FROM producto WHERE Id = '$IdPro[$i]'";
            $productos = mysqli_query($conn, $product);


            while ($fila = mysqli_fetch_assoc($productos)) {
                $Id = $fila['Id'];
                $Nombre = $fila['Nombre'];
                $Talla = $fila['Talla'];
                $Foto = $fila['Foto'];
                $Descripcion = $fila['Descripcion'];
                $Moda = $fila['Moda'];
                $SKU = $fila['Sku']; 
                $Costo = $fila['Costo']; 
                // sumar el costo de cada producto a la variable $total_costo
                
            }
            
          ?>
          <tr class="productitm">
            <!-- http://www.inkydeals.com/deal/ginormous-bundle/ -->
            <td><img src="<?php echo "../imgt/Productos/".$Foto; ?>" class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput" name="quantity[<?php echo $Id; ?>]"></td>
            <td><?php echo $Nombre; ?></td>
            <td><?php echo "$".$Costo; ?></td>
            
            <script>
              var input = document.querySelector('input.quantity<?php echo $Id; ?>');

              input.addEventListener('input', function() {
                var valor = input.value;
                console.log('El valor del input es: ' + valor);
              });
            </script>

            <?php 
            $total_costo += $Costo;
            ?>
            <td><span class="remove"><img src="https://i.imgur.com/h1ldGRr.png" alt="X"></span></td>
          </tr>
          <?php } ?>
          
          
          <tr class="totalprice">
            <td class="light">Total:</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><span id="total" class="thick">$ <?php echo $total_costo; ?> </span></td>
          </tr>
          <!-- checkout btn -->
          <tr class="checkoutrow">
            <td colspan="5" class="checkout"><button id="submitbtn">Checkout Now!</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </center>
</body>
<!-- partial -->
  
</body>
</html>

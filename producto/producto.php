<?php 
    require("../php/conexion.php");
    session_start();

    $consulta = "SELECT * FROM producto";
    $productos = mysqli_query($conn, $consulta);
    $Id = array();
    $Nombre = array();
    $Talla = array();
    $Foto = array();
    $Descripcion = array();
    $Moda = array();
    $SKU = array();
    $Costo = array();

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
  <title>Productos</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="stylesheet" href="producto.css">
</head>
<body>
	<!-- partial:index.partial.html -->
	<div class="container">
		<div class="row" id="search">
			<form id="search-form" action="" method="POST" enctype="multipart/form-data">
				<div class="form-group col-xs-9">
					<input class="form-control" type="text" placeholder="Search" />
					</div>
			<div class="form-group col-xs-3">
				<button type="submit" class="btn btn-block btn-primary">Buscar</button>
			</div>
		</form>
	</div>
	<div class="row" id="filter">
		<form>
			<div class="form-group col-sm-3 col-xs-6">
				<select data-filter="make" class="filter-make filter form-control">
					<option value="">Seleccionar categoria</option>
					<option value="">Ver todo</option>
				</select>
			</div>
			
		</form>
	</div>
	<div class="row" id="products">
		
	</div>
</div>
<!-- partial -->
  <script src='jquery.js'></script>
<script src='bootstrap.js'></script>

<script>

var data = [
	<?php for($i = 0; $i < $tama; $i++){ ?>
	{
		"make": "<?php echo $Nombre[$i]; ?>",
		"model": "<?php echo $Id[$i]; ?>",
		"type": "Electric",
		"price": "$<?php echo $Costo[$i]; ?>",
		"image": "<?php echo "../imgt/Productos/".$Foto[$i]; ?>"
	},
	<?php } ?>
];

var products = "",
	makes = "",
	models = "",
	types = "";

for (var i = 0; i < data.length; i++) {
	var make = data[i].make,
		model = data[i].model,
		type = data[i].type,
		price = data[i].price,
		rawPrice = price.replace("$",""),
		rawPrice = parseInt(rawPrice.replace(",","")),
		image = data[i].image;
	
	//create product cards
	products += "<div class='col-sm-4 product' data-make='" + make + "' data-model='" + model + "' data-type='" + type + "' data-price='" + rawPrice + "'><div class='product-inner text-center'><img src='" + image + "'><br />Make: " + make + "<br />Modelo: " + model + "<br />Type: " + type + "<br />Price: " + price + "</br> <a href='../php/addcar.php?producto="+ model +"'>Alñadir al arrtio</a>" +"</div></div>";
	
	//create dropdown of makes
	if (makes.indexOf("<option value='" + make + "'>" + make + "</option>") == -1) {
		makes += "<option value='" + make + "'>" + make + "</option>";
	}
	
	//create dropdown of models
	if (models.indexOf("<option value='" + model+"'>" + model + "</option>") == -1) {
		models += "<option value='" + model + "'>" + model + "</option>";
	}
	
	//create dropdown of types
	if (types.indexOf("<option value='" + type + "'>" + type + "</option>") == -1) {
		types += "<option value='" + type + "'>" + type + "</option>";
	}
}

$("#products").html(products);
$(".filter-make").append(makes);
$(".filter-model").append(models);
$(".filter-type").append(types);

var filtersObject = {};

//on filter change
$(".filter").on("change",function() {
	var filterName = $(this).data("filter"),
		filterVal = $(this).val();
	
	if (filterVal == "") {
		delete filtersObject[filterName];
	} else {
		filtersObject[filterName] = filterVal;
	}
	
	var filters = "";
	
	for (var key in filtersObject) {
	  	if (filtersObject.hasOwnProperty(key)) {
			filters += "[data-"+key+"='"+filtersObject[key]+"']";
	 	}
	}
	
	if (filters == "") {
		$(".product").show();
	} else {
		$(".product").hide();
		$(".product").hide().filter(filters).show();
	}
});

//on search form submit
$("#search-form").submit(function(e) {
	e.preventDefault();
	var query = $("#search-form input").val().toLowerCase();

	$(".product").hide();
	$(".product").each(function() {
		var make = $(this).data("make").toLowerCase(),
			model = $(this).data("model").toLowerCase(),
			type = $(this).data("type").toLowerCase();

		if (make.indexOf(query) > -1 || model.indexOf(query) > -1 || type.indexOf(query) > -1) {
			$(this).show();
		}
	});
});
</script>
</body>
</html>

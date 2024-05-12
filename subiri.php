<?php
    require("php/conexion.php");
    session_start();
    $file = $_FILES["archivo"]["name"]; //Nombre de nuestro archivo
    $validator = 1; //Variable validadora
    $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION)); //Extensión de nuestro archivo
    $url_temp = $_FILES["archivo"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 
    //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
    $url_insert = "imgt/Productos/"; //Carpeta donde subiremos nuestros archivos
    //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
    $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;
    //Si la carpeta no existe, la creamos
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true);
    };
    //Validamos el tamaño del archivo
    $file_size = $_FILES["archivo"]["size"];
    if ( $file_size > 1000000) {
    echo "El archivo es muy pesado";
    $validator = 0;
    }
    //Validamos la extensión del archivo
    if($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif" ) {
    echo "Solo se permiten imágenes tipo JPG, JPEG, PNG & GIF";
    $validator = 0;
    }
    //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
    if($validator == 1){
        if (move_uploaded_file($url_temp, $url_target)) {
            echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
        } else {
            echo "Ha habido un error al cargar tu archivo.";
        }
    }else{
        echo "Error: el archivo no se ha cargado";
    }
    //echo $file;
    $nombrep = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $moda = $_POST['moda'];
    $talla = $_POST['talla'];
    $sku = $_POST['sku'];
    $descripcion = $_POST['descripcion'];
    $costo = $_POST['costo'];
    // Crear la consulta SQL
    $sql = "INSERT INTO producto(Nombre, Categoria, Foto, Descripcion, Moda, Talla, Costo, Sku)
    VALUES ('$nombrep', '$categoria', '$file', '$descripcion', '$moda', '$talla', '$costo', '$sku')";

    // Ejecutar la consulta
    if (mysqli_query($conn, $sql)) {
        echo "Registro insertado correctamente";
        header("location: adpr/productos/insertar.php");
    } else {
        echo "Error al insertar registro: " . mysqli_error($conexion);
    }
?>
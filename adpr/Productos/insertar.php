<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Formulario de contacto en html</title>
  <link rel="stylesheet" href="insertar.css">

</head>
<body>
<!-- partial:index.partial.html -->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Insertar producto</title>

  <!-- Enlace al documento css. no aplicable en codepen.
  <link rel="stylesheet" type="text/css" href="contact-form.css">
-->
  
  </head>


<body>	
  
  <!-- formulario de contacto en html y css -->  

	<div class="contact_form">

		<div class="formulario">			
      <h1>Inserta un producto</h1>
					<form action="../../subiri.php" method="post" enctype="multipart/form-data">				

						
								<p>
									<label for="nombre" class="colocar_nombre">Nombre
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="nombre" id="nombre" required="obligatorio" placeholder="Escribe tu producto">
								</p>
							
								<p>
									<label for="nombre" class="colocar_nombre">Categoria
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="categoria" id="nombre" required="obligatorio" placeholder="Escribe la categoria">
								</p>
						
								<p>
									<label for="nombre" class="colocar_nombre">Moda
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="moda" id="nombre" required="obligatorio" placeholder="Escribe la moda">
								</p>		
							
								<p>
									<label for="nombre" class="colocar_nombre">Talla
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="talla" id="nombre" required="obligatorio" placeholder="Escribe la categoria">
								</p>		
							
								<p>
									<label for="asunto" class="colocar_asunto">SKU
										<span class="obligatorio">*</span>
									</label>
										<input type="text" name="sku" id="assunto" required="obligatorio" placeholder="Escribe el SKU">
								</p>		
							
								<p>
									<label for="mensaje" class="colocar_mensaje">Descripcion
										<span class="obligatorio">*</span>
									</label>                     
                               		  <textarea name="descripcion" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Escribe la descripcion"></textarea> 
                               	</p>	 
								<p>
									<label for="mensaje" class="colocar_mensaje">Costo
										<span class="obligatorio">*</span>
									</label>                     
                               		  <textarea name="costo" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Escribe la descripcion"></textarea> 
                               	</p>
                                
                                <p>
                                    <label for="archivo">Selecciona una imagen:</label>
                                    <input type="file" id="archivo" name="archivo">
                                </p>
							
								<button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

								<p class="aviso">
									<span class="obligatorio"> * </span>los campos son obligatorios.
								</p>					
						
					</form>
		</div>	
	</div>

</body>
</html>


<!-- creado por javiniguez.com, Julio 2019 -->
<!-- partial -->
  
</body>
</html>

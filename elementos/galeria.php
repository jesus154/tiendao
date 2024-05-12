<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>CALZADO DEPORTIVO</title>
</head>
<body>
    <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/1.png" alt="">
                    </div>
                    <p class="descripcion">NIKE AIR 97</p>
                    <span class="precio">$ 1.300</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/2.png" alt="">
                    </div>
                    <p class="descripcion" id>NIKE RUNNING TERRA </p>
                    <span class="precio">$ 1.800</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/3.png" alt="">
                    </div>
                    <p class="descripcion">NIKE WINFLO 8
                    </p>
                    <span class="precio">$ 3.600</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/4.png" alt="">
                    </div>
                    <p class="descripcion">NIKE LOW-TOP</p>
                    <span class="precio">$ 1.800</span>
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/5.png" alt="">
                    </div>
                    <p class="descripcion">NIKE BLAZER 97</p>
                    <span class="precio">$ 130</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/6.png" alt="">
                    </div>
                    <p class="descripcion">NIKE LEGEND ESENTIAL</p>
                    <span class="precio">$ 2.000</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/7.png" alt="">
                    </div>
                    <p class="descripcion">NIKE AIR ZOOM</p>
                    <span class="precio">$ 2.500</span>
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="img/8.png" alt="">
                    </div>
                    <p class="descripcion">NIKE TERRA KING</p>
                    <span class="precio">$ 1.800</span>
                </div>
            </div> 
        </div>
        <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="img/1.png" alt="" id="img">
                <h2 id="modelo">NIKE MODEL 1</h2>
                <p id="descripcion">Descripción Modelo 1</p>

                <span class="precio" id="precio">$ 130</span>

                <div class="fila">
                    <div class="size">
                        <label for="">SIZE</label>
                        <select name="" id="">
                            <option value="">40</option>
                            <option value="">42</option>
                            <option value="">44</option>
                            <option value="">46</option>
                        </select>
                    </div>
                    <button>AGREGAR AL CARRITO</button>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>
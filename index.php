<?php 
    require("php/conexion.php");
    session_start();
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
    <title>Inicio</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="elementos/slider.css">
    <link href="css/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="elementos/galeria.css">
</head>
<body>
    <main>
        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="imgs/logocs.png" width="140">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-secondary">Inicio</a></li>
                        <li><a href="product.php" class="nav-link px-2 text-white">Productos</a></li>
                        <li><a href="categoria/categoria.php" class="nav-link px-2 text-white">Categorias</a></li>
                        <li><a href="frecuentes.php" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="acerca.php" class="nav-link px-2 text-white">Acerca</a></li>
                    </ul>


                    <div class="text-end">
                        <?php
                          if(isset($_SESSION['ror'])){
                        ?>
                        <a href="cuenta.php">
                            <button type="button" class="btn btn-outline-light me-2"> <img src="imgs/cuenta.png" width="20"> </button>
                        </a>
                        <a href="carrito.php">
                            <button type="button" class="btn btn-outline-light me-2"> <img src="imgs/car.png" width="20"> </button>
                        </a>
                        <a href="login.php">
                            <button type="button" class="btn btn-outline-light me-2"> <img src="imgs/notif.png" width="20"> </button>
                        </a>
                        <a href="php/cerrar.php">
                            <button type="button" class="btn btn-outline-light me-2">Salir</button>
                        </a>
                        <?php
                          }else{
                        ?>
                        <a href="login.php">
                            <button type="button" class="btn btn-outline-light me-2">Login</button>
                        </a>
                        <a href="registro.php">
                            <button type="button" class="btn btn-outline-light me-2">Registrate</button>
                        </a>
                        <?php
                          }
                        ?>
                        
                    </div>
                </div>
            </div>
        </header>
    </main>
    <br>
    <center>
        <?php include 'elementos/slider.php'; ?>
    </center>
    <script  src="elementos/slider.js"></script>
    <br>
    <center>
        <?php include 'elementos/thebest/best.php'; ?>
    </center>
    <script  src="elementos/slider.js"></script>
    <br>
    <br>
    <center>
    <img src="imgt/smart.jpg" alt="" style="width: 1000px; height: 600px;">
    </center>

    <br>
    <br>
    <center>
        
        <iframe width="853" height="480" src="https://www.youtube.com/embed/GODzl0qyTMQ?list=PLNqKTn4CuEXebubjBnW9rQS9b40Heo4Hk" title="Balance with Skateboarder Sky Brown and Lucy Li! Bailey Sok Dances | Nike Playlist (S10E14) | Nike" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </center>
    <br>
    <center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d980.0980253305196!2d-100.05897383418709!3d21.95925187825916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d572ed1b066e91%3A0xf45e38e30478405c!2s79604%20Las%20Adjuntas%2C%20S.L.P.!5e0!3m2!1ses-419!2smx!4v1678478638286!5m2!1ses-419!2smx" width="1200" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>
    <br>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #2A2644">
    <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Classic Sports
                        </h6>
                        <p>
                        Viste tu pasión, vive tu deporte.
                        </p>
                        <a href="privacidad.php">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Politicas de privacidad
                        </h6>
                        </a>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Productos</h6>
                        <p>
                            <a class="text-white">Playeras</a>
                        </p>
                        <p>
                            <a class="text-white">Tenis</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
                        <p><i class="fas fa-home mr-3"></i> Hacienda Valleumbroso 321, SLP 78434, MX</p>
                        <p><i class="fas fa-envelope mr-3"></i> jesuselno2@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> +52 4444135688</p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Siguenos</h6>

                        <!-- Facebook -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #3b5998"
                        href="#!"
                        role="button"
                        > <img src="icons/face.png" style="width: 20%"> </a>

                        <!-- Instagram -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #ac2bac"
                        href="#!"
                        role="button"
                        > <img src="icons/insta2.png" style="width: 20%"> </a> </a>

                        <!-- Twitter -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #55acee"
                        href="#!"
                        role="button"
                        > <img src="icons/tw.png" style="width: 20%"> </a>

                        <!-- Google -->
                        <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #dd4b39"
                        href="#!"
                        role="button"
                        > <img src="icons/google.png" style="width: 20%"> </a>

                        

                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            Classic Sports
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
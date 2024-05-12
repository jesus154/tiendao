<?php 
    require("../php/conexion.php");
    session_start();

    $sql1 = "SELECT COUNT(*) as Total FROM carrito";
    $tusuarios = mysqli_query($conn, $sql1);
    while($tusu = mysqli_fetch_array($tusuarios)){
        $totalusu = $tusu['Total'];
    }

    $usuariosr = "SELECT COUNT(*) as Usuariost FROM usuarios";
    $todos = mysqli_query($conn, $usuariosr);
    while($tusu2 = mysqli_fetch_array($todos)){
        $totalusu2 = $tusu2['Usuariost'];
    }

    $usuariosr2 = "SELECT COUNT(*) as Usuarios FROM usuarios WHERE rol = '2'";
    $todos2 = mysqli_query($conn, $usuariosr2);
    while($tusu3 = mysqli_fetch_array($todos2)){
        $totalusu3 = $tusu3['Usuarios'];
    }

    $carrito = "SELECT COUNT(*) as car FROM carrito";
    $tcarrito = mysqli_query($conn, $carrito);
    while($tcarritos = mysqli_fetch_array($tcarrito)){
        $totalcarrito = $tcarritos['car'];
    }
?>
 


<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="dashboard.css">
</head>
    <body>
        <!-- partial:index.partial.html -->
        <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
            <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
            <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
                <?php
                    $imagen_ruta = '../'.$_SESSION['fot'];
                ?>
                <img
                    class="rounded-pill img-fluid"
                    width="65"
                    src=" <?php echo $imagen_ruta; ?> "
                    alt="">
                <div class="ms-2">
                    <h5 class="fs-6 mb-0">
                        <a class="text-decoration-none" href="#"> <?php echo $_SESSION["nom"]; // Nombre del usuario?> </a>
                    </h5>
                </div>
            </div>

            <ul class="categories list-unstyled">
                <li class="has-dropdown">
                    <i class="uil-estate fa-fw"></i><a href="../index.php">Sitio</a>
                    <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="../index.php">Index</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><a href="#">FAGs</a></li>
                    <li><a href="#">Acerca</a></li>
                </li>
            </ul>
            
            
            <li class="has-dropdown">
                <i class="uil-envelope-download fa-fw"></i><a href="#">Mensajes</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Proveedores</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-shopping-cart-alt"></i><a href="#">Pedidos</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Proovedores</a></li>
                    <li><a href="#">Clientes</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-bag"></i><a href="#">Usuarios</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><button onclick="openUsuarios()">Usuarios</button></li>
                </ul>
            </li>
            
            <li class="has-dropdown">
                <i class="uil-chart-pie-alt"></i><a href="#">Usuarios</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Usuarios</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                <i class="uil-panel-add"></i><a href="#"> Charts</a>
                <ul class="sidebar-dropdown list-unstyled">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
            <li class="">
                <i class="uil-map-marker"></i><a href="#"> Maps</a>
            </li>
            </ul>
        </aside>

        <section id="wrapper">
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid mx-2">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="uil-bars text-white"></i>
                        </button>
                        <a class="navbar-brand" href="#">Admi<span class="main-color">strador</span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="toggle-navbar">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">My account</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">My inbox</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Help</a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Log out</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="uil-comments-alt"></i><span>23</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="uil-bell"></i><span>98</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="p-4">
                <div class="welcome">
                    <div class="content rounded-3 p-3">
                        <h1 class="fs-3">Bienvenido</h1>
                        <p class="mb-0">Hola <?php echo $_SESSION["usu"]; // Usuario ?>, sigamos administrando</p>
                    </div>
                </div>

                <section class="statistics mt-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                                <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
                                <div class="ms-3">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mb-0"> <?php echo $totalusu;?> </h3> <span class="d-block ms-2">Emails</span>
                                    </div>
                                    <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                                <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
                                <div class="ms-3">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mb-0">34</h3> <span class="d-block ms-2">Projects</span>
                                    </div>
                                    <p class="fs-normal mb-0">Lorem ipsum dolor sit amet</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="box d-flex rounded-2 align-items-center p-3">
                                <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
                                <div class="ms-3">
                                    <div class="d-flex align-items-center">
                                        <h3 class="mb-0"> <?php echo $totalusu2;?> </h3> <span class="d-block ms-2">Usuarios</span>
                                    </div>
                                    <p class="fs-normal mb-0">Registrados en el sitio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="charts mt-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="chart-container rounded-2 p-3">
                                <h3 class="fs-6 mb-3">Chart title number one</h3>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="chart-container rounded-2 p-3">
                                <h3 class="fs-6 mb-3">Chart title number two</h3>
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="admins mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <!-- <h4>Admins:</h4> -->
                                <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                    <div class="img">
                                        <img class="img-fluid rounded-pill"
                                            width="75" height="75"
                                            src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance"
                                            alt="admin">
                                    </div>
                                <div class="ms-3">
                                <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill"
                                        width="75" height="75"
                                        src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907137/small/1501685404/enhance"
                                        alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3">
                                <div class="img">
                                    <img class="img-fluid rounded-pill"
                                        width="75" height="75"
                                        src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907019/small/1501685403/enhance"
                                        alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <!-- <h4>Moderators:</h4> -->
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill"
                                        width="75" height="75"
                                        src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907114/small/1501685404/enhance"
                                        alt="admin">
                                </div>
                                <div class="ms-3">
                                    <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                                </div>
                            </div>
                            <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                <div class="img">
                                    <img class="img-fluid rounded-pill"
                                        width="75" height="75"
                                        src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance"
                                        alt="admin">
                                </div>
                                <div class="ms-3">
                                <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                            </div>
                        </div>
                        <div class="admin d-flex align-items-center rounded-2 p-3">
                            <div class="img">
                                <img class="img-fluid rounded-pill"
                                    width="75" height="75"
                                    src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance"
                                    alt="admin">
                            </div>
                            <div class="ms-3">
                                <h3 class="fs-5 mb-1">Joge Lucky</h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </section>

                <section class="statis mt-4 text-center">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="box bg-primary p-3">
                                <i class="uil-eye"></i>
                                <h3>5,154</h3>
                                <p class="lead">Page views</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="box bg-danger p-3">
                                <i class="uil-user"></i>
                                <h3> <?php echo $totalusu3;?> </h3>
                                <p class="lead">Usuarios registrados</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                            <div class="box bg-warning p-3">
                                <i class="uil-shopping-cart"></i>
                                <h3> <?php echo $totalcarrito;?> </h3>
                                <p class="lead">Productos en carrito</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="box bg-success p-3">
                                <i class="uil-feedback"></i>
                                <h3>5,154</h3>
                                <p class="lead">Transactions</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="charts mt-4">
                <div class="chart-container p-3">
                    <h3 class="fs-6 mb-3">Chart title number three</h3>
                    <div style="height: 300px">
                    <canvas id="chart3" width="100%"></canvas>
                    </div>
                </div>
                </section>
            </div>
        </section>
        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
        </script>
        <script>
            // Other important pens.
            // Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
            // Navbar: https://codepen.io/themustafaomar/pen/VKbQyZ

            'use strict'

            function $(selector) {
                return document.querySelector(selector)
            }

            function find(el, selector) {
                let finded
                return (finded = el.querySelector(selector)) ? finded : null
            }

            function siblings(el) {
                const siblings = []
                for (let sibling of el.parentNode.children) {
                    if (sibling !== el) {
                        siblings.push(sibling)
                    }
                }
                return siblings
            }

            const showAsideBtn = $('.show-side-btn')
            const sidebar = $('.sidebar')
            const wrapper = $('#wrapper')

            showAsideBtn.addEventListener('click', function () {
                $(`#${this.dataset.show}`).classList.toggle('show-sidebar')
                wrapper.classList.toggle('fullwidth')
            })

            if (window.innerWidth < 767) {
                sidebar.classList.add('show-sidebar');
            }

            window.addEventListener('resize', function () {
                if (window.innerWidth > 767) {
                    sidebar.classList.remove('show-sidebar')
                }
            })

            // dropdown menu in the side nav
            var slideNavDropdown = $('.sidebar-dropdown');

            $('.sidebar .categories').addEventListener('click', function (event) {
                event.preventDefault()

                const item = event.target.closest('.has-dropdown')

                if (! item) {
                    return
                }

                item.classList.toggle('opened')

                siblings(item).forEach(sibling => {
                    sibling.classList.remove('opened')
                })

                if (item.classList.contains('opened')) {
                    const toOpen = find(item, '.sidebar-dropdown')

                    if (toOpen) {
                        toOpen.classList.add('active')
                    }

                    siblings(item).forEach(sibling => {
                    const toClose = find(sibling, '.sidebar-dropdown')

                    if (toClose) {
                        toClose.classList.remove('active')
                    }
                })
                } else {
                    find(item, '.sidebar-dropdown').classList.toggle('active')
                }
            })

            $('.sidebar .close-aside').addEventListener('click', function () {
                $(`#${this.dataset.close}`).classList.add('show-sidebar')
                wrapper.classList.remove('margin')
            })


            // Global defaults
            Chart.defaults.global.animation.duration = 2000; // Animation duration
            Chart.defaults.global.title.display = false; // Remove title
            Chart.defaults.global.defaultFontColor = '#71748c'; // Font color
            Chart.defaults.global.defaultFontSize = 13; // Font size for every label

            // Tooltip global resets
            Chart.defaults.global.tooltips.backgroundColor = '#111827'
            Chart.defaults.global.tooltips.borderColor = 'blue'

            // Gridlines global resets
            Chart.defaults.scale.gridLines.zeroLineColor = '#3b3d56'
            Chart.defaults.scale.gridLines.color = '#3b3d56'
            Chart.defaults.scale.gridLines.drawBorder = false

            // Legend global resets
            Chart.defaults.global.legend.labels.padding = 0;
            Chart.defaults.global.legend.display = false;

            // Ticks global resets
            Chart.defaults.scale.ticks.fontSize = 12
            Chart.defaults.scale.ticks.fontColor = '#71748c'
            Chart.defaults.scale.ticks.beginAtZero = false
            Chart.defaults.scale.ticks.padding = 10

            // Elements globals
            Chart.defaults.global.elements.point.radius = 0

            // Responsivess
            Chart.defaults.global.responsive = true
            Chart.defaults.global.maintainAspectRatio = false

            // The bar chart
            var myChart = new Chart(document.getElementById('myChart'), {
                type: 'bar',
                data: {
                    labels: ["Enero", "Febrero", "Marzo", "Abril", 'Mayo', 'Junio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                    label: "Lost",
                    data: [45, 25, 40, 20, 60, 20, 35, 25],
                    backgroundColor: "#0d6efd",
                    borderColor: 'transparent',
                    borderWidth: 2.5,
                    barPercentage: 0.4,
                    }, {
                    label: "Succes",
                    startAngle: 2,
                    data: [20, 40, 20, 50, 25, 40, 25, 10],
                    backgroundColor: "#dc3545",
                    borderColor: 'transparent',
                    borderWidth: 2.5,
                    barPercentage: 0.4,
                }]
            },
                options: {
                    scales: {
                    yAxes: [{
                        gridLines: {},
                        ticks: {
                        stepSize: 15,
                        },
                    }],
                    xAxes: [{
                        gridLines: {
                        display: false,
                        }
                    }]
                    }
                }
            })

            // The line chart
            var chart = new Chart(document.getElementById('myChart2'), {
                type: 'line',
                data: {
                    labels: ["Enero", "Febrero", "Marzo", "Abril", 'Mayo', 'Junio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                    label: "My First dataset",
                    data: [4, 20, 5, 20, 5, 25, 9, 18],
                    backgroundColor: 'transparent',
                    borderColor: '#0d6efd',
                    lineTension: .4,
                    borderWidth: 1.5,
                    }, {
                    label: "Month",
                    data: [11, 25, 10, 25, 10, 30, 14, 23],
                    backgroundColor: 'transparent',
                    borderColor: '#dc3545',
                    lineTension: .4,
                    borderWidth: 1.5,
                    }, {
                    label: "Month",
                    data: [16, 30, 16, 30, 16, 36, 21, 35],
                    backgroundColor: 'transparent',
                    borderColor: '#f0ad4e',
                    lineTension: .4,
                    borderWidth: 1.5,
                    }]
                },
                options: {
                    scales: {
                    yAxes: [{
                        gridLines: {
                        drawBorder: false
                        },
                        ticks: {
                        stepSize: 12,
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                        display: false,
                        },
                    }]
                    }
                }
            })

            var chart = document.getElementById('chart3');
            var myChart = new Chart(chart, {
                type: 'line',
                data: {
                    labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", 'Sabado', "Domingo"],
                    datasets: [{
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#d9534f',
                    borderWidth: 1.5,
                    showLine: true,
                    data: [3, 30, 16, 30, 16, 36, 21, 40, 20],
                    backgroundColor: 'transparent'
                    }, {
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#5cb85c',
                    borderWidth: 1.5,
                    data: [6, 20, 5, 20, 5, 25, 9, 18, 20],
                    backgroundColor: 'transparent'
                    },
                {
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#f0ad4e',
                    borderWidth: 1.5,
                    data: [12, 20, 15, 20, 5, 35, 10, 15, 35],
                    backgroundColor: 'transparent'
                },
                {
                    label: "Lost",
                    lineTension: 0.2,
                    borderColor: '#337ab7',
                    borderWidth: 1.5,
                    data: [16, 25, 10, 25, 10, 30, 14, 23, 14],
                    backgroundColor: 'transparent'
                }]
                    },
                    options: {
                        scales: {
                        yAxes: [{
                            gridLines: {
                            drawBorder: false
                            },
                            ticks: {
                            stepSize: 12
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                            display: false,
                            },
                        }],
                        }
                    }
            })
            function openUsuarios() {
                window.open("Usuarios/usuarios.php", "Usuarios", "width=600,height=400,scrollbars=yes");
            }

       </script>
    </body>
</html>


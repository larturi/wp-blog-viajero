<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Juanito Travel</title>

    <link rel="icon" href="img/icono.jpg">

    <!--=====================================
	PLUGINS DE CSS
	======================================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

    <!-- JdSlider -->
    <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
    <link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">

    <link rel="stylesheet" href="css/style.min.css">

    <!--=====================================
	PLUGINS DE JS
	======================================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- JdSlider -->
    <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
    <script src="js/plugins/jquery.jdSlider-latest.js"></script>

    <!-- pagination -->
    <!-- http://josecebe.github.io/twbs-pagination/ -->
    <script src="js/plugins/pagination.min.js"></script>

    <!-- scrollorama -->
    <!-- http://johnpolacek.github.io/superscrollorama/ -->
    <script src="js/plugins/jquery.superscrollorama.js"></script>
    <script src="js/plugins/TweenMax.min.js"></script>

    <!-- scrollup -->
    <!-- https://markgoodyear.com/labs/scrollup/ -->
    <!-- https://easings.net/es# -->
    <script src="js/plugins/scrollUP.js"></script>
    <script src="js/plugins/jquery.easing.js"></script>

</head>

<body>

    <!--=====================================
PRELOAD
======================================-->

    <div id="preload">

        <div id="porcentajeCarga">0%</div>

        <div id="lineaCarga">

            <div id="rellenoCarga"></div>

        </div>

        <div id="estadoCarga"></div>

    </div>

    <!--=====================================
CABECERA
======================================-->

    <header class="container-fluid">

        <div class="container p-0">

            <div class="row">

                <!-- LOGO -->
                <div class="col-10 col-sm-11 col-md-8 col-lg-7 pt-1 pt-lg-3 p-xl-0">

                    <a href="index.html">

                        <img src="img/logotipo-negativo.png" alt="Logo de Juanito Travel" class="img-fluid logotipo">

                    </a>

                </div>

                <!-- REDES SOCIALES -->
                <div class="d-none d-md-block col-md-2 col-lg-2 redes">

                    <ul class="d-flex justify-content-end pt-2 mt-1">

                        <li>
                            <a href="https://www.facebook.com" target="_blank">
                                <i class="fab fa-facebook-f lead rounded-circle text-white mr-1"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-instagram lead rounded-circle text-white mr-1"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-twitter lead rounded-circle text-white mr-1"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-youtube lead rounded-circle text-white mr-1"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" target="_blank">
                                <i class="fab fa-snapchat-ghost lead rounded-circle text-white mr-1"></i>
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- BUSCADOR Y BOTÓN MENÚ -->
                <div class="col-2 col-sm-1 col-md-2 col-lg-2 d-flex justify-content-end pt-2 mt-1">

                    <!-- BUSCADOR -->
                    <div class="d-none d-md-block pr-4 pr-lg-5 mt-1">
                        <i class="fas fa-search lead" data-toggle="collapse" data-target="#buscador"></i>
                    </div>

                    <!-- BOTÓN MENÚ -->
                    <div class="m-0 mt-sm-1 mt-md-0 pr-0 pr-sm-2 pr-lg-3">
                        <i class="fas fa-bars lead"></i>
                    </div>

                </div>

                <!-- ENTRADA DEL BUSCADOR -->

                <div id="buscador" class="collapse col-12">

                    <div class="input-group float-right w-50 pl-xl-5 pb-3">

                        <input type="text" class="form-control" placeholder="Buscar">

                        <div class="input-group-append">

                            <span class="input-group-text">

                                <i class="fas fa-search"></i>

                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <!--=====================================
REDES SOCIALES PARA MÓVIL
======================================-->

    <div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">

        <ul class="d-flex justify-content-center p-0">

            <li>
                <a href="https://www.facebook.com" target="_blank">
                    <i class="fab fa-facebook-f lead rounded-circle text-white mr-3 mr-sm-4"></i>
                </a>
            </li>

            <li>
                <a href="#" target="_blank">
                    <i class="fab fa-instagram lead rounded-circle text-white mr-3 mr-sm-4"></i>
                </a>
            </li>

            <li>
                <a href="#" target="_blank">
                    <i class="fab fa-twitter lead rounded-circle text-white mr-3 mr-sm-4"></i>
                </a>
            </li>

            <li>
                <a href="#" target="_blank">
                    <i class="fab fa-youtube lead rounded-circle text-white mr-3 mr-sm-4"></i>
                </a>
            </li>

            <li>
                <a href="#" target="_blank">
                    <i class="fab fa-snapchat-ghost lead rounded-circle text-white mr-3 mr-sm-4"></i>
                </a>
            </li>

        </ul>

    </div>
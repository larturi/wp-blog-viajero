<?php get_header(); ?>

<!--=====================================
BANNER
======================================-->
<div class="bannerEstatico"></div>

<section class="jd-slider fade-slider">

    <div class="slide-inner">

        <ul class="slide-area">

            <li>

                <img src="img/banner01.jpg" alt="Juanito Travel en el mar" class="img-fluid">

            </li>

            <li>

                <img src="img/banner02.jpg" alt="Juanito Travel en el mar" class="img-fluid">

            </li>

            <li>

                <img src="img/banner03.jpg" alt="Juanito Travel en el mar" class="img-fluid">

            </li>

            <li>

                <img src="img/banner04.jpg" alt="Juanito Travel en el mar" class="img-fluid">

            </li>

        </ul>

    </div>

    <div class="controller d-none">

        <a class="auto" href="#">

            <i class="fas fa-play fa-xs"></i>
            <i class="fas fa-pause fa-xs"></i>

        </a>

        <div class="indicate-area"></div>

    </div>

</section>

<!--=====================================
BUSCADOR PARA MÓVIL
======================================-->
<div class="container-fluid d-block d-md-none py-3 bg-white">

    <div class="input-group input-group-sm">

        <input type="text" class="form-control" placeholder="Buscar">

        <div class="input-group-append">

            <span class="input-group-text"><i class="fas fa-search"></i></span>

        </div>
    </div>

</div>

<!--=====================================
MENU
======================================-->
<div class="container-fluid menu">

    <a href="#" class="btnClose">X</a>

    <ul class="nav flex-column text-center">

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Suramérica</a>

        </li>

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Centroamérica</a>

        </li>

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Norteamérica</a>

        </li>

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Europa</a>

        </li>

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Asia</a>

        </li>

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Africa</a>

        </li>

        <li class="nav-item">

            <a class="nav-link text-white" href="categorias.html">Mi viaje por Oceanía</a>

        </li>

    </ul>

</div>

<!--=====================================
GRID DE CATEGORÍAS
======================================-->
<div class="container-fluid py-2 py-md-5 bg-white grid">

    <div class="container p-0">

        <div class="d-flex">

            <div class="d-flex flex-column columna1">

                <figure class="p-2 photo1" vinculo="categorias.html">

                    <p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Suramérica</p>

                </figure>

                <figure class="p-2 photo2" vinculo="categorias.html">

                    <p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Africa</p>

                </figure>

                <figure class="d-block d-md-none p-2 photo6" vinculo="categorias.html">

                    <p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Asia</p>

                </figure>

            </div>

            <div class="d-flex flex-column flex-fill columna2">

                <div class="d-block d-md-flex">

                    <figure class="p-2 flex-fill photo3" vinculo="categorias.html">

                        <p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Centromérica</p>

                    </figure>

                    <figure class="p-2 flex-fill photo4" vinculo="categorias.html">

                        <p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Europa</p>

                    </figure>

                </div>

                <figure class="p-2 photo5" vinculo="categorias.html">

                    <p class="text-uppercase p-1 p-md-3 p-xl-4">Mi viaje por Norteamérica</p>

                </figure>

            </div>

        </div>

    </div>

</div>

<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white contenidoInicio pb-4">

    <div class="container">

        <div class="row">

            <!-- COLUMNA IZQUIERDA -->

            <div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
                <h1>Error 404</h1>
                <h3>Lo sentimos, esta pagina no existe.</h3>
            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
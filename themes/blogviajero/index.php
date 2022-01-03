<?php get_header(); ?>
<?php include('modules/banner-index.php'); ?>
<?php include('modules/buscador-mobile.php'); ?>
<?php include('modules/menu.php'); ?>

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

                <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                ?>
                            <div class="row">

                                <div class="col-12 col-lg-5">

                                    <a href="articulos.html">
                                        <h5 class="d-block d-lg-none py-3"><?php the_title(); ?></h5>
                                    </a>

                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('post-thumbnails', array("class" => "img-fluid")); ?>
                                    </a>

                                </div>

                                <div class="col-12 col-lg-7 introArticulo">

                                    <a href="<?php the_permalink(); ?>">
                                        <h4 class="d-none d-lg-block"><?php the_title(); ?></h4>
                                    </a>

                                    <p class="my-2 my-lg-5"><?php the_excerpt(); ?></p>

                                    <a href="articulos.html" class="float-right">Leer Más</a>

                                    <div class="fecha"><?php the_time('d.m.Y'); ?></div>

                                </div>


                            </div>

                            <hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">

                <?php
                        endwhile; 
                    endif; 
                ?>

                <!-- PAGINACION -->
                <div class="container d-none d-md-block">
					<ul class="pagination justify-content-center">
						<?php echo paginate_links(); ?>
					</ul>
				</div>

                <!-- PUBLICIDAD -->

                <div class="d-block d-lg-none">

                    <img src="<?php echo get_template_directory_uri() . '/img/ad02.jpg'; ?>" class="img-fluid" width="100%">

                </div>

            </div>

            <?php get_sidebar(); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
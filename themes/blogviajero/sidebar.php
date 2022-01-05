<!-- COLUMNA DERECHA -->

<div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">

     <!-- SOBRE MI -->
    <?php
        if (is_active_sidebar('widgets-index-1')) {
            dynamic_sidebar('widgets-index-1');
        }
    ?>
    
    <!-- PUBLICIDAD -->

    <div class="my-4">

        <img src="<?php echo get_template_directory_uri() . '/img/ad01.jpg'; ?>" class="img-fluid">

    </div>

    <!-- COMENTARIOS RECIENTES -->

    <div class="my-4">

        <h4>Comentarios Recientes</h4>

        <div class="d-flex my-3">

            <div class="w-100 w-xl-50 pr-3 pt-2">

                <a href="articulos.html">

                    <img src="<?php echo get_template_directory_uri() . '/img/com01.jpg'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

                </a>

            </div>

            <div>

                <a href="articulos.html" class="text-secondary">

                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                </a>

            </div>

        </div>

        <div class="d-flex my-3">

            <div class="w-100 w-xl-50 pr-3 pt-2">

                <a href="articulos.html">

                    <img src="<?php echo get_template_directory_uri() . '/img/com02.jpg'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

                </a>

            </div>

            <div>

                <a href="articulos.html" class="text-secondary">

                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                </a>

            </div>

        </div>

        <div class="d-flex my-3">

            <div class="w-100 w-xl-50 pr-3 pt-2">

                <a href="articulos.html">

                    <img src="<?php echo get_template_directory_uri() . '/img/com03.jpg'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

                </a>

            </div>

            <div>

                <a href="articulos.html" class="text-secondary">

                    <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                </a>

            </div>

        </div>


    </div>

    <!-- PUBLICIDAD -->

    <div class="my-4">

        <img src="<?php echo get_template_directory_uri() . '/img/ad02.jpg'; ?>" class="img-fluid">

    </div>

    <div class="my-4">

        <img src="<?php echo get_template_directory_uri() . '/img/ad02.jpg'; ?>" class="img-fluid">

    </div>

</div>
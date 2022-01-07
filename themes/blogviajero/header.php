<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

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
                <div class="col-10 col-sm-11 col-md-8 col-lg-7 pt-1 pt-lg-3 p-xl-0 logotipo">

                    <a href="<?php echo esc_url(home_url("/")); ?>">

                        <?php
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/img/logo.jpg" class="img-fluid" alt="Logo">';
                            }
                        ?>

                    </a>

                </div>

                <!-- REDES SOCIALES -->

                <?php
                    // if(is_active_sidebar('widgets-redes-sociales')){
                    //     dynamic_sidebar('widgets-redes-sociales');
                    // }

                    wp_nav_menu(array(
                        "theme_location" => "social-menu",
                        "container" => "div",
                        "container_class" => "d-none d-md-block col-md-2 col-lg-2 redes",
                        "items_wrap" => '<ul class="d-flex justify-content-end pt-2 mt-1">%3$s</ul>',
                        "menu_class" => "nav-item",
                    ));
                ?>
<!-- 
                <div class="d-none d-md-block col-md-2 col-lg-2 redes">

                    <ul class="d-flex justify-content-end pt-2 mt-1">

                    </ul>

                </div> -->

                <!-- BUSCADOR Y BOTÓN MENÚ -->
                <div class="col-2 col-sm-1 col-md-2 col-lg-2 d-flex justify-content-end pt-2 mt-1">

                    <!-- BUSCADOR -->
                    <div class="d-none d-md-block pr-4 pr-lg-5 mt-1">
                        <i class="fas fa-search lead" style="margin-top: 13px;" data-toggle="collapse" data-target="#buscador"></i>
                    </div>

                    <!-- BOTÓN MENÚ -->
                    <div class="m-0 mt-sm-1 mt-md-0 pr-0 pr-sm-2 pr-lg-3">
                        <i class="fas fa-bars lead" style="margin-top: 9px;"></i>
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
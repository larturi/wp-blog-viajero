<?php

// Includes css y js
function blogviajero_includes() {
    // CSS
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400', array(), '1.0.0', 'all');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.6.0/css/all.css', array(), '5.6.0', 'all');
    wp_enqueue_style('jdSliderCss', get_template_directory_uri() . '/css/plugins/jquery.jdSlider.css', array(), '1.0.0', 'all');
    wp_enqueue_style('stylesCss', get_template_directory_uri() . '/css/style.min.css', array(), '1.0.0', 'all');

    // JS
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', true);
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), '1.14.3', true);
    wp_enqueue_script('bootstrapJs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), '4.1.3', true);
    wp_enqueue_script('jdSliderJs', get_template_directory_uri() . '/js/plugins/jquery.jdSlider-latest.js', array(), '1.0.0', true);
    wp_enqueue_script('pagination', get_template_directory_uri() . '/js/plugins/pagination.min.js', array(), '1.0.0', true);
    wp_enqueue_script('superscrollorama', get_template_directory_uri() . '/js/plugins/jquery.superscrollorama.js', array(), '1.0.0', true);
    wp_enqueue_script('tweenMax', get_template_directory_uri() . '/js/plugins/TweenMax.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scrollUP', get_template_directory_uri() . '/js/plugins/scrollUP.js', array(), '1.0.0', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/js/plugins/jquery.easing.js', array(), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'blogviajero_includes');

// Funciones para agregar al administrador
// https://developer.wordpress.org/themes/basics/theme-functions/
function blogviajero_setup() {
    register_nav_menus(array(
        'header-menu'   => __( 'Header Menu', 'blogviajero' )
    ));

    add_filter('nav_menu_link_attributes', 'agregarClases', 10, 3); 

    function agregarClases($atts, $item, $args) {
        $class = 'nav-link text-white';
        $atts['class'] = $class;
        return $atts;
    }

    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'blogviajero_setup');

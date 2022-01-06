<?php get_header(); ?>
<?php include('modules/banner-index.php'); ?>
<?php include('modules/buscador-mobile.php'); ?>
<?php include('modules/menu.php'); ?>

<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white pb-4">

    <div class="container">

        <?php if(have_posts()): ?>
        
            <?php while(have_posts()): the_post(); ?>

                <h1 class="py-4"><?php the_title(); ?></h1>
                <hr class="mb-4 mb-lg-5" style="border: solid 1px gray;">

                <?php the_content() ?>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>    

</div>

<?php get_footer(); ?>
<!-- COLUMNA DERECHA -->

<div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">

     <!-- SOBRE MI -->
    <?php

        if (is_category()) {
            if (is_active_sidebar('widgets-category-1')) {
                dynamic_sidebar('widgets-category-1');
            }
        } elseif (is_single()) {
            if (is_active_sidebar('widgets-article-1')) {
                dynamic_sidebar('widgets-article-1');
            }
        } elseif (is_home()) {
            if (is_active_sidebar('widgets-index-1')) {
                dynamic_sidebar('widgets-index-1');
            }
        }

    ?>

    <!-- ARTICULOS RECIENTES -->

    <div class="my-4 articulos-recientes">

        <h4>Articulos Recientes</h4>

        <?php

            if (is_category()) {
                $cat = get_query_var('cat');
                $categoria = get_category($cat)->slug;
            } elseif (is_single()) {
                global $post;
                $categoryId = get_the_category($post->ID);
                $categoria = get_category($categoryId[0]->cat_ID)->slug;
            } elseif (is_home()) {
                $categoria = "";
            }

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => $categoria,
                'orderby' => 'date',
                'order' => 'DESC',
                'post__not_in' => array($post->ID)
            );

            $secondary_query = new WP_Query($args);

			while ( $secondary_query->have_posts() ):$secondary_query->the_post();

        ?>

            <div class="d-flex my-3">

                <div class="w-100 w-xl-50 pr-3 pt-2 img-recientes">

                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>

                </div>

                <div class="text-recientes">

                    <a href="<?php the_permalink(); ?>" class="text-secondary">

                        <small><?php the_excerpt(); ?></small>
                            
                    </a>

                </div>

            </div>

        <?php endwhile; ?>


    </div>

    <!-- PUBLICIDAD -->

    <?php
         if (is_category()) {
            if (is_active_sidebar('widgets-category-2')) {
                dynamic_sidebar('widgets-category-2');
            }
        } elseif (is_single()) {
            if (is_active_sidebar('widgets-article-2')) {
                dynamic_sidebar('widgets-article-2');
            }
        } elseif (is_home()) {
            if (is_active_sidebar('widgets-index-2')) {
                dynamic_sidebar('widgets-index-2');
            }
        }
    ?>

</div>
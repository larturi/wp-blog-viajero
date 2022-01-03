<?php get_header(); ?>
<?php include('modules/banner-interior.php'); ?>
<?php include('modules/buscador-mobile.php'); ?>
<?php include('modules/menu.php'); ?>

<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white contenido py-2 py-md-4">
	
	<div class="container">

		<!-- BREADCRUMB -->

		<ul class="breadcrumb bg-white p-0 mb-2 mb-md-4">

			<li class="breadcrumb-item inicio"><a href="<?php echo esc_url(home_url("/")); ?>">Inicio</a></li>

			<?php
				$cat = get_query_var('cat');
				$categoryName = get_category($cat)->name;
				$categoryLink = get_category_link($cat);
			?>

			<li class="breadcrumb-item active"><?php echo $categoryName; ?></li>

		</ul>
		
		<div class="row">
			
			<!-- COLUMNA IZQUIERDA -->

			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">

				<?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                ?>
				
				<div class="row">

					<div class="col-12 col-lg-5">

						<a href=<?php the_permalink(); ?>">
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

						<a href="<?php the_permalink(); ?>" class="float-right">Leer Más</a>

						<div class="fecha"><?php the_time('d.m.Y'); ?></div>

					</div>


				</div>

				<hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">

				<?php
                        endwhile; 
                    endif; 
                ?>

				<!-- PUBLICIDAD -->

				<div class="d-block d-lg-none">
					
					<img src="<?php echo get_template_directory_uri() . '/img/ad02.jpg'; ?>" class="img-fluid" width="100%">

				</div>

				<hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">

				<div class="container d-none d-md-block">
					
					<ul class="pagination justify-content-center"></ul>

				</div>

			</div>

            <?php get_sidebar(); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
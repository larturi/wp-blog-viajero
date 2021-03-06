<?php get_header(); ?>
<?php include('modules/banner-interior.php'); ?>
<?php include('modules/buscador-mobile.php'); ?>
<?php include('modules/menu.php'); ?>

<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white contenido py-2 py-md-4">
	
	<div class="container">

		<?php
			global $post;
			$categoryId = get_the_category($post->ID);
			$categoryName = get_category($categoryId[0]->cat_ID)->name;
			$categorySlug = get_category($categoryId[0]->cat_ID)->slug;
			$categoryLink = get_category_link($categoryId[0]->cat_ID);
		?>

		<!-- BREADCRUMB -->

		<a href="<?php echo $categoryLink; ?>">
			
			<button class="d-block d-sm-none btn btn-info btn-sm mb-2">
			
				REGRESAR 

			</button>

		</a>

		<ul class="breadcrumb bg-white p-0 mb-2 mb-md-4 breadArticulo">

			<li class="breadcrumb-item inicio"><a href="<?php echo esc_url(home_url("/")); ?>">Inicio</a></li>

			<li class="breadcrumb-item"><a href="<?php echo $categoryLink; ?>"><?php echo $categoryName; ?></a></li>

			<li class="breadcrumb-item active">Type something here</li>

		</ul>
		
		<div class="row">
			
			<!-- COLUMNA IZQUIERDA -->

			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">

				<?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                ?>

					<div class="container">

						<div class="d-flex">

							<div class="fechaArticulo"><?php echo the_date('d.m.Y'); ?></div>

							<h3 class="tituloArticulo text-right text-muted pl-3 pt-lg-2"><?php the_title(); ?></h3>

						</div>

						<img src="<?php echo get_template_directory_uri() . '/img/articulo.png'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid my-lg-3">

						<p class="textoArticulo my-3">
							<?php the_content(); ?>						
						</p>

						<!-- COMPARTIR EN REDES -->

						<div class="float-right my-3 btnCompartir">
							
							<div class="btn-group">
								
								<button type="button" class="btn border-0 text-white" style="background: #1475E0">
									
									<span class="fab fa-facebook pr-1"></span>

									Facebook

									<span class="lead pl-1">3</span>

								</button>

							</div>

							<div class="btn-group">
								
								<button type="button" class="btn border-0 text-white" style="background: #00A6FF">
									
									<span class="fab fa-twitter pr-1"></span>

									Twitter

									<span class="lead pl-1">3</span>

								</button>

							</div>

							<div class="btn-group">
								
								<button type="button" class="btn border-0 text-white" style="background: #DD4D41">
									
									<span class="fab fa-google-plus pr-1"></span>

									Google

									<span class="lead pl-1">3</span>

								</button>

							</div>

						</div>

						<!-- AVANZAR - RETROCEDER -->

						<div class="clearfix"></div>

						<div class="d-md-flex justify-content-between my-3 d-none">
							
						<?php 
							previous_post_link('%link', 'Leer art??culo anterior');
							next_post_link('%link', 'Leer art??culo siguiente'); 
						?>

						</div>

						<!-- DESLIZADOR DE ART??CULOS -->

						<section class="jd-slider deslizadorArticulos my-4">
							
							<div class="slide-inner">
								
								<ul class="slide-area">

									<?php $secondary_query = new WP_Query( 'category_name='.$categorySlug ); ?>

									<?php while ( $secondary_query->have_posts() ):$secondary_query->the_post(); ?>

										<li class="px-3">
											
											<a href="<?php the_permalink(); ?>" class="text-secondary">
												<?php the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid' )); ?>
												<h6 class="py-2"><?php the_title(); ?></h6>
											</a>

											<small><?php the_excerpt(); ?></small>

										</li>

									<?php endwhile; ?>	

								</ul>

								<a class="prev" href="#">

									<i class="fas fa-angle-left text-muted"></i>

								</a>

								<a class="next" href="#">

									<i class="fas fa-angle-right text-muted"></i>

								</a>

							</div>

							<div class="controller">

								<div class="indicate-area"></div>

							</div>

						</section>

						<!-- BLOQUE DE OPINIONES -->

						<h3 style="color:#8e4876">Opiniones</h3>

						<hr style="border: 1px solid #79FF39">

						<?php
						
							$commentarios = get_comments(array(
								'post_id' => $post->ID,
								'status' => 'approve'
							));

							if( count($commentarios) > 0 ) {
								wp_list_comments((array(
									'per_page' => 10,
								)), $commentarios);
							} else {
								echo '<p class="text-muted">No hay comentarios</p>';
							}

						?>

						<!-- FORMULARIO DE OPINIONES -->

						<?php comment_form(); ?>

						<form>

							<div class="row">
								
								<div class="col-12 col-md-8 col-lg-9">
									
									<div class="input-group-lg">
										
										<input type="text" class="form-control my-3" placeholder="Tu nombre">

										<input type="email" class="form-control my-3" placeholder="Tu email">

									</div>

								</div>

								<div class="d-none d-md-block col-md-4 col-lg-3">
									
									<img src="<?php echo get_template_directory_uri() . '/img/subirFoto.png'; ?>" class="img-fluid mt-md-3 mt-xl-2">

								</div>

							</div>	

							<textarea class="form-control my-3" rows="7" placeholder="Escribe aqu?? tu mensaje"></textarea>
							
							<input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar">

						</form>

						<!-- PUBLICIDAD -->

						<img src="<?php echo get_template_directory_uri() . '/img/ad01.jpg'; ?>" class="img-fluid my-3 d-block d-md-none" width="100%">


					</div>



				<?php
                        endwhile; 
                    endif; 
                ?>
				
				
			</div>


            <?php get_sidebar(); ?>

        </div>

    </div>

</div>

<?php get_footer(); ?>
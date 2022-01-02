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

		<a href="categorias.html">
			
			<button class="d-block d-sm-none btn btn-info btn-sm mb-2">
			
				REGRESAR 

			</button>

		</a>

		<ul class="breadcrumb bg-white p-0 mb-2 mb-md-4 breadArticulo">

			<li class="breadcrumb-item inicio"><a href="index.html">Inicio</a></li>

			<li class="breadcrumb-item"><a href="categorias.html">Mi viaje por Suramérica</a></li>

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
							
							<a href="articulos.html">Leer artículo anterior</a>
							
							<a href="articulos.html">Leer artículo siguiente</a>

						</div>

						<!-- DESLIZADOR DE ARTÍCULOS -->

						<section class="jd-slider deslizadorArticulos my-4">
							
							<div class="slide-inner">
								
								<ul class="slide-area">
									
									<li class="px-3">
										
										<a href="articulos.html" class="text-secondary">

											<img src="<?php echo get_template_directory_uri() . '/img/articulo01.png'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

											<h6 class="py-2">Type something here</h6>

										</a>

										<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quibusdam sint porro...</p>

									</li>

									<li class="px-3">
										
										<a href="articulos.html" class="text-secondary">

											<img src="<?php echo get_template_directory_uri() . '/img/articulo01.png'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

											<h6 class="py-2">Type something here</h6>

										</a>

										<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quibusdam sint porro...</p>

									</li>

									<li class="px-3">
										
										<a href="articulos.html" class="text-secondary">

											<img src="<?php echo get_template_directory_uri() . '/img/articulo01.png'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

											<h6 class="py-2">Type something here</h6>

										</a>

										<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quibusdam sint porro...</p>

									</li>

									<li class="px-3">
										
										<a href="articulos.html" class="text-secondary">

											<img src="<?php echo get_template_directory_uri() . '/img/articulo01.png'; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid">

											<h6 class="py-2">Type something here</h6>

										</a>

										<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quibusdam sint porro...</p>

									</li>

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

						<div class="row opiniones">
							
							<div class="col-3 col-sm-4 col-lg-2 p-2">
							
								<img src="<?php echo get_template_directory_uri() . '/img/user01.jpg'; ?>" class="img-thumbnail">	

							</div>

							<div class="col-9 col-sm-8 col-lg-10 p-2 text-muted">
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto beatae, aut sint provident dolorem minus recusandae facere, ipsum magnam, nostrum enim. Error quasi quod ab consectetur explicabo consequuntur obcaecati suscipit!</p>

								<span class="small float-right">Carla Gómez | 20.09.2018</span>

							</div>	

							<div class="col-9 col-sm-8 col-lg-10 p-2 text-muted">
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto beatae, aut sint provident dolorem minus recusandae facere, ipsum magnam, nostrum enim. Error quasi quod ab consectetur explicabo consequuntur obcaecati suscipit!</p>

								<span class="small float-right">Juanito Travel | 20.09.2018</span>

							</div>

							<div class="col-3 col-sm-4 col-lg-2 p-2">
							
								<img src="<?php echo get_template_directory_uri() . '/img/user02.jpg'; ?>" class="img-thumbnail">	

							</div>

						</div>

						<hr style="border: 1px solid #79FF39">

						<!-- FORMULARIO DE OPINIONES -->

						<form>
							
							<label class="text-muted lead">¿Qué tal te pareció el artículo?</label>

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

							<textarea class="form-control my-3" rows="7" placeholder="Escribe aquí tu mensaje"></textarea>
							
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
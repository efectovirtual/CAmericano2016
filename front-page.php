<?php
/* Template Name: Página de Inicio*/
get_header(); ?>



	<header id="masthead" class="site-header" role="banner">
		

			<!-- Header -->
		<div class="rheader">
		<!-- div class="informacionini">
			<p>El Colegio Americano les desea unas felices fiestas. <br>
				<strong>Informamos que nuestra atención al público se retomará el 12 de enero del 2017.</strong>
			</p>
		</div> -->
			<div class="row align-justify header">
					<div class="column medium-4 menulogo">
					<img class="imgvertical" src="<?php echo get_template_directory_uri(); ?>/img/logo-americano-negro.png" alt="Colegio Americano">
					</div>

					<div class="column medium-8 menumen">

						<nav id="site-navigation" class="main-navigation" role="navigation">

							<span data-responsive-toggle="primary-menu" data-hide-for="medium">
								<button class="menu-icon" type="button" data-toggle></button>
							</span>

							<?php wp_nav_menu( array(
								'theme_location' => 'primary', 
								'menu_id' => 'primary-menu',
								'items_wrap' => '<ul id="%1$s" class="%2$s menu vertical medium-horizontal text-center">%3$s</ul>',
			 				) ); ?>

						</nav><!-- #site-navigation -->

					</div>
				
			</div>
		</div>
			<!-- Fin Header -->

	</header><!-- #masthead -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part('template-parts/slider'); ?>


		<div id="enlaceshome">
			<div class="expanded row">

			
				<div class="columns medium-2 colorbgazul">
					<div class="row">
						<div class="columns medium-12 large-text-right small-text-center enlaceimg">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico-enlaces.png">
						</div>
					</div>
				</div>

				

				<div class="columns medium-10 colorbggris">
					<div class="row">
						<a href="https://lms30.uno-internacional.com/login/uno">
							<div class="columns medium-2 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-uno.png"></div>
						</a>
						<a href="http://colegioamericano.edu.co/2016/wp-content/uploads/2017/01/calendario2017.pdf">
							<div class="columns medium-3 text-center calendarioico"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-calendario.png"></div>
						</a>
						<a href="<?php the_permalink(); ?>/manual-de-convivencia/">
							<div class="columns medium-2 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-convivencia.png"></div>
						</a>
						<a href="<?php the_permalink(); ?>/comunicados-institucionales/">
							<div class="columns medium-3 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-comunicados.png"></div>
						</a>
						<a href="https://www.google.com/a/colegioamericano.edu.co/ServiceLogin?service=mail&passive=true&rm=false&continue=http://mail.google.com/a/colegioamericano.edu.co/&ltmpl=default&ltmplcache=2">
							<div class="columns medium-2 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-email.png"></div>
						</a>
					</div>
				</div>
			</div>
		</div>


		
		<div class="seccionesini">
			<div class="row">

				<h1 class="text-center ">Admisiones</h1>

				<a href="http://colegioamericano.edu.co/2016/admisiones-pasos/"><div class="columns medium-3 adm-1 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/pasos.png"><p>Pasos</p></div></a>
				
				<a href="http://colegioamericano.edu.co/2016/requisitos-admisiones/"><div class="columns medium-3 adm-2 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/requisitos.png"><p>Requisitos</p></div></a>

				<a href="http://colegioamericano.edu.co/2016/inscripciones-2017/"><div class="columns medium-3 adm-3 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/inscripcion.png"><p>Inscripciones</p></div></a>

				<a href="https://www.banco.colpatria.com.co/PagosElectronicos/Referencias.aspx?IdConvenio=3640
"><div class="columns medium-3 adm-4 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/pagos.png"><p>Pagos en línea</p></div></a>
			</div>

		</div>


		<div class="clear"></div>
	

		<div class="parallaxW" id="noticiaseventos" data-parallax="scroll" data-image-src="<?=get_template_directory_uri(); ?>/img/parallax-noticias.jpg">
			<div class="row notieventos">

				
				<div class="row">
					
					<div class="medium-6 columns seccionesN">


					<?php $args=array(
						// Banner Inicial
						'post_type' => 'post',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page' => -1); 
					?>

					<?php $noticias = new WP_Query($args);?>						


						<h1 class="text-center ">Noticias</h1>
						<div id="noticias" class="owl-carousel owl-theme">

					<?php while($noticias->have_posts()): $noticias->the_post(); 
					$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Medium'); ?>

					<div class="item">
						<div class="row ">
							<div class="large-6 medium-12 columns">
			
							<div class="imagennoti" style="background: url(<?php print_r( $thumb[ 0 ] ); ?>) center; background-size: cover; "></div>
							</div>
							<div class="large-6 medium-12 columns">
								<h2 class="titulonoticia">
									<?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?>
								</h2>
								<p class="textonoticia">
									<?php echo mb_strimwidth(get_the_excerpt(), 0, 200, '...'); ?>							
								</p>
								<div class="botonleermas"><a href="<?php echo get_permalink(); ?>">Continuar leyendo</a></div>
							</div>							
						</div>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>

					</div>

					<div class="medium-12 column">
							<div class="botonnoteve botonnoticia text-center">Todas las Noticias</div>
					</div>

					</div>

					<div class="medium-6 columns seccionesE">
						<h1 class="text-center ">Eventos</h1>
						<div class="row">
							<div class="medium-6 small-6 columns text-center">
								<div class="row">
									<div class="large-4 medium-12 columns">
										<div class="cirevento"><h5 class="mesevento">ENE</h5><h4 class="diaevento">12</h4></div>
									</div>
									<div class="large-8 medium-12 columns">
										<h2 class="tituloevento">Inicio atención al público</h2>
										<h3 class="horaevento">Hora: 8:00am - 04:00pm</h3>
									</div>
								</div>
							</div>

							<div class="medium-6 small-6 columns text-center">
								<div class="row">
									<div class="large-4 medium-12 columns">
										<div class="cirevento"><h5 class="mesevento">ENE</h5><h4 class="diaevento">26</h4></div>
									</div>
									<div class="large-8 medium-12 columns">
										<h2 class="tituloevento">Inicio clases estudiantes nuevos</h2>
										<h3 class="horaevento">Hora: 7:00am - 02:00pm</h3>
									</div>
								</div>
								
							</div>

							<div class="medium-6 small-6 columns text-center">
								<div class="row">
									<div class="large-4 medium-12 columns">
										<div class="cirevento"><h5 class="mesevento">ENE</h5><h4 class="diaevento">30</h4></div>
									</div>
									<div class="large-8 medium-12 columns">
										<h2 class="tituloevento">Inicio de clases toda la comunidad estudiantil</h2>
										<h3 class="horaevento">Hora: 7:00am - 02:00pm</h3>
									</div>
								</div>
								
							</div>

							<div class="medium-6 small-6 columns text-center">
								<div class="row">
									<div class="large-4 medium-12 columns">
										<div class="cirevento"><h5 class="mesevento">DIC</h5><h4 class="diaevento">14</h4></div>
									</div>
									<div class="large-8 medium-12 columns">
										<h2 class="tituloevento">Matriculas Año 2017</h2>
										<h3 class="horaevento">Hora: 8:00am - 04:00pm</h3>
									</div>
								</div>
								
							</div>

							<div class="medium-12 column text-center">
								<div class="botonnoteve botoneventos">Todos los Eventos</div>
							</div>

						</div>
					</div>


				</div>
				

			</div>
		</div>

		<div class="clear"></div>

		<div class="row logosca">
			<div class="columns large-3 medium-6 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/efqm.jpg" alt=""></div>
			<div class="columns large-3 medium-6 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ets.jpg" alt=""></div>
			<div class="columns large-3 medium-6 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/mienbro.jpg" alt=""></div>
			<div class="columns large-3 medium-6 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ur.jpg" alt=""></div>
		</div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

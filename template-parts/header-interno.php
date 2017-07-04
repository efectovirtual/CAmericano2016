<header id="masthead" class="site-header" role="banner">

<!-- Header -->
		<div class="rheaderpages">
			<div class="row align-justify headerpages">
					<div class="menulogo column medium-4 small-12 text-center">
					<img class="logoCA" src="<?php echo get_template_directory_uri(); ?>/img/logo-top2.png" alt="Funmover">
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
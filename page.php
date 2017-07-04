<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ColegioAmericano
 */

get_header(); ?>



			<?php get_template_part('template-parts/header-interno'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
		<?php if (have_posts()): while (have_posts()) : the_post();?>

			<?php 
	        	$varR=rand(1,3);
	        	$imagen = get_template_directory_uri().'/img/bannerpage'.$varR.'.jpg';
	        ?>

				
				<div class="bpagesint" style="background:url(<?php echo $imagen; ?>););">

					<div class="column"><h1><?php the_title(); ?></h1></div>
					
				</div>


				<div class="row contenidopage">

						<?php the_content(); ?>

				</div>


		<?php endwhile; ?>
		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

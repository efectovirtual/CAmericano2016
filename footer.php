<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ColegioAmericano
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="row">
			<div class="columns large-4 medium-6 text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/logoamericano.png" alt="Logo CA"></div>
			<div class="columns large-4 medium-6 text-center"><div class="textpbx"><span>PBX: </span>(575) 3610431</div></div>
			<div class="columns large-4 medium-6 text-center">
				<p>	Dirección: Carrera 38 # 74 - 179 <br>
					Horario de Atención: 7:00 a.m a 4:00 p.m  <br>
					Aprobado por el Ministerio de Educación Nacional  <br>
					Nit. 890 111 655 - 1 - Barranquilla – Colombia </p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

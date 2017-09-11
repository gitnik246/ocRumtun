<?php get_header(); ?> 

<div class="navegacion-formulario">
	<div class="navegacion-secundaria-titulo">
		<div class="navegacion-secundaria-titulo-uno">
			<center>
				<img alt="LOGO" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" />
			</center>
		</div>
		<div class="navegacion-secundaria-titulo-dos">
			<left>
				<img alt="Centro de estudios y difusión indigena" src="<?php bloginfo('template_directory'); ?>/images/titulo.jpg" width=200 height=60/>
			</left>
		</div>
		<div class="navegacion-secundaria-titulo-tres">
			<br><br><br><br>
		</div>
	</div>
</div>

<div class="formulario">
	<?php
	if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile;
	else :
		echo '<p>No content found</p>';
	endif;
	?>
</div>

<?php get_footer();	?>

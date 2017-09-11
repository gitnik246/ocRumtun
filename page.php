<?php get_header(); ?>

	<div class="espaciovacio-mobil">
		&nbsp;
	</div>

<?php if( $post->post_parent !== 0 ) {
    get_template_part('content', 'child');
} else {
    get_template_part('content');
}

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<div class="navegacion-formulario">
		<header class="site-header"> </header>
		<div class="navegacion-secundaria-titulo">
			<div class="navegacion-secundaria-titulo-uno">
					<img alt="LOGO" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" />
				
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
	
	<div class="hijo-cuerpo">
	<div class="hijo-cuerpo-uno">
		<br>
		
		<div class="hijo-cuerpo-uno-article">
		<?php 
			// echo 'Pagina actual:' . $post->ID; 
		?>

		<?php $parent_page = get_top_ancestor_id($post->ID); ?>
		<br/>
		<?php 
			// echo 'Pagina padre:' . $parent_page; 
		?>
		
		<?php			
			$page_id = $parent_page;
					

				echo "<a name='". strtolower(str_replace(' ', '-', get_the_title( $page_id ))) . "'>" . "<h2>" . get_the_title ($page_id) . "</h2>" . "</a>";
						
				//get current page ID
				$the_id = $page_id;  // get_the_ID();
						
				$args = array(
					'child_of'     	=> $the_id,
					'title_li'     	=> '',
					'parent'       	=> $the_id,
					'sort_order'	=> 'DESC',
					'sort_column'	=> 'menu_order'
				);
						
				$pages_aux = get_pages( $args );
				$output = '';
						
				echo "<ul>";
				foreach($pages_aux as $value){
					$output .= "<li>";
					$output .= "<a href='" . get_permalink($value->ID) . "' >" . get_the_title ($value->ID) . "</a> ";
					$output .= "&nbsp;&nbsp;&nbsp;&nbsp;";
					$output .= "</li>";
				} 					
				echo $output;
						
				echo "</ul>";

		?>		
		</div>
	</div>

	<div class="hijo-cuerpo-dos">
		<article class="post <?php if (has_post_thumbnail() ) { ?> has-thumbnail <?php } ?> ">
			<!-- post-thumbnail -->
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
			</div><!-- /post-thumbnail -->
			<h2> <a href="<?php the_permalink(); ?>" > <?php the_title(); ?> </a> </h2>
			
			<div class='hijo-content'>
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile;
		else :
			echo '<p>No content found</p>';
		endif;
		?>
	</div>
	</div>
	
<?php get_footer(); ?>

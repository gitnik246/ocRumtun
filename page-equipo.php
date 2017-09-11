<?php get_header(); ?> 

	<div class="espaciovacio-mobil">
		&nbsp;
	</div>

<div class="navegacion-formulario">
	<header class="site-header"> </header>
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

<div>
	<nav class="navegacion-primaria-cuerpo">
		<?php
			$page_ids = array // 7 | Equipo
			( url_to_postid('equipo')
			);

			foreach($page_ids as $page_id) {
				echo "<li>";
				echo "<h2>" . get_the_title ($page_id) . "</h2>" ;
				
				//get current page ID
				$the_id = $page_id;  // get_the_ID();
				
				$args = array(
				'child_of'     	=> $the_id,
				'title_li'     	=> '',
				'parent'       	=> $the_id,
				'sort_order'	=> 'DESC',
				'sort_column'	=> 'menu_order'
				);
				
				$pages = get_pages( $args );
				$output = '';
				echo "<ul>";
				
				foreach($pages as $value) {
					// the_post_thumbnail('banner-image');
					$thumb = get_the_post_thumbnail( $value->ID, array(100,100), $attr = '' );
					$output .= "<li>";
					//$output .= "<a href='" . $value->post_name . "' >" . $thumb . "</a>";
					$output .= "<a href='" . get_permalink($value->ID) . "' >" . get_the_title ($value->ID) . "</a> ";
					$output .= "&nbsp;&nbsp;&nbsp;&nbsp;";
					
					$output .= "</li>";
				} 					
				echo $output;
				
				echo "</ul>";
				echo "</li>";
			}				
		?>
	</nav>
</div>

<?php get_footer();	?>

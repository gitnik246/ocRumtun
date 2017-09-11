<?php get_header(); ?> 

<!-- PRIMERA PARTE DE LA PAGINA -->

<div id="site-body" role="main" class="oui-content"> 
	
	<div class="pruebafondo">
		<div class="navegacion-subcero"> </div>
		<div class="navegacion-primaria">
			<div class="navegacion-primaria-uno">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo_p.jpg">
			</div>
			<div class="navegacion-primaria-dos">
				<img src="<?php bloginfo('template_directory'); ?>/images/titulo.png" > 
				<!-- Último post que ha sido creado -->
				<p>Rümtun es un centro de estudios conformado por profesionales y académicos mapuche, interesados en generar espacios de reflexión en torno a temáticas de 
				derechos colectivos, especialmente políticos, teniendo como horizonte la autonomía y autodeterminación de los pueblos indígenas.</p>
			</div>
			<div class="navegacion-primaria-tres">
				

				
				<nav class="navegacion-primaria-tres-cuerpo">
					<?php	
						$page_ids = array 
						( url_to_postid('quienes-somos') 	// 15 | Quienes Somos
					    , url_to_postid('iniciativas') 		// 2 | Iniciativa
						, url_to_postid('equipo') 			// 7 | Equipo
						, url_to_postid('documentos') 		// 17 | Documentos
						, url_to_postid('novedades') 		// 19 | Novedades
						, url_to_postid('opinion') 			// 54 | Opinion
						, url_to_postid('contacto')
						, url_to_postid('newsletter')
						);
						foreach($page_ids as $page_id) {
							echo "<li>";
							//echo get_the_title ($page_id);
		
							$title = get_the_title($page_id);
		
							$the_id = $page_id;
							
							if ($title == 'Quienes Somos') {
		
								$page_id = url_to_postid('quienes-somos');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								// echo '<a href="' . site_url() . '/quienes-somos/' . $ultimo_post . '">' . $title . '</a>';
								echo '<a href="' . site_url() . '/quienes-somos/">' . $title . '</a>';
							}
		
							if ($title == 'Iniciativas') {
		
								$page_id = url_to_postid('iniciativas');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								// echo '<a href="' . site_url() . '/iniciativas/' . $ultimo_post . '">' . $title . '</a>';
								echo '<a href="' . site_url() . '/iniciativas/">' . $title . '</a>';
							}
		
							if ($title == 'Equipo') {
		
								$page_id = url_to_postid('equipo');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								// echo '<a href="' . site_url() . '/equipo/' . $ultimo_post . '">' . $title . '</a>';
								echo '<a href="' . site_url() . '/equipo/">' . $title . '</a>';
							}
		
							if ($title == 'Documentos') {
		
								$page_id = url_to_postid('documentos');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								// echo '<a href="' . site_url() . '/documentos/' . $ultimo_post . '">' . $title . '</a>';
								echo '<a href="' . site_url() . '/documentos/">' . $title . '</a>';
							}
		
							if ($title == 'Novedades') {
		
								$page_id = url_to_postid('novedades');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								// echo '<a href="' . site_url() . '/novedades/' . $ultimo_post . '">' . $title . '</a>';
								echo '<a href="' . site_url() . '/novedades/">' . $title . '</a>';
							}
		
							if ($title == 'Opinión') {
		
								$page_id = url_to_postid('opinion');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								// echo '<a href="' . site_url() . '/opinion/' . $ultimo_post . '">' . $title . '</a>';
								echo '<a href="' . site_url() . '/opinion/">' . $title . '</a>';
							}
		
		
		
		
							if ($title == 'Contacto') {
		
								$page_id = url_to_postid('contacto');
								//echo $page_id;
								$args = array(
									'child_of'     	=> $page_id,
									'title_li'     	=> '',
									'parent'       	=> $page_id,
									'sort_order'	=> 'DESC',
									'sort_column'	=> 'menu_order'
								);
								$pages = get_pages( $args );
								$count = 0;
								foreach($pages as $value) {
									$ultimo_post = $value->post_name;
		
									$count++;
									if ( $count >= 1 ) { break; };
								}
								echo '<a href="' . site_url() . '/contacto/' .  '">' . $title . '</a>';
							}
		
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
							$count = 1;
							
							foreach($pages as $value) {
							
								$thumb = get_the_post_thumbnail( $value->ID, array(33,33), $attr = '' );
								$output .= "<li>";
								$output .= "<a href='" . $value->post_name . "' >" . $thumb . "</a>";
								$output .= "</li>";
								
								//echo $count;
								$count++;
								if ( $count >= 6 ) { break; };
							}
							echo $output;
							
							$liout = get_bloginfo('template_directory') . "/images/cuadro.jpg";
							$liout_suspensivo = get_bloginfo('template_directory') . "/images/cuadro_suspensivo.jpg";
							//echo $liout;
							
							$max = 6;
							if ($count < $max) {
								for (; $count <= $max ; $count++) {
									
									if ($count < $max) {				
										$output2 = "<li>";
										// echo $count;
										$output2 .= "<img src=" . $liout . " alt='Cuadro' height='33' width='33' />";
										$output2 .= "</li>";
										echo $output2;
									}
									else {
										$output2 = "<li>";
										// echo $count;
										$output2 .= "<a href=" . $value->post_name . "><img src=" . $liout_suspensivo . " alt='Cuadro_Suspensivo' height='33' width='35' /></a>";
										$output2 .= "</li>";
										echo $output2;	
									}
									
								}
							}
							else {
								$output2 = "<li>";
								// echo $count;
								$output2 .= "<a href=" . $value->post_name . "><img src=" . $liout_suspensivo . " alt='Cuadro_Suspensivo' height='33' width='35' /></a>";
								$output2 .= "</li>";
								echo $output2;	
							}
								
							
							
							echo "</ul>";
							echo "</li>";
						}
					?>
				</nav>
			</div>
		</div>
	</div> 

	<div class="cuerpo-footer">
		<center>
			<?php
				echo "<a href='" . get_bloginfo('wpurl') . "/newsletter/'> <p> Registrate en nuestra Newsletter </p> </a>";
			?>
		</center>
	</div>

</div>

<?php get_footer();	?>

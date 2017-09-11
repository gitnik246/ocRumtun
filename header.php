<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Pathway+Gothic+One">

</head>
	
<body id="container">
	
		<header>
	
	<?php
	
	$header_string1 = "
		<div id='row' class='menu_bar'>
			<div id='left'>
				<span><a href='javascript:javascript:history.go(-1)'>Volver</a></span>
			</div>
			<div id='right'>
				<a class='bt-menu' href='#'>
					<span id='hamburger'>
						<div> </div>
						<div> </div>
						<div> </div>
					</span>
				</a>
			</div>
		</div>";
		
	$header_string2 = "
		<nav class='navegacion-primaria-menu'>
			<ul>
				<li>
					<h2>Menu</h2>
				</li>
				<li>
					<a href='" .site_url(). "'>Inicio</a>
				</li>
				<li>
					<a href='" .site_url(). "/quienes-somos/ '> Quienes Somos </a>
				</li>
				<li>
					<a href='" .site_url(). "/iniciativas/ '> Iniciativas </a>
				</li>
				<li>
					<a href='" .site_url(). "/equipo/ '> Equipo </a>
				</li>
				<li>
					<a href='" .site_url(). "/documentos/ '> Documentos </a>
				</li>
				<li>
					<a href='" .site_url(). "/novedades/ '> Novedades </a>
				</li>
				<li>
					<a href='" .site_url(). "/opinion/ '> Opinión </a>
				</li>

			</ul>
		</nav>";
	
	$header_string = $header_string1 . $header_string2;
		
	$title = get_the_title($page_id);
	$parent_page = get_top_ancestor_id($post->ID);
	$title_padre = get_the_title($parent_page);
	
	if ( ($title == 'Quienes Somos') 
		|| ($title == 'Iniciativas') 
		|| ($title == 'Equipo')
		|| ($title == 'Documentos')
		|| ($title == 'Novedades')
		|| ($title == 'Opinión') 
		|| ($title == 'Contacto') 
		|| ($title == 'Newsletter') 
		
		) 
		{ echo $header_string; }
	
	else if ( ($title_padre == 'Quienes Somos') 
		|| ($title_padre == 'Iniciativas') 
		|| ($title_padre == 'Equipo')
		|| ($title_padre == 'Documentos')
		|| ($title_padre == 'Novedades')
		|| ($title_padre == 'Opinión') 
		|| ($title == 'Contacto') 
		|| ($title == 'Newsletter') 
		) 
		{ echo $header_string; }

/*
	echo $post->ID;
	echo $title_padre;
*/
	?>
	
	</header>

	<?php 
		$parent_page = get_top_ancestor_id($post->ID);
		if (
			( (get_query_var('pagename') == 'contacto') or (get_query_var('pagename') == 'newsletter') ) 
			or (strtolower(get_the_title($parent_page)) == 'quienes somos'
				or strtolower(get_the_title($parent_page)) == 'iniciativas'
				or strtolower(get_the_title($parent_page)) == 'equipo'
				or strtolower(get_the_title($parent_page)) == 'documentos'
				or strtolower(get_the_title($parent_page)) == 'novedades'
				or strtolower(get_the_title($parent_page)) == 'opinión') 
		) {
			echo "<nav class='navegacion-encabezado-dos-contacto'>";	
		} 		
		else {
			echo "<nav class='navegacion-encabezado-dos'>";
		}
	?>

	<?php
		$menu_name = 'header';
		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
			$menu_items = wp_get_nav_menu_items($menu->term_id);	
			$menu_list = '<ul id="menu-' . $menu_name . '">';
			$title = '';
			foreach ( (array) $menu_items as $key => $menu_item ) {
				$title = $menu_item->title;
				if ($title == 'Quienes Somos') { 
					$page_id = url_to_postid('quienes-somos');
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
					$menu_list .= '<li><a href="' . site_url() . '/quienes-somos/' . $ultimo_post . '">' . $title . '</a></li>';
				}
				if ($title == 'Iniciativas') { 
					$page_id = url_to_postid('iniciativas');
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
					$menu_list .= '<li><a href="' . site_url() . '/iniciativas/' . $ultimo_post . '">' . $title . '</a></li>';
				}
				if ($title == 'Equipo') {
					$page_id = url_to_postid('equipo');
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
					// $menu_list .= '<li><a href="' . $ultimo_post . '">' . $title . '</a></li>';
					$menu_list .= '<li><a href="' . site_url() . '/equipo/' . $ultimo_post . '">' . $title . '</a></li>';
				}	
				if ($title == 'Documentos') { 
					$page_id = url_to_postid('documentos');
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
					// $menu_list .= '<li><a href="' . $ultimo_post . '">' . $title . '</a></li>';
					$menu_list .= '<li><a href="' . site_url() . '/documentos/' . $ultimo_post . '">' . $title . '</a></li>';
				}
				if ($title == 'Novedades') { 
					$page_id = url_to_postid('novedades');
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
					// $menu_list .= '<li><a href="' . $ultimo_post . '">' . $title . '</a></li>';
					$menu_list .= '<li><a href="' . site_url() . '/novedades/' . $ultimo_post . '">' . $title . '</a></li>';
				}				
				if ($title == 'Opinión') { 
					$page_id = url_to_postid('opinion');
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
					// $menu_list .= '<li><a href="' . $ultimo_post . '">' . $title . '</a></li>';
					$menu_list .= '<li><a href="' . site_url() . '/opinion/' . $ultimo_post . '">' . $title . '</a></li>';
				}
				if ($title == 'Contacto') {											
					$menu_list .= '<li><a href="' . site_url() . '/contacto' . '">' . $title . '</a></li>';
				}
				if ($title == 'Inicio') { 										
					$menu_list .= '<li><a href="' . site_url() . '">' . $title . '</a></li>';
				}
			}
			$menu_list .= '</ul>';
		}
		else {
			$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
		}
		echo $menu_list;
	?>
	</nav>



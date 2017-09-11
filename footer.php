<footer id="site-footer" data-role="footer" data-position="fixed">
	<?php	
	$parent_page = get_top_ancestor_id($post->ID);
	
	// echo $parent_page;
	// echo strtolower(get_the_title($parent_page));
	
	if (
		( strtolower(get_the_title($parent_page)) == 'contacto' )
			or ( strtolower(get_the_title($parent_page)) == 'newsletter' )
	) {
		echo "<div class='piepagina'>";
	}
	
	/*
	if (
			strtolower(get_the_title($parent_page)) == 'quienes somos'
			or strtolower(get_the_title($parent_page)) == 'iniciativas'
			or strtolower(get_the_title($parent_page)) == 'equipo'
			or strtolower(get_the_title($parent_page)) == 'documentos'
			or strtolower(get_the_title($parent_page)) == 'novedades'
			or strtolower(get_the_title($parent_page)) == 'opinion'
	) {
		echo "<div class='piepagina-index'>";
	}
	*/
	
	if (
			strtolower(get_the_title($post->ID)) == 'quienes somos'
			or strtolower(get_the_title($post->ID)) == 'iniciativas'
			or strtolower(get_the_title($post->ID)) == 'equipo'
			or strtolower(get_the_title($post->ID)) == 'documentos'
			or strtolower(get_the_title($post->ID)) == 'novedades'
			or strtolower(get_the_title($post->ID)) == 'opinión'
	) {
		echo "<div class='piepagina'>";
	}

	else {
		echo "<div class='piepagina-index'>";
	}
		
	?>
		<div>
			<?php 					
				$output = "<div class='footer-1'>";	
				$output .= "<img alt='LOGO' src='" . get_bloginfo('template_directory') . "/images/logo.jpg' />";
				$output .= "</div>";
				
				$output .= "<div class='footer-2'>";
				$output .= "<section>";
				  
				$output .= "<p class='br-all'><br><br>email: centrorumtun@gmail.com <br>";
				$output .= "web: www.rumtun.cl<br></p>";
				
				$output .= "<p class='br-movil'>email: centrorumtun@gmail.com</p>";
				$output .= "<p class='br-movil'>web: www.rumtun.cl</p>";
				  
				$output .= "</section>";
				$output .= "</div>";
		
				$output .= "<div class='footer-3'>";
				$output .= "<center>";	
				$output .= "<img alt='LOGO' src='" . get_bloginfo('template_directory') . "/images/titulo_footer.png' />";
				$output .= "</center>";
				$output .= "</div>";
		
				$output .= "<div class='footer-4'>";
				$output .= "<a href='" . get_bloginfo('wpurl') . "/newsletter/' >"; 
				$output .= "<img alt='NEWSLETTER' src='" . get_bloginfo('template_directory') . "/images/newsletter.png' />"; 
				$output .=  "</a>";
				$output .= "</div>";
				echo $output;
			?>
		</div>
	</div>
</footer>


<?php wp_footer(); ?>

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="http://falconmasters.com/demos/menu_responsive/menu.js"></script>

</body>
</html>

<?php get_header(); ?>
  <body <?php body_class(); ?>>
			<article id="post-404">
				<img id="logito" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
				<h1>La página que esta buscando no existe</h1>
				<a class="btn__primary" href="<?php echo home_url(); ?>"> Regresar a home </a>
			</article>
  </body>
</html>



<?php





require('inc/opciones.php');

require('lib/helpers.php');




add_action( 'after_setup_theme', function() {

  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
  add_theme_support( 'post-thumbnails' );


} );
// Creación de Menus
function menus(){
	register_nav_menus(array(
  'menu_principal' =>__('Menu Principal','Nuevavida')
));
}
add_action( 'init', 'menus' );

add_action( 'wp_enqueue_scripts', function() {

  $theme = wp_get_theme();
  $theme_ver = $theme->version;

   wp_enqueue_style( 'estilos',
    get_template_directory_uri().'/styles/estilos.css',
    array(),
    $theme_ver
  );

  wp_enqueue_style( 'colorbox-styles',
  get_template_directory_uri().'/styles/css/colorbox.css',
  array(),
  $theme_ver
);


  wp_enqueue_style( 'aos',
  get_template_directory_uri().'/styles/aos.css',
  array(),
  $theme_ver
);
wp_enqueue_style( 'owlcarousel2',
get_template_directory_uri().'/styles/owl.carousel.min.css',
array(),
$theme_ver
);
wp_enqueue_style( 'owlcarouseltheme',
get_template_directory_uri().'/styles/owl.theme.default.min.css',
array(),
$theme_ver
);

wp_enqueue_script("jquery");

wp_enqueue_script( 'inview',
get_template_directory_uri().'/scripts/jquery.inview.js',
array( 'jquery' ),
$theme_ver,
false
);

  wp_enqueue_script( 'main',
    get_template_directory_uri().'/scripts/main.min.js',
    array( 'jquery' ),
    $theme_ver,
    false
  );


  wp_enqueue_script( 'colorbox',
    get_template_directory_uri().'/scripts/jquery.colorbox-min.js',
    array( 'jquery' ),
    $theme_ver,
    false
  );
  wp_enqueue_script( 'owl-carousel',
  get_template_directory_uri().'/scripts/owl.carousel.min.js',
  array( 'jquery' ),
  $theme_ver,
  true
);
wp_enqueue_script( 'aos-script',
  get_template_directory_uri().'/scripts/aos.js',
  array( 'jquery' ),
  $theme_ver,
  true
);
  wp_enqueue_script( 'scripts',
    get_template_directory_uri().'/scripts/scripts.js',
    array( 'jquery' ),
    $theme_ver,
    true
  );

} );
function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyB2opgncJgWQkvibe4bVFb0AWAI2I7MSXw');
}

add_action('acf/init', 'my_acf_init');

add_filter('show_admin_bar','__return_false');


function excerpt($num) {
  $limit = $num+1;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt)."...";
  echo $excerpt;
  }
  
  function content($num) {
  $theContent = get_the_content();
  $output = preg_replace('/<img[^>]+./','', $theContent);
  $limit = $num+1;
  $content = explode(' ', $output, $limit);
  array_pop($content);
  $content = implode(" ",$content)."...";
  echo $content;
  }

  ?>



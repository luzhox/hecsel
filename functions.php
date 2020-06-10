<?php
  require('inc/opciones.php');
  require('lib/helpers.php');
  add_action( 'after_setup_theme', function() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
  add_theme_support( 'post-thumbnails' );
} );

function menus(){
	register_nav_menus(array(
  'menu_principal' =>__('Menu Principal','Hecsel')
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



function mk_list_child_pages() { 
 
global $post; 
 
if ( is_page() && $post->post_parent )
 
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
 
if ( $childpages ) {
 
    $string = '<ul class="lecciones">' . $childpages . '</ul>';
}
 
return $string;
 
}
 
add_shortcode('lecciones', 'mk_list_child_pages');


function excerpt($num) {
  $limit = $num+1;
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt)."...";
  echo $excerpt;
  }
  add_image_size('destacada', 500, true);

  function content($num) {
  $theContent = get_the_content();
  $output = preg_replace('/<img[^>]+./','', $theContent);
  $limit = $num+1;
  $content = explode(' ', $output, $limit);
  array_pop($content);
  $content = implode(" ",$content)."...";
  echo $content;
  }
  add_filter( 'posts_where', function ( $where, \WP_Query $q ) use ( &$wpdb )
{
    if ( true !== $q->get( 'wpse_include_parent' ) )
        return $where;

    /**
     * Get the value passed to from the post parent and validate it
     * post_parent only accepts an integer value, so we only need to validate
     * the value as an integer
     */
    $post_parent = filter_var( $q->get( 'post_parent' ), FILTER_VALIDATE_INT );
    if ( !$post_parent )
        return $where;

    /** 
     * Lets also include the parent in our query
     *
     * Because we have already validated the $post_parent value, we 
     * do not need to use the prepare() method here
     */
    $where .= " OR $wpdb->posts.ID = $post_parent";

    return $where;
}, 10, 2 );?>
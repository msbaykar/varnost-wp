<?php add_theme_support( 'post-thumbnails' );
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('medium_large');    // Medium Large resolution (default 768px x 0px max)
the_post_thumbnail('large');           // Large resolution (default 1024px x 1024px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail( array(100,100) );  // Other resolutions

// cs-framework
require_once dirname( __FILE__ ) .'/cs-framework/cs-framework.php';
// varnost script
function varnost_script() {

  wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext', false );

  wp_enqueue_style( 'lato-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext', false );

  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

  wp_enqueue_style( 'animated', get_template_directory_uri() . '/css/animate.css', array(), '1.1', 'all');

  wp_enqueue_style('style', get_template_directory_uri().'/css/master.css', array(), '1.1', 'all');

  wp_enqueue_style('owl-style', get_template_directory_uri().'/css/owl.carousel.min.css',array(), '1.1', 'all');

wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.min.js', array ( 'jquery' ), 1.1, true);

wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);

wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array ( 'jquery' ), 1.1, true);

wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'varnost_script' );
// get_the_posts_navigation
function register_my_menu() {
  register_nav_menu('right-menu',__( 'Right Menu' ));
  register_nav_menu('left-menu',__( 'Left Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_nav_menu('mobil-menu',__( 'Mobil Menu' ));
  register_nav_menu('mega-menu',__( 'Mega Menu' ));


}
add_action( 'init', 'register_my_menu' );

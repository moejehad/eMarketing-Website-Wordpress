<?php 

add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
      set_post_thumbnail_size( 300, 173, true );
}


?>

<?php 
function register_my_menus(){

   register_nav_menus( array (
   
    'header-location' => 'header',

));

}

add_action( 'init','register_my_menus' );

?>
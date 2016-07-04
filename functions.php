<?php

// Register Theme Features
function custom_theme_features()  {

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'video', 'link' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	 // Set custom thumbnail dimensions
	set_post_thumbnail_size( 450, 300, true );


	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();

}
add_action( 'after_setup_theme', 'custom_theme_features' );



// Add menu
  function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
       'blogs-anteriores' => __( 'Blogs Anteriores' ),
       'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );






// REMOVE ADMIN BAR
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}
/* Disable WordPress Admin Bar for all users but admins. */
  show_admin_bar(false);












// remover tamanho das imagens
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

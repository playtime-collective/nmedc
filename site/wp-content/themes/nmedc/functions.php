<?php

register_sidebar(array(
  'name' => __( 'Main Sidebar' ),
  'id' => 'main-sidebar',
  'description' => __( 'Widgets in this area will be shown in the main content area.' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => __( 'Ad Space' ),
  'id' => 'ad-space',
  'description' => __( 'Place an image widget in this space for showing an advertisement.' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<h4 style="display:none;">',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => __( 'Footer' ),
  'id' => 'footer-sidebar',
  'description' => __( 'Widgets in this area will be shown in the footer.' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));


// add image sizes!
add_image_size( 'front-slider', 800, 460 );
add_image_size( 'page-image', 500, 280 );

function nmedc_enqueue_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/fonts/stylesheet.css', false ); 
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false ); 
	wp_enqueue_style( 'nmedc-css', get_template_directory_uri() . '/style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'nmedc_enqueue_styles' );

function nmedc_enqueue_scripts() {
	wp_enqueue_script( 'jsplugins', get_template_directory_uri() . '/js/plugins.js', false );
	wp_enqueue_script( 'jquery-cycle', get_template_directory_uri() . '/js/jquery.cycle.js', array('jquery') );
	wp_enqueue_script( 'appjs', get_template_directory_uri() . '/js/app.js', array('jquery', 'jsplugins', 'jquery-cycle') );
}
add_action( 'wp_enqueue_scripts', 'nmedc_enqueue_scripts' );

function nmedc_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
    )
  );
}
add_action( 'init', 'nmedc_menus' );

// add category nicenames in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes[] = $category->category_nicename;
	return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

?>
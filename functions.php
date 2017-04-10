<?php
require_once('wp-bootstrap-navwalker.php');
// Add Bootstrap and JQuery
function script_enqueue() {
     wp_register_style( 'custom-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1', 'all' );
     wp_register_style( 'second-custom-style', get_template_directory_uri() . '/css/boostrap-theme.min.css', array(), '1', 'all' );
     wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1', 'all' );


     wp_register_script('custom-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true);
     wp_register_script('second-custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '',true);

     wp_enqueue_style('custom-style');
     wp_enqueue_style( 'second-custom-style');
     wp_enqueue_style('style');

     wp_enqueue_script('custom-script');
		 wp_enqueue_script('second-custom-script');
 }

 add_action( 'wp_enqueue_scripts', 'script_enqueue' );

 register_nav_menus( array(
         'primary' => __( 'Primary Menu', 'Primary Menu' ),
 ) );

function add_widgets_init() {

 	register_sidebar( array(
 		'name' => 'Sidebar',
 		'id' => 'sidebar-1',
 		'before_widget' => '<div id="widget">',
 		'after_widget' => '</div>',
 		'before_title' => '<h2 class="rounded">',
 		'after_title' => '</h2>',
 	) );
 }
 add_action( 'widgets_init', 'add_widgets_init' );
add_theme_support( 'post-thumbnails' );


 ?>

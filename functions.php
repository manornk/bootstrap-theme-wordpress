<?php
require_once('wp-bootstrap-navwalker.php');
// Add Bootstrap and JQuery
function script_enqueue() {
     wp_register_style( 'custom-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1', 'all' );
     wp_register_style( 'second-custom-style', get_template_directory_uri() . '/css/boostrap-theme.min.css', array(), '1', 'all' );

     wp_register_script('custom-script', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true);
     wp_register_script('second-custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '',true);

     wp_enqueue_style('custom-style');
     wp_enqueue_style( 'second-custom-style');

     wp_enqueue_script('custom-script');
		 wp_enqueue_script('second-custom-script');
 }

 add_action( 'wp_enqueue_scripts', 'script_enqueue' );




 ?>

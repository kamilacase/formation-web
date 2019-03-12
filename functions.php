<?php

//ajout de style
function fwafa_styles() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		wp_register_style('formation', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
		wp_enqueue_style('formation'); // Enqueue it!
		
	}
}

//ajout de script
function fwafa_scripts() {
	wp_enqueue_script('formation', get_template_directory_uri() . '/assets/script.js', array() );
}


add_action('wp_enqueue_scripts', 'fwafa_styles');
add_action('wp_footer', 'fwafa_scripts');

//menus
//register_nav_menu( 'header_menu', 'Primary Menu' );
function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'footer-menu' => __( 'Footer Menu' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );
  

 
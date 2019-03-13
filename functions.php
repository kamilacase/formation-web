<?php

//ajout de style
function fwafa_styles() {
	
		wp_register_style('formation', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_style('formation'); // Enqueue it!
		
	
}

//ajout de script
function fwafa_scripts() {
	wp_enqueue_script('formation', get_template_directory_uri() . '/assets/script.js', array() );
	wp_enqueue_script('formation', get_template_directory_uri() . '//fafa/node_modules/jquery/dist/jquery.js', array() );
}


add_action('wp_enqueue_scripts', 'fwafa_styles');
add_action('wp_footer', 'fwafa_scripts');



//menus

function register_my_menus() {
	register_nav_menu( 'header_menu', 'Primary Menu' );
	 //wigdet

 if ( function_exists('register_sidebar') )
 register_sidebar( array(
	'name'         => __( 'Footer Nav', 'formation' ),
	'id'        => 'footer_middle',
	'description'    => __( 'Ajouter une navigation au footer', 'formation' ),
	'before_widget' => '<aside id="%1$s" class="newsL %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
)
);
  }
  add_action( 'after_setup_theme', 'register_my_menus' );
  


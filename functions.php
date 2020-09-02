<?php 


require get_template_directory() . '/inc/customizer.php';

remove_action('wp_head','wp_generator');

function loading_scripts(){

	wp_enqueue_style('all', get_template_directory_uri(). '/css/all.css', array(), '1.4', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '1.0', 'all');	
	wp_enqueue_style('estilo-pages', get_template_directory_uri(). '/css/estilo-pages.css', array(),'1.5', 'all');	
	wp_enqueue_style('estilo-home', get_template_directory_uri(). '/css/estilo-home.css', array(), '2.0', 'all'); 
	wp_enqueue_style('media-queries', get_template_directory_uri(). '/css/media-queries.css', array(), '2.0', 'all');
	
	wp_enqueue_script('script', get_template_directory_uri(). '/jss/script.js', array(), '1.0', true );
	
}

	add_action('wp_enqueue_scripts','loading_scripts');


	register_nav_menus(

		array(
			'menu_main'=>'Menu Principal'		
			)

	);


	add_theme_support('custom-background');
	add_theme_support('curso-header');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats',array('video','image'));
	add_theme_support('html5', array('search-form'));
	add_theme_support('custom-logo', array(
		'height'	=> 110,
		'width'		=> 191
	));

if (function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 1',
			'id'		=> 'sidebar-1',
			'description'	=> 'Barra lateral da página Blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Barra Lateral 2',
			'id'		=> 'sidebar-2',
			'description'	=> 'Barra lateral da página blog',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
	);
	register_sidebar(
		array(
			'name'		=> 'Redes Sociais',
			'id'		=> 'redes-sociais',
			'description'	=> 'Widgets para redes sociais',
			'before_widget'	=> '<div class="widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="widget-titulo">',
			'after_title'	=> '</h2>',			
		)
    );
    
    add_theme_support('align-wide');
}

	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>
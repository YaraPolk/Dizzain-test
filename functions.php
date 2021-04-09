<?php


add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', array(), time() );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), time());

});

function shapeSpace_include_custom_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
   }
   add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


add_action('after_setup_theme', function() {
    
    add_theme_support('title-tag');
});

function true_custom_header_support(){
    add_theme_support(
    'custom-header',
    [
        'default-image' => get_parent_theme_file_uri( '/images/bg-header.png' ),
        'width' => 1920,
        'height' => 1080,
        'default-text-color' => '#ffffff',
    ]
);
}
add_action('after_setup_theme', 'true_custom_header_support');

function true_register_wp_sidebars() {
 
	register_sidebar(
		array(
			'id' => 'header_widget_block',
			'name' => 'Header',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в шапку сайта.', 
			'before_widget' => '<div id="%1$s" class="header-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'post_widget_block',
			'name' => 'Post block',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в блок с новыми записями.',
			'before_widget' => '<div id="%1$s" class="post-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
 
	register_sidebar(
		array(
			'id' => 'footer_widget_block',
			'name' => 'Footer',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в подвал сайта.',
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
 
add_action( 'widgets_init', 'true_register_wp_sidebars' );
?>
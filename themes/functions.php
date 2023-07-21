<?php

 function sgtheme_remove_menu_pages() {
	
   remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'sgtheme_remove_menu_pages' );

define('sgtheme_version', '2');
//chargement des scripts

function sgtheme_scripts()
{
//==========================================
	//======= chargement des styles ===
//==========================================

	wp_enqueue_style(
		'sgtheme_bootstrap-style',
		get_template_directory_uri() . '/css/bootstrap.min.css',
		array(), sgtheme_version, 'all');
	//lien avec style
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css',
		array('sgtheme_bootstrap-style'), sgtheme_version, 'all');

// chargement des scripts
// le menu hamburger
	wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), sgtheme_version, true);
	
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery', 'popper-js'), sgtheme_version, true);

	wp_enqueue_script('sgtheme_script', get_template_directory_uri() . '/js/sgtheme.js', array('jquery', 'bootstrap-js'), sgtheme_version, true);
}

add_action('wp_enqueue_scripts', 'sgtheme_scripts');

// chargement dans l'admin. de wp
function sgtheme_admin_scripts()
{

// chargement des styles dans l'admin
	wp_enqueue_style('sgtheme_bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), sgtheme_version);
}
add_action('admin_init', 'sgtheme_admin_scripts');

/**********************************************/
///////////////// UTILITAIRES
/**********************************************/
function sgtheme_setup()
{
// support vignettes= images à la une
	add_theme_support('post-thumbnails');

// taille image card smartphone
	add_image_size('smartph', 450, 250, true);
	

// retirer la version de wp pour + de sécurité
	remove_action('wp_head', 'wp_generator');

// support du titre pour seo
	add_theme_support('title-tag');

// activation de l'onglet 'menu'...
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Menu en bas de site'
));


add_action('after_setup_theme', 'sgtheme_setup');

	/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Register Custom Navigation Walker
	require_once('includes/bootstrap_5_wordpress-navbar_walker_main.php');
}

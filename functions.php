<?php
// function hussn_script_enqueue(){
//          wp_enqueue_script('customsytle', get_template_directory_uri() .'/css/hussn.css', array(), '1.0.0', 'all');
// }
// add_action('wp_enqueue_scripts','hussn_script_enqueue');

function hussn_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() .'/css/hussn.css' );
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    wp_enqueue_script('hussn', get_template_directory_uri() .'/js/hussn.js', array(), '1.0.0',true );
}
add_action('wp_enqueue_style','hussn_scripts');
add_action( 'wp_enqueue_scripts', 'hussn_scripts' );

function hussn_theme_setup(){

	add_theme_support('menu');
	register_nav_menu('primary','Primary Header Navigation');
	register_nav_menu('secondary','Footer Menu');
	register_nav_menu('university','Side Bar Menu');
}
add_action('init','hussn_theme_setup');

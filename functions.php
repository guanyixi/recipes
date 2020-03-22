<?php

include 'inc/post-type/loan.php';
include 'inc/api/all-loans.php';

// Enqueue stylesheet
function octane_api_style() {
	//Styles
	wp_enqueue_style( 'app-fonts', 'https://fonts.googleapis.com/css?family=Muli:200,300,400,400i,500,600,700,800,900|Teko:300,400,500,600,700&display=swap');
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/public/css/app.css', '', filemtime(get_template_directory().'/public/css/app.css') );
	//Scripts
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/public/js/app.js', 'jquery', filemtime(get_template_directory().'/public/js/app.js'), true );
}
add_action( 'wp_enqueue_scripts', 'octane_api_style' );


// Disable admin bar
show_admin_bar(false);
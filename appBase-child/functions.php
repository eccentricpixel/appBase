<?php

// Enqueue CSS and scripts



function load_appBase_child_scripts() {
	
	wp_enqueue_style(
		'appBase_child_css',
		get_stylesheet_directory_uri() . '/css/app.css',
		array(),
		false,
		'all'
	);
	
	wp_enqueue_script(
		'plugins_js',
		get_stylesheet_directory_uri() . '/js/plugins.min.js',
		array(),
		true
	);
	
	wp_enqueue_script(
		'app_js',
		get_stylesheet_directory_uri() . '/js/app.min.js',
		array(),
		true
	);
}

add_action('wp_enqueue_scripts', 'load_appBase_child_scripts',50);



// get current URL

function getUrl() {
  $theUrl  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
  $theUrl .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
  $theUrl .= $_SERVER["REQUEST_URI"];
  return $theUrl;
}


?>

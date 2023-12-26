<?php

function superio_child_enqueue_styles() {
	wp_enqueue_style( 'superio-child-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'superio_child_enqueue_styles', 200 );
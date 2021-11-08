<?php

add_action( 'wp_enqueue_scripts', 'rentcar_style' );
// add_action( 'wp_enqueue_scripts', 'rentcar_scripts' );

function rentcar_style() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

// function rentcar_scripts() {
//     wp_enqueue_scripts( 'main-script', get_template_directory_uri() . '/assets/js/main.min.js',
//      array( 'jquery' ), null, true);
// }
?>
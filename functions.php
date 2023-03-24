<?php

function htmlToWP_scripts() {
    // echo get_stylesheet_uri();
    wp_enqueue_style( 'child-style', get_stylesheet_uri());
    
}

add_action( 'wp_enqueue_scripts', 'htmlToWP_scripts' );



?>
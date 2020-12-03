<?php

function my_style() {
    wp_enqueue_style(  'style', get_stylesheet_uri()); 
}
add_action( 'wp_enqueue_scripts', 'my_style' );

function register_my_menus() {
  register_nav_menus(
    array(
        'header-menu' => __( 'Kopf Menu' ),
        'mobile-menu' => __( 'Handy Menu' ),
        'footer-menu' => __( 'Fuss Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );





<?php
/*
Plugin Name: Disable WooCommerce Zoom
Description: Disables the zoom feature on WooCommerce product images.
Author: Marcelo Rondon
Author URI: https://cello.design
Version: 1.1
*/

add_action( 'after_setup_theme', 'remove_pgz_theme_support', 100 );
function remove_pgz_theme_support() { 
    remove_theme_support( 'wc-product-gallery-zoom' );
}
?>

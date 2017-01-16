<?php
//check if site is visited once
$cookie_name = "visitedOnce";
$cookie_value = "true";


if(!isset($_COOKIE[$cookie_name])) {
    //echo "Cookie named '" . $cookie_name . "' is not set!";
   setcookie($cookie_name, $cookie_value, time() + (10 * 365 * 24 * 60 * 60));
   header("Location: http://huhtestmuch12546leh.netai.net/Welcome");
   exit;
} 
   

//continue with wordpress
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

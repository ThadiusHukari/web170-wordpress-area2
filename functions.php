<?php

/*
Theme Name: Thadius Hukari's SP17 Web170 CMS WordPress Demo
Theme URI: https://github.com/ThadiusHukari/web170-wordpress-area2
Author: Thadius Hukari of Hukares Collective
Author URI: http://hukares.com/web170/wordpress2/
Description: This is the theme for SP17 WEB170 CMS WordPress Demo
Version: 4.89
*/

//register side bars
register_sidebar(array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));

// Start of Register Menu Locations 
// use slug and tell the Menu where to go
register_nav_menus(array(
    'main-menu' => __('Main Menu'),));
// End of Register Menu Location

// Add theme support for Post Thumbnails & Featured Images
add_theme_support('post-thumbnails');


?>
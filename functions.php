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

//Post type support
add_post_type_support('page', 'excerpt');


// Get Title Tag
function get_tads_title_tag() {
    
    global $post; //define the post
    
    if (is_front_page() || is_home()) { //front page or blog fee
        
        bloginfo('description');
        
    }elseif (is_page() || is_single()){ //page of posting
        
        echo get_the_title($post->ID);
        
    }else{ //404 page
        
        bloginfo('description');
        
    }

    if($post->post_parent) {
            
        echo ' | ';
        echo get_the_title($post->post_parent);
        
    }
        echo ' | ';
        bloginfo('name');
        echo ' | ';
        echo 'Seattle, WA';
        
}

?>
<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/flexslider.css" />

<!-- Slim Menu -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slimmenu.min.css" type="text/css">
<!-- Slim Menu -->
    
<!-- jQuery Link -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!-- jQuery Link --> 

<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- Begin WP Head Function -->
    
</head>

<body <?php body_class(); ?>>
    <!-- FB Like Button Java Start -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- FB Like Button Jave End -->
    
<header> 
<a href="woodskys.php"><img src="<?php bloginfo('template_directory'); ?>/images/woodskys_logo.png" class="icon" alt="Home" /></a>
    
  <h2 class="pageid"><?=$myPageID;?></h2>
    
     <!-- FB Like Button location -->
     <div class="fb-like" data-href="https://www.facebook.com/Woodskys-113917318678705/?fref=ts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
     <!-- FB Like Button location -->
    
    <div id="information">
    <h1>(206) 547-9662</h1>
    <h1>TUES - SUN: 12pm - 4pm</h1>
    <h1>303 N 36th St. Seattle, WA 98103</h1>
    </div>
    
<!-- START NAVIGATION (Main)
    
<!-- Begin WP Menu -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav', 'items_wrap' => '<ul id="navigation" class="slimmenu %2$s">%3$s</ul>', ) ); ?>
<!-- End WP Menu -->
    
<!-- END NAVIGATION (Main) -->

    
  </header>
<!-- ABOVE THIS LINE IS TOP PHP -->



<!-- START Article (Content) -->

<article>
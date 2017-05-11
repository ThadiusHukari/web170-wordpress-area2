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
    
  <!-- START NAVIGATION (Main) -->
  <nav>
    <ul id="navigation" class="slimmenu">
<li><a href="woodskys.php">Home</a></li>
<li><a href="about.php">About</a>
    <ul>
        <li><a href="history.php">History</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
    </ul>
</li>
<li><a href="events.php">Events</a>
        <ul>
        <li><a href="music.php">Music</a></li>
        <li><a href="games.php">Games</a></li>
        <li><a href="reservations.php">Reservations</a></li>
    </ul>
</li>
<li><a href="daileyspecials.php">Dailey Specials</a></li>
<li><a href="photos.php">Photos</a></li>
<li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  <!-- END NAVIGATION (Main) -->
  </header>
<!-- ABOVE THIS LINE IS TOP PHP -->

    




<!-- START Article (Chapter) -->

<article>
    <?php if (have_posts()) : while (have_posts()) : the_post(); //initiates the loop ?>
    <h2><a href="<?php the_permalink(); //links to the page or posting ?>">
    <?php the_title(); //gets the page or posting title ?></a></h2>
    <?php the_content(''); //gets the page or posting content ?>
    <?php endwhile; endif; //ends the loop ?>
  <small>index.php</small>
</article>
    
<!-- START Article (Chapter) -->
 
    
<!-- START Aside -->
<aside>
    
    <h3>Upcoming Events</h3>
<div class='embed-container'><iframe src='https://calendar.google.com/calendar/embed?mode=AGENDA&height=600&wkst=1&bgcolor=%23FFFFFF&src=gu6km764sg0vqr2ug43kkhuq5s%40group.calendar.google.com&color=%236B3304&ctz=America%2FLos_Angeles' style='border-width:0' frameborder='0' scrolling='no'></iframe>
    </div>

    <h3>Recent Posts</h3>
    <!-- SnapWidget Instagram Feed -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/181116" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
    
</aside>
<!-- END Aside -->
    

    
    
    
    
<!-- BELOW THIS LINE IS BOTTOM PHP -->
<footer>
  <p>Seattles Premier Ski and Snowboard Bar</p>
    <p>Tue - Sun: 12pm - 4am</p>
    <p>303 N 36th Seattle, WA 98103</p>
  <p><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML5</a> <a href="disclaimer.php" target="_blank">Disclaimer/Privacy Notice</a> ~ Website by Thadius Hukari, copyright 2016</p>
</footer>

<script src="js/jquery.slimmenu.min.js"></script>

<script>
$('#navigation').slimmenu(
{
    resizeWidth: '800',
    collapserTitle: 'Main Menu',
    animSpeed: 'medium',
    easingEffect: null,
    indentChildren: false,
    childrenIndenter: '&nbsp;'
});
</script>

<script type="text/javascript" src="js/jquery.easing.js"></script> 

<!-- Begin WP Footer Function -->
<?php wp_footer(); ?>
<!-- Begin WP Footer Function -->
    
</body>
</html>

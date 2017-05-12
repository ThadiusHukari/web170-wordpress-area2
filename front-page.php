<?php get_header(); ?>

<!-- START Article (Chapter) -->

<article>
  <h2>Seattle's Premier Ski & Snowboard Bar</h2>
<div class="flexslider">
	<ul class="slides">
		<li><img alt="" src="images/woodskysfrontdoor2.jpg" />
        <p class="flex-caption">Welcome to Woodsky's!</p>
        </li>
        
		<li><img alt="" src="images/pubcrawl.jpg" />
        <p class="flex-caption">Pub Crawl Crew!</p>
        </li>
        
		<li><img alt="" src="images/smallshotski.jpg" />
        <p class="flex-caption">Mini Shot Ski!</p>
        </li>
        
        <li><img alt="" src="images/shotski1.jpg" />
        <p class="flex-caption">Big Shot Ski!</p>
        </li>
        
	</ul>
</div>
</article>

<!-- END Article (Chapter) --> 

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

<!-- Start FlexSlider Code --> 

<script type="text/javascript" src="js/jquery.flexslider.js"></script> 

<!-- Initialize the slider on the div named "flexslider" --> 
<script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide", // set animation to slide
        smoothHeight: true // auto-adjust to fit the height of images
      });
    });
</script> 

<!-- Optional FlexSlider Additions --> 
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- End FlexSlider Code -->

<!-- END Aside -->

    <small>front-page.php</small>
<?php get_footer(); ?>
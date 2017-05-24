<!-- START Aside -->
<aside>

<!-- START Sec NAV Sidebar -->
    <div id="sidebar">
        
<!-- START Sub Nav -->
<div id="sub-navigation" class="widget">

    <h2><?php
            
        if(is_page()) { //if were on a page...

        echo get_the_title($post->post_parent); //get the title of parent page
    
        }else{
            echo 'Blog';
        }
            
        ?>
    </h2>
    <ul>
        <?php

        if(is_page() || is_404()) { //if were on a page...

            if($post->post_parent) { //if the page has a parent...
            
                wp_list_pages(array('title_li' => '', 'child_of' => $post-post_parent, ));  // list the children of said parent

            }else{ //if on the parent page...
                
                wp_list_pages(array('title_li' => '', 'child_of' => $post->ID, ));
            }
        }else{ //if were not on a page...

            wp_list_categories(array('title_li' => '', )); //list the blog categories with the "Blog" title
            
            }
            ?>
    </ul>
</div>
<!-- END Sub Nav -->
        
        
<?php if(get_post_meta($post->ID, 'quote', true)) : ?>
<!-- START Pull Quote -->
<div id="pull-quote" class="widget">
    <blockquote><?php echo get_post_meta($post->ID, 'quote', true) ?></blockquote>
</div>
<!-- END Pull Quote -->
<?php endif; ?>
        
<!-- START Widgets -->
<?php dynamic_sidebar(1); ?>
<!-- END Widgets -->
             
        
    </div>

<!-- END Sec NAV Sidebar -->
    
<!-- Start Calendar -->
    <h3>Upcoming Events</h3>
<div class='embed-container'><iframe src='https://calendar.google.com/calendar/embed?mode=AGENDA&height=600&wkst=1&bgcolor=%23FFFFFF&src=gu6km764sg0vqr2ug43kkhuq5s%40group.calendar.google.com&color=%236B3304&ctz=America%2FLos_Angeles' style='border-width:0' frameborder='0' scrolling='no'></iframe>
    </div>
<!-- End Calendar -->

  
    
<!-- END Aside -->
<?php get_header(); ?>

<!-- START Article (Content) -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); //initiates the loop ?>
    <h2><a href="<?php the_permalink(); //links to the page or posting ?>">
    <?php the_title(); //gets the page or posting title ?></a></h2>
    <?php the_content(''); //gets the page or posting content ?>
    <?php endwhile; endif; //ends the loop ?>
    
  <small>page.php</small>
    
</article>    
<!-- END Article (Content) -->

<?php get_sidebar(); ?>   
<?php get_footer(); ?>
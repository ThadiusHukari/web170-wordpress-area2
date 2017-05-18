<?php get_header(); ?>

<!-- START Article (Content) -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); //initiates the loop ?>
    <h2><a href="<?php the_permalink(); //links to the page or posting ?>">
    <?php the_title(); //gets the page or posting title ?></a></h2>

        <small>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>.</small>
    <?php the_post_thumbnail('large');//get the associated image ?>
    <?php the_content(''); //gets the page or posting content ?>
    <?php endwhile; endif; //ends the loop ?>
    
  <small>single.php</small>

</article>    
<!-- END Article (Content) -->

<?php get_sidebar(); ?>   
<?php get_footer(); ?>
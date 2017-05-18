<?php get_header(); ?>

<!-- START Article (Content) -->

    <?php if (have_posts()) : while (have_posts()) : the_post(); //initiates the loop ?>
    <article id="post-excerpt-<?php the_ID(); ?>" class="post-exceprt">
    <h2><a href="<?php the_permalink(); //links to the page or posting ?>">    
    <?php the_title(); //gets the page or posting title ?></a></h2>

         <small>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?>.</small>
    
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); //get the associated image ?></a>
    <p><?php echo get_the_excerpt('');//gets the page or posting content ?>
    <a href="<?php the_permalink(); //links to the page or posting ?>">Read More&nbsp;&raquo;</a></p>
    </article>
    <?php endwhile; endif; //ends the loop ?>
    
  <small>index.php</small>

</article>    
<!-- END Article (Content) -->

<?php get_sidebar(); ?>   
<?php get_footer(); ?>
<?php get_header(); ?>



<?php
 
// checks if there are any posts that match the query
if (have_posts()) :
 
  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post();
 
    // the code between the while loop will be repeated for each post
    ?>
    
    <h2><?php the_title(); ?></h2>;
 
    <p><?php the_content(); ?></p>
    
 
    <?php
 
    // Stop the loop when all posts are displayed
 endwhile;
?>

<?php
endif;
?>


<?php get_footer(); ?>
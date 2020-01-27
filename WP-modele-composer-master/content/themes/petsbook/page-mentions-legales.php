<?php get_header(); ?>



<?php
 
// checks if there are any posts that match the query
if (have_posts()) :
 
  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post(); ?>

  <div class="info-animal-wrapper"> 
        <section class="form__pet__infos">
        <h1 class="form__pet__infos__title"><?php the_title(); ?></h1>      
                <div class="form__pet__infos__animal">
                  <h4 class="form__pet__infos__animal__title"><?php the_title(); ?></h4>
                  <p><?php the_content(); ?></p>
                </div>
        </section>

    </div>
 
    <?php
 
 endwhile;
?>

<?php
endif;
?>


<?php get_footer(); ?>
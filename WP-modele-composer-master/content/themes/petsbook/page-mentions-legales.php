<?php get_header(); ?>



<?php
 
// checks if there are any posts that match the query
if (have_posts()) :
 
  // If there are posts matching the query then start the loop
  while ( have_posts() ) : the_post(); ?>

  <div class="info-animal-wrapper"> 
        <section class="form__pet__infos">
          <h1 class="form__pet__infos__title"><?php the_title(); ?></h1>
         
          <div class="form__pet__infos__edit">
            <div class="info-glimpse__general-infos">
              <div class="form__pet__infos__animal">
                  <h4 class="form__pet__infos__animal__title"><?php the_title(); ?></h4>
                  <p class="form__pet__infos__animal__user"><?php the_content(); ?></p>
              </div>
            </div>
          </div>

        </section>

    </div>
 
    // the code between the while loop will be repeated for each post

    
 
    <?php
 
    // Stop the loop when all posts are displayed
 endwhile;
?>

<?php
endif;
?>


<?php get_footer(); ?>
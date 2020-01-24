<?php get_header(); ?>


    <div class="main-items-l">
      <div class="timeline-edit-wrapper">
        <div class="timeline-edit__header">
          <p class="timeline-edit__header__text">Ajoutez des photos à votre timeline !</p>
          <form method="POST" action="#" enctype="multipart/form-data">
          <input type="hidden" name="submit_photos_timeline" value=""/>
            <input id="file" name="image-timeline[]" class="input-file" type="file" multiple>
            <input type="submit" class="timeline-edit__header__button" value="Ajouter à la timeline">
          </form>
          
        </div>
        <!--Items-->
        <div class="timeline-edit__items">
            <?php
                if( have_rows('une_section', $_GET['pet']) ): //https://www.advancedcustomfields.com/resources/have_rows/
                    while ( have_rows('une_section', $_GET['pet']) ) : the_row();
                      $url_img = get_sub_field('photo');
                      $date = get_sub_field('date');
                      $texte = get_sub_field('texte'); ?>
                        <div class="timeline-edit__item">
                            <img src="<?= $url_img; ?>" alt="" class="timeline-edit__item__img">

                            <div class="timeline-edit__item__links">
                                <a href="#" class="timeline-edit__item__links__link"><?= $date; ?></a>
                                <a href="#" class="timeline-edit__item__links__link">Supprimer</a>
                            </div>

                            <textarea name="timeline-edit__item__text" id="timeline-edit__item__text" cols="30" rows="10" class="timeline-edit__item__text" placeholder="Description ..."><?= $texte; ?></textarea>
                        </div>
                <?php endwhile; 
                endif; ?>

            
            
            <a href="#" class="timeline-edit__item add-icon">
              <i class="fa fa-plus-circle " aria-hidden="true"></i>
            </a>
        </div>
        <!--/Items-->
      </div>
   </div>


<?php get_footer(); ?>

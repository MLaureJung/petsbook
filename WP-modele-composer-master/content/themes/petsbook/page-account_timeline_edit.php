<?php get_header(); ?>


    <div class="main-items-l arrow-top-edit-timeline">
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
                            
                            <form action="#" method='post' enctype="multipart/form-data">

                            <input type="hidden" name="submit_timeline_edit" value="<?php if(isset($_GET['pet'])) { echo $_GET['pet'];} ?>"/>

                              <div class="timeline-edit__item__links">
                                  <input type="date" class="timeline-edit__item__text" name="timeline_edit_date" <?php if(!isset($_GET['pet'])){ ?>value="" <?php } else { ?> value="<?= get_sub_field('date',$_GET['pet']); ?>" <?php } ?> id="timeline_edit_date" ></input>
                                  
                                  <a href="#" class="timeline-edit__item__links__link">Supprimer</a>
                              </div>
                              <textarea name="timeline-edit__item__text" id="timeline_edit_text" cols="30" rows="10" class="timeline-edit__item__text" placeholder="Description ..." <?php if(!isset($_GET['pet'])){ ?>value="" <?php } else { ?> value="<?= get_sub_field('texte',$_GET['pet']); ?>" <?php } ?>></textarea>
                              <input type="submit" class="validate__button" value="Enregistrer">
                              </div>                             
                            <form>
                <?php endwhile; 
                endif; ?>
 
        </div>
        <!--/Items-->
      </div>
   </div>


<?php get_footer(); ?>

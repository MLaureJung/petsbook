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
                            

                            <form action="" method='post' enctype="multipart/form-data">
                              <input type="hidden" name="submit_timeline_edit_text_date" value="<?php if(isset($_GET['pet'])) { echo $_GET['pet'];} ?>"/>

                              <div>
                                  <input type="text" placeholder="Date" class="timeline-edit__item__links__link"><?=" $date"; ?></input>
                              </div>  
                              <div>
                                <textarea name="timeline-edit__item__text" cols="30" rows="10" class="timeline-edit__item__textarea" placeholder="Description ..."><?= $texte; ?></textarea>
                              </div>
                              <div style="display:flex; justify-content:space-between; width:90%; margin:0 auto; ">
                                <button class="timeline-edit__item__links__buttons">Supprimer</button>
                              
                                <input type="submit" value="Enregistrer" class="timeline-edit__item__links__buttons"/>
                              </div>
                          </form>
                        </div>
                <?php endwhile; 
                endif; ?>
 
        </div>
        <!--/Items-->
      </div>
   </div>


<?php get_footer(); ?>

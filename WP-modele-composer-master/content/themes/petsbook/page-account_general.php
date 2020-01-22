<?php get_header(); ?>
<main class="main">
    <section class="top-info">
                <div class="top-info__user">
                    <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="top-info__user__profile">
                    <p class="top-info__user__ID-user">
                        <?php $current_user = wp_get_current_user(); 
                        echo $current_user->first_name . " " . $current_user->last_name; ?>
                    </p> 
                    <a href="<?php echo site_url('/account_user_info/')?>" class="top-info__user__edit-profile">Modifier mon profile</a>
                </div>
                <div class="animal">  
                    <div class="add-animal">
                        <div class="add-animal__icone-animal">
                            <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="add-animal__icone-animal__pic">
                        </div>
                            <a href="# " class="add-animal__add">Mon animal</a>
                    </div>
                    <div class="add-animal">
                        <div class="add-animal__icone-animal">
                            <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="add-animal__icone-animal__pic">
                        </div>
                            <a href="#" class="add-animal__add">Mon animal</a>
                    </div>
                    <div class="add-animal">
                        <div class="add-animal__icone-animal">
                            <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="add-animal__icone-animal__pic">
                        </div>
                            <a href="#" class="add-animal__add">Mon animal</a>
                    </div>
                    <div class="add-animal">
                        <div class="add-animal__icone-animal">
                            <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="add-animal__icone-animal__pic">
                        </div>
                            <a href="#" class="add-animal__add">Mon animal</a>
                    </div>
            
            
            
            <div class="add-animal">
                <div class="add-animal__icone-animal">
                    <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="add-animal__icone-animal__pic">
                </div>

                    <a href="<?php echo site_url('/account_infos_edit/')?>" class="add-animal__add__link"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            </div>
   </section>

   <div class="main-items">
     <div class="account-general-animal-wrapper">
          <section class="bottom-infos account-general-block" style="background-image: url('https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/'); background-size:cover; background-position:center center;">

          </section>

              <div class="animal-infos account-general-block">
                  <label for="animal-infos__title" class="animal-infos__title">
                    <h3>Informations</h3></label>
                        <ul class="animal-infos__list">
                            <li>Nom</li>
                            <li>Age</li>
                            <li>Sexe</li>
                            <li>Numero de puce</li>
                            <li>Poids</li>
                        </ul>

                    <div class="account-general__buttons">
                    <div class="btn-edit">
                        <a href="<?php echo site_url('/account_infos_edit/')?>" class="edit">Editer</a>
                    </div> 
                    <div class="btn-see">
                      <a href="<?php echo site_url('/pet_infos_glimpse/')?>" class="see">Voir</a>
                    </div>  
                    </div> 

                </div>
        

          <section class="health-book account-general-block">
              <label for="health-book__title" class="health-book__title">
                <h3>Carnet de santé</h3></label>
                    <ul>
                        <li>Dernière vaccination</li>
                        <li>Contact vétérinaire</li>
                        <li>Antécedants medicaux</li>
                        
                    </ul>

                    <div class="account-general__buttons">
                      <div class="btn-edit">
                          <a href="<?php echo site_url('/account_book_edit/')?>" class="edit">Editer</a>
                      </div> 
                      <div class="btn-see">
                        <a href="<?php echo site_url('/pet_book_glimpse/')?>" class="see">Voir</a>
                      </div> 
                    </div>
                    
            </section>

            <section class="timeline-management account-general-block">
                <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="timeline-management__pic">

              <div class="account-general__buttons">
                <div class="btn-edit">
                    <a href="<?php echo site_url('/account_timeline_edit/')?>" class="edit-timeline">Editer la timeline</a>
                </div> 
                <div class="btn-see">
                  <a href="<?php echo site_url('/pet_timeline_glimpse/')?>" class="see-timeline">Voir la timeline</a>
                </div>
              </div> 

            </section>
          </div>
   </div>
   
  </main>
<?php get_footer(); ?>

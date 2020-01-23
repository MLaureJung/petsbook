<?php get_header(); ?>
<main class="main">

<!-- Section pet profile-->
<section class="photos_profiles">

    <div class="human__profiles_elements">  
    <div class='human__profiles'>
        <a href="#"><img class='human__profiles__image'
        src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt=""></a> 
    </div>
        <h4 class='human__profiles__name'><?php $current_user = wp_get_current_user(); echo $current_user->first_name . " " . $current_user->last_name; ?></h4>  
        <a href="<?php echo site_url('/account_user_info/')?>" class="top-info__user__edit-profile">Modifier mon profile</a>          
    </div>

    <div class="animals__profiles">
        <div class="animals__profiles__all__wrapper">                  
            <a href="#">
            <img class='animals__profiles__all__wrapper__image'
            src="https://source.unsplash.com/700x700/?pets" alt="">   
            <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
            </a>               
        </div>

        <div class="animals__profiles__all__wrapper">  
            <a href="#" class='animals__profiles__all__wrapper__individual__link'>
            <img class='animals__profiles__all__wrapper__image'
            src="https://source.unsplash.com/700x700/?pets" alt=""/>   
            <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
            </a>
        </div>

        <div class="animals__profiles__all__wrapper">  
            <a href="#">
            <img class='animals__profiles__all__wrapper__image'
            src="https://source.unsplash.com/700x700/?pets" alt=""/>   
            <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
            </a>         
        </div>

        <div class="animals__profiles__all__wrapper">             
            <a href="#">
            <img class='animals__profiles__all__wrapper__image'
            src="https://source.unsplash.com/700x700/?pets" alt=""/>   
            <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
            </a>       
        </div>

        <div class="animals__profiles__all__wrapper">  
            <a href="<?php echo site_url('/account_infos_edit/')?>"><!--
            <img class='animals__profiles__all__wrapper__image'
            src="https://source.unsplash.com/700x700/?pets" alt=""/>--> 
            <i class="fa fa-plus " aria-hidden="true"></i>
            </a>
        </div>

    </div>
        
</section> 
<!-- /Section pet profile-->  

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

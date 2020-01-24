<?php get_header(); ?>
<!-- Section pet profile-->
<section class="photos_profiles">

  <div class="human__profiles_elements">  
    <div class='human__profiles'>
        <a href="#"><img class='human__profiles__image'
        src="https://source.unsplash.com/700x700/?faces" alt=""></a> 
    </div>
    <h4 class='human__profiles__name'><?php $current_user = wp_get_current_user(); echo $current_user->first_name . " " . $current_user->last_name; ?></h4>            
  </div>

  <!--Pet profile-->
  <div class="animals__profiles">
  <?php get_template_part('template-parts/account_affichage_mes_animaux'); ?>

  </div>
  <!--/Pet profile-->
          
</section> 
<!-- /Section pet profile-->  

<div class="info-animal-wrapper"> 
        <section class="form__pet__infos">
          <h1 class="form__pet__infos__title">Titre</h1>
         
          <div class="form__pet__infos__edit">
            <div class="info-glimpse__general-infos">
              <div class="form__pet__infos__animal">
                  <h4 class="form__pet__infos__animal__title">Prénom</h4>
                  <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Race</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Age</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Sexe</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Poids</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Identification (puce/tatouage)</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>


              <div class="form__pet__infos__animal">
                  <h4 class="form__pet__infos__animal__title">Castré/Stérile</h4>
                  <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Couleur de la robe</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Signes perticulières</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>
            </div>
            <!--------------------------------------------------------->
            <div class="info-glimpse__medical">
              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Antécédents médicaux</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Prise de médicaments</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Dernier traitement anti-parasitaire</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                  <h4 class="form__pet__infos__animal__title">Dernier vaccin</h4>
                  <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Coordonnées du vétérinaire</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>

              <div class="form__pet__infos__animal">
                      <h4 class="form__pet__infos__animal__title">Prochain rendez-vous vétérinaire</h4>
                      <p class="form__pet__infos__animal__user">Lorem impsum</p>
              </div>
            </div>
          </div>
        <div class="validate" style="justify-content:center;">    
        
        <a href="<?= get_permalink(69);?>?pet=<?= $_GET['pet']; ?>" class="validate__button">Infos générales</a>
        </div>
                
        </section>

      </div>
<?php get_footer(); ?>

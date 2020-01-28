<?php get_header(); 

$current_user = wp_get_current_user(); ?>

<section class="photos_profiles">

<div class="human__profiles_elements">

      <div class='human__profiles'>
          <a href="#"><img class='human__profiles__image'
          src="https://source.unsplash.com/700x700/?faces" alt=""></a> 
      </div>
      <h4 class='human__profiles__name'><?php echo $current_user->first_name;?></h4>
      <a href="#" class="top-info__user__edit-profile">Modifier ma photo de profil</a> 
</div>

</section>   
<!-- /Section pet profile-->

<div class="main-items-l">
<div class="info-animal-wrapper user_infos-wrapper">
<section class="form__infos__animal">
  <h1 class="form__infos__animal__title" >Titre</h1>
  
  <div class="form__pet__infos__edit infos-pet-edit user_infos">
    <div class="form__pet__infos__animal">
        <h4 class="form__pet__infos__animal__title">Nom</h4>
        <p class="form__pet__infos__animal__user"><?php echo $current_user->last_name;?></p>
    </div>

    <div class="form__pet__infos__animal">
            <h4 class="form__pet__infos__animal__title">Prénom</h4>
            <p class="form__pet__infos__animal__user"><?php echo $current_user->first_name;?></p>
    </div>

    <div class="form__pet__infos__animal">
            <h4 class="form__pet__infos__animal__title">Sexe</h4>
            <p class="form__pet__infos__animal__user"><?php echo get_field('sexe', 'user_' . $current_user->ID); ?></p>
    </div>

    <div class="form__pet__infos__animal">
            <h4 class="form__pet__infos__animal__title">Age</h4>
            <p class="form__pet__infos__animal__user"><?php echo get_field('age', 'user_' . $current_user->ID); ?></p>
    </div>

    <div class="form__pet__infos__animal">
            <h4 class="form__pet__infos__animal__title">E-mail</h4>
            <p class="form__pet__infos__animal__user"><?php echo $current_user->user_email;?></p>
    </div>

    <div class="form__pet__infos__animal">
            <h4 class="form__pet__infos__animal__title">Adresse</h4>
            <p class="form__pet__infos__animal__user"><?php echo get_field('adresse', 'user_' . $current_user->ID); ?></p>
    </div>
</div>

  <div class="validate validate-account_user_info">     
      <a href="<?php echo site_url('/account_user_info_edit/')?>" class="validate__button button-account_user_info">Modifier</a>   
  </div>
</section>
</div>
</div>

<?php get_footer(); ?>

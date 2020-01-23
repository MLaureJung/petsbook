<?php get_header();?>
<section class="photos_profiles">

<div class="human__profiles_elements">

        <div class='human__profiles'>
            <a href="#"><img class='human__profiles__image'
            src="https://source.unsplash.com/700x700/?faces" alt=""></a> 
        </div>
        <h4 class='human__profiles__name'>Prénom</h4>
        <a href="#" class="top-info__user__edit-profile">Modifier ma photo de profil</a> 
</div>

</section>   
<!-- /Section pet profile-->

<div class="main-items-l">
<div class="info-animal-wrapper">
<section class="form__infos__animal">
  <h1 class="form__infos__animal__title" >Titre</h1>
  
  <form action="#" method='post' class="form__infos__animal__edit infos-pet-edit">

    <div class="infos__animal__edit__paragraph" > 
        <label for="book__edit__name"class="infos__animal__edit__paragraph__label">Nom</label> 
        <input class="infos__animal__edit__paragraph__input" type='text' name="book__edit__name" id="book__edit__name" rows="2"  cols="50"></input> 
    </div>

    <div class="infos__animal__edit__paragraph" > 
      <label for="book__edit__name"class="infos__animal__edit__paragraph__label">Prénom</label> 
      <input class="infos__animal__edit__paragraph__input" type='text' name="book__edit__name" id="book__edit__name" rows="2"  cols="50"></input> 
  </div>

    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_type" class="infos__animal__edit__paragraph__label">Sexe</label> 
      <!--select choices-->
      <select class="infos__animal__edit__paragraph__select" name="pet-select" id="pet-select">
        <option value="">---</option>
        <option value="dog">Homme</option>
        <option value="cat">Femme</option>
        <option value="cat">Autre</option>
        
      </select>
      <!--/select choices-->
    </div>

    <div class="infos__animal__edit__paragraph" >
        <label for="info_edit_age" class="infos__animal__edit__paragraph__label">Age</label> 
        <input class="infos__animal__edit__paragraph__input" type="number"name="info_edit_age" id="info_edit_age"></input> 
    </div>
    
    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_like" class="infos__animal__edit__paragraph__label">E-mail</label> 
      <input class="infos__animal__edit__paragraph__input" type="email" name="info_edit_like" id="info_edit_like"></input> 
    </div>

    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_address" class="infos__animal__edit__paragraph__label" >Adresse</label> 
      <textarea class="infos__animal__edit__paragraph__textarea" name="info_edit_address" id="info_edit_address"></textarea> 
    </div>
  </form>

  <div class="validate validate-account_user_info">     
      <!--<a href="#" class="validate__button">Enregistrer</a> -->
      <input type="submit" class="validate__button" value="Enregistrer">   
  </div>
</section>
</div>
</div>
    <?php get_footer();?>
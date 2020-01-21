<?php get_header(); ?>
 <!-- Section pet profile-->
 <section class="photos_profiles">

<div class="human__profiles_elements">

        <div class='human__profiles'>
            <a href="#"><img class='human__profiles__image'
            src="https://source.unsplash.com/700x700/?faces" alt=""></a> 
        </div>
        <h4 class='human__profiles__name'>Prénom</h4>
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
      <a href="#"><!--
        <img class='animals__profiles__all__wrapper__image'
      src="https://source.unsplash.com/700x700/?pets" alt=""/>--> 
        <i class="fa fa-plus " aria-hidden="true"></i>
        
      </a>
  </div>

</div>
</section>   
<!-- /Section pet profile-->

<div class="main-items-l">
<div class="info-animal-wrapper">
<section class="form__infos__animal">
  <h1 class="form__infos__animal__title" >Titre</h1>
  
  <form action="#" method='post' class="form__infos__animal__edit infos-pet-edit">

    <div class="infos__animal__edit__paragraph" > 
        <label for="book__edit__name"class="infos__animal__edit__paragraph__label">Prénom</label> 
        <input class="infos__animal__edit__paragraph__input" type='text' name="book__edit__name" id="book__edit__name" rows="2"  cols="50"></input> 
    </div>

    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_type" class="infos__animal__edit__paragraph__label">Type</label> 
      <!--select choices-->
      <select class="infos__animal__edit__paragraph__select" name="pet-select" id="pet-select">
        <option value="">---</option>
        <option value="dog">Chien</option>
        <option value="cat">Chat</option>
        <option value="bird">Oiseau</option>
        <option value="rodent">Rongeur</option>
        <option value="nac">NAC</option>
      </select>
      <!--/select choices-->
    </div>

    <div class="infos__animal__edit__paragraph" >
        <label for="info_edit_age" class="infos__animal__edit__paragraph__label">Age</label> 
        <input class="infos__animal__edit__paragraph__input" type="number"name="info_edit_age" id="info_edit_age"></input> 
    </div>
    
    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_like" class="infos__animal__edit__paragraph__label">Aime</label> 
      <textarea class="infos__animal__edit__paragraph__textarea" name="info_edit_like" id="info_edit_like"></textarea> 
    </div>

    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_dislike" class="infos__animal__edit__paragraph__label" >N'aime pas</label> 
      <textarea class="infos__animal__edit__paragraph__textarea" name="info_edit_dislike" id="info_edit_dislike"></textarea> 
    </div>

    <div class="infos__animal__edit__paragraph" >
      <label for="info_edit_description" class="infos__animal__edit__paragraph__label" >Description</label> 
      <textarea class="infos__animal__edit__paragraph__textarea" name="info_edit_description" id="info_edit_description"></textarea> 
    </div>
  </form>

  <div class="validate">
   
      <a href="#"class="validate__button">Infos générales</a>

      <a href="#" class="validate__button">Enregistrer</a>
   
      <a href="#" class="validate__button">Carnet de santé</a>
    
  </div>
</section>
</div>
</div>

<?php get_footer(); ?>

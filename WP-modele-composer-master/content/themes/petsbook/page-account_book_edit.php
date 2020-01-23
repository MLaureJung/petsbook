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
    
    <form action="#" method='post' class="form__infos__animal__edit">
      <div class="book-edit__general-infos">

        <div class="infos__animal__edit__paragraph" > 
            <label for="book__edit__name"class="infos__animal__edit__paragraph__label">Prénom</label> 
            <input class="infos__animal__edit__paragraph__input" type='text' name="book__edit__name" id="book__edit__name" rows="2"  cols="50"></input> 
        </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book__edit__race" class="infos__animal__edit__paragraph__label">Race</label> 
            <input class="infos__animal__edit__paragraph__input"type='text' name="book__edit__race" id="book__edit__race" rows="2"  cols="50"></input> 
        </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book__edit__age" class="infos__animal__edit__paragraph__label">Age</label> 
            <input class="infos__animal__edit__paragraph__input" type="number"name="book__edit__age" id="book__edit__age"></input> 
        </div>
        
        <div class="infos__animal__edit__paragraph" >
          <label for="book__edit__sexe" class="infos__animal__edit__paragraph__label">Sexe</label> 
          <div class="radios">

            <div class="radio">
              <input type="radio" class="infos__animal__edit__paragraph__radio" name="book_edit_castre" id="book_edit_castre" value="femelle">
              <label for="femelle">Femelle</label>
            </div>

            <div class="radio">
              <input type="radio" class="infos__animal__edit__paragraph__radio" name="book_edit_castre" id="book_edit_castre" value="male">
              <label for="male">Mâle</label>
            </div>
          </div>
        </div>
        <div class="infos__animal__edit__paragraph" >
                <label for="book__edit__poids"class="infos__animal__edit__paragraph__label" >Poids</label> 
                <input class="infos__animal__edit__paragraph__input" type="number"name="book__edit__poids" id="book_edit_poids"></input> 
            </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_identification"class="infos__animal__edit__paragraph__label" >Identification</label> 
            <input type="text" name="book_edit_identification" id="book_edit_identification"></input> 
        </div>
        <div class="infos__animal__edit__paragraph">
            <label for="book_edit_castre" class="infos__animal__edit__paragraph__label">Castré/Stérile</label> 
            <div class="radios">

              <div class="radio">
                <input type="radio" class="infos__animal__edit__paragraph__radio" name="book_edit_castre" id="book_edit_castre" value="femelle">
                <label for="femelle">Oui</label>
              </div>

              <div class="radio">
                <input type="radio" class="infos__animal__edit__paragraph__radio" name="book_edit_castre" id="book_edit_castre" value="male">
                <label for="male">Non</label>
              </div>
            </div>
        </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_color"class="infos__animal__edit__paragraph__label">Couleur de la robe</label> 
            <input class="infos__animal__edit__paragraph__input" type="number"name="book_edit_color" id="book_edit_color"></input> 
        </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_signes"class="infos__animal__edit__paragraph__label" >Signes perticulières</label> 
            <textarea class="infos__animal__edit__paragraph__textarea" name="book_edit_signes" id="book_edit_signes"></textarea> 
        </div>
      </div>
      <!------------------------------------------------>
      <div class="book-edit__medical">
        <div class="infos__animal__edit__paragraph" >
                <label for="book_edit_antecedents"class="infos__animal__edit__paragraph__label" >Antécédents médicaux</label> 
                <input class="infos__animal__edit__paragraph__input" type="number"name="book_edit_antecedents" id="book_edit_antecedents"></input> 
            </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_medocs" class="infos__animal__edit__paragraph__label">Prise de médicaments</label> 
            <textarea class="infos__animal__edit__paragraph__textarea" name="book_edit_medocs" id="book_edit_medocs" rows="2"  cols="50"></textarea> 
        </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_last_traitement"class="infos__animal__edit__paragraph__label" >Dernier traitement anti-parasitaire</label> 
            <textarea class="infos__animal__edit__paragraph__textarea" name="book_edit_last_traitement" id="book_edit_last_traitement" rows="2"  cols="50"></textarea> 
        </div>
        <div class="infos__animal__edit__paragraph" >
                <label for="book_edit_last_vaccin"class="infos__animal__edit__paragraph__label" >Dernier vaccin</label> 
                <input class="infos__animal__edit__paragraph__input" type="date" name="book_edit_last_vaccin" id="book_edit_last_vaccin" value=''></input> 
            </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_info_veto"class="infos__animal__edit__paragraph__label" >Coordonnées du vétérinaire</label> 
            <textarea class="infos__animal__edit__paragraph__textarea" name="book_edit_info_veto" id="book_edit_info_veto"></textarea> 
        </div>
        <div class="infos__animal__edit__paragraph" >
            <label for="book_edit_rdv"class="infos__animal__edit__paragraph__label" >Prochain rendez-vous vétérinaire</label> 
            <input type="date" class="infos__animal__edit__paragraph__textarea" name="book_edit_rdv" id="book_edit_rdv"></textarea> 
        </div>
      </div>
    </form>
    <div class="validate">
      
        <a href="#"class="validate__button">Infos de l'animal</a>
  
        <a href="#" class="validate__button">Enregistrer</a>
      
        <a href="#" class="validate__button">Infos générales</a>
      
    </div>
  </section>
  </div>
</div>

<?php get_footer(); ?>

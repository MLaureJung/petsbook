<?php get_header(); ?>
<div class="top">
                <img src="images/logo-fond-transparent.png" alt="" class="top__background">
            </div>

    <div class="main-items">
      <form action="" methode="post" class="user-informations">
              <div class="user-informations__email">
                <label for=""> Email</label> 
                  <input type="text" class="user-informations__email__input">
              </div>

              <div class="user-informations__password">
                <label for="user-informations__password__input" name="user-informations__password__input">Mot de passe</label>  
                  <input type="text" class="user-informations__password__input">
              </div>
              
              <div class="user-informations__confirmPassword">
                <label for="user-informations__confirmPassword__input" name="user-informations__confirmPassword__input">Confirmation du mot de passe</label>  
                  <input type="text" class="user-informations__confirmPassword__input">
              </div>

              <div class="user-informations__cgu">
                  <input type="checkbox" class="user-informations__cgu__input"> J'accepte les règles d'utilisation du site 
              </div>

              <div class="user-informations__newsletter">
                  <input type="checkbox" class="user-informations__newsletter__input"> Je m'abonne à la Newsletter 
              </div>
              
              <div class="user-informations__signup">
                 <button class="user-informations__signup__submit">Je m'inscris</button>

              </div> 

            </form>
    </div>

<?php get_footer(); ?>

<?php get_header();?>
   <section class="top-info">
      <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="top-info__user__profile">
      <p class="top-info__user__ID-user">Prenom Nom</p> 
      <a href="#" class="top-info__user__edit-profile">Modifier ma photo de profil</a>
      <div class="add-animal">
        
    </div>
   </section>
   
    <div class="main-items">
    <div class="main-items__first">
      <div class="main-items__main-text">
        <div class="main-items__main-text__title">
          <h1>Dites quelque chose à propos de vous !</h1>
        </div>
        <section class="user-info">
              <textarea name="user-info-edit" value="description"id="user-info__edit__textaera" cols="60" rows="15"></textarea>
            <input type="submit" value="Enregistrer" class="user-info__submit">
            </section>
      </div>
    </div>
    </div>
    <?php get_footer();?>
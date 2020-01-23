<?php get_header(); ?>

<section class="top-info">
      <img src="https://source.unsplash.com/user/jayceexie/aH9Uskj8XTU/200x200" alt="" class="top-info__user__profile">
      <p class="top-info__user__ID-user">Prenom Nom</p> 
      <a href="#" class="top-info__user__edit-profile">Modifier ma photo de profil</a>
      <div class="add-animal">
        
    </div>
   </section>
   
    <div class="main-items">
      <div class="main-items__main-text">
        <div class="main-items__main-text__title">
          <h1>Dites quelque chose à propos de vous !</h1>
        </div>
        <section class="user-info">
        <label for="story"></label>

                <textarea id="story" name="story"
                          rows="10" cols="50">
                
                </textarea>
        <div class="submit">
        <input type="submit" value="enregistrer" class="submit__button">
        </div>
        </section>
      </div>
    </div>

<?php get_footer(); ?>

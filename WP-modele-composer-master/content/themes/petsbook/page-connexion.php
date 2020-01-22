<?php get_header(); ?>

<div class="main-items">
      <div class="connection">
        <img class="connection__logo" src="<?= get_theme_file_uri('public/images/logo-fond-transparent.png') ?>" alt="">
        <form class="form-connection" action="/ma-page-de-traitement" method="post" id="connexion">
          <div class="form-connection-fields">
            <div class="form-connection-fields__field">
                <label class="form-connection-fields__label" for="mail">Email</label>
                <input class="form-connection-fields__input" type="email" id="mail" name="user_mail">
            </div>
            <div class="form-connection-fields__field">
                <label class="form-connection-fields__label" for="user_password">Mot de passe</label>
                <input class="form-connection-fields__input" type="password" id="password" name="user_password">
            </div>
          </div>
          <div class="form-connection__link">
            <a class="form-connection__a" href="#">Mot de passe oublié</a>
          </div>
          
          <div>
            <button class="form-connection__button" type="submit" form="connexion" value="Submit">Je me connecte</button>
          </div>
        </form>
      </div>
    </div>

<?php get_footer(); ?>

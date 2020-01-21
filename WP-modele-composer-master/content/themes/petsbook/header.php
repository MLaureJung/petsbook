<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
  <!--HEADER-->
  <header class="header">

    <nav class="header-nav navbar navbar-expand-lg navbar-light">
      <a href="#"><img class="header-nav__items__left__logo navbar-brand" src="<?= get_theme_file_uri('public/images/logo-fond-transparent.png') ?>" alt=""></a>

      <div class="right-element">
        <a href="#" class="header-nav__items__right__part__link"><i class="fa fa-bell" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
      </div>

      <div class="collapse navbar-collapse header-nav" id="navbarNav">
        <div class="header-nav__items__left">
          <a class="nav-link header-nav__items__left__part__link" href="#">Accueil</a>
          <a class="nav-link header-nav__items__left__part__link" href="#">Mes animaux</a>
        </div>

        <div class="header-nav__items__right">
          <a href="#" class="nav-link  header-nav__items__right__part__link">Inscription</a>
          <a href="#" class="nav-link  header-nav__items__right__part__link">Connexion</a>
          <a href="#" class="nav-link  header-nav__items__right__part__link">Mon compte</a>
          <a href="#" class="nav-link  header-nav__items__right__part__link">Deconnexion</a>
        </div>
      </div>
    </nav>

  </header>
  <!--/HEADER-->

  <!--MAIN-->
  <main class="main">
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
    <nav class="header-nav">
      <div class="header-nav__items__left">
        <!--logo-->
       <a href="#"><img class="header-nav__items__left__logo" src="images/logo-fond-transparent.png" alt=""></a>
        <!--/logo-->

        <!--items_links left-->
        <div class="header-nav__items__left__part">
          <a href="" class="header-nav__items__left__part__link">Accueil</a>
        </div>
      </div>

      <!--items_links right-->
      <div class="header-nav__items__right">
        <ul class="header-nav__items__right__part is-hidden">
          <li><a href="" class="header-nav__items__right__part__link"><i class="fa fa-bell" aria-hidden="true"></i></a></li>
          <li><a href="" class="header-nav__items__right__part__link">Inscription</a></li>
          <li><a href="" class="header-nav__items__right__part__link">Connexion</a></li>
          <li><a href="" class="header-nav__items__right__part__link">Mon compte</a></li>
          <li><a href="" class="header-nav__items__right__part__link">Deconnexion</a></li>
        </ul>
        <!--burger-->
        <a href="#" class="ui-button open-menu header-nav__items__right__part is-hidden">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        <!--/burger-->
      </div>
      <!--/items_links-->
    </nav>
  </header>
  <!--/HEADER-->

  <!--MAIN-->
  <main class="main">
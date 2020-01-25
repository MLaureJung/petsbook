<?php get_header(); ?>
    <!--Carousel-->
    <?php get_template_part('template-parts/carousel-index'); ?>
    <!--
    <section class="main-slide">

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="15000">
            <!--A modifier
            <img class="carousel-item-bg" src="https://source.unsplash.com/user/detpho/nOlrlCUNvVg/1920x3000" class="d-block w-100" alt="...">

            <div class="carousel-item-content">

              <div class="carousel-item-content-part">
                <img class="carousel-item-content-part__illu" src="./projet-pets-book/WP-modele-composer-master/content/themes/petsbook/public/images/Illu-3.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item-content-part__description">
                  <h5 class="carousel-item-content-part__description__title">Qu'est-ce que Pets Book ?</h5>
                  <p class="carousel-item-content-part__description__text">Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolor laboriosam. Quibusdam saepe quidem quos nulla illum maxime magni dignissimos ut inventore. Architecto sit, esse distinctio autem facilis fugit cumque.</p>
                </div>
              </div>
          </div>
          
          <div class="carousel-item" data-interval="15000">
            <!--A modifier
            <img class="carousel-item-bg" src="https://source.unsplash.com/user/detpho/nOlrlCUNvVg/1920x3000" class="d-block w-100" alt="...">

            <div class="carousel-item-content">

              <div class="carousel-item-content-part">
                <img class="carousel-item-content-part__illu" src="images/Illu-1-2.png" class="d-block w-100" alt="...">
              </div>

            <div class="carousel-item-content-part__description">
                <h5 class="carousel-item-content-part__description__title">Des timelines uniques !</h5>
                <p class="carousel-item-content-part__description__text">Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolor laboriosam. Quibusdam saepe quidem quos nulla illum maxime magni dignissimos ut inventore. Architecto sit, esse distinctio autem facilis fugit cumque.</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" data-interval="15000">
            <!--A modifier
            <img class="carousel-item-bg" src="https://source.unsplash.com/user/detpho/nOlrlCUNvVg/1920x3000" class="d-block w-100" alt="...">

            <div class="carousel-item-content">

              <div class="carousel-item-content-part">
                <img class="carousel-item-content-part__illu" src="images/Illu-2.png" class="d-block w-100" alt="...">
              </div>

              <div class="carousel-item-content-part__description">
                  <h5 class="carousel-item-content-part__description__title">À toi de jouer</h5>
                  <p class="carousel-item-content-part__description__text">Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, dolor laboriosam. Quibusdam saepe quidem quos nulla illum maxime magni dignissimos ut inventore. Architecto sit, esse distinctio autem facilis fugit cumque.</p>
                </div>
              </div>
        </div>

        <!--Next/Previous
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!--/Next/Previous
      </div>

    </section>
    <!--/Carousel-->

    <div class="main-items">
      <!--Pet Icons-->
      <section class="main-pet-icons">
        <div class="main-pet-icons__icon">
          <a href="#" class="main-pet-icons__link">
            <img src="<?= get_theme_file_uri('public/images/Icone_chat.png') ?>" alt="" class="main-pet-icons__icon__img">
            <p class="main-pet-icons__icon__type">Chat</p>
          </a>
          
        </div>

        <div class="main-pet-icons__icon">
          <a href="#" class="main-pet-icons__link">
            <img src="<?= get_theme_file_uri('public/images/Icone_chien.png') ?>" alt="" class="main-pet-icons__icon__img">
            <p class="main-pet-icons__icon__type">Chien</p>
          </a>
        </div>

        <div class="main-pet-icons__icon">
          <a href="#" class="main-pet-icons__link">
            <img src="<?= get_theme_file_uri('public/images/Icone_oiseau.png') ?>" alt="" class="main-pet-icons__icon__img">
            <p class="main-pet-icons__icon__type">Oiseau</p>
          </a>
        </div>

        <div class="main-pet-icons__icon">
          <a href="#" class="main-pet-icons__link">
            <img src="<?= get_theme_file_uri('public/images/Icone_rodent.png') ?>" alt="" class="main-pet-icons__icon__img">
            <p class="main-pet-icons__icon__type">Rongeur</p>
          </a>
        </div>

        <div class="main-pet-icons__icon">
          <a href="?type=nac" class="main-pet-icons__link">
            <img src="<?= get_theme_file_uri('public/images/Icone_nac.png') ?>" alt="" class="main-pet-icons__icon__img">
            <p class="main-pet-icons__icon__type">NAC</p>
          </a>
        </div>

        <?php
          // Définition de la taxonomie ciblée
          $tax = 'animal-type';
          // Récupération de la liste des termes de la taxonomie 'animal-type' | 'hide_empty' => false, permet de visualiser tous les termes même s'ils ont un total de post de 0
          $terms = get_terms($tax,array('hide_empty' => false)); 
          //var_dump($terms);
        
          foreach($terms as $term):
          //var_dump($term->term_id);

          $args = [
            'post_type' => 'animal',
            'tax_query' => [
              [
                'taxonomy' => $tax,
                'terms' => [
                  $term->term_id,
                ]
              ]
            ]
          ];

          $petType_wpQuery = new WP_Query($args);

        ?>
        <?php 
          // On stocke dans une variable la récupération du champs 'term_thumbnail' crée via ACF dans le BO, on précise le terme
          $term_thumbnail = get_field('term_thumbnail', $term);

          var_dump(get_term_link($term, $tax));
        ?>
        <?php //if($petType_wpQuery->have_posts()) : while($petType_wpQuery->have_posts()) : $petType_wpQuery->the_post(); ?>
          <div class="main-pet-icons__icon">
            <a href="?type=nac" class="main-pet-icons__link">
              <img src="<?= $term_thumbnail['url']; ?>" alt="" class="main-pet-icons__icon__img">
              <p class="main-pet-icons__icon__type"><?= $term->name ?></p>
            </a>
          </div>
        <?php /*endwhile; endif;*/ endforeach;?>

      </section>
      <!--/Pet Icons-->

      <!--Timelines-->
      <section class="main-timelines">

        <div class="main-timelines__item">
          <img src="https://source.unsplash.com/user/jayceexie/bfhQkbnV61E/300x300" alt="" class="main-timelines__item__img">
          <h3 class="main-timelines__item__title">Lorem</h3>
          <p class="main-timelines__item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, illo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, officia. Dignissimos ab beatae quasi. Necessitatibus, deleniti fuga! Cum dolor ratione cupiditate minima aut perspiciatis quod molestias, voluptatem vitae reprehenderit distinctio!</p>
          <a href="" class="main-timelines__item__button">Voir</a>
        </div>

        <div class="main-timelines__item">
          <img src="https://source.unsplash.com/user/detpho/nOlrlCUNvVg/300x300" alt="" class="main-timelines__item__img">
          <h3 class="main-timelines__item__title">Lorem</h3>
          <p class="main-timelines__item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, possimus.</p>
          <a href="" class="main-timelines__item__button">Voir</a>
        </div>
        
        <div class="main-timelines__item">
          <img src="https://source.unsplash.com/user/jayceexie/bfhQkbnV61E/300x300" alt="" class="main-timelines__item__img">
          <h3 class="main-timelines__item__title">Lorem</h3>
          <p class="main-timelines__item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, illo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, officia. Dignissimos ab beatae quasi. Necessitatibus, deleniti fuga! Cum dolor ratione cupiditate minima aut perspiciatis quod molestias, voluptatem vitae reprehenderit distinctio!</p>
          <a href="" class="main-timelines__item__button">Voir</a>
        </div>

        <div class="main-timelines__item">
          <img src="https://source.unsplash.com/user/detpho/nOlrlCUNvVg/300x300" alt="" class="main-timelines__item__img">
          <h3 class="main-timelines__item__title">Lorem</h3>
          <p class="main-timelines__item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, possimus.</p>
          <a href="" class="main-timelines__item__button">Voir</a>
        </div>

        <div class="main-timelines__item">
          <img src="https://source.unsplash.com/user/jayceexie/bfhQkbnV61E/300x300" alt="" class="main-timelines__item__img">
          <h3 class="main-timelines__item__title">Lorem</h3>
          <p class="main-timelines__item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, possimus.</p>
          <a href="" class="main-timelines__item__button">Voir</a>
        </div>

        <div class="main-timelines__item">
          <img src="https://source.unsplash.com/user/detpho/nOlrlCUNvVg/300x300" alt="" class="main-timelines__item__img">
          <h3 class="main-timelines__item__title">Lorem</h3>
          <p class="main-timelines__item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde, possimus.</p>
          <a href="" class="main-timelines__item__button">Voir</a>
        </div>
      </section>
    </div>
<?php get_footer(); ?>

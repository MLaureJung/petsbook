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

        <?php
          // Définition de la taxonomie ciblée
          $tax = 'animal-type';
          // Récupération de la liste des termes de la taxonomie 'animal-type' | 'hide_empty' => false, permet de visualiser tous les termes même s'ils ont un total de post de 0
          $terms = get_terms($tax,array('hide_empty' => false)); 
          //var_dump($terms);
        
          foreach($terms as $term):
          //var_dump($term->term_id);

          // On stocke dans une variable la récupération du champs 'term_thumbnail' crée via ACF dans le BO, on précise le terme
          $term_thumbnail = get_field('term_thumbnail', $term);

          //var_dump(get_term_link($term, $tax));
        ?>
        
          <div class="main-pet-icons__icon">
            <a href="?type=<?= $term->term_id ?>" class="main-pet-icons__link">
              <img src="<?= $term_thumbnail['url']; ?>" alt="" class="main-pet-icons__icon__img">
              <p class="main-pet-icons__icon__type"><?= $term->name ?></p>
            </a>
          </div>
        <?php endforeach;?>

      </section>
      <!--/Pet Icons-->

      <!--Timelines-->
      <section class="main-timelines">

      <?php 

        // Si le '?type= rien' avec $_GET['type'] alors on montre tous les posts du CPT animal | on pourrait l'appeler 'toto' tant que le href du dessus a le même nom ça marche
        // Sinon on récupère l'id du animal-type et on restreint l'affichage selon l'id du type selectionné 
        if (empty($_GET['type'])) {
          $args = [
            'post_type' => 'animal',
            'post_per_page' => 6,
          ];
        }

        else {
          $args = [
            'post_type' => 'animal',
            'post_status' => 'publish',
            'post_per_page' => 6,
            'tax_query' => 
            [
              [
                'taxonomy' => $tax,
                'terms' => $_GET['type'],
              ]
            ]
          ];
        }
        
        $petType_wpQuery = new WP_Query($args);
      ?>

      <?php if($petType_wpQuery->have_posts()) : while($petType_wpQuery->have_posts()) : $petType_wpQuery->the_post(); ?>
        <?php get_template_part('template-parts/homepage/timeline-posts') ?>
      <?php endwhile; endif; wp_reset_query(); ?>

      </section>
    </div>
<?php get_footer(); ?>

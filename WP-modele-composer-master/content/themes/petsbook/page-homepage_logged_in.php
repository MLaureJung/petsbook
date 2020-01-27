<?php get_header(); ?>


<div class="main-items-l">
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
      <a href="#" class="main-pet-icons__link">
        <img src="<?= get_theme_file_uri('public/images/Icone_nac.png') ?>" alt="" class="main-pet-icons__icon__img">
        <p class="main-pet-icons__icon__type">NAC</p>
      </a>
    </div>

  </section>
  <!--/Pet Icons-->

<!--Public_Private-->
<!--LIEN QUI NE SERVENT PLUS
<section class="public-private">
  <div class="public-private__public">
    <a href="#" class="public-private__public__title">Chez les autres</a>
  </div>
  
  <div class="public-private__private">
    <a href="<?php echo site_url('/account_general/')?>" class="public-private__private__title">Chez moi</a>
  </div>
</section>-->
<!--/Public_Private-->

<!--Timelines-->

<section class="main-timelines">
  <!--
  <div class="main-timelines__item">
    <img src="https://source.unsplash.com/user/jayceexie/bfhQkbnV61E/300x300" alt="" class="main-timelines__item__img">
    <h3 class="main-timelines__item__title">Lorem</h3>
    <p class="main-timelines__item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, illo. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid, nisi? Soluta velit labore accusamus quasi, odio consequatur enim distinctio ex autem ipsam sed minus ea nemo. Itaque repellat maxime incidunt!</p>
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
    <p class="main-timelines__item__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, illo.</p>
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
  -->
  <?php 

// Si le '?type= rien' avec $_GET['type'] alors on montre tous les posts du CPT animal | on pourrait l'appeler 'toto' tant que le href du dessus a le même nom ça marche
// Sinon on récupère l'id du animal-type et on restreint l'affichage selon l'id du type selectionné 
if (empty($_GET['type'])) {
  $args = [
    'post_type' => 'animal',
    'posts_per_page' => 6,
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

<!--/Timelines-->
</div>
<?php get_footer(); ?>

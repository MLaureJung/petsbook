</main>
  <!--/MAIN-->
  
  <!--FOOTER-->
  <footer class="footer">
    <!--newsletter-->
    <div class="footer-wrapper">
      <form class="footer-newsletter">
        <div class="footer-newsletter-wrapper">
          <h5 class="footer-newsletter__title">S'inscrire à la newsletter</h5>
          <div class="footer-newsletter__fields">
            <input type="text" class="footer-newsletter__fields__field" placeholder="Email">
          </div>
            <button class="footer-newsletter__submit" type="submit">Envoyer</button>
        </div>
      </form>
      <!--/newsletter-->
      <div class="footer-archives">
       <ul class="footer-archives__list">   
         
          <!-- <li><a href="" class="footer-archives__list__link">Contact</a></li>
          <li><a href="" class="footer-archives__list__link">Equipe</a></li>
          <li><a href="" class="footer-archives__list__link">Accueil</a></li>
          <li><a href="" class="footer-archives__list__link">Mentions légales</a></li>-->
          <?php wp_nav_menu( 
                  array(
                  'theme_location' => 'footer-nav',
                  'container' => 'nav', 
                  'menu_class' => 'footer-archives__list',  
                  ) 
              );  ?>

        </ul>
      </div>

      
    </div>

    <div class="footer-copyrights">Copyright @2020</div> 
   
  </footer>
  <!--/FOOTER-->
</div>
  <script src="js/app.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
  
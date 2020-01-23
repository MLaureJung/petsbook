<?php get_header(); ?>
<section class="photos_profiles">

        <div class="human__profiles_elements">

                <div class='human__profiles'>
                <a href="#"><img class='human__profiles__image'
                src="https://source.unsplash.com/700x700/?faces" alt=""></a> 
                </div>
                <h4 class='human__profiles__name'>Prénom</h4>
        </div>

        <!--Pet profile-->
        <div class="animals__profiles">
        <div class="animals__profiles__all__wrapper">                  
                <a href="#">
                <img class='animals__profiles__all__wrapper__image'
                src="https://source.unsplash.com/700x700/?pets" alt="">   
                <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
                </a>               
        </div>

        <div class="animals__profiles__all__wrapper">  
                <a href="#" class='animals__profiles__all__wrapper__individual__link'>
                <img class='animals__profiles__all__wrapper__image'
                src="https://source.unsplash.com/700x700/?pets" alt=""/>   
                <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
                </a>
        </div>

        <div class="animals__profiles__all__wrapper">  
                <a href="#">
                <img class='animals__profiles__all__wrapper__image'
                src="https://source.unsplash.com/700x700/?pets" alt=""/>   
                <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
                </a>         
        </div>

        <div class="animals__profiles__all__wrapper">             
                <a href="#">
                <img class='animals__profiles__all__wrapper__image'
                src="https://source.unsplash.com/700x700/?pets" alt=""/>   
                <p class='animals__profiles__all__wrapper__name'>Animal 1</p>
                </a>       
        </div>

        <div class="animals__profiles__all__wrapper">  
                <a href="#"><!--
                <img class='animals__profiles__all__wrapper__image'
                src="https://source.unsplash.com/700x700/?pets" alt=""/>--> 
                <i class="fa fa-plus " aria-hidden="true"></i>
                </a>
        </div>

        </div>
        <!--/Pet profile-->

        </section>   

        <!--INFOS pet glimpse-->
        <div class="info-animal-wrapper"> 
        <section class="form__pet__infos">
        <h1 class="form__pet__infos__title">Titre</h1>
        <div class="form__pet__infos__edit infos-pet-edit">
                <div class="form__pet__infos__animal">
                        <h4 class="form__pet__infos__animal__title">Prénom</h4>
                        <p class="form__pet__infos__animal__user">Lorem impsum</p>
                </div>

                <div class="form__pet__infos__animal">
                        <h4 class="form__pet__infos__animal__title">Type</h4>
                        <p class="form__pet__infos__animal__user">Lorem impsum</p>
                </div>

                <div class="form__pet__infos__animal">
                        <h4 class="form__pet__infos__animal__title">Age</h4>
                        <p class="form__pet__infos__animal__user">Lorem impsum</p>
                </div>

                <div class="form__pet__infos__animal">
                        <h4 class="form__pet__infos__animal__title">Aime</h4>
                        <p class="form__pet__infos__animal__user">Lorem impsum</p>
                </div>

                <div class="form__pet__infos__animal">
                        <h4 class="form__pet__infos__animal__title">N'aime pas</h4>
                        <p class="form__pet__infos__animal__user">Lorem impsum</p>
                </div>

                <div class="form__pet__infos__animal">
                        <h4 class="form__pet__infos__animal__title">Description</h4>
                        <p class="form__pet__infos__animal__user">Lorem impsum</p>
                </div>
        </div>

        <div class="validate">    
                <a href="<?php echo site_url('/pet_book_glimpse/')?>"class="validate__button">Infos de l'animal</a>
                <input type="submit" class="validate__button" value="Enregistrer">
                <a href="<?php echo site_url('/account_general/')?>" class="validate__button">Infos générales</a>  
        </div>
        </div>
        </section>
</div>
<!--FORM pet infos glimpse-->
<?php get_footer(); ?>

<?php get_header();?>

<main class="page__contact">
    <?php $contact = get_field('contact');?>
<div class="contact">    
<!-------------------------------------- BANNER TOP -->
<div class="banner__top--top">
    <div class="banner__top">
        <div class="container__banner">
            <div class="content">
                <div class="titre__container">
                    <div class="trait"> - </div>
                        <h1 class="titre">Contact</h1>
                </div>
            </div>
        </div>
    <!----------------------------------------Bloc coordonnes-------->
    <div class="bloc__coordonnes--coordonnes">
        <div class="bloc__coordonnes">
            <div class="contact__container__icon__adress"><img class="contact__img__adress" src="<?php bloginfo('template_url'); ?>/assets/svg/marker-road.svg" alt=""><p class="contact__adress">Route de Hamoir, 87 – 4500 Huy </p></div> 
                <p class="contact__mail">  <img class="contact__img__mail" src="<?php bloginfo('template_url'); ?>/assets/svg/icon-arrobas.svg" alt=""><a class="contact__info" href="#">info@meubles-composition.be</a></p>
                <p class="contact__phone"> <img class="contact__img__phone" src="<?php bloginfo('template_url'); ?>/assets/svg/phone-2.svg" alt=""><a class="contact__tel" href="">+32 (0)85 21 52 38</a> </p>
            </div>
    <!--------------------------------------Bloc horaire-------->
    <div class="container__horaire">
        <div class="contact__bloc__heure">
            <p class="contact__icon">
            <img class="contact__img__time" src="<?php bloginfo('template_url'); ?>/assets/svg/time-clock.svg" alt=""></p>
                <div class="contact__bloc--icon">
                    <div class="contact__horaire">
                        <h5>Horaires</h5>
                            <ul>
                                <li>lundi > dimanche : (Fermé le mardi)</li>
                                <li>10h > 18h</li>
                            </ul>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
</div>

<!-------------------------------------- BANNER medium -->
    <div class="banner__medium">
        <div class="medium__itineraire--container">
            <a class="medium__content__text" href="#">Itinéraire
                <img class="medium__content__img" src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt="icon">
        </div>
        <div class="medium__map--container">
            <a class="medium__map" href="#">
            <!--  <img class="medium__map__img" src="<?php bloginfo('template_url'); ?>/assets/svg/icon-googlemap-marker.svg" alt="carte google map">  -->
            <div class="medium__carte--map"> <?php echo do_shortcode('[ultimate_maps id="1"]')?></div></a>
        </div>

    </div>

<!------------------------------------ BANNER Bottom -->
<div class="banner__bottom">
    <div class="banner__bottom__content">
        <div class="banner__bottom--text--container">
            <div class="titre--question">
                    Une question 
                    <br> 
                    Une demande d'offre ?
            </div> 
            <div class="sous-titre"> Formulaire de contact</div>
        </div>
    </div>
<div class="banner__bottom--form">
        
    <div class="formulaire--de--contact">

        <!----------     FORMULAIRE DE CONTACT   ------------>
<div class="container__formulaire__contact">
    <form action="/action_page.php">
        <div class="bloc__form">
            <label for="fname">Nom *</label>
            <input class="input_name" type="text" id="fname" name="firstname" placeholder="">

            <label for="emailAddress">votre Email *</label>
            <input class="input_mail" id="emailAddress" type="email" name="email" placeholder="">

            <label for="sujet"> Tél *</label>
            <input class="input_tel" type="text" id="sujet" name="sujet" placeholder="">

            <label for="subject">Message *</label>
            <textarea class="input_message" id="subject" name="subject" placeholder="" style="height:200px"></textarea>

            <p class="form__requis"> * champs requis</p>

            <input class="input_envoyer" type="submit" value="Envoyer">
            <img class="form__fleche" src="<?php bloginfo('template_url'); ?>/assets/svg/Group 1300.svg" alt="">
        </div>
    </form>
                    <!--   FIN DE FORMULAIRE DE CONTACT-->

</div>

            
        </div> 
    </div>
</div>
</div> 
<?php get_template_part("/template-parts/callback") ?>
</main>
<?php get_footer();?>

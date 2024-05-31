<!-- Front page - page qui affiche les produits au total -->
<?php
    /**
     * 
     * Template name: Pays template
     * 
     */
?>


<?php get_header(); ?>

    <div id="entete" class="global">
      <!-- Vague -->
      <?php get_template_part("gabarits/vague"); ?>
      <!-- Fin vague -->
      <header class="entete__header">
        <h1>Les plus beaux pays</h1>
        <h2><?php echo get_bloginfo("description") ?></h2>
        <!-- <h1>Thème du groupe #1 sem2 <b>(h1)</b></h1> -->
        <div class="block-texte">
          <h3>TIM - Collège de Maisonneuve</h3>
          <h4>Des voyages de plus en plus populaire après les évènements des années passées, 
            nous vous présentons ici les plus beaux pays touchés par le tourisme étant de 
            véritables perles rares! </h4>
        </div>
        <a href="https://gftnth00.mywhc.ca/tim23/conference/"><button class="lebouton">Inscription</button></a>
      </header>
    </div>

    <!-- //////////////////////// SECTION DU SHORT CODE ICI //////////////////////// -->

    <?php echo do_shortcode('[em_pays]');?>

    <!-- //////////////////////// SECTION ACCUEIL //////////////////////// -->
    <div id="accueil" class="global">
      <section>
        <h2><b>Vous avez un voyage en vue?</b></h2>
        <h2>Destinations populaires :</h2>
        <br>
          <div class="destinations">
        <?php

          if(have_posts()):
            while(have_posts()): the_post(); 
            // $titre = get_the_title();
            echo wp_trim_words(the_content(), 50); 
            ?>
            <?php
              $ma_carte = "carte";
              if(in_category('galerie')){
                $ma_carte = "galerie";
              }

              get_template_part("gabarits/categorie", $ma_carte); ?>


            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <br>
        <br />
        <h4>
          Les voyage vous sont offert par catégories selon vos préférences ou vos plans! 
          Vous avez des questions pour nous? Contactez-nous via le lien dans le bas
          de la page afin de parler avec un conseiller de voyage! Notre plateforme vous 
          offre des voyages selon leur popularité à chaque saison, restez à l'alerte pour nos
          prochaines offres!
          
        </h4>
      </section>
    </div>

<?php get_footer(); ?>
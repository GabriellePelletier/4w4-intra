<!-- Front page - page qui affiche les produits au total -->

<?php get_header(); ?>

    <div id="entete" class="global">
      <!-- Vague -->
      <?php get_template_part("gabarits/vague"); ?>
      <!-- Fin vague -->
      <header class="entete__header">
        <h1><?php echo get_bloginfo("name"); ?></h1>
        <h2><?php echo get_bloginfo("description") ?></h2>
        <!-- <h1>Thème du groupe #1 sem2 <b>(h1)</b></h1> -->
        <div class="block-texte">
          <h2><b>Auteure: Gabrielle Pelletier</b></h2>
            <br>
          <h3>TIM - Collège de Maisonneuve</h3>
          <h4>Bienvenue sur le suite de votre compagnie de voyage locale! Elle vous offre des 
            destinations de rêve autour du monde à découvrir! Au plaisir de vous revoir!</h4>
        </div>
        <button class="lebouton">Évènements</button>
      </header>
    </div>

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
        <br>
        <h4>Lien de la page github: <a href="https://github.com/GabriellePelletier/4w4-sem2/tree/tp1">
          https://github.com/GabriellePelletier/4w4-sem2/tree/labo3</a></h4>
        <br>
        <h2><b>Voyez nos catégories de destinations!</b></h2>
        <br>
        <div class="gerer-cat">
        <?php
         $categories = get_categories();
         
         foreach ($categories as $category) {
           ?>
           <div class="carte">
             <h2 class="title"><a href="<?php  ?>"><?php echo $category->name; ?></a></h2>
             <p><?php echo wp_trim_words(category_description( get_category_by_slug($category->slug)->term_id ), 10); ?></p>
            </div>
             
             <?php } ?>
        </div>
      </section>
    </div>

    <!-- //////////////////////// SECTION ÉVÈNEMENT //////////////////////// -->
    <div id="evenement" class="global">
      <section>
        <h2>Événement</h2>
        <br>
          <?php wp_nav_menu(array( "menu" => "NBPersonnes",'container' => 'div')); ?>
        <br>
        <h5>
          Article evident arrived express highest men did boy. Mistress sensible
          entirely am so. Quick can manor smart money hopes worth too. Comfort
          produce husband boy her had hearing. Law others theirs passed but
          wishes. You day real less till dear read. Considered use dispatched
          melancholy sympathize discretion led. Oh feel if up to till like. Voir
          le lien:
          <a href="https://www.randomtextgenerator.com/"
            >https://www.randomtextgenerator.com/</a
          >
          
        </h5>
        <br />
        <h6>
          Surprise steepest recurred landlord mr wandered amounted of.
          Continuing devonshire but considered its. Rose past oh shew roof is
          song neat. Do depend better praise do friend garden an wonder to.
          Intention age nay otherwise but breakfast. Around garden beyond to
          extent by. 
        </h6>
        <br>
        <img src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/leplanemodel.jpg" alt="logo" />
        <img src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/eclipseplane.jpg" alt="logo" />
        <img src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/tripleplane.jpg" alt="logo" />
          <br>
          <br>
        <?php // Appel du shortcode directement dans le fichier front-page.php
              echo do_shortcode('[em_destination]');?>
          <br>
      </section>
    </div>
    
    <!-- //////////////////////// SECTION GALERIE //////////////////////// -->
    <div id="galerie" class="global diagonal">
      <section>
        <h2>Galerie</h2>
        <br>
        <section>
          <h3>Les destinations par catégorie</h3>
          <article class="gerer-cat">
          <?php
            // $categories = get_categories();
            foreach ($categories as $elm_categories) {
              $nom = $elm_categories -> name;
              $description = wp_trim_words($elm_categories -> description, 10);
              $nombre_destinations = $elm_categories -> count;
            ?>
            <div class="carte">
              <?php the_post_thumbnail('thumbnail'); ?>
              <h3><?php echo $nom; ?></h3>
              <p><?php echo $description ?></p>
              <p>Nombre de destinations : <b><?php echo $nombre_destinations; ?></b></p>
              <a href="<?php echo get_permalink() ?>">Voir plus</a>
            </div>
            <?php } ?>
          </article>
        </section>
        <br>
        <h5 class="codeblock">
        The traveling agency is thrilled to announce that the destination they are 
        selling out is a hidden gem waiting to be explored. With pristine beaches, 
        vibrant culture, and delicious cuisine, this destination offers a unique and 
        unforgettable experience for travelers. From thrilling outdoor adventures to 
        relaxing beachside retreats, this destination has something for everyone. 
        Don't miss the chance to discover the beauty and charm of this incredible place 
        with the help of our expertly crafted travel packages.
      </h5>
      <br>
      <div class="les-leonardo">
        <img class="codeblock" src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/tropic.jpg" alt="">
        <img class="codeblock" src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/waterfall.jpg" alt="">
        <img class="codeblock" src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/batiment.jpg" alt="">
        <img class="codeblock" src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/caprio.jpg" alt="">
        <img class="codeblock" src="https://gftnth00.mywhc.ca/tim23/wp-content/uploads/2024/04/debene.jpg" alt="">
      </div>
      <br>
        <h6 class="codeblock">
          Surprise steepest recurred landlord mr wandered amounted of.
          Continuing devonshire but considered its. Rose past oh shew roof is
          song neat. Do depend better praise do friend garden an wonder to.
          Intention age nay otherwise but breakfast. Around garden beyond to
          extent by. Case read they must it of cold that. Speaking trifling an
          to unpacked moderate <b>debating</b> learning. An particular
          contrasted he excellence favourable on. Nay preference dispatched
          difficulty continuing joy one. Songs it be if ought hoped of. Too
          carriage attended him entrance desirous the saw. Twenty sister hearts
          garden limits put gay has. We hill lady will both sang room by.
          Desirous men exercise overcame procured speaking her followed.
          Preserved defective offending he daughters on or. Rejoiced prospect
          yet material servants out answered men admitted. Sportsmen certainty
          prevailed suspected am as. Add stairs admire all answer the nearer yet
          length. Advantages prosperous remarkably my inhabiting so reasonably
          be if. Too any appearance announcing <b>impossible</b> one. Out mrs
          means heart ham tears shall power every.
        </h6>
        <br />
        <br>
        <a href="https://www.youtube.com/watch?v=Cx2dkpBxst8&list=PLXDU_eVOJTx7QHLShNqIXL1Cgbxj7HlN4&index=1"><button class="lebouton">Voir plus</button></a>
      </section>
    </div>

<?php get_footer(); ?>
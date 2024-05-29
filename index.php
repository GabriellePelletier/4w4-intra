<!-- PhP de la page index (code général sur site Wordpress) -->

<?php get_header(); ?>

    <div id="entete" class="global">
      <!-- Vague -->
      <?php get_template_part("gabarits/vague"); ?>
      <!-- Fin vague -->
      <header class="entete__header">
        <h1>Le petit voyage <b>| Catégorie</b></h1>
        <div class="block-texte">
          <h2><b>Auteure: Gabrielle Pelletier</b></h2>
            <br>
          <h3>TIM - Collège de Maisonneuve</h3>
          <h5>Bienvenue sur le suite de votre compagnie de voyage locale! Elle vous offre des destinations de rêve autour du monde à découvrir! Au plaisir de vous revoir!</h5>
        </div>
        <button class="lebouton">Évènements</button>
      </header>
    </div>
    <div id="accueil" class="global">
      <section>
        <h2>Évènements de voyage</h2>
          <div class="destinations">
        <?php
          if(have_posts()):
            while(have_posts()): the_post(); 
            $titre = get_the_title();
 
            ?>
            <div class="carte">
              <h3><?php echo $titre; ?></h3>
              <p><?php echo (get_the_content()); ?></p>
              <p>Adresse : <?php the_field('adresse'); ?></p>
              <p>Adresse : <?php the_field('date'); ?></p>
            </div>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <br>
        <br />
        <h4>
          Their could can widen ten she any. As so we smart those money in. Am
          wrote up whole so tears sense oh. Absolute required of reserved in
          offering no. How sense found our those gay again taken the. Had mrs
          outweigh desirous sex overcame. Improved property reserved disposal do
          offering me.
        </h4>
        <br>
        <br>
      </section>
    </div>
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

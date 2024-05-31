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
  
    <?php get_footer(); ?>

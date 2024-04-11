<!-- PhP de la page index (code général sur site Wordpress) -->

<?php get_header(); ?>

<!-- Section dédié seulement pour la section d'erreur -->
    <div id="erreur" class="global">
      <!-- On garde tout de même le header, aucune autre section -->
      <header class="entete__header">

        <!-- On créer le conteneur du contenu de l'erreur (gauche) -->
        <section class="conteneur-erreur">
          <!-- Puis on affiche le contenu de l'erreur et des propositions à l'utilisateur. -->
          <div class="contenu-erreur">
            <h1>Erreur 404</h1>
            <br>
            <h3>Vous essayez d'accéder à une page qui n'existe pas.</h3>
            <br>
            <h3>Pour revenir à la page d'accueil, cliquez sur le lien suivant : </h3>
            <br>
            <br>
            <!-- <h3>Retournez ici au menu principal: </h3> -->
            <!-- Le bouton a le même style que celui dans le header et dans la galerie. -->

            <button class="lebouton">
              <h3><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo('name') ?></a></h3>
            </button>
            <br>
            <?php echo get_search_form(); ?>
            <br>
            <br>
            <br>
            <br>
            <!-- Fonction rapide pour montrer les catégories de wordpress avec lien. -->
            <div class="montre-categ"><?php  wp_list_categories() ?></div>
          </div>
          <!-- On affiche le logo comme image à droite. -->
            <?php echo get_custom_logo(); ?>
      </section>
      </header>
    </div>

    <?php get_footer(); ?>

<!-- PhP de la page index (code général sur site Wordpress) -->

<?php get_header(); ?>

    <div id="erreur" class="global">
      <header class="entete__header">
        <section class="conteneur-erreur">
          <div class="contenu-erreur">
            <h1>Erreur 404</h1>
            <br>
            <h3>Vous essayez d'accéder à une page qui n'existe pas.</h3>
            <br>
            <h3>Pour revenir à la page d'accueil, cliquez sur le lien suivant : </h3>
            <br>
            <br>
            <!-- <h3>Retournez ici au menu principal: </h3> -->
            <button class="lebouton">
              <h3><a href="<?php echo get_bloginfo('url') ?>"><?php echo get_bloginfo('name') ?></a></h3>
            </button>
            <br>
            <?php echo get_search_form(); ?>
            <br>
            <br>
            <br>
            <br>
            <div class="montre-categ"><?php  wp_list_categories() ?></div>
          </div>
            <?php echo get_custom_logo(); ?>
      </section>
      </header>
    </div>

    <?php get_footer(); ?>

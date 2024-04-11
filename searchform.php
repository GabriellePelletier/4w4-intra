<?php
/* Formulaire de recherche personnalisée */
?>
<div class="la_barre">
    <form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input class="recherche__input" type="search" class="search-field" placeholder="Recherche..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherche__bouton" type="submit" class="search-submit">
        <span class="recherche__icone">&#x1F50D;</span>
      </button>

</div>
</form>
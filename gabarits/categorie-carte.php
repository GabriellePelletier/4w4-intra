<?php
    /**
     *  Template part ou gabarit pour créer une carte
     * 
     * 
     */
?>

<div class="carte">
              <h3><?php the_title(); ?></h3>
              <?php get_the_category(); ?>
              <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
              <?php the_category() ?>
              <a href="<?php echo get_permalink(); ?>">Suite</a>
            </div>
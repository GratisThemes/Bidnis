<?php
/**
 * Template for displaying content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php bidnis_the_title(); ?>
    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php
  if ( '' !== get_the_post_thumbnail() && (
    ( is_singular() && get_theme_mod( 'thumbnail_content', true ) ) ||
    ( ! is_singular() && get_theme_mod( 'thumbnail_index', true ) )
  ) ) :
    ?>
    <a class="post-thumbnail" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'bidnis-featured-image' ); ?>
    </a><!-- .post-thumbnail -->
  <?php endif; ?>

  <section class="entry-content">
    <?php the_excerpt(); ?>
  </section><!-- .entry-content -->

</article>

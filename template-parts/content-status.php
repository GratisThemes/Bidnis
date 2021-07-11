<?php
/**
 * Template for displaying status content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php
    if ( is_single() ) {
      the_title( '<h1 class="entry-title">', '</h1>' );
    }
    ?>

    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php
  if ( is_single() ) {
    bidnis_the_post_thumbnail();
  }
  ?>

  <section class="entry-content">
    <?php the_content(); ?>

    <?php
    if ( is_single() ) {
      bidnis_wp_link_pages();
    }
    ?>
  </section><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    get_template_part( 'template-parts/footer', 'entry' );
  }
  ?>
</article>

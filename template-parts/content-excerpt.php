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
    <?php the_title( '<h3 class="entry-titl "><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' ); ?>
    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php bidnis_the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php the_excerpt(); ?>
  </section><!-- .entry-content -->

</article>

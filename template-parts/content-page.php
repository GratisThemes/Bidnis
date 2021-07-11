<?php
/**
 * Template for displaying post header, content and footer
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="page-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php bidnis_the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php the_content(); ?>
    <?php bidnis_wp_link_pages(); ?>
  </section><!-- .entry-content -->
</article>

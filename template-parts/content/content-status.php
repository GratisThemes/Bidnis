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
    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <section class="entry-content">
    <?php the_content(); ?>
  </section><!-- .entry-content -->

</article>

<?php
/**
 * Template for displaying entry footers
 *
 * @package Bidnis
 * @since   Bidnis 1.2
 */

?>
<footer class="entry-footer">

  <?php if ( has_tag() && get_theme_mod( 'entry_meta_tags', true ) ) : ?>
    <span class="entry-meta-tags">
      <?php the_tags( '', ', ' ); ?>
    </span><!-- .entry-meta-tags -->
  <?php endif; ?>

  <?php get_template_part( 'template-parts/author-bio' ); ?>

  <?php
  the_post_navigation(
    array(
      'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post', 'bidnis' ) . '</span><span>' . __( 'Previous', 'bidnis' ) . '</span><span>%title</span>',
      'next_text' => '<span class="screen-reader-text">' . __( 'Next post', 'bidnis' ) . '</span><span>' . __( 'Next', 'bidnis' ) . '</span><span>%title</span>',
    )
  );
  ?>
</footer><!-- .entry-footer -->

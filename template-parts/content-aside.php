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
    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <section class="entry-content">

    <?php the_content(); ?>

    <?php
    if ( is_single() ) {
      wp_link_pages(
        array(
          'before'      => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
          'after'       => '</div>',
          'link_before' => '<span class="page-number">',
          'link_after'  => '</span>',
        )
      );
    }
    ?>

  </section><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    get_template_part( 'template-parts/footer', 'entry' );
  }
  ?>

</article>

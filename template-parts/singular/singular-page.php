<?php
/**
 * Template for displaying page content
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

    <?php
    wp_link_pages(
      array(
        'before'      => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
        'after'       => '</div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
      )
    );
    ?>
  </section><!-- .entry-content -->

</article>

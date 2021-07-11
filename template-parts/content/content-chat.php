<?php
/**
 * Template for displaying chat content
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
    } else {
      the_title( '<h3 class="entry-titl "><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
    }
    ?>

    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php bidnis_the_post_thumbnail(); ?>

  <section class="entry-content">
    <?php the_content(); ?>

    <?php
    if ( is_single() ) {
      bidnis_wp_link_pages();
    }
    ?>
  </section><!-- .entry-content -->

  <?php if ( is_single() ) : ?>
    <?php if ( has_tag() && get_theme_mod( 'entry_meta_tags', true ) ) : ?>
      <?php the_tags( '<div class="entry-tags">', '', '</div><!-- .entry-tags -->' ); ?>
    <?php endif; ?>

    <?php get_template_part( 'template-parts/author-bio' ); ?>

    <?php bidnis_the_post_navigation(); ?>
  <?php endif; ?>

</article>

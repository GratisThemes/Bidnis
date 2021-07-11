<?php
/**
 * Template for displaying video content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( is_single() ) : ?>
    <header class="entry-header">
      <?php bidnis_the_title(); ?>
      <?php bidnis_entry_meta(); ?>
      <?php bidnis_edit_post_link(); ?>
    </header>
  <?php elseif ( is_admin() ) : ?>
    <header class="entry-header">
      <?php bidnis_edit_post_link(); ?>
    </header>
  <?php endif; ?>

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
    <?php
    $bidnis_anchor_content = apply_filters( 'the_content', get_the_content() );
    $bidnis_anchor         = null;

    // Only get video from the content if a playlist isn't present.
    $anchor = get_media_embedded_in_content( $bidnis_anchor_content, array( 'a' ) );

    if ( ! empty( $bidnis_anchor ) ) {
      foreach ( $bidnis_anchor as $bidnis_anchor_html ) {
        echo $bidnis_anchor_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    } else {
      the_content();

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

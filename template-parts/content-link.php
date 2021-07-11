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
  if ( is_single() ) {
    bidnis_the_post_thumbnail();
  }
  ?>

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

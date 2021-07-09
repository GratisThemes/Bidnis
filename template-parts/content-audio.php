<?php
/**
 * Template for displaying audio content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php get_template_part( 'template-parts/header', 'entry' ); ?>

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
    $bidnis_audio_content = apply_filters( 'the_content', get_the_content() );
    $bidnis_audio         = null;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $bidnis_audio_content, 'wp-playlist-script' ) ) {
      $bidnis_audio = get_media_embedded_in_content( $bidnis_audio_content, array( 'audio' ) );
    }

    if ( ! is_single() && ! empty( $bidnis_audio ) ) {
      foreach ( $bidnis_audio as $bidnis_audio_html ) {
        echo $bidnis_audio_html;  // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
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

<?php
/**
 * Template for displaying video content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
    <?php bidnis_entry_meta(); ?>
    <?php edit_post_link(); ?>
  </header>

  <section class="entry-content">
    <?php
    $bidnis_video_content = apply_filters( 'the_content', get_the_content() );
    $bidnis_video         = null;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $bidnis_video_content, 'wp-playlist-script' ) ) {
      $bidnis_video = get_media_embedded_in_content( $bidnis_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }

    if ( ! empty( $bidnis_video ) ) {
      foreach ( $bidnis_video as $bidnis_video_html ) {
        echo $bidnis_video_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }
    ?>
  </section><!-- .entry-content -->

</article>

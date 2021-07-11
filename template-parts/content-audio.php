<?php
/**
 * Template for displaying audio content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php bidnis_the_title(); ?>
    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php bidnis_the_post_thumbnail(); ?>

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

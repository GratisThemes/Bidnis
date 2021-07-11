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
    <?php bidnis_the_title(); ?>
    <?php bidnis_entry_meta(); ?>
    <?php bidnis_edit_post_link(); ?>
  </header>

  <?php bidnis_the_post_thumbnail(); ?>

  <section class="entry-content">

    <?php
    $bidnis_video_content = apply_filters( 'the_content', get_the_content() );
    $bidnis_video         = null;

    // Only get video from the content if a playlist isn't present.
    if ( false === strpos( $bidnis_video_content, 'wp-playlist-script' ) ) {
      $bidnis_video = get_media_embedded_in_content( $bidnis_video_content, array( 'video', 'object', 'embed', 'iframe' ) );
    }

    if ( ! is_single() && ! empty( $bidnis_video ) ) {
      foreach ( $bidnis_video as $bidnis_video_html ) {
        echo $bidnis_video_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
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

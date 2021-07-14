<?php
/**
 * Filters for escerpt_more().
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Adds custom "Read more" element
 *
 * @param string $more_string Read more string.
 * 
 * @return string
 */
function bidnis_excerpt_more( $more_string ) {
  if ( is_admin() ) {
    return $more_string;
  }

  if ( ! get_theme_mod( 'read_more', true ) ) {
    return '...';
  }

  return sprintf(
    '...<a class="read-more-link button" href="%1$s">%2$s<span class="screen-reader-text">%2$s</span></a>',
    esc_url( get_permalink( get_the_ID() ) ),
    esc_html__( 'Read more', 'bidnis' )
  );
}
add_filter( 'excerpt_more', 'bidnis_excerpt_more' );

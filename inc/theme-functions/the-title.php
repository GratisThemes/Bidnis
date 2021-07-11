<?php
/**
 * The title
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * The title
 */
function bidnis_the_title() {
  if ( is_singular() ) {
    printf(
      '<h1>%s</h1>',
      '' === get_the_title() ? esc_html__( 'Untitled post', 'bidnis' ) : esc_html( get_the_title() )
    );
  } else {
    printf(
      '<h3><a href="%2$s">%1$s</a></h3>',
      '' === get_the_title() ? esc_html__( 'Untitled post', 'bidnis' ) : esc_html( get_the_title() ),
      esc_url( get_permalink() )
    );
  }
}

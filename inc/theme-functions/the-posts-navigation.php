<?php
/**
 * Posts navigation
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Custom function for showing navigation on the bottom of archive pages
 */
function bidnis_the_posts_navigation() {
  if ( get_theme_mod( 'page_numbers', false ) ) {
    the_posts_pagination(
      array(
        'prev_text' => __( 'Previous page', 'bidnis' ),
        'next_text' => __( 'Next page', 'bidnis' ),
      )
    );
  } else {
    the_posts_navigation(
      array(
        'prev_text' => __( 'Older', 'bidnis' ),
        'next_text' => __( 'Newer', 'bidnis' ),
      )
    );
  }
}

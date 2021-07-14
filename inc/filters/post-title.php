<?php
/**
 * Adds a title to posts and pages that are missing one.
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Add title for untitled posts
 *
 * @param string $title The title of the post or page.
 * 
 * @return string
 **/
function bidnis_the_title( $title ) {
  return '' === $title ? esc_html_x( 'Untitled post', 'Added to posts and pages that have missing titles', 'bidnis' ) : $title;
}
add_filter( 'the_title', 'bidnis_the_title' );

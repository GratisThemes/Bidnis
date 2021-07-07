<?php
/**
 * Filters for body_class().
 *
 * @package Bidnis
 * @since   Bidnis 2.0.0
 */

/**
 * Add classes to the body depending on customize settings.
 *
 * @param Array $classes [Body class names].
 * @return Array $classes [Body class names].
 */
function bidnis_body_class( $classes ) {

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'sidebar-right-widget-area' ) ) {
    $classes[] = 'has-right-sidebar';
  }

  if ( ( is_home() || is_archive() || is_search() || is_singular() ) && is_active_sidebar( 'sidebar-left-widget-area' ) ) {
    $classes[] = 'has-left-sidebar';
  }

  return $classes;

}
add_filter( 'body_class', 'bidnis_body_class' );

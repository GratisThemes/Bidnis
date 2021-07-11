<?php
/**
 * Page links
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Wrapper function for wp_link_pages to make it reusable
 */
function bidnis_wp_link_pages() {
  wp_link_pages(
    array(
      'before'      => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
      'after'       => '</div>',
      'link_before' => '<span class="page-number">',
      'link_after'  => '</span>',
    )
  );
}

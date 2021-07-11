<?php
/**
 * Post navigation
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Wrapper function for showing navigation on the bottom of posts to make it reusable
 */
function bidnis_the_post_navigation() {
  the_post_navigation(
    array(
      'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post', 'bidnis' ) . '</span><span>' . __( 'Previous', 'bidnis' ) . '</span><span>%title</span>',
      'next_text' => '<span class="screen-reader-text">' . __( 'Next post', 'bidnis' ) . '</span><span>' . __( 'Next', 'bidnis' ) . '</span><span>%title</span>',
    )
  );
}

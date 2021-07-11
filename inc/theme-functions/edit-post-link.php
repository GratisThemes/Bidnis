<?php
/**
 * Edit post link
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Edit post link
 */
function bidnis_edit_post_link() {
  edit_post_link(
    sprintf(
      '<i class="fa fa-pen"></i>%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
      __( 'Edit', 'bidnis' ),
      get_the_title()
    )
  );
}

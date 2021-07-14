<?php
/**
 * Edit post link
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Edit post link
 *
 * @param string $link    Anchor tag for the edit link.
 * @param int    $post_id Post ID.
 * @param string $text    Anchor text.
 **/
function bidnis_edit_post_link( $link, $post_id, $text ) {
  if ( is_admin() ) {
    return $link;
  }

  $edit_url = get_edit_post_link( $post_id );

  if ( ! $edit_url ) {
    return;
  }

  $text = sprintf(
    '<i class="fa fa-pen"></i>%1$s<span class="screen-reader-text">%2$s</span>',
    __( 'Edit', 'bidnis' ),
    get_the_title()
  );

  return '<a class="post-edit-link" href="' . esc_url( $edit_url ) . '">' . $text . '</a>';
}
add_filter( 'edit_post_link', 'bidnis_edit_post_link', 10, 3 );

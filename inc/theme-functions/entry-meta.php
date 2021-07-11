<?php
/**
 * Entry meta
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Entry meta
 */
function bidnis_entry_meta() {

  $parent_id   = wp_get_post_parent_id( get_the_ID() );
  $post_type   = get_post_type();
  $post_format = get_post_format();

  echo '<div class="entry-meta">';

  if ( ! is_single() && ( 'aside' === $post_format || 'status' === $post_format ) ) {

    printf(
      /* translators: %1$s: Author, %2$s: Publish date */
      '<span class="entry-meta__author-and-date">' . esc_html__( '%1$s @ %2$s', 'bidnis' ) . '</span>',
      '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>',
      '<a href="' . esc_url( get_permalink() ) . '">' . get_the_date() . '</a>'
    );

  } else {

    if ( get_theme_mod( 'entry_meta_author', true ) ) {
      printf(
        '<span class="entry-meta__author"><i class="far fa-user"></i><a href="%2$s">%1$s</a></span>',
        get_the_author(),
        esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
      );
    }

    if ( get_theme_mod( 'entry_meta_date', true ) ) {
      printf(
        '<span class="entry-meta__date"><i class="far fa-calendar-alt"></i><a href="%1$s">%2$s</a></span>',
        esc_url( get_permalink() ),
        get_the_date()
      );
    }

    $comment_count = get_comments_number();
    if ( $comment_count && comments_open() && get_theme_mod( 'entry_meta_comments', true ) ) {
      printf(
        '<span class="entry-meta__comments"><i class="far fa-comment"></i><a href="%2$s#comments">%1$s</a></span>',
        esc_html( $comment_count ),
        esc_url( get_permalink() )
      );
    }

    if ( wp_attachment_is_image() ) {
      $metadata = wp_get_attachment_metadata();

      printf(
        '<span class="entry-meta__image-size"><i class="fa fa-camera"></i>%1$sx%2$s</span>',
        absint( $metadata['width'] ),
        absint( $metadata['height'] )
      );
    }

    if ( has_category() && get_theme_mod( 'entry_meta_categories', true ) ) {
      printf(
        '<span class="entry-meta__categories"><i class="far fa-folder"></i>%s</span>',
        get_the_category_list( ', ' ) // phpcs:ignore WordPress.Security.EscapeOutput
      );
    }
  }

  echo '</div><!-- .entry-meta -->';
}

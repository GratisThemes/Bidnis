<?php
/**
 * Template for displaying comments
 *
 * @package Bidnis
 * @since   Bidnis 1.0.0
 */

?>

<?php
if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="comments-area">

  <h3 class="comments-title">

    <?php
    $bidnis_comments_number = get_comments_number();

    printf(
      /* translators: %1$s: Comment count, %2$s: Article title. */
      esc_html( _nx( '%1$s throught on "%2$s"', '%1$s throughts on "%2$s"', $bidnis_comments_number, 'comments title', 'reginald' ) ),
      esc_html( number_format_i18n( $bidnis_comments_number ) ),
      esc_html( get_the_title() )
    );
    ?>

  </h3><!-- #comments-title -->

  <ol class="comment-list">
    <?php
    wp_list_comments(
      array(
        'style'       => 'ol',
        'short_ping'  => true,
        'avatar_size' => 42,
      )
    );
    ?>
  </ol><!-- .comment-list -->

  <?php
  the_comments_navigation(
    array(
      'prev_text' => __( 'Older comments', 'bidnis' ) . '<span class="screen-reader-text">' . __( 'Older comments', 'bidnis' ) . '</span>',
      'next_text' => __( 'Newer comments', 'bidnis' ) . '<span class="screen-reader-text">' . __( 'Newer comments', 'bidnis' ) . '</span>',
    )
  );
  ?>

  <?php
  comment_form(
    array(
      'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
      'title_reply_after'  => '</h2>',
    )
  );
  ?>

</div><!-- #comments .comments-area -->

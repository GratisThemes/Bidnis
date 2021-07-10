<?php
/**
 * Template for displaying the author's information below posts
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

// Quit early if there is no information about the author to be displayed.
if ( ! (bool) get_the_author_meta( 'description' ) || ! post_type_supports( get_post_type(), 'author' ) || ! get_theme_mod( 'author_bio', true ) ) {
  return;
}
?>
<div class="author-bio">

  <?php echo get_avatar( get_the_author_meta( 'ID' ), '128' ); ?>

  <?php
  printf(
    '<h6 class="author-bio__title">%s</h6>',
    sprintf(
      '<a href="%1$s">%2$s</a>',
      esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
      get_the_author()
    )
  );
  ?>

  <p class="author-bio__description"><?php the_author_meta( 'description' ); ?></p>

</div><!-- .author-bio -->

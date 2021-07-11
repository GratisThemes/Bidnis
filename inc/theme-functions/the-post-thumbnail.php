<?php
/**
 * The post thumbnail
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Custom the post thumbnail wrapper function
 */
function bidnis_the_post_thumbnail() {

  if (
    '' === get_the_post_thumbnail() ||
    ( is_singular() && ! get_theme_mod( 'thumbnail_content', true ) ) ||
    ( ! is_singular() && ! get_theme_mod( 'thumbnail_index', true ) )
  ) {
    return;
  }
  ?>

  <?php if ( is_singular() ) : ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail( 'bidnis-featured-image' ); ?>
    </div><!-- .post-thumbnail -->
  <?php else : ?>
    <a class="post-thumbnail" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'bidnis-featured-image' ); ?>
    </a><!-- .post-thumbnail -->
  <?php endif; ?>

  <?php
}

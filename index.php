<?php
/**
 * Template for displaying landing page (home)
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

$archive_title       = '';
$archive_description = '';

if ( is_search() ) {
  $archive_title = sprintf(
    /* translators: %s: search term */
    __( 'Search results for: "%s"', 'bidnis' ),
    '<span>' . get_search_query() . '</span>'
  );

} elseif ( is_archive() && ! have_posts() ) {
  $archive_title = __( 'Nothing Found', 'bidnis' );

} elseif ( ! is_home() ) {
  $archive_title       = get_the_archive_title();
  $archive_description = get_the_archive_description();
}
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/hero' ); ?>

<?php get_sidebar( 'above' ); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php if ( $archive_title || $archive_description ) : ?>
      <header class="page-header">
        <?php if ( $archive_title ) : ?>
          <h1><?php echo wp_kses_post( $archive_title ); ?></h1>
        <?php endif; ?>

        <?php if ( $archive_description ) : ?>
          <?php echo wp_kses_post( wpautop( $archive_description ) ); ?>
        <?php endif; ?>
      </header>
    <?php endif; ?>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();

        $bidnis_post_format = get_post_format();
        $bidnis_post_type   = get_post_type();

        if ( ( is_home() || is_front_page() || is_category() ) && $bidnis_post_format ) {
          get_template_part( 'template-parts/content', $bidnis_post_format );
        } elseif ( is_search() || ! get_theme_mod( 'display_content', false ) ) {
          get_template_part( 'template-parts/content', 'excerpt' );
        } else {
          get_template_part( 'template-parts/content', $bidnis_post_type );
        }
      }

      bidnis_the_posts_navigation();
    } else {
      get_template_part( 'template-parts/content', 'none' );
    }
    ?>

  </section><!-- .contant-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

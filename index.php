<?php
/**
 * Template for displaying landing page (home)
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

$bidnis_archive_title       = '';
$bidnis_archive_description = '';

if ( is_search() ) {
  $bidnis_archive_title = sprintf(
    /* translators: %s: search term */
    __( 'Search results for: "%s"', 'bidnis' ),
    '<span>' . get_search_query() . '</span>'
  );

} elseif ( is_archive() && ! have_posts() ) {
  $bidnis_archive_title = __( 'Nothing Found', 'bidnis' );

} elseif ( ! is_home() ) {
  $bidnis_archive_title       = get_the_archive_title();
  $bidnis_archive_description = get_the_archive_description();
}
?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/hero' ); ?>

<?php get_sidebar( 'above' ); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php if ( $bidnis_archive_title || $bidnis_archive_description ) : ?>
      <header class="page-header">
        <?php if ( $bidnis_archive_title ) : ?>
          <h1><?php echo wp_kses_post( $bidnis_archive_title ); ?></h1>
        <?php endif; ?>

        <?php if ( $bidnis_archive_description ) : ?>
          <?php echo wp_kses_post( wpautop( $bidnis_archive_description ) ); ?>
        <?php endif; ?>
      </header>
    <?php endif; ?>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content/content', get_post_format() );
      }

      if ( get_theme_mod( 'page_numbers', false ) ) {
        the_posts_pagination(
          array(
            'prev_text' => '<i class="fa fa-long-arrow-alt-left"></i>' . __( 'Previous page', 'bidnis' ),
            'next_text' => __( 'Next page', 'bidnis' ) . '<i class="fa fa-long-arrow-alt-right"></i>',
          )
        );
      } else {
        the_posts_navigation(
          array(
            'prev_text' => '<i class="fa fa-long-arrow-alt-left"></i>' . __( 'Older', 'bidnis' ),
            'next_text' => __( 'Newer', 'bidnis' ) . '<i class="fa fa-long-arrow-alt-right"></i>',
          )
        );
      };
    } else {
      get_template_part( 'template-parts/content/content', 'none' );
    }
    ?>

  </section><!-- .contant-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

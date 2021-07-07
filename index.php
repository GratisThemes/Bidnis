<?php
/**
 * Template for displaying landing page (home)
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/header_image' ); ?>

<?php get_sidebar( 'above' ); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();

        $bidnis_post_format = get_post_format();

        if ( $bidnis_post_format || get_theme_mod( 'display_content', false ) ) {
          get_template_part( 'template-parts/content', $bidnis_post_format );
        } else {
          get_template_part( 'template-parts/content', 'excerpt' );
        }
      }

      if ( get_theme_mod( 'page_numbers', false ) ) {
        the_posts_pagination(
          array(
            'prev_text'          => __( 'Previous page', 'bidnis' ),
            'next_text'          => __( 'Next page', 'bidnis' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bidnis' ) . ' </span>',
          )
        );

      } else {
        the_posts_navigation(
          array(
            'prev_text' => __( 'Older', 'bidnis' ),
            'next_text' => __( 'Newer', 'bidnis' ),
          )
        );
      }
    } else {
      get_template_part( 'template-parts/content', 'none' );
    }
    ?>

  </section><!-- .contant-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

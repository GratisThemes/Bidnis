<?php
/**
 * Template for displaying search results
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <section class="content-container">

    <header class="page-header">
      <?php
      if ( have_posts() ) {
        printf(
          /* translators: %s: search term */
          '<h1>' . esc_html__( 'Search results for: %s', 'bidnis' ) . '</h1>',
          '<span>' . esc_html( get_search_query() ) . '</span>'
        );
      } else {
        printf(
          '<h1>' . esc_html__( 'Nothing found', 'bidnis' ) . '</h1>'
        );
      }
      ?>
    </header>

    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part( 'template-parts/content', 'excerpt' );
      }

      bidnis_the_posts_navigation();
    } else {
      get_template_part( 'template-parts/content', 'none' );
    }
    ?>
  </section>

</main><!-- #site-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

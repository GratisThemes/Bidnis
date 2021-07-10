<?php
/**
 * Template for displaying archives
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <header class="page-header">
      <?php the_archive_title( '<h1>', '</h1>' ); ?>
      <?php the_archive_description(); ?>
    </header>

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'excerpt' ); ?>
      <?php endwhile; ?>

      <?php bidnis_the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

  </section><!-- .content-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

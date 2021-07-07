<?php
/**
 * Template for displaying songle post content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */
?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php while ( have_posts() ): the_post(); ?>

      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

      <?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

    <?php endwhile; ?>

  </section><!-- .content-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>
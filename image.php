<?php
/**
 * Template for displaying Attachments
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>

<?php get_header(); ?>

<main id="site-main" role="main">

  <?php while ( have_posts() ) : ?>

    <?php the_post(); ?>

    <section class="content-container">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php bidnis_the_title(); ?>
          <?php bidnis_entry_meta(); ?>
          <?php bidnis_edit_post_link(); ?>
        </header>

        <section class="entry-content">

          <figure class="entry-attachment wp-block-image">

            <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

            <figcaption class="wp-caption-text"><?php the_excerpt(); ?></figcaption>

          </figure><!-- .entry-attackment -->

          <?php the_content(); ?>

          <?php bidnis_wp_link_pages(); ?>
          
        </section><!-- .entry-content -->

    </article>

    <footer class="entry-footer">

      <div class="nav-links image-navigation">

        <div class="nav-previous">
          <?php previous_image_link( false, __( 'Previous Image', 'bidnis' ) ); ?>
        </div>

        <div class="nav-next">
          <?php next_image_link( false, __( 'Next Image', 'bidnis' ) ); ?>
        </div>

      </div><!-- .nav-links -->

    </footer><!-- .entry-footer -->

    <?php
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
    ?>

  <?php endwhile; ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

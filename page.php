<?php
/**
 * Template for displaying Page content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>

<?php get_header(); ?>

<main class="site-main" role="main">

  <?php get_sidebar( 'left' ); ?>

  <section class="content-container">

    <?php while ( have_posts() ) : ?>

      <?php the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="page-header">

          <?php the_title( '<h1>', '</h1>' ); ?>

          <div class="entry-meta">
            <?php
            edit_post_link(
              sprintf(
                /* translators: %1$s: Edit, %2$s: Post title */
                '%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
                __( 'Edit', 'bidnis' ),
                get_the_title()
              )
            );
            ?>
          </div><!-- .entry-meta -->

        </header><!-- .page-header -->

        <?php if ( '' !== get_the_post_thumbnail() ) : ?>
          <a class="post-thumbnail" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'bidnis-featured-image' ); ?>
          </a><!-- .post-thumbnail -->
        <?php endif; ?>

        <div class="entry-content">
          <?php the_content(); ?>

          <?php
          wp_link_pages(
            array(
              'before'      => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
              'after'       => '</div>',
              'link_before' => '<span class="page-number">',
              'link_after'  => '</span>',
            )
          );
          ?>
        </div><!-- .entry-content -->

      </article>

      <?php
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
      ?>

    <?php endwhile; ?>

  </section><!-- .content-container -->

  <?php get_sidebar(); ?>

</main><!-- .site-main -->

<?php get_footer(); ?>

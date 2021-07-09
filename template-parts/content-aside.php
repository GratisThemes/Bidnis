<?php
/**
 * Template for displaying content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<artitle id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( is_single() ) : ?>

    <?php get_template_part( 'template-parts/header', 'entry' ); ?>

  <?php else : ?>

    <header class="entry-header">

      <div class="entry-meta">

        <?php
        printf(
          /* translators: %1$s: Author, %2$s: Publish date */
          '<span>' . esc_html__( '%1$s @ %2$s', 'bidnis' ) . '</span>',
          '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>',
          '<a href="' . esc_url( get_permalink() ) . '">' . get_the_date() . '</a>'
        );
        ?>

        <?php
        edit_post_link(
          sprintf(
            '%1$s<span class="screen-reader-text">%1$s "%2$s"</span>',
            __( 'Edit', 'bidnis' ),
            get_the_title()
          )
        );
        ?>

      </div><!-- .entry-meta -->

    </header><!-- .entry-header -->

  <?php endif; ?>  

  <section class="entry-content">

    <?php the_content(); ?>

    <?php
    if ( is_single() ) {
      wp_link_pages(
        array(
          'before'      => '<div class="page-links">' . __( 'Pages:', 'bidnis' ),
          'after'       => '</div>',
          'link_before' => '<span class="page-number">',
          'link_after'  => '</span>',
        )
      );
    }
    ?>

  </section><!-- .entry-content -->

  <?php
  if ( is_single() ) {
    get_template_part( 'template-parts/footer', 'entry' );
  }
  ?>

</artcile>

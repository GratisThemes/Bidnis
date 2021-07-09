<?php
/**
 * Template for displaying the site footer
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
    <?php get_sidebar( 'footer' ); ?>

    <footer id="site-footer">
      <div id="site-footer-inner" class="wrapper">
        <?php
        if ( has_nav_menu( 'footer' ) ) {
          wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'menu_id'        => 'footer-nav',
              'container'      => false,
              'depth'          => 1,
            )
          );
        }
        ?>

        <div id="site-footer-information">
          <?php
          $bidnis_site_title = get_bloginfo( 'name' );
          if ( '' !== $bidnis_site_title ) {
            printf(
              '<span>%1$s %2$s %3$s</span>',
              esc_html( $bidnis_site_title ),
              get_theme_mod( 'footer_copyright', true ) ? '&copy;' : '',
              get_theme_mod( 'footer_year', true ) ? gmdate( 'Y' ) : '' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            );
          }
          ?>

          <?php
          if ( get_theme_mod( 'footer_advert', true ) ) {
            $bidnis_theme_data = wp_get_theme();

            printf(
              /* translators: %s: Theme name */
              '<span>' . esc_html__( 'Theme: %s', 'bidnis' ) . '</span>',
              '<a href="' . esc_url( $bidnis_theme_data->get( 'ThemeURI' ) ) . '">' . esc_html( $bidnis_theme_data['Name'] ) . '</a>'
            );
          }
          ?>

          <?php
          if ( function_exists( 'the_privacy_policy_link' ) ) {
            the_privacy_policy_link();
          }
          ?>

        </div><!-- #site-footer-information -->

        <?php if ( get_theme_mod( 'scrolltotop', true ) ) : ?>
          <a href="#" id="scroll-to-top">
            <span class="screen-reader-text"><?php esc_html_e( 'Scroll to the top', 'bidnis' ); ?></span>
          </a>
        <?php endif; ?>

      </div><!-- #site-footer-inner -->
    </footer><!-- #site-footer -->

  </div><!-- .site-container -->

  <?php wp_footer(); ?>

</body>
</html>

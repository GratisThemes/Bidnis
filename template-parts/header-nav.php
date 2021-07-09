<?php
/**
 * Template for displaying the Site's main navigation
 *
 * @package Bidnis
 * @since   Bidnis 2.0.0
 */

?>
<?php if ( has_nav_menu( 'header' ) ) : ?>
  <nav class="header-nav-container">
    <input type="checkbox" id="header-nav-toggle" />

    <label for="header-nav-toggle" class="header-nav-toggle-label">
      <span></span>
      <span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'bidnis' ); ?></span>
    </label><!-- .header-nav-toggle-label -->

    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'header',
        'menu_class'     => 'header-nav',
        'container'      => false,
      )
    );
    ?>
  </nav>
<?php endif; ?>

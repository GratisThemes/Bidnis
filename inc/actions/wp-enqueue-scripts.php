<?php
/**
 * The wp_enqueue_scripts hook.
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Enqueue scripts, styles and fonts
 */
function bidnis_wp_enqueue_scripts() {

  $theme_version = wp_get_theme()->get( 'Version' );

  // Fonts from google.
  wp_enqueue_style(
    'bidnis-fonts',
    'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i',
    false,
    $theme_version
  );

  // Enqueue Font Awesome (icon set).
  wp_enqueue_style(
    'font-awesome',
    get_template_directory_uri() . '/assets/icons/fontawesome-free-5.15.3-web/css/all.min.css',
    false,
    '5.15.3'
  );

  // Theme stylesheet.
  wp_enqueue_style(
    'bidnis-style',
    get_stylesheet_uri(),
    false,
    $theme_version
  );

  // Theme JavaScript.
  wp_enqueue_script(
    'bidnis-script',
    get_template_directory_uri() . '/assets/js/functions.js',
    false,
    wp_get_theme()->get( 'Version' ),
    true
  );

  // Comment-reply script.
  if ( ! is_admin() && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

  // Custom styles.
  $options = array(
    '#' . get_background_color(),
    get_theme_mod( 'color_scheme', '#FFD200' ),
    get_theme_mod( 'text_color', '#191919' ),
    get_theme_mod( 'header-text-color', '#191919' ),
    get_theme_mod( 'link_color', '#191919' ),
  );

  $css = '
    :root {
      --background-color: %1$s; 
      --color-scheme: %2$s; 
      --text-color: %3$s;
      --header-text-color: %4$s;
      --anchor-color: %5$s;
    }
  ';

  wp_add_inline_style( 'bidnis-style', vsprintf( $css, $options ) );

}
add_action( 'wp_enqueue_scripts', 'bidnis_wp_enqueue_scripts' );

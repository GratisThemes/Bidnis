<?php
/**
 * Widget areas
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

/**
 * The widgets_init action
 */
function bidnis_widgets_init() {

  register_sidebar(
    array(
      'name'          => __( 'Above content', 'bidnis' ),
      'id'            => 'above-content-widget-area',
      'description'   => __( 'Widget area above the content', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Left sidebar', 'bidnis' ),
      'id'            => 'sidebar-left-widget-area',
      'description'   => __( 'Widget area at the left side of the content', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Right sidebar', 'bidnis' ),
      'id'            => 'sidebar-right-widget-area',
      'description'   => __( 'Widget area at the right side of the content', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer top', 'bidnis' ),
      'id'            => 'footer-top-widget-area',
      'description'   => __( 'Widget area on the top of the footer', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer column one', 'bidnis' ),
      'id'            => 'footer-one-widget-area',
      'description'   => __( 'Widget area in the footer, column to the far left', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer column two', 'bidnis' ),
      'id'            => 'footer-two-widget-area',
      'description'   => __( 'Widget area in the footer, column to the middle left', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer column three', 'bidnis' ),
      'id'            => 'footer-three-widget-area',
      'description'   => __( 'Widget area in the footer, column to the middle right', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name'          => __( 'Footer column four', 'bidnis' ),
      'id'            => 'footer-four-widget-area',
      'description'   => __( 'Widget area in the footer, column to the far right', 'bidnis' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    )
  );

}
add_action( 'widgets_init', 'bidnis_widgets_init' );

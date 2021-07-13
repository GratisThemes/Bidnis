<?php
/**
 * Template for displaying a widget area and additional content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

if ( is_active_sidebar( 'above-content-widget-area' ) ) : ?>

  <div class="widget-area widget-area-above-content" role="complementary">

    <?php dynamic_sidebar( 'above-content-widget-area' ); ?>

  </div><!-- .widget-area-above-content -->

<?php endif; ?>

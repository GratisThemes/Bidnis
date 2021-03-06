<?php
/**
 * Template for displaying a widget area and additional content
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

if ( is_active_sidebar( 'above-content-widget-area' ) ) : ?>

  <div id="above-content-widget-area" class="widget-area wrapper" role="complementary">

    <?php dynamic_sidebar( 'above-content-widget-area' ); ?>

  </div><!-- #above-content-widget-area -->

<?php endif; ?>

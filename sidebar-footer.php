<?php
/**
 * Template for displaying a widget area and additional content in the footer
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

if (
  ! is_active_sidebar( 'footer-top-widget-area' ) &&
  ! is_active_sidebar( 'footer-one-widget-area' ) &&
  ! is_active_sidebar( 'footer-two-widget-area' ) &&
  ! is_active_sidebar( 'footer-three-widget-area' ) &&
  ! is_active_sidebar( 'footer-four-widget-area' )
) {
  return;
}
?>

<?php if ( is_active_sidebar( 'footer-top-widget-area' ) ) : ?>
  <div class="widget-area widget-area-top-footer" role="complementary">
    <?php dynamic_sidebar( 'footer-top-widget-area' ); ?>
  </div><!-- .widget-area-top-footer -->
<?php endif; ?>

<?php
if (
  ! is_active_sidebar( 'footer-one-widget-area' ) &&
  ! is_active_sidebar( 'footer-two-widget-area' ) &&
  ! is_active_sidebar( 'footer-three-widget-area' ) &&
  ! is_active_sidebar( 'footer-four-widget-area' )
) {
  return;
}
?>

<div class="widget-areas widget-areas-footer" role="complementary">

  <?php if ( is_active_sidebar( 'footer-one-widget-area' ) ) : ?>
    <div class="widget-area widget-area-footer-one" role="complementary">
      <?php dynamic_sidebar( 'footer-one-widget-area' ); ?>
    </div><!-- .widget-area-footer-one -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-two-widget-area' ) ) : ?>
    <div class="widget-area widget-area-footer-two" role="complementary">
      <?php dynamic_sidebar( 'footer-two-widget-area' ); ?>
    </div><!-- .widget-area-footer-two -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-three-widget-area' ) ) : ?>
    <div class="widget-area widget-area-footer-three" role="complementary">
      <?php dynamic_sidebar( 'footer-three-widget-area' ); ?>
    </div><!-- .widget-area-footer-three -->
  <?php endif; ?>

  <?php if ( is_active_sidebar( 'footer-four-widget-area' ) ) : ?>
    <div class="widget-area widget-area-footer-four" role="complementary">
      <?php dynamic_sidebar( 'footer-four-widget-area' ); ?>
    </div><!-- .widget-area-footer-four -->
  <?php endif; ?>

</div><!-- #footer-widget-areas -->

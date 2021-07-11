<?php
/**
 * The template part for displaying the header image, text and call-to-action
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

if ( ! is_home() && ! is_front_page() ) {
  return;
}
?>

<div class="hero">
  <?php if ( has_header_image() ) : ?>
    <img src="<?php header_image(); ?>" 
      class="hero__image"
      width="<?php echo esc_attr( get_custom_header()->width ); ?>"
      height="<?php echo esc_attr( get_custom_header()->height ); ?>" 
      alt="<?php esc_attr_e( 'Header Image', 'bidnis' ); ?>" />
  <?php endif; ?>

  <?php
  if ( get_theme_mod( 'header_image_text' ) ||
    ( get_theme_mod( 'header_image_cta_text' ) && get_theme_mod( 'header_image_cta_url' ) )
  ) :
    ?>
    <div class="hero__content">
      <?php
      if ( get_theme_mod( 'header_image_text' ) ) {
        printf( '<h1 class="hero__text">%s</h1>', esc_html( get_theme_mod( 'header_image_text' ) ) );
      }
      ?>

      <?php
      if ( get_theme_mod( 'header_image_cta_text' ) && get_theme_mod( 'header_image_cta_url' ) ) {
        printf(
          '<a class="hero__cta" href="%1$s">%2$s</a>',
          esc_url( get_theme_mod( 'header_image_cta_url' ) ),
          esc_html( get_theme_mod( 'header_image_cta_text' ) )
        );
      }
      ?>
    </div><!-- .hero__content -->
  <?php endif; ?>
</div><!-- .hero -->

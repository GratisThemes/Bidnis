<?php
/**
 * Phone and E-mail
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Phone and E-mail
 */
function bidnis_phone_email() { ?>
  <?php if ( get_theme_mod( 'phone' ) ) : ?>
    <div class="bidnis-phone">
      <i class="fa fa-phone"></i>
      <a href="tel:<?php echo esc_url( get_theme_mod( 'phone' ) ); ?>" aria-label="tel <?php echo esc_attr( get_theme_mod( 'phone' ) ); ?>"><?php echo esc_html( get_theme_mod( 'phone' ) ); ?></a>
    </div>
  <?php endif; ?>

  <?php if ( get_theme_mod( 'email' ) ) : ?>
    <div class="bidnis-email">
      <i class="fa fa-envelope"></i>
      <a href="mailto:<?php echo esc_attr( get_theme_mod( 'email' ) ); ?>" aria-label="e-mail <?php echo esc_attr( get_theme_mod( 'email' ) ); ?>" target="_top"><?php echo esc_html( get_theme_mod( 'email' ) ); ?></a>
    </div>
  <?php endif; ?>
<?php } ?>

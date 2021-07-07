<?php
/**
  * Phone and E-mail
  *
  * @since Bidnis 1.0.0
  */
function bidnis_phone_email() { ?>
  <div id="bidnis-phone-email">
    <?php if( get_theme_mod('phone') ): ?>
      <a id="bidnis-phone" href="tel:<?php echo esc_url( get_theme_mod('phone') ); ?>"><?php echo esc_html( get_theme_mod('phone') ); ?></a>
    <?php endif; ?>

    <?php if( get_theme_mod('email') ): ?>
      <a id="bidnis-email" href="mailto:<?php echo esc_attr( get_theme_mod('email') ); ?>" target="_top"><?php echo esc_html( get_theme_mod('email') ); ?></a>
    <?php endif; ?>
  </div>
<?php } ?>
<?php
/**
 * Social media links
 *
 * @package Bidnis
 * @since   Bidnis 2.0
 */

/**
 * Social media icons
 */
$bidnis_social_icons = array(
  'Twitter'    => 'fa-twitter',
  'Facebook'   => 'fa-facebook-f',
  'Instagram'  => 'fa-instagram',
  'Vine'       => 'fa-vine',
  'SnapChat'   => 'fa-snapchat-ghost',
  'LinkedIn'   => 'fa-linkedin',
  'Google+'    => 'fa-google-plus',
  'YouTube'    => 'fa-youtube',
  'Twitch'     => 'fa-twitch',
  'Vimeo'      => 'fa-vimeo',
  'Pinterest'  => 'fa-pinterest',
  'Reddit'     => 'fa-reddit-alien',
  'Steam'      => 'fa-steam',
  'Flickr'     => 'fa-flickr',
  'Tumblr'     => 'fa-tumblr',
  'Spotify'    => 'fa-spotify',
  'Soundcloud' => 'fa-soundcloud',
  'MixCloud'   => 'fa-mixcloud',
  'GitHub'     => 'fa-github',
  'BitBucket'  => 'fa-bitbucket',
  'Behance'    => 'fa-behance',
  'LastFM'     => 'fa-lastfm',
  'DeviantArt' => 'fa-deviantart',
  'BitCoin'    => 'fa-btc',
);

/**
 * Formated social media elements
 */
function bidnis_social_links() {
  global $bidnis_social_icons;

  ?>
  <div class="social-links">
    <?php if ( get_theme_mod( 'social_media_rss' ) ) : ?>
      <a class="social-links__rss" title="<?php esc_attr( bloginfo( 'rss2_url' ) ); ?>" href="<?php esc_url( bloginfo( 'rss2_url' ) ); ?>" target="_blank">
        <i class="fa fa-rss"></i>
      </a>
    <?php endif; ?>

    <?php
    foreach ( $bidnis_social_icons as $service => $icon ) :
      $service_slug = strtolower( $service );
      ?>
      <?php if ( get_theme_mod( 'social_media_' . $service_slug ) ) : ?>
        <a class="<?php echo esc_attr( 'social-links__' . $service_slug ); ?>" title="<?php echo esc_attr( $service ); ?>" href="<?php echo esc_url( get_theme_mod( 'social_media_' . $service_slug ) ); ?>" target="_blank">
          <i class="fab <?php echo esc_attr( $icon ); ?>"></i>
        </a>
      <?php endif; ?>
    <?php endforeach; ?>
  </div><!-- .social-links -->
  <?php
}

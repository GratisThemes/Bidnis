<?php
/**
 * The template for displaying the head
 * Displays all of the head element and everything up until the content.
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  }
  ?>

  <div class="site-container">

    <?php get_template_part( 'template-parts/header-nav' ); ?>

    <?php get_template_part( 'template-parts/site-header' ); ?>

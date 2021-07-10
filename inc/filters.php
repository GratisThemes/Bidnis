<?php
/**
 * Various changes to WordPress functions
 *
 * @package Bidnis
 * @since   Bidnis 1.0
 */

/**
 * Filter for body classes
 */
require get_template_directory() . '/inc/filters/body-class.php';

/**
 * Filter for the get_the_archive_title function
 */
require get_template_directory() . '/inc/filters/get-the-archive-title.php';

/**
 * Filter for the the end of excerpts
 */
require get_template_directory() . '/inc/filters/excerpt-more.php';

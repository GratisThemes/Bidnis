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
 * Filter for edit_post_link()
 */
require get_template_directory() . '/inc/filters/edit-post-link.php';

/**
 * Filter for the get_the_archive_title function
 */
require get_template_directory() . '/inc/filters/get-the-archive-title.php';

/**
 * Filter for the end of excerpts
 */
require get_template_directory() . '/inc/filters/excerpt-more.php';

/**
 * Filter for the post title
 */
require get_template_directory() . '/inc/filters/post-title.php';

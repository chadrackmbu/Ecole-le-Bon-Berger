<?php
/**
 * Home Page Options.
 *
 * @package Kids School
 */

$default = kids_school_get_default_theme_options();

// Add Panel.
$wp_customize->add_panel( 'home_page_panel',
	array(
	'title'      => __( 'Front Page Sections', 'kids-school' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	)
);

/**
* Section Customizer Options.
*/
require get_template_directory() . '/inc/customizer/home-sections/featured-slider.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-services.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-gallery.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-team.php';
require get_template_directory() . '/inc/customizer/home-sections/featured-testimonial.php';
require get_template_directory() . '/inc/customizer/home-sections/blog.php';


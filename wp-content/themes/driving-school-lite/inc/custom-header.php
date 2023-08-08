<?php
/**
 * @package Driving School Lite
 * @subpackage driving-school-lite
 * Setup the WordPress core custom header feature.
 *
 * @uses driving_school_lite_header_style()
*/

function driving_school_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'driving_school_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 200,
		'wp-head-callback'       => 'driving_school_lite_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'driving_school_lite_custom_header_setup' );

if ( ! function_exists( 'driving_school_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see driving_school_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'driving_school_lite_header_style' );
function driving_school_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$driving_school_lite_custom_css = "
        .contact-detail{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center;
		}";
	   	wp_add_inline_style( 'driving-school-lite-basic-style', $driving_school_lite_custom_css );
	endif;
}
endif; // driving_school_lite_header_style
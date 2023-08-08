<?php
/**
 * Custom header implementation
 */

function preschool_nursery_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'preschool_nursery_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1055,
		'height'                 => 195,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'preschool_nursery_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'preschool_nursery_custom_header_setup' );

if ( ! function_exists( 'preschool_nursery_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see preschool_nursery_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'preschool_nursery_header_style' );
function preschool_nursery_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$preschool_nursery_custom_css = "
		.main-header, #masthead {
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}
        .page-template-home-custom #masthead{
			background:	transparent;
		}";
	   	wp_add_inline_style( 'preschool-nursery-basic-style', $preschool_nursery_custom_css );
	endif;
}
endif; // preschool_nursery_header_style
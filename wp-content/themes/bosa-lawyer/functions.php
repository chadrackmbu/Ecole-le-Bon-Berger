<?php
/**
 * Theme functions and definitions
 *
 * @package Bosa Lawyer
 */

require get_stylesheet_directory() . '/inc/customizer/customizer.php';
require get_stylesheet_directory() . '/inc/customizer/loader.php';

if ( ! function_exists( 'bosa_lawyer_enqueue_styles' ) ) :
	/**
	 * @since Bosa Lawyer 1.0.0
	 */
	function bosa_lawyer_enqueue_styles() {
		wp_enqueue_style( 'bosa-lawyer-style-parent', get_template_directory_uri() . '/style.css',
			array(
				'bootstrap',
				'slick',
				'slicknav',
				'slick-theme',
				'fontawesome',
				'bosa-blocks',
				'bosa-google-font'
				)
		);
		wp_enqueue_style( 'bosa-lawyer-google-fonts', "https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", false );
		wp_enqueue_style( 'bosa-lawyer-google-fonts-two', "https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap", false );
	}

endif;
add_action( 'wp_enqueue_scripts', 'bosa_lawyer_enqueue_styles', 10 );

if( !function_exists( 'bosa_lawyer_header_layout_filter' ) ){
    /**
    * Filter of header layout choices.
    * 
    * @since Bosa Lawyer 1.0.6
    * @return array
    */
    add_filter( 'bosa_header_layout_filter', 'bosa_lawyer_header_layout_filter' );
    function bosa_lawyer_header_layout_filter( $header_layout ){
        $added_header = array(
            'header_four'   => get_stylesheet_directory_uri() . '/assets/images/header-layout-4.png',
        );
        return array_merge( $header_layout, $added_header );
    }
}

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
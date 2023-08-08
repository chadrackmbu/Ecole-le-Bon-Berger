<?php

if ( ! function_exists( 'kids_school_business_enqueue_styles' ) ) :

	function kids_school_business_enqueue_styles() {
		wp_enqueue_style( 'kids-school-business-style-parent', get_template_directory_uri() . '/style.css' );

		wp_enqueue_style( 'kids-school-business-style', get_stylesheet_directory_uri() . '/style.css', array( 'kids-school-business-style-parent' ), '1.0' );

		wp_enqueue_style( 'kids-school-business-fonts', kids_school_business_fonts_url(), array(), null );
	}
endif;
add_action( 'wp_enqueue_scripts', 'kids_school_business_enqueue_styles', 99 );


if ( ! function_exists( 'kids_school_business_fonts_url' ) ) :

	function kids_school_business_fonts_url() {
		
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin,latin-ext';


		if ( 'off' !== _x( 'on', 'Karla font: on or off', 'kids-school-business' ) ) {
			$fonts[] = 'Karla:400,500,600,700';
		}

		if ( 'off' !== _x( 'on', 'Lato font: on or off', 'kids-school-business' ) ) {
			$fonts[] = 'Lato:400';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		);

		if ( $fonts ) {
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}

		return esc_url_raw( $fonts_url );
	}
endif;
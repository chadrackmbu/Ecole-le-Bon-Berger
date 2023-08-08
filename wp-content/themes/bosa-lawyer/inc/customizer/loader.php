<?php

function bosa_lawyer_default_styles(){

	// Begin Style
	$css = '<style>';
	$site_title_color = get_theme_mod( 'site_title_color', '#030303' );
	$site_tagline_color = get_theme_mod( 'site_tagline_color', '#767676' );
	$css .= '
		.header-four .site-branding .site-title {
			color: '. esc_attr( $site_title_color ) .';
		}
		.header-four .site-branding .site-description {
			color: '. esc_attr( $site_tagline_color ) .';
		}
	';

	$top_header_background_color = get_theme_mod( 'top_header_background_color', '' );
	$top_header_text_color = get_theme_mod( 'top_header_text_color', '#333333' );
	$top_header_text_link_hover_color = get_theme_mod( 'top_header_text_link_hover_color', '#086abd' );
	$css .= '
		.header-four .top-header {
			background-color: '. esc_attr( $top_header_background_color ) .';
		}
		.header-four .social-profile ul li a,
		.header-four .header-contact ul li, 
		.header-four .header-contact ul li a,
		.header-four .header-search-wrap .search-icon {
			color: '. esc_attr( $top_header_text_color ) .';
		}
		.header-four .alt-menu-icon .icon-bar, 
		.header-four .alt-menu-icon .icon-bar:before, 
		.header-four .alt-menu-icon .icon-bar:after {
			background-color: '. esc_attr( $top_header_text_color ) .';
		}
		.header-four .header-contact ul li a:hover,
		.header-four .header-contact ul li a:focus,
		.header-four .header-contact ul li a:active,
		.header-four .social-profile ul li a:hover,
		.header-four .social-profile ul li a:focus,
		.header-four .social-profile ul li a:active,
		.header-four .header-contact ul li a:hover i,
		.header-four .header-contact ul li a:focus i,
		.header-four .header-contact ul li a:active i,
		.header-four .header-search-wrap .search-icon:hover, 
		.header-four .header-search-wrap .search-icon:focus, 
		.header-four .header-search-wrap .search-icon:active {
			color: '. esc_attr( $top_header_text_link_hover_color ) .';
		}
		.header-four .alt-menu-icon a:hover .icon-bar, 
		.header-four .alt-menu-icon a:focus .icon-bar, 
		.header-four .alt-menu-icon a:active .icon-bar, 
		.header-four .alt-menu-icon a:hover .icon-bar:before, 
		.header-four .alt-menu-icon a:focus .icon-bar:before, 
		.header-four .alt-menu-icon a:active .icon-bar:before, 
		.header-four .alt-menu-icon a:hover .icon-bar:after,
		.header-four .alt-menu-icon a:focus .icon-bar:after,
		.header-four .alt-menu-icon a:active .icon-bar:after {
			background-color: '. esc_attr( $top_header_text_link_hover_color ) .';
		}
	';

	$bottom_header_background_color 	 = get_theme_mod( 'bottom_header_background_color', '' );
	$bottom_header_text_color 			 = get_theme_mod( 'bottom_header_text_color', '#333333' );
	$bottom_header_text_link_hover_color = get_theme_mod( 'bottom_header_text_link_hover_color', '#086abd' );
	$css .= '
		.header-four .bottom-header .overlay {
			background-color: '. esc_attr( $bottom_header_background_color ) .';
		}
		@media only screen and (max-width: 991px) {
			.header-four .mobile-menu-container {
				background-color: '. esc_attr( $bottom_header_background_color ) .';
			}
		}
		.header-four .bottom-contact {
			border-color: '. esc_attr( bosa_hex2rgba( $bottom_header_text_color, 0.1 ) ).';
		}
		.header-four .main-navigation ul.menu > li > a,
		.header-four .bottom-contact a,
		.header-four .bottom-contact a span {
			color: '. esc_attr( $bottom_header_text_color ) .';
		}
		.header-four .site-branding .site-title a:hover,
		.header-four .site-branding .site-title a:focus,
		.header-four .site-branding .site-title a:active,
		.header-four .main-navigation ul.menu > li:hover > a, 
		.header-four .main-navigation ul.menu > li:focus > a, 
		.header-four .main-navigation ul.menu > li:active > a, 
		.header-four .bottom-contact a:hover,
		.header-four .bottom-contact a:focus,
		.header-four .bottom-contact a:active,
		.header-four .bottom-contact a:hover i,
		.header-four .bottom-contact a:focus i,
		.header-four .bottom-contact a:active i {
			color: '. esc_attr( $bottom_header_text_link_hover_color ) .';
		}
		.header-four .alt-menu-icon a:hover .icon-bar, 
		.header-four .alt-menu-icon a:focus .icon-bar, 
		.header-four .alt-menu-icon a:active .icon-bar, 
		.header-four .alt-menu-icon a:hover .icon-bar:before, 
		.header-four .alt-menu-icon a:focus .icon-bar:before, 
		.header-four .alt-menu-icon a:active .icon-bar:before, 
		.header-four .alt-menu-icon a:hover .icon-bar:after,
		.header-four .alt-menu-icon a:focus .icon-bar:after,
		.header-four .alt-menu-icon a:active .icon-bar:after {
			background-color: '. esc_attr( $bottom_header_text_link_hover_color ) .';
		}
		@media screen and (max-width: 991px){
			.header-four.site-header .mobile-menu-container {
				border-top: none;
			}
		}
	';

	$header_icon_color = get_theme_mod( 'header_icon_color', '#B7B7B7' );
	$css .= '
		.header-four .bottom-contact a i,
		.header-four .header-contact ul li i {
			color: '. esc_attr( $header_icon_color ) .';
		}
	';

	# Header Button
	if( !get_theme_mod( 'disable_header_button', false ) ){
		if( get_theme_mod( 'header_layout', 'header_one' ) == 'header_one' || get_theme_mod( 'header_layout', 'header_one' ) == 'header_four' ){
			$header_btn_defaults = array(
				array(
					'header_btn_type' 			=> 'button-outline',
					'header_btn_bg_color'		=> '#EB5A3E',
					'header_btn_border_color'	=> '#1a1a1a',
					'header_btn_text_color'		=> '#1a1a1a',
					'header_btn_hover_color'	=> '#086abd',
					'header_btn_text' 			=> '',
					'header_btn_link' 			=> '',
					'header_btn_target'			=> true,
					'header_btn_radius'			=> 0,
				),		
			);
			$header_buttons = get_theme_mod( 'header_button_repeater', $header_btn_defaults );
			if( !empty( $header_buttons ) && is_array( $header_buttons ) ){
				$i = 1;
		    	foreach( $header_buttons as $value ){
		    		$header_btn_bg_color 		= $value['header_btn_bg_color'];
		    		$header_btn_border_color 	= $value['header_btn_border_color'];
		    		$header_btn_text_color 		= $value['header_btn_text_color'];
		    		$header_btn_hover_color 	= $value['header_btn_hover_color'];
		    		$header_btn_radius 	= $value['header_btn_radius'];
		    		if( $value['header_btn_type'] == 'button-primary' ){
			    		$css .= '
							.site-header .header-btn-'. $i .'.button-primary {
								background-color: '. esc_attr( $header_btn_bg_color ) .';
								color: '. esc_attr( $header_btn_text_color ) .';
							}

							.site-header .header-btn-'. $i .'.button-primary:hover,
							.site-header .header-btn-'. $i .'.button-primary:focus,
							.site-header .header-btn-'. $i .'.button-primary:active {
								background-color: '. esc_attr( $header_btn_hover_color ) .';
								color: #ffffff;
							}

							.site-header .header-btn-'. $i .'.button-primary {
								border-radius: '. esc_attr( $header_btn_radius ) .'px;
							}
						';
					}elseif( $value['header_btn_type'] == 'button-outline' ){
						$css .= '

							.site-header .header-btn-'. $i .'.button-outline {
								border-color: '. esc_attr( $header_btn_border_color ) .';
								color: '. esc_attr( $header_btn_text_color ) .';
							}

							.site-header .header-btn-'. $i .'.button-outline:hover,
							.site-header .header-btn-'. $i .'.button-outline:focus,
							.site-header .header-btn-'. $i .'.button-outline:active {
								background-color: '. esc_attr( $header_btn_hover_color ) .';
								border-color: '. esc_attr( $header_btn_hover_color ) .';
								color: #ffffff;
							}

							.site-header .header-btn-'. $i .'.button-outline {
								border-radius: '. esc_attr( $header_btn_radius ) .'px;
							}
						';
					}elseif( $value['header_btn_type'] == 'button-text' ){
						$css .= '
							.site-header .header-btn-'. $i .'.button-text {
								color: '. esc_attr( $header_btn_text_color ) .';
								padding: 0;
							}
							.site-header .header-btn-'. $i .'.button-text:hover,
							.site-header .header-btn-'. $i .'.button-text:focus,
							.site-header .header-btn-'. $i .'.button-text:active {
								color: '. esc_attr( $header_btn_hover_color ) .';
							}
						';
					}
					$i++;
		    	}
		    }
		}
	}
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'bosa_lawyer_default_styles', 99 );
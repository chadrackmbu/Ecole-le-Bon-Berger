<?php

	/*---------------------------Width Layout -------------------*/
	$preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_theme_options','Default');
    if($preschool_nursery_theme_lay == 'Default'){
		$preschool_nursery_custom_css .='body{';
			$preschool_nursery_custom_css .='max-width: 100%;';
		$preschool_nursery_custom_css .='}';
		$preschool_nursery_custom_css .='.page-template-custom-home-page .middle-header{';
			$preschool_nursery_custom_css .='width: 97.3%';
		$preschool_nursery_custom_css .='}';
	}else if($preschool_nursery_theme_lay == 'Wide Layout'){
		$preschool_nursery_custom_css .='body{';
			$preschool_nursery_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$preschool_nursery_custom_css .='}';
		$preschool_nursery_custom_css .='.page-template-custom-home-page .middle-header{';
			$preschool_nursery_custom_css .='width: 97.7%';
		$preschool_nursery_custom_css .='}';
	}else if($preschool_nursery_theme_lay == 'Box Layout'){
		$preschool_nursery_custom_css .='body{';
			$preschool_nursery_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$preschool_nursery_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$preschool_nursery_slider_layout = get_theme_mod( 'preschool_nursery_slider_opacity_color','0.7');
	if($preschool_nursery_slider_layout == '0'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.1'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.1';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.2'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.2';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.3'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.3';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.4'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.4';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.5'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.5';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.6'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.6';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.7'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.7';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.8'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.8';
		$preschool_nursery_custom_css .='}';
		}else if($preschool_nursery_slider_layout == '0.9'){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:0.9';
		$preschool_nursery_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/
	$preschool_nursery_slider_layout = get_theme_mod( 'preschool_nursery_slider_content_option','Left');
    if($preschool_nursery_slider_layout == 'Left'){
		$preschool_nursery_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$preschool_nursery_custom_css .='text-align:left; left:10%; right:52%; bottom: auto;';
		$preschool_nursery_custom_css .='}';		
	}else if($preschool_nursery_slider_layout == 'Center'){
		$preschool_nursery_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$preschool_nursery_custom_css .='text-align:center; left:20%; right:20%; bottom: auto;';
		$preschool_nursery_custom_css .='}';		
	}else if($preschool_nursery_slider_layout == 'Right'){
		$preschool_nursery_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$preschool_nursery_custom_css .='text-align:right; left:52%; right:10%; bottom: auto;';
		$preschool_nursery_custom_css .='}';		
	}

	/*----------------------------- Button Settings option-----------------------*/
	$preschool_nursery_top_bottom_padding = get_theme_mod('preschool_nursery_top_bottom_padding');
	$preschool_nursery_left_right_padding = get_theme_mod('preschool_nursery_left_right_padding');
	$preschool_nursery_custom_css .='.post-link a, #slider .readbutton, .form-submit input[type="submit"]{';
		$preschool_nursery_custom_css .='padding-top: '.esc_attr($preschool_nursery_top_bottom_padding).'px; padding-bottom: '.esc_attr($preschool_nursery_top_bottom_padding).'px; padding-left: '.esc_attr($preschool_nursery_left_right_padding).'px; padding-right: '.esc_attr($preschool_nursery_left_right_padding).'px; display:inline-block;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_border_radius = get_theme_mod('preschool_nursery_border_radius');
	$preschool_nursery_custom_css .='.post-link a,#slider .readbutton, .form-submit input[type="submit"]{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

	/*---------------------------Blog Layout -------------------*/
	$preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_blog_post_layout','Default');
    if($preschool_nursery_theme_lay == 'Default'){
		$preschool_nursery_custom_css .='.blogger{';
			$preschool_nursery_custom_css .='';
		$preschool_nursery_custom_css .='}';
	}else if($preschool_nursery_theme_lay == 'Center'){
		$preschool_nursery_custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$preschool_nursery_custom_css .='text-align:center;';
		$preschool_nursery_custom_css .='}';
		$preschool_nursery_custom_css .='.post-info{';
			$preschool_nursery_custom_css .='margin-top:10px;';
		$preschool_nursery_custom_css .='}';
		$preschool_nursery_custom_css .='.blogger .post-link{';
			$preschool_nursery_custom_css .='margin-top:25px;';
		$preschool_nursery_custom_css .='}';
	}else if($preschool_nursery_theme_lay == 'Image and Content'){
		$preschool_nursery_custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$preschool_nursery_custom_css .='text-align:Left;';
		$preschool_nursery_custom_css .='}';
		$preschool_nursery_custom_css .='.blogger .post-link{';
			$preschool_nursery_custom_css .='text-align:right;';
		$preschool_nursery_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$preschool_nursery_loader_color_setting = get_theme_mod('preschool_nursery_loader_color_setting');
	$preschool_nursery_custom_css .=' .circle .inner{';
		$preschool_nursery_custom_css .='border-color: '.esc_attr($preschool_nursery_loader_color_setting).';';
	$preschool_nursery_custom_css .='} ';

	$preschool_nursery_loader_background_color = get_theme_mod('preschool_nursery_loader_background_color');
	$preschool_nursery_custom_css .=' #pre-loader{';
		$preschool_nursery_custom_css .='background-color: '.esc_attr($preschool_nursery_loader_background_color).';';
	$preschool_nursery_custom_css .='} ';

	$preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_preloader_types','Default');
    if($preschool_nursery_theme_lay == 'Default'){
		$preschool_nursery_custom_css .='{';
			$preschool_nursery_custom_css .='';
		$preschool_nursery_custom_css .='}';
	}elseif($preschool_nursery_theme_lay == 'Circle'){
		$preschool_nursery_custom_css .='.circle .inner{';
			$preschool_nursery_custom_css .='width:unset;';
		$preschool_nursery_custom_css .='}';
	}elseif($preschool_nursery_theme_lay == 'Two Circle'){
		$preschool_nursery_custom_css .='.circle .inner{';
			$preschool_nursery_custom_css .='width:80%;
    border-right: 5px;';
		$preschool_nursery_custom_css .='}';
	}

	// Responsive Media
    $preschool_nursery_preloader = get_theme_mod( 'preschool_nursery_enable_disable_preloader', false);
	if($preschool_nursery_preloader == true && get_theme_mod( 'preschool_nursery_loader_setting', false) == false){
    	$preschool_nursery_custom_css .='#pre-loader{';
			$preschool_nursery_custom_css .='visibility:hidden;';
		$preschool_nursery_custom_css .='} ';
	}
    if($preschool_nursery_preloader == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='#pre-loader{';
			$preschool_nursery_custom_css .='visibility:visible;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_preloader == false){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='#pre-loader{';
			$preschool_nursery_custom_css .='visibility:hidden;';
		$preschool_nursery_custom_css .='} }';
	}

	$preschool_nursery_sidebar = get_theme_mod( 'preschool_nursery_enable_disable_sidebar',true);
    if($preschool_nursery_sidebar == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='#sidebox{';
			$preschool_nursery_custom_css .='display:block;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_sidebar == false){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='#sidebox{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} }';
	}

	$preschool_nursery_stickyheader = get_theme_mod( 'preschool_nursery_enable_disable_topbar',false);
	if($preschool_nursery_stickyheader == true && get_theme_mod( 'preschool_nursery_show_hide_topbar', false) == false){
    	$preschool_nursery_custom_css .='.topbar{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} ';
	}
    if($preschool_nursery_stickyheader == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='.topbar{';
			$preschool_nursery_custom_css .='display:block;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_stickyheader == false){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='.topbar{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} }';
	}

	$preschool_nursery_stickyheader = get_theme_mod( 'preschool_nursery_enable_disable_fixed_header',false);
	if($preschool_nursery_stickyheader == true && get_theme_mod( 'preschool_nursery_fixed_header', false) == false){
    	$preschool_nursery_custom_css .='.fixed-header{';
			$preschool_nursery_custom_css .='position:static;';
		$preschool_nursery_custom_css .='} ';
	}
    if($preschool_nursery_stickyheader == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='.fixed-header{';
			$preschool_nursery_custom_css .='position:fixed;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_stickyheader == false){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='.fixed-header{';
			$preschool_nursery_custom_css .='position:static;';
		$preschool_nursery_custom_css .='} }';
	}

	$preschool_nursery_slider = get_theme_mod( 'preschool_nursery_enable_disable_slider', false);
	if($preschool_nursery_slider == true && get_theme_mod( 'preschool_nursery_slider_arrows', false) == false){
    	$preschool_nursery_custom_css .='#slider{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} ';
	}
    if($preschool_nursery_slider == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='#slider{';
			$preschool_nursery_custom_css .='display:block;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_slider == false){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px){';
		$preschool_nursery_custom_css .='#slider{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} }';
	}

	$preschool_nursery_sliderbutton = get_theme_mod( 'preschool_nursery_show_hide_slider_button', true);
	if($preschool_nursery_sliderbutton == true && get_theme_mod( 'preschool_nursery_slider_button', true) != true){
    	$preschool_nursery_custom_css .='#slider .readbutton{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} ';
	}
    if($preschool_nursery_sliderbutton == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='#slider .readbutton{';
			$preschool_nursery_custom_css .='display:inline-block;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_sliderbutton != true){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px){';
		$preschool_nursery_custom_css .='#slider .readbutton{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} }';
	}

	$preschool_nursery_scroll = get_theme_mod( 'preschool_nursery_enable_disable_scrolltop', false);
	if($preschool_nursery_scroll == true && get_theme_mod( 'preschool_nursery_hide_show_scroll', false) == false){
    	$preschool_nursery_custom_css .='.scrollup i{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} ';
	}
    if($preschool_nursery_scroll == true){
    	$preschool_nursery_custom_css .='@media screen and (max-width:575px) {';
		$preschool_nursery_custom_css .='.scrollup i{';
			$preschool_nursery_custom_css .='display:block;';
		$preschool_nursery_custom_css .='} }';
	}else if($preschool_nursery_scroll == false){
		$preschool_nursery_custom_css .='@media screen and (max-width:575px){';
		$preschool_nursery_custom_css .='.scrollup i{';
			$preschool_nursery_custom_css .='display:none;';
		$preschool_nursery_custom_css .='} }';
	}

	// Copyright top-bottom padding setting 
	$preschool_nursery_copyright_top_bottom_padding = get_theme_mod('preschool_nursery_copyright_top_bottom_padding');
	$preschool_nursery_custom_css .='.site-info{';
		$preschool_nursery_custom_css .='padding-top: '.esc_attr($preschool_nursery_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($preschool_nursery_copyright_top_bottom_padding).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_footer_text_font_size = get_theme_mod('preschool_nursery_footer_text_font_size', 16);
	$preschool_nursery_custom_css .='.site-info{';
		$preschool_nursery_custom_css .='font-size: '.esc_attr($preschool_nursery_footer_text_font_size).'px;';
	$preschool_nursery_custom_css .='}';

	// Slider Height 
	$preschool_nursery_slider_height_option = get_theme_mod('preschool_nursery_slider_height_option');
	$preschool_nursery_custom_css .='#slider img{';
		$preschool_nursery_custom_css .='height: '.esc_attr($preschool_nursery_slider_height_option).'px;';
	$preschool_nursery_custom_css .='}';

	// scroll to top setting
	$preschool_nursery_scroll_border_radius = get_theme_mod('preschool_nursery_scroll_border_radius');
	$preschool_nursery_custom_css .='.scrollup i{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_scroll_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_scroll_top_fontsize = get_theme_mod('preschool_nursery_scroll_top_fontsize');
	$preschool_nursery_custom_css .='.scrollup i{';
		$preschool_nursery_custom_css .='font-size: '.esc_attr($preschool_nursery_scroll_top_fontsize).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_scroll_top_bottom_padding = get_theme_mod('preschool_nursery_scroll_top_bottom_padding');
	$preschool_nursery_scroll_left_right_padding = get_theme_mod('preschool_nursery_scroll_left_right_padding');
	$preschool_nursery_custom_css .='.scrollup i{';
		$preschool_nursery_custom_css .='padding-top: '.esc_attr($preschool_nursery_scroll_top_bottom_padding).'px; padding-bottom: '.esc_attr($preschool_nursery_scroll_top_bottom_padding).'px; padding-left: '.esc_attr($preschool_nursery_scroll_left_right_padding).'px; padding-right: '.esc_attr($preschool_nursery_scroll_left_right_padding).'px;';
	$preschool_nursery_custom_css .='}';

	// comment settings
	$preschool_nursery_comment_button_text = get_theme_mod('preschool_nursery_comment_button_text', 'Post Comment');
	if($preschool_nursery_comment_button_text == ''){
		$preschool_nursery_custom_css .='#comments p.form-submit {';
			$preschool_nursery_custom_css .='display: none;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_comment_form_heading = get_theme_mod('preschool_nursery_comment_form_heading', 'Leave a Reply');
	if($preschool_nursery_comment_form_heading == ''){
		$preschool_nursery_custom_css .='#comments h2#reply-title {';
			$preschool_nursery_custom_css .='display: none;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_comment_form_size = get_theme_mod( 'preschool_nursery_comment_form_size',100);
	$preschool_nursery_custom_css .='#comments textarea{';
		$preschool_nursery_custom_css .='width: '.esc_attr($preschool_nursery_comment_form_size).'%;';
	$preschool_nursery_custom_css .='}';

	/*------------ Woocommerce Settings  --------------*/
	$preschool_nursery_shop_button_padding_top = get_theme_mod('preschool_nursery_shop_button_padding_top', 9);
	$preschool_nursery_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$preschool_nursery_custom_css .='padding-top: '.esc_attr($preschool_nursery_shop_button_padding_top).'px; padding-bottom: '.esc_attr($preschool_nursery_shop_button_padding_top).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_shop_button_padding_left = get_theme_mod('preschool_nursery_shop_button_padding_left', 16);
	$preschool_nursery_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce a.added_to_cart.wc-forward{';
		$preschool_nursery_custom_css .='padding-left: '.esc_attr($preschool_nursery_shop_button_padding_left).'px; padding-right: '.esc_attr($preschool_nursery_shop_button_padding_left).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_shop_button_border_radius = get_theme_mod('preschool_nursery_shop_button_border_radius',5);
	$preschool_nursery_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce a.added_to_cart.wc-forward{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_shop_button_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_display_related_products = get_theme_mod('preschool_nursery_display_related_products',true);
	if($preschool_nursery_display_related_products == false){
		$preschool_nursery_custom_css .='.related.products{';
			$preschool_nursery_custom_css .='display: none;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_shop_products_border = get_theme_mod('preschool_nursery_shop_products_border', true);
	if($preschool_nursery_shop_products_border == false){
		$preschool_nursery_custom_css .='.woocommerce .products li{';
			$preschool_nursery_custom_css .='border: none;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_shop_page_top_padding = get_theme_mod('preschool_nursery_shop_page_top_padding',10);
	$preschool_nursery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$preschool_nursery_custom_css .='padding-top: '.esc_attr($preschool_nursery_shop_page_top_padding).'px !important; padding-bottom: '.esc_attr($preschool_nursery_shop_page_top_padding).'px !important;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_shop_page_left_padding = get_theme_mod('preschool_nursery_shop_page_left_padding',10);
	$preschool_nursery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$preschool_nursery_custom_css .='padding-left: '.esc_attr($preschool_nursery_shop_page_left_padding).'px !important; padding-right: '.esc_attr($preschool_nursery_shop_page_left_padding).'px !important;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_shop_page_border_radius = get_theme_mod('preschool_nursery_shop_page_border_radius',0);
	$preschool_nursery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_shop_page_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_shop_page_box_shadow = get_theme_mod('preschool_nursery_shop_page_box_shadow',0);
	$preschool_nursery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$preschool_nursery_custom_css .='box-shadow: '.esc_attr($preschool_nursery_shop_page_box_shadow).'px '.esc_attr($preschool_nursery_shop_page_box_shadow).'px '.esc_attr($preschool_nursery_shop_page_box_shadow).'px #e4e4e4;';
	$preschool_nursery_custom_css .='}';

	// footer widget background
	$preschool_nursery_footer_widget_background = get_theme_mod('preschool_nursery_footer_widget_background', '#121212');
	$preschool_nursery_custom_css .='.site-footer{';
		$preschool_nursery_custom_css .='background-color: '.esc_attr($preschool_nursery_footer_widget_background).';';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_footer_widget_image = get_theme_mod('preschool_nursery_footer_widget_image');
	if($preschool_nursery_footer_widget_image != false){
		$preschool_nursery_custom_css .='.site-footer{';
			$preschool_nursery_custom_css .='background: url('.esc_attr($preschool_nursery_footer_widget_image).');';
		$preschool_nursery_custom_css .='}';
	}

	/*------------- Navigation Menu Font Size ------------------*/
	$preschool_nursery_navigation_menu_font_size = get_theme_mod('preschool_nursery_navigation_menu_font_size');{
		$preschool_nursery_custom_css .='.main-navigation a, .navigation-top a{';
			$preschool_nursery_custom_css .='font-size: '.esc_attr($preschool_nursery_navigation_menu_font_size).'px;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_menu_text_tranform','Default');
	if($preschool_nursery_theme_lay == 'Uppercase'){
		$preschool_nursery_custom_css .='.main-navigation a, .navigation-top a,.main-navigation ul ul a{';
			$preschool_nursery_custom_css .='text-transform:Uppercase;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_menu_font_weight','Default');
	if($preschool_nursery_theme_lay == 'Normal'){
		$preschool_nursery_custom_css .='.main-navigation a, .navigation-top a{';
			$preschool_nursery_custom_css .='font-weight: normal;';
		$preschool_nursery_custom_css .='}';
	}

    // site title color option
	$preschool_nursery_site_title_color_setting = get_theme_mod('preschool_nursery_site_title_color_setting');
	$preschool_nursery_custom_css .=' .site-title a{';
		$preschool_nursery_custom_css .='color: '.esc_attr($preschool_nursery_site_title_color_setting).';';
	$preschool_nursery_custom_css .='} ';

	$preschool_nursery_tagline_color_setting = get_theme_mod('preschool_nursery_tagline_color_setting');
	$preschool_nursery_custom_css .=' .site-description{';
		$preschool_nursery_custom_css .='color: '.esc_attr($preschool_nursery_tagline_color_setting).';';
	$preschool_nursery_custom_css .='} ';

	// site title font size option
	$preschool_nursery_site_title_font_size = get_theme_mod('preschool_nursery_site_title_font_size', 30);{
	$preschool_nursery_custom_css .='.logo h1, .site-title a{';
	$preschool_nursery_custom_css .='font-size: '.esc_attr($preschool_nursery_site_title_font_size).'px;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_site_tagline_font_size_settings = get_theme_mod('preschool_nursery_site_tagline_font_size_settings', 13);{
	$preschool_nursery_custom_css .='.logo p.site-description{';
	$preschool_nursery_custom_css .='font-size: '.esc_attr($preschool_nursery_site_tagline_font_size_settings).'px;';
		$preschool_nursery_custom_css .='}';
	}

	/*------------------ Background Skin Option  -------------------*/
	$preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_background_image_type','Transparent');
    if($preschool_nursery_theme_lay == 'Background'){
		$preschool_nursery_custom_css .='.blogger, #sidebox .widget, .about-text, .related-posts .page-box, .woocommerce ul.products li.product, .woocommerce-page ul.products li.product, .background-img-skin, .pages-te, .woocommerce .woocommerce-ordering{';
			$preschool_nursery_custom_css .='background-color: #fff;';
		$preschool_nursery_custom_css .='}';
	}else if($preschool_nursery_theme_lay == 'Transparent'){
		$preschool_nursery_custom_css .='#services h3{';
			$preschool_nursery_custom_css .='background-color: transparent;';
		$preschool_nursery_custom_css .='}';
	}

	// slider overlay
	$preschool_nursery_show_slider_image_overlay = get_theme_mod('preschool_nursery_show_slider_image_overlay', true);
	if($preschool_nursery_show_slider_image_overlay == false){
		$preschool_nursery_custom_css .='#slider img{';
			$preschool_nursery_custom_css .='opacity:1;';
		$preschool_nursery_custom_css .='}';
	} 
	$preschool_nursery_color_slider_image_overlay = get_theme_mod('preschool_nursery_color_slider_image_overlay', true);
	if($preschool_nursery_show_slider_image_overlay != false){
		$preschool_nursery_custom_css .='#slider{';
			$preschool_nursery_custom_css .='background-color: '.esc_attr($preschool_nursery_color_slider_image_overlay).';';
		$preschool_nursery_custom_css .='}';
	}

	// woocommerce product sale settings
	$preschool_nursery_border_radius_product_sale_text = get_theme_mod('preschool_nursery_border_radius_product_sale_text',50);
	$preschool_nursery_custom_css .='.woocommerce span.onsale {';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_border_radius_product_sale_text).'%;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_position_product_sale = get_theme_mod('preschool_nursery_position_product_sale', 'Right');
	if($preschool_nursery_position_product_sale == 'Right' ){
		$preschool_nursery_custom_css .='.woocommerce ul.products li.product .onsale{';
			$preschool_nursery_custom_css .=' left:auto; right:0;';
		$preschool_nursery_custom_css .='}';
	}elseif($preschool_nursery_position_product_sale == 'Left' ){
		$preschool_nursery_custom_css .='.woocommerce ul.products li.product .onsale{';
			$preschool_nursery_custom_css .=' left:0; right:auto;';
		$preschool_nursery_custom_css .='}';
	}

	$preschool_nursery_product_sale_text_size = get_theme_mod('preschool_nursery_product_sale_text_size',14);
	$preschool_nursery_custom_css .='.woocommerce span.onsale{';
		$preschool_nursery_custom_css .='font-size: '.esc_attr($preschool_nursery_product_sale_text_size).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_top_bottom_product_sale_padding = get_theme_mod('preschool_nursery_top_bottom_product_sale_padding');
	$preschool_nursery_left_right_product_sale_padding = get_theme_mod('preschool_nursery_left_right_product_sale_padding');
	$preschool_nursery_custom_css .='.woocommerce span.onsale{';
		$preschool_nursery_custom_css .='padding-top: '.esc_attr($preschool_nursery_top_bottom_product_sale_padding).'px; padding-bottom: '.esc_attr($preschool_nursery_top_bottom_product_sale_padding).'px; padding-left: '.esc_attr($preschool_nursery_left_right_product_sale_padding).'px; padding-right: '.esc_attr($preschool_nursery_left_right_product_sale_padding).'px; display:inline-block;';
	$preschool_nursery_custom_css .='}';

	// woocommerce Product Navigation
	$preschool_nursery_shop_products_navigation = get_theme_mod('preschool_nursery_shop_products_navigation', 'Yes');
	if($preschool_nursery_shop_products_navigation == 'No'){
		$preschool_nursery_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$preschool_nursery_custom_css .='display: none;';
		$preschool_nursery_custom_css .='}';
	}

	// Post Block
	$preschool_nursery_post_break_block_setting = get_theme_mod( 'preschool_nursery_post_break_block_setting','Into Blocks');
    if($preschool_nursery_post_break_block_setting == 'Without Blocks'){
		$preschool_nursery_custom_css .='.blogger{';
			$preschool_nursery_custom_css .='border: none; margin:30px 0;';
		$preschool_nursery_custom_css .='}';
	}

	// fixed header padding option
	$preschool_nursery_fixed_header_padding_option = get_theme_mod('preschool_nursery_fixed_header_padding_option');
	$preschool_nursery_custom_css .='.fixed-header{';
		$preschool_nursery_custom_css .='padding: '.esc_attr($preschool_nursery_fixed_header_padding_option).'px;';
	$preschool_nursery_custom_css .='}';

	// slider top and bottom padding
	$preschool_nursery_padding_top_bottom_slider_content = get_theme_mod('preschool_nursery_padding_top_bottom_slider_content');
	$preschool_nursery_padding_left_right_slider_content = get_theme_mod('preschool_nursery_padding_left_right_slider_content');
	$preschool_nursery_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$preschool_nursery_custom_css .='top: '.esc_attr($preschool_nursery_padding_top_bottom_slider_content).'%; bottom: '.esc_attr($preschool_nursery_padding_top_bottom_slider_content).'%;left: '.esc_attr($preschool_nursery_padding_left_right_slider_content).'%;right: '.esc_attr($preschool_nursery_padding_left_right_slider_content).'%;';

	$preschool_nursery_custom_css .='}';


	// Slider
	$preschool_nursery_slider_arrows = get_theme_mod('preschool_nursery_slider_arrows',false);
	if ($preschool_nursery_slider_arrows == false) {
		$preschool_nursery_custom_css .='.page-template-home-custom #masthead{';
			$preschool_nursery_custom_css .=' position:static; border-bottom: 2px solid #e2e2e2;';

		$preschool_nursery_custom_css .='}';
	}

	// featured image setting
	$preschool_nursery_post_image_border_radius = get_theme_mod('preschool_nursery_post_image_border_radius', 0);
	$preschool_nursery_custom_css .='.post-image img, .wrapper img{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_post_image_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

	$preschool_nursery_featured_image_box_shadow = get_theme_mod('preschool_nursery_featured_image_box_shadow',0);
	$preschool_nursery_custom_css .='.post-image img, .wrapper img{';
		$preschool_nursery_custom_css .='box-shadow: '.esc_attr($preschool_nursery_featured_image_box_shadow).'px '.esc_attr($preschool_nursery_featured_image_box_shadow).'px '.esc_attr($preschool_nursery_featured_image_box_shadow).'px #ccc;';
	$preschool_nursery_custom_css .='}';

    //Copyright background css
	$preschool_nursery_copyright_background_color = get_theme_mod('preschool_nursery_copyright_background_color');
	$preschool_nursery_custom_css .='.site-info{';
		$preschool_nursery_custom_css .='background-color: '.esc_attr($preschool_nursery_copyright_background_color).';';
	$preschool_nursery_custom_css .='}';
     
    // featured image dimention
	$preschool_nursery_post_image_dimention = get_theme_mod('preschool_nursery_post_image_dimention', 'Default');
	$preschool_nursery_post_featured_image_width = get_theme_mod('preschool_nursery_post_featured_image_width');
	$preschool_nursery_post_featured_image_height = get_theme_mod('preschool_nursery_post_featured_image_height');
	if($preschool_nursery_post_image_dimention == 'Custom Image Size'){
		$preschool_nursery_custom_css .='.post-image img{';
			$preschool_nursery_custom_css .='width: '.esc_attr($preschool_nursery_post_featured_image_width).'px; height: '.esc_attr($preschool_nursery_post_featured_image_height).'px;';
		$preschool_nursery_custom_css .='}';
	}

	// Single Post Categories
	$preschool_nursery_show_hide_single_post_categories = get_theme_mod('preschool_nursery_show_hide_single_post_categories',false);
	if ($preschool_nursery_show_hide_single_post_categories == false) {
		$preschool_nursery_custom_css .='.post-info{';
			$preschool_nursery_custom_css .=' margin-top:20px;';
		$preschool_nursery_custom_css .='}';
	}

	// Slider Width Layout
	$preschool_nursery_slider_width_options = get_theme_mod('preschool_nursery_slider_width_options', 'Full Width');
	if($preschool_nursery_slider_width_options == 'Full Width' ){
		$preschool_nursery_custom_css .='.page-template-home-custom #masthead{';
			$preschool_nursery_custom_css .=' position:absolute;';
		$preschool_nursery_custom_css .='}';
	}elseif($preschool_nursery_slider_width_options == 'Container Width' ){
		$preschool_nursery_custom_css .='.page-template-home-custom #masthead{';
			$preschool_nursery_custom_css .=' position:static;';
		$preschool_nursery_custom_css .='}';
		$preschool_nursery_custom_css .='.admin-bar.page-template-home-custom #masthead{';
			$preschool_nursery_custom_css .=' margin-top:0px;';
		$preschool_nursery_custom_css .='}';
	}

	 // Blog post image border radious
    $preschool_nursery_blog_post_img_border_radius = get_theme_mod('preschool_nursery_blog_post_img_border_radius', 0);
	$preschool_nursery_custom_css .='.post-image img{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_blog_post_img_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

     // Blog post image box shadow
	$preschool_nursery_blog_post_img_box_shadow = get_theme_mod('preschool_nursery_blog_post_img_box_shadow',0);
	$preschool_nursery_custom_css .='.post-image img{';
		$preschool_nursery_custom_css .='box-shadow: '.esc_attr($preschool_nursery_blog_post_img_box_shadow).'px '.esc_attr($preschool_nursery_blog_post_img_box_shadow).'px '.esc_attr($preschool_nursery_blog_post_img_box_shadow).'px #ccc;';
	$preschool_nursery_custom_css .='}';

    // Single post image border radious
	$preschool_nursery_single_post_img_border_radius = get_theme_mod('preschool_nursery_single_post_img_border_radius', 0);
	$preschool_nursery_custom_css .='.blogger.singlebox .post-image img{';
		$preschool_nursery_custom_css .='border-radius: '.esc_attr($preschool_nursery_single_post_img_border_radius).'px;';
	$preschool_nursery_custom_css .='}';

	 // Single post image box shadow
	$preschool_nursery_single_post_img_box_shadow = get_theme_mod('preschool_nursery_single_post_img_box_shadow',0);
	$preschool_nursery_custom_css .='.blogger.singlebox .post-image img{';
		$preschool_nursery_custom_css .='box-shadow: '.esc_attr($preschool_nursery_single_post_img_box_shadow).'px '.esc_attr($preschool_nursery_single_post_img_box_shadow).'px '.esc_attr($preschool_nursery_single_post_img_box_shadow).'px #ccc;';
	$preschool_nursery_custom_css .='}';

<?php
	
	$driving_school_lite_first_theme_color = get_theme_mod('driving_school_lite_first_theme_color');

	$driving_school_lite_custom_css = '';

	if($driving_school_lite_first_theme_color != false){
		$driving_school_lite_custom_css .=' #footer input[type="submit"], .bradcrumbs a:hover, #sidebar .tagcloud a:hover, input[type="submit"],.topbar, h1.page-title, h1.search-title, #slider .carousel-caption, .blogbtn a, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .widget_calendar tbody a, .wrap input[type="submit"], .contact-icon,a.button{';
			$driving_school_lite_custom_css .='background-color: '.esc_attr($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}
	if($driving_school_lite_first_theme_color != false){
		$driving_school_lite_custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #our-features .right-part:hover h3, #our-features .right-part:hover a, .post-info i, a, .nav-menu li a:hover, .enroll span a:hover, #header span.location i, .social-media i, .social-media i:hover, .logo h1 a:hover,  #our-features h2, .footerinner ul li a:hover, .woocommerce-message::before, span.post-title, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$driving_school_lite_custom_css .='color: '.esc_attr($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}
	if($driving_school_lite_first_theme_color != false){
		$driving_school_lite_custom_css .=' #our-features .right-part:hover h3, #our-features .right-part:hover a, #our-features hr.head, .woocommerce-message, #sidebar .widget{';
			$driving_school_lite_custom_css .='border-color: '.esc_attr($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}

	// Layout Options
	$driving_school_lite_theme_layout = get_theme_mod( 'driving_school_lite_theme_layout_options','Default Theme');
    if($driving_school_lite_theme_layout == 'Default Theme'){
		$driving_school_lite_custom_css .='body{';
			$driving_school_lite_custom_css .='max-width: 100%;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_theme_layout == 'Container Theme'){
		$driving_school_lite_custom_css .='body{';
			$driving_school_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_theme_layout == 'Box Container Theme'){
		$driving_school_lite_custom_css .='body{';
			$driving_school_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$driving_school_lite_custom_css .='}';
	}

	/*----------------Slider Content Layout --------------*/

	$driving_school_lite_slider_layout = get_theme_mod( 'driving_school_lite_slider_alignment_option','Left Align');
    if($driving_school_lite_slider_layout == 'Left Align'){
		$driving_school_lite_custom_css .='#slider .carousel-caption{';
			$driving_school_lite_custom_css .='text-align:left; left:0;
						   -webkit-clip-path: polygon(0 0, 100% 0, 75% 100%, 100% 100%, 0 100%); 
						   clip-path: polygon(0 0, 100% 0, 75% 100%, 100% 100%, 0% 100%);';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$driving_school_lite_custom_css .='text-align:left;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_slider_layout == 'Center Align'){
		$driving_school_lite_custom_css .='#slider .carousel-caption{';
			$driving_school_lite_custom_css .='text-align:center; left:30%; right:30%; clip-path:none; top:15%; bottom:30%;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .carousel-caption.d-none.d-md-block{';
			$driving_school_lite_custom_css .=' width:auto; height:auto; padding:0';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$driving_school_lite_custom_css .='text-align:center;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='@media screen and (max-width: 720px) and (min-width: 320px){
			#slider .more-btn{';
			$driving_school_lite_custom_css .='padding:20px 0;';
		$driving_school_lite_custom_css .='} }';
		$driving_school_lite_custom_css .='#slider .inner_carousel{';
			$driving_school_lite_custom_css .='padding:4%; background-color:#ffc61a;';
		$driving_school_lite_custom_css .='}';
	}else if($driving_school_lite_slider_layout == 'Right Align'){
		$driving_school_lite_custom_css .='#slider .carousel-caption{';
			$driving_school_lite_custom_css .='text-align:right;
						   right:0; left:auto;
						   -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 25% 100%); 
						   clip-path: polygon(0 0, 100% 0, 100% 100%, 100% 100%, 25% 100%);';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='#slider .inner_carousel p, #slider .inner_carousel h1, .more-btn{';
			$driving_school_lite_custom_css .='text-align:right;';
		$driving_school_lite_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$driving_school_lite_preloader_color = get_theme_mod('driving_school_lite_preloader_color');

	if($driving_school_lite_preloader_color != false){
		$driving_school_lite_custom_css .=' .tg-loader{';
			$driving_school_lite_custom_css .='border-color: '.esc_attr($driving_school_lite_preloader_color).';';
		$driving_school_lite_custom_css .='} ';
		$driving_school_lite_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$driving_school_lite_custom_css .='background-color: '.esc_attr($driving_school_lite_preloader_color).';';
		$driving_school_lite_custom_css .='} ';
	}

	$driving_school_lite_preloader_bg_color = get_theme_mod('driving_school_lite_preloader_bg_color');

	if($driving_school_lite_preloader_bg_color != false){
		$driving_school_lite_custom_css .=' #overlayer, .preloader{';
			$driving_school_lite_custom_css .='background-color: '.esc_attr($driving_school_lite_preloader_bg_color).';';
		$driving_school_lite_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/
	$driving_school_lite_top_button_padding = get_theme_mod('driving_school_lite_top_button_padding');
	$driving_school_lite_bottom_button_padding = get_theme_mod('driving_school_lite_bottom_button_padding');
	$driving_school_lite_left_button_padding = get_theme_mod('driving_school_lite_left_button_padding');
	$driving_school_lite_right_button_padding = get_theme_mod('driving_school_lite_right_button_padding');
	if($driving_school_lite_top_button_padding != false || $driving_school_lite_bottom_button_padding != false || $driving_school_lite_left_button_padding != false || $driving_school_lite_right_button_padding != false){
		$driving_school_lite_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$driving_school_lite_custom_css .='padding-top: '.esc_attr($driving_school_lite_top_button_padding).'px; padding-bottom: '.esc_attr($driving_school_lite_bottom_button_padding).'px; padding-left: '.esc_attr($driving_school_lite_left_button_padding).'px; padding-right: '.esc_attr($driving_school_lite_right_button_padding).'px; display:inline-block;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_button_border_radius = get_theme_mod('driving_school_lite_button_border_radius');
	$driving_school_lite_custom_css .='.more-btn span, .more-btn a, .blogbtn a, #comments input[type="submit"].submit{';
		$driving_school_lite_custom_css .='border-radius: '.esc_attr($driving_school_lite_button_border_radius).'px;';
	$driving_school_lite_custom_css .='}';

	/*----------- Copyright css -----*/
	$driving_school_lite_copyright_top_padding = get_theme_mod('driving_school_lite_top_copyright_padding');
	$driving_school_lite_copyright_bottom_padding = get_theme_mod('driving_school_lite_top_copyright_padding');
	if($driving_school_lite_copyright_top_padding != false || $driving_school_lite_copyright_bottom_padding != false){
		$driving_school_lite_custom_css .='.copyright{';
			$driving_school_lite_custom_css .='padding-top: '.esc_attr($driving_school_lite_copyright_top_padding).'px; padding-bottom: '.esc_attr($driving_school_lite_copyright_bottom_padding).'px; ';
		$driving_school_lite_custom_css .='}';
	} 

	$driving_school_lite_copyright_alignment = get_theme_mod('driving_school_lite_copyright_alignment', 'center');
	if($driving_school_lite_copyright_alignment == 'center' ){
		$driving_school_lite_custom_css .='#footer .copyright p{';
			$driving_school_lite_custom_css .='text-align: '. $driving_school_lite_copyright_alignment .';';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_copyright_alignment == 'left' ){
		$driving_school_lite_custom_css .='#footer .copyright p{';
			$driving_school_lite_custom_css .=' text-align: '. $driving_school_lite_copyright_alignment .';';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_copyright_alignment == 'right' ){
		$driving_school_lite_custom_css .='#footer .copyright p{';
			$driving_school_lite_custom_css .='text-align: '. $driving_school_lite_copyright_alignment .';';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_copyright_font_size = get_theme_mod('driving_school_lite_copyright_font_size');
	$driving_school_lite_custom_css .='#footer .copyright p{';
		$driving_school_lite_custom_css .='font-size: '.esc_attr($driving_school_lite_copyright_font_size).'px;';
	$driving_school_lite_custom_css .='}';

	/*------ Topbar padding ------*/
	$driving_school_lite_top_topbar_padding = get_theme_mod('driving_school_lite_top_topbar_padding');
	$driving_school_lite_bottom_topbar_padding = get_theme_mod('driving_school_lite_bottom_topbar_padding');
	if($driving_school_lite_top_topbar_padding != false || $driving_school_lite_bottom_topbar_padding != false){
		$driving_school_lite_custom_css .='.topbar{';
			$driving_school_lite_custom_css .='padding-top: '.esc_attr($driving_school_lite_top_topbar_padding).'px; padding-bottom: '.esc_attr($driving_school_lite_bottom_topbar_padding).'px; ';
		$driving_school_lite_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$driving_school_lite_product_border = get_theme_mod('driving_school_lite_product_border',false);

	if($driving_school_lite_product_border == true){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$driving_school_lite_custom_css .='border: 1px solid '.esc_attr($driving_school_lite_first_theme_color).';';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_top = get_theme_mod('driving_school_lite_product_top_padding');
	$driving_school_lite_product_bottom = get_theme_mod('driving_school_lite_product_bottom_padding');
	$driving_school_lite_product_left = get_theme_mod('driving_school_lite_product_left_padding');
	$driving_school_lite_product_right = get_theme_mod('driving_school_lite_product_right_padding');
	if($driving_school_lite_product_top != false || $driving_school_lite_product_bottom != false || $driving_school_lite_product_left != false || $driving_school_lite_product_right != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$driving_school_lite_custom_css .='padding-top: '.esc_attr($driving_school_lite_product_top).'px; padding-bottom: '.esc_attr($driving_school_lite_product_bottom).'px; padding-left: '.esc_attr($driving_school_lite_product_left).'px; padding-right: '.esc_attr($driving_school_lite_product_right).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_border_radius = get_theme_mod('driving_school_lite_product_border_radius');
	if($driving_school_lite_product_border_radius != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$driving_school_lite_custom_css .='border-radius: '.esc_attr($driving_school_lite_product_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$driving_school_lite_product_button_top = get_theme_mod('driving_school_lite_product_button_top_padding',10);
	$driving_school_lite_product_button_bottom = get_theme_mod('driving_school_lite_product_button_bottom_padding',10);
	$driving_school_lite_product_button_left = get_theme_mod('driving_school_lite_product_button_left_padding',15);
	$driving_school_lite_product_button_right = get_theme_mod('driving_school_lite_product_button_right_padding',15);
	if($driving_school_lite_product_button_top != false || $driving_school_lite_product_button_bottom != false || $driving_school_lite_product_button_left != false || $driving_school_lite_product_button_right != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$driving_school_lite_custom_css .='padding-top: '.esc_attr($driving_school_lite_product_button_top).'px; padding-bottom: '.esc_attr($driving_school_lite_product_button_bottom).'px; padding-left: '.esc_attr($driving_school_lite_product_button_left).'px; padding-right: '.esc_attr($driving_school_lite_product_button_right).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_button_border_radius = get_theme_mod('driving_school_lite_product_button_border_radius');
	if($driving_school_lite_product_button_border_radius != false){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$driving_school_lite_custom_css .='border-radius: '.esc_attr($driving_school_lite_product_button_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$driving_school_lite_product_sale_top = get_theme_mod('driving_school_lite_product_sale_top_padding');
	$driving_school_lite_product_sale_bottom = get_theme_mod('driving_school_lite_product_sale_bottom_padding');
	$driving_school_lite_product_sale_left = get_theme_mod('driving_school_lite_product_sale_left_padding');
	$driving_school_lite_product_sale_right = get_theme_mod('driving_school_lite_product_sale_right_padding');
	if($driving_school_lite_product_sale_top != false || $driving_school_lite_product_sale_bottom != false || $driving_school_lite_product_sale_left != false || $driving_school_lite_product_sale_right != false){
		$driving_school_lite_custom_css .='.woocommerce span.onsale {';
			$driving_school_lite_custom_css .='padding-top: '.esc_attr($driving_school_lite_product_sale_top).'px; padding-bottom: '.esc_attr($driving_school_lite_product_sale_bottom).'px; padding-left: '.esc_attr($driving_school_lite_product_sale_left).'px; padding-right: '.esc_attr($driving_school_lite_product_sale_right).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_sale_border_radius = get_theme_mod('driving_school_lite_product_sale_border_radius',50);
	if($driving_school_lite_product_sale_border_radius != false){
		$driving_school_lite_custom_css .='.woocommerce span.onsale {';
			$driving_school_lite_custom_css .='border-radius: '.esc_attr($driving_school_lite_product_sale_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_menu_case = get_theme_mod('driving_school_lite_product_sale_position', 'Right');
	if($driving_school_lite_menu_case == 'Right' ){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$driving_school_lite_custom_css .=' left:auto; right:0;';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_menu_case == 'Left' ){
		$driving_school_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$driving_school_lite_custom_css .=' left:-10px; right:auto;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_product_sale_font_size = get_theme_mod('driving_school_lite_product_sale_font_size',13);
	$driving_school_lite_custom_css .='.woocommerce span.onsale {';
		$driving_school_lite_custom_css .='font-size: '.esc_attr($driving_school_lite_product_sale_font_size).'px;';
	$driving_school_lite_custom_css .='}';

	/*---- Comment form ----*/
	$driving_school_lite_comment_width = get_theme_mod('driving_school_lite_comment_width', '100');
	$driving_school_lite_custom_css .='#comments textarea{';
		$driving_school_lite_custom_css .=' width:'.esc_attr($driving_school_lite_comment_width).'%;';
	$driving_school_lite_custom_css .='}';

	$driving_school_lite_comment_submit_text = get_theme_mod('driving_school_lite_comment_submit_text', 'Post Comment');
	if($driving_school_lite_comment_submit_text == ''){
		$driving_school_lite_custom_css .='#comments p.form-submit {';
			$driving_school_lite_custom_css .='display: none;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_comment_title = get_theme_mod('driving_school_lite_comment_title', 'Leave a Reply');
	if($driving_school_lite_comment_title == ''){
		$driving_school_lite_custom_css .='#comments h2#reply-title {';
			$driving_school_lite_custom_css .='display: none;';
		$driving_school_lite_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$driving_school_lite_footer_bg_color = get_theme_mod('driving_school_lite_footer_bg_color');
	if($driving_school_lite_footer_bg_color != false){
		$driving_school_lite_custom_css .='#footer{';
			$driving_school_lite_custom_css .='background-color: '.esc_attr($driving_school_lite_footer_bg_color).';';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_footer_bg_image = get_theme_mod('driving_school_lite_footer_bg_image');
	if($driving_school_lite_footer_bg_image != false){
		$driving_school_lite_custom_css .='#footer{';
			$driving_school_lite_custom_css .='background: url('.esc_attr($driving_school_lite_footer_bg_image).');';
		$driving_school_lite_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$driving_school_lite_feature_image_border_radius = get_theme_mod('driving_school_lite_feature_image_border_radius');
	if($driving_school_lite_feature_image_border_radius != false){
		$driving_school_lite_custom_css .='.blog-sec img{';
			$driving_school_lite_custom_css .='border-radius: '.esc_attr($driving_school_lite_feature_image_border_radius).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_feature_image_shadow = get_theme_mod('driving_school_lite_feature_image_shadow');
	if($driving_school_lite_feature_image_shadow != false){
		$driving_school_lite_custom_css .='.blog-sec img{';
			$driving_school_lite_custom_css .='box-shadow: '.esc_attr($driving_school_lite_feature_image_shadow).'px '.esc_attr($driving_school_lite_feature_image_shadow).'px '.esc_attr($driving_school_lite_feature_image_shadow).'px #aaa;';
		$driving_school_lite_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$driving_school_lite_top_sticky_header_padding = get_theme_mod('driving_school_lite_top_sticky_header_padding');
	$driving_school_lite_bottom_sticky_header_padding = get_theme_mod('driving_school_lite_bottom_sticky_header_padding');
	$driving_school_lite_custom_css .=' .fixed-header{';
		$driving_school_lite_custom_css .=' padding-top: '.esc_attr($driving_school_lite_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($driving_school_lite_bottom_sticky_header_padding).'px';
	$driving_school_lite_custom_css .='}';

	// featured image dimention
	$driving_school_lite_blog_image_dimension = get_theme_mod('driving_school_lite_blog_image_dimension', 'default');
	$driving_school_lite_feature_image_custom_width = get_theme_mod('driving_school_lite_feature_image_custom_width',250);
	$driving_school_lite_feature_image_custom_height = get_theme_mod('driving_school_lite_feature_image_custom_height',250);
	if($driving_school_lite_blog_image_dimension == 'custom'){
		$driving_school_lite_custom_css .='.blog-sec img{';
			$driving_school_lite_custom_css .='width: '.esc_attr($driving_school_lite_feature_image_custom_width).'px; height: '.esc_attr($driving_school_lite_feature_image_custom_height).'px;';
		$driving_school_lite_custom_css .='}';
	}

	/*------ Related products ---------*/
	$driving_school_lite_related_products = get_theme_mod('driving_school_lite_single_related_products',true);
	if($driving_school_lite_related_products == false){
		$driving_school_lite_custom_css .=' .related.products{';
			$driving_school_lite_custom_css .='display: none;';
		$driving_school_lite_custom_css .='}';
	}

	/*---- nav menu css ----*/
	if (!has_nav_menu('primary')){
		$driving_school_lite_custom_css .=' hr.dash{';
			$driving_school_lite_custom_css .='margin-top: -8px;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .=' @media screen and (max-width:1000px){
			hr.dash{';
			$driving_school_lite_custom_css .='margin-top: -30px;';
		$driving_school_lite_custom_css .='} }';
	}

	/*-------- Menu Font Size --------*/
	$driving_school_lite_menu_font_size = get_theme_mod('driving_school_lite_menu_font_size',14);
	if($driving_school_lite_menu_font_size != false){
		$driving_school_lite_custom_css .='.nav-menu li a{';
			$driving_school_lite_custom_css .='font-size: '.esc_attr($driving_school_lite_menu_font_size).'px;';
		$driving_school_lite_custom_css .='}';
	}

	$driving_school_lite_menu_font_weight = get_theme_mod('driving_school_lite_menu_font_weight');
	$driving_school_lite_custom_css .='.nav-menu li a{';
		$driving_school_lite_custom_css .='font-weight: '.esc_attr($driving_school_lite_menu_font_weight).';';
	$driving_school_lite_custom_css .='}';

	$driving_school_lite_menu_case = get_theme_mod('driving_school_lite_menu_case', 'uppercase');
	if($driving_school_lite_menu_case == 'uppercase' ){
		$driving_school_lite_custom_css .='.nav-menu li a{';
			$driving_school_lite_custom_css .=' text-transform: uppercase;';
		$driving_school_lite_custom_css .='}';
	}elseif($driving_school_lite_menu_case == 'capitalize' ){
		$driving_school_lite_custom_css .='.nav-menu li a{';
			$driving_school_lite_custom_css .=' text-transform: capitalize;';
		$driving_school_lite_custom_css .='}';
	}

	// Social Icons Font Size
	$driving_school_lite_social_icons_font_size = get_theme_mod('driving_school_lite_social_icons_font_size', '15');
	$driving_school_lite_custom_css .='.social-media i{';
		$driving_school_lite_custom_css .='font-size: '.esc_attr($driving_school_lite_social_icons_font_size).'px;';
	$driving_school_lite_custom_css .='}';

	// Featured image header
	$header_image_url = driving_school_lite_banner_image( $image_url = '' );
	$driving_school_lite_custom_css .='#page-site-header{';
		$driving_school_lite_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$driving_school_lite_custom_css .='}';

	$driving_school_lite_post_featured_image = get_theme_mod('driving_school_lite_post_featured_image', 'in-content');
	if($driving_school_lite_post_featured_image == 'banner' ){
		$driving_school_lite_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img, .page .title-box h1{';
			$driving_school_lite_custom_css .=' display: none;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='.page-template-custom-front-page #page-site-header{';
			$driving_school_lite_custom_css .=' display: none;';
		$driving_school_lite_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$driving_school_lite_shop_page_navigation = get_theme_mod('driving_school_lite_shop_page_navigation',true);
	if ($driving_school_lite_shop_page_navigation == false) {
		$driving_school_lite_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$driving_school_lite_custom_css .='display: none;';
		$driving_school_lite_custom_css .='}';
	}

	/*---- Slider Height ------*/
	$driving_school_lite_slider_height = get_theme_mod('driving_school_lite_slider_height');
	$driving_school_lite_custom_css .='#slider img{';
		$driving_school_lite_custom_css .='height: '.esc_attr($driving_school_lite_slider_height).'px;';
	$driving_school_lite_custom_css .='}';
	$driving_school_lite_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$driving_school_lite_custom_css .='height: auto;';
	$driving_school_lite_custom_css .='} }';

	/*----- Blog Post display type css ------*/
	$driving_school_lite_blog_post_display_type = get_theme_mod('driving_school_lite_blog_post_display_type', 'blocks');
	if($driving_school_lite_blog_post_display_type == 'without blocks' ){
		$driving_school_lite_custom_css .='.blog .blog-sec{';
			$driving_school_lite_custom_css .='border: 0;';
		$driving_school_lite_custom_css .='}';
	}

	/*---------- Responsive style ---------*/
	if (get_theme_mod('driving_school_lite_hide_topbar_responsive',true) == true && get_theme_mod('driving_school_lite_top_header',true) == false) {
		$driving_school_lite_custom_css .='.topbar{';
			$driving_school_lite_custom_css .=' display: none;';
		$driving_school_lite_custom_css .='} ';
	}
	if (get_theme_mod('driving_school_lite_hide_topbar_responsive',true) == false) {
		$driving_school_lite_custom_css .='@media screen and (max-width: 575px){
			.topbar{';
			$driving_school_lite_custom_css .=' display: none;';
		$driving_school_lite_custom_css .='} }';
	} else if(get_theme_mod('driving_school_lite_hide_topbar_responsive',true) == true){
		$driving_school_lite_custom_css .='@media screen and (max-width: 575px){
			.topbar{';
			$driving_school_lite_custom_css .=' display: block;';
		$driving_school_lite_custom_css .='} }';
	}

	if (get_theme_mod('driving_school_lite_sticky_header_responsive') == false) {
		$driving_school_lite_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$driving_school_lite_custom_css .=' position: static;';
		$driving_school_lite_custom_css .='} }';
	}

	// Metabox Seperator
	$driving_school_lite_metabox_seperator = get_theme_mod('driving_school_lite_metabox_seperator','|');
	if($driving_school_lite_metabox_seperator != '' ){
		$driving_school_lite_custom_css .='.post-info span:after{';
			$driving_school_lite_custom_css .=' content: "'.esc_attr($driving_school_lite_metabox_seperator).'"; padding-left:10px;';
		$driving_school_lite_custom_css .='}';
		$driving_school_lite_custom_css .='.post-info span:last-child:after{';
			$driving_school_lite_custom_css .=' content: none;';
		$driving_school_lite_custom_css .='}';
	}

	// Site title Font Size
	$driving_school_lite_site_title_font_size = get_theme_mod('driving_school_lite_site_title_font_size', '25');
	$driving_school_lite_custom_css .='.logo h1, .logo p.site-title{';
		$driving_school_lite_custom_css .='font-size: '.esc_attr($driving_school_lite_site_title_font_size).'px;';
	$driving_school_lite_custom_css .='}';

	// Site tagline Font Size
	$driving_school_lite_site_tagline_font_size = get_theme_mod('driving_school_lite_site_tagline_font_size', '12');
	$driving_school_lite_custom_css .='.logo p.site-description{';
		$driving_school_lite_custom_css .='font-size: '.esc_attr($driving_school_lite_site_tagline_font_size).'px;';
	$driving_school_lite_custom_css .='}';

	/*---- Slider Content Position -----*/
	$driving_school_lite_top_position = get_theme_mod('driving_school_lite_slider_top_position');
	$driving_school_lite_bottom_position = get_theme_mod('driving_school_lite_slider_bottom_position');
	$driving_school_lite_left_position = get_theme_mod('driving_school_lite_slider_left_position');
	$driving_school_lite_right_position = get_theme_mod('driving_school_lite_slider_right_position');
	if($driving_school_lite_top_position != false || $driving_school_lite_bottom_position != false || $driving_school_lite_left_position != false || $driving_school_lite_right_position != false){
		$driving_school_lite_custom_css .='#slider .inner_carousel{';
			$driving_school_lite_custom_css .='top: '.esc_attr($driving_school_lite_top_position).'%; bottom: '.esc_attr($driving_school_lite_bottom_position).'%; left: '.esc_attr($driving_school_lite_left_position).'%; right: '.esc_attr($driving_school_lite_right_position).'%;';
		$driving_school_lite_custom_css .='}';
	}

	// responsive settings
	if (get_theme_mod('driving_school_lite_preloader_responsive',false) == true && get_theme_mod('driving_school_lite_preloader',false) == false) {
		$driving_school_lite_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$driving_school_lite_custom_css .=' visibility: hidden;';
		$driving_school_lite_custom_css .='} }';
	}
	if (get_theme_mod('driving_school_lite_preloader_responsive',false) == false) {
		$driving_school_lite_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$driving_school_lite_custom_css .=' visibility: hidden;';
		$driving_school_lite_custom_css .='} }';
	}

	// scroll to top
	$driving_school_lite_scroll = get_theme_mod( 'driving_school_lite_backtotop_responsive',true);
	if (get_theme_mod('driving_school_lite_backtotop_responsive',true) == true && get_theme_mod('driving_school_lite_hide_scroll',true) == false) {
    	$driving_school_lite_custom_css .='.show-back-to-top{';
			$driving_school_lite_custom_css .='visibility: hidden !important;';
		$driving_school_lite_custom_css .='} ';
	}
    if($driving_school_lite_scroll == true){
    	$driving_school_lite_custom_css .='@media screen and (max-width:575px) {';
		$driving_school_lite_custom_css .='.show-back-to-top{';
			$driving_school_lite_custom_css .='visibility: visible !important;';
		$driving_school_lite_custom_css .='} }';
	}else if($driving_school_lite_scroll == false){
		$driving_school_lite_custom_css .='@media screen and (max-width:575px) {';
		$driving_school_lite_custom_css .='.show-back-to-top{';
			$driving_school_lite_custom_css .='visibility: hidden !important;';
		$driving_school_lite_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$driving_school_lite_copyright_bg_color = get_theme_mod('driving_school_lite_copyright_bg_color');
	if($driving_school_lite_copyright_bg_color != false){
		$driving_school_lite_custom_css .='.inner{';
			$driving_school_lite_custom_css .='background-color: '.esc_attr($driving_school_lite_copyright_bg_color).';';
		$driving_school_lite_custom_css .='}';
	}

	// site logo padding 
	$driving_school_lite_logo_spacing = get_theme_mod('driving_school_lite_logo_spacing', '');
	$driving_school_lite_custom_css .='.logo{';
	$driving_school_lite_custom_css .='padding: '.esc_attr($driving_school_lite_logo_spacing).'px !important;';
	$driving_school_lite_custom_css .='}';

	// site title color
	$driving_school_lite_site_title_text_color = get_theme_mod('driving_school_lite_site_title_text_color');
	$driving_school_lite_custom_css .='.logo h1 a, .logo p.site-title a{';
		$driving_school_lite_custom_css .='color: '.esc_attr($driving_school_lite_site_title_text_color).' !important;';
	$driving_school_lite_custom_css .='}';

	// site tagline color
	$driving_school_lite_site_tagline_text_color = get_theme_mod('driving_school_lite_site_tagline_text_color');
	$driving_school_lite_custom_css .='.logo p.site-description{';
		$driving_school_lite_custom_css .='color: '.esc_attr($driving_school_lite_site_tagline_text_color).' !important;';
	$driving_school_lite_custom_css .='}';
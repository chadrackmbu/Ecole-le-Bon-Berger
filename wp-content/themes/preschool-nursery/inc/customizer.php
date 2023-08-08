<?php
/**
 * Preschool Nursery: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function preschool_nursery_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	$wp_customize->add_panel( 'preschool_nursery_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'preschool-nursery' ),
		'description' => __( 'Description of what this panel does.', 'preschool-nursery' ),
	) );

	// font array
	$preschool_nursery_font_array = array(
		'' => 'No Fonts',
		'Abril Fatface' => 'Abril Fatface',
		'Acme' => 'Acme',
		'Anton' => 'Anton',
		'Architects Daughter' => 'Architects Daughter',
		'Arimo' => 'Arimo',
		'Arsenal' => 'Arsenal', 
		'Arvo' => 'Arvo',
		'Alegreya' => 'Alegreya',
		'Alfa Slab One' => 'Alfa Slab One',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bangers' => 'Bangers', 
		'Boogaloo' => 'Boogaloo',
		'Bad Script' => 'Bad Script',
		'Bitter' => 'Bitter',
		'Bree Serif' => 'Bree Serif',
		'BenchNine' => 'BenchNine', 
		'Cabin' => 'Cabin', 
		'Cardo' => 'Cardo',
		'Courgette' => 'Courgette',
		'Cherry Swash' => 'Cherry Swash',
		'Cormorant Garamond' => 'Cormorant Garamond',
		'Crimson Text' => 'Crimson Text',
		'Cuprum' => 'Cuprum', 
		'Cookie' => 'Cookie', 
		'Chewy' => 'Chewy', 
		'Days One' => 'Days One', 
		'Dosis' => 'Dosis',
		'Droid Sans' => 'Droid Sans',
		'Economica' => 'Economica',
		'Fredoka One' => 'Fredoka One',
		'Fjalla One' => 'Fjalla One',
		'Francois One' => 'Francois One',
		'Frank Ruhl Libre' => 'Frank Ruhl Libre',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Great Vibes' => 'Great Vibes',
		'Handlee' => 'Handlee', 
		'Hammersmith One' => 'Hammersmith One',
		'Inconsolata' => 'Inconsolata', 
		'Indie Flower' => 'Indie Flower', 
		'IM Fell English SC' => 'IM Fell English SC', 
		'Julius Sans One' => 'Julius Sans One',
		'Josefin Slab' => 'Josefin Slab', 
		'Josefin Sans' => 'Josefin Sans', 
		'Kanit' => 'Kanit', 
		'Lobster' => 'Lobster', 
		'Lato' => 'Lato',
		'Lora' => 'Lora', 
		'Libre Baskerville' =>'Libre Baskerville',
		'Lobster Two' => 'Lobster Two',
		'Merriweather' =>'Merriweather', 
		'Monda' => 'Monda',
		'Montserrat' => 'Montserrat',
		'Muli' => 'Muli', 
		'Marck Script' => 'Marck Script',
		'Noto Serif' => 'Noto Serif',
		'Open Sans' => 'Open Sans', 
		'Overpass' => 'Overpass',
		'Overpass Mono' => 'Overpass Mono',
		'Oxygen' => 'Oxygen', 
		'Orbitron' => 'Orbitron', 
		'Patua One' => 'Patua One', 
		'Pacifico' => 'Pacifico',
		'Padauk' => 'Padauk', 
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display', 
		'PT Sans' => 'PT Sans',
		'Philosopher' => 'Philosopher',
		'Permanent Marker' => 'Permanent Marker',
		'Poiret One' => 'Poiret One', 
		'Quicksand' => 'Quicksand', 
		'Quattrocento Sans' => 'Quattrocento Sans', 
		'Raleway' => 'Raleway', 
		'Rubik' => 'Rubik', 
		'Rokkitt' => 'Rokkitt', 
		'Russo One' => 'Russo One', 
		'Righteous' => 'Righteous', 
		'Slabo' => 'Slabo', 
		'Source Sans Pro' => 'Source Sans Pro', 
		'Shadows Into Light Two' =>'Shadows Into Light Two', 
		'Shadows Into Light' => 'Shadows Into Light', 
		'Sacramento' => 'Sacramento', 
		'Shrikhand' => 'Shrikhand', 
		'Tangerine' => 'Tangerine',
		'Ubuntu' => 'Ubuntu', 
		'VT323' => 'VT323', 
		'Varela Round' => 'Varela Round', 
		'Vampiro One' => 'Vampiro One',
		'Vollkorn' => 'Vollkorn',
		'Volkhov' => 'Volkhov', 
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
 	);
    
	//Typography
	$wp_customize->add_section( 'preschool_nursery_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'preschool-nursery' ),
		'panel' => 'preschool_nursery_panel_id'
	) );

	// This is Body Color setting
	$wp_customize->add_setting( 'preschool_nursery_body_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_body_color', array(
		'label' => __('Body Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_body_color',
	)));

	//This is Body FontFamily  setting
	$wp_customize->add_setting('preschool_nursery_body_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_body_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'Body Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

    //This is Body Fontsize setting
	$wp_customize->add_setting('preschool_nursery_body_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_body_font_size',array(
		'label'	=> __('Body Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_body_font_size',
		'type'	=> 'text'
	));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_paragraph_color', array(
		'label' => __('Paragraph Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_paragraph_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'Paragraph Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	$wp_customize->add_setting('preschool_nursery_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_atag_color', array(
		'label' => __('"a" Tag Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_atag_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( '"a" Tag Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_li_color', array(
		'label' => __('"li" Tag Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_li_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( '"li" Tag Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_h1_color', array(
		'label' => __('H1 Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_h1_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'H1 Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('preschool_nursery_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_h1_font_size',array(
		'label'	=> __('H1 Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_h2_color', array(
		'label' => __('h2 Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_h2_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'h2 Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('preschool_nursery_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_h2_font_size',array(
		'label'	=> __('h2 Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_h3_color', array(
		'label' => __('h3 Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_h3_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'h3 Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('preschool_nursery_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_h3_font_size',array(
		'label'	=> __('h3 Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_h4_color', array(
		'label' => __('h4 Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_h4_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'h4 Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('preschool_nursery_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_h4_font_size',array(
		'label'	=> __('h4 Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_h5_color', array(
		'label' => __('h5 Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_h5_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'h5 Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('preschool_nursery_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_h5_font_size',array(
		'label'	=> __('h5 Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'preschool_nursery_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_h6_color', array(
		'label' => __('h6 Color', 'preschool-nursery'),
		'section' => 'preschool_nursery_typography',
		'settings' => 'preschool_nursery_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('preschool_nursery_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control(
		'preschool_nursery_h6_font_family', array(
		'section'  => 'preschool_nursery_typography',
		'label'    => __( 'h6 Fonts','preschool-nursery'),
		'type'     => 'select',
		'choices'  => $preschool_nursery_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('preschool_nursery_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_h6_font_size',array(
		'label'	=> __('h6 Font Size','preschool-nursery'),
		'section'	=> 'preschool_nursery_typography',
		'setting'	=> 'preschool_nursery_h6_font_size',
		'type'	=> 'text'
	));

	// background skin mode
	$wp_customize->add_setting('preschool_nursery_background_image_type',array(
     	'default' => 'Transparent',
     	'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_background_image_type',array(
     	'type' => 'radio',
     	'label' => __('Background Skin Mode','preschool-nursery'),
     	'section' => 'background_image',
     	'choices' => array(
         'Transparent' => __('Transparent','preschool-nursery'),
         'Background' => __('Background','preschool-nursery'),
     	),
	) );

  	// woocommerce Options
	$wp_customize->add_section( 'preschool_nursery_shop_page_options', array(
    	'title'      => __( 'Shop Page Settings', 'preschool-nursery' ),
		'panel' => 'preschool_nursery_panel_id'
	) );

	$wp_customize->add_setting('preschool_nursery_display_related_products',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_display_related_products',array(
		'type' => 'checkbox',
		'label' => __('Related Product','preschool-nursery'),
		'section' => 'preschool_nursery_shop_page_options',
	));

	$wp_customize->add_setting('preschool_nursery_shop_products_border',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_shop_products_border',array(
		'type' => 'checkbox',
		'label' => __('Product Border','preschool-nursery'),
		'section' => 'preschool_nursery_shop_page_options',
	));

  	$wp_customize->add_setting('preschool_nursery_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Shop Page Sidebar','preschool-nursery'),
		'section' => 'preschool_nursery_shop_page_options',
	));

 	$wp_customize->add_setting('preschool_nursery_single_product_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_single_product_sidebar',array(
     	'type' => 'checkbox',
   	'label' => __('Enable / Disable Single Product Sidebar','preschool-nursery'),
   	'section' => 'preschool_nursery_shop_page_options',
	));

	$wp_customize->add_setting( 'preschool_nursery_woocommerce_product_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'preschool_nursery_sanitize_choices',
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'preschool_nursery_woocommerce_product_per_columns', array(
		'label'    => __( 'Total Products Per Columns', 'preschool-nursery' ),
		'section'  => 'preschool_nursery_shop_page_options',
		'type'     => 'radio',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	) ) );

	$wp_customize->add_setting('preschool_nursery_woocommerce_product_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));	
	$wp_customize->add_control('preschool_nursery_woocommerce_product_per_page',array(
		'label'	=> __('Total Products Per Page','preschool-nursery'),
		'section'	=> 'preschool_nursery_shop_page_options',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_shop_page_top_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control( 'preschool_nursery_shop_page_top_padding',	array(
		'label' => esc_html__( 'Product Padding (Top Bottom)','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_shop_page_left_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control( 'preschool_nursery_shop_page_left_padding',	array(
		'label' => esc_html__( 'Product Padding (Right Left)','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_shop_page_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_shop_page_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_shop_page_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_shop_page_box_shadow',array(
		'label' => esc_html__( 'Product Shadow','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_shop_button_padding_top',array(
		'default' => 9,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_shop_button_padding_top',	array(
		'label' => esc_html__( 'Button Padding (Top Bottom)','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'preschool_nursery_shop_button_padding_left',array(
		'default' => 16,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_shop_button_padding_left',array(
		'label' => esc_html__( 'Button Padding (Right Left)','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'preschool_nursery_shop_button_border_radius',array(
		'default' => 5,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_shop_button_border_radius',array(
		'label' => esc_html__( 'Button Border Radius','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('preschool_nursery_position_product_sale',array(
		'default' => 'Right',
		'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_position_product_sale',array(
		'type' => 'radio',
		'label' => __('Product Sale Position','preschool-nursery'),
		'section' => 'preschool_nursery_shop_page_options',
		'choices' => array(
		   'Right' => __('Right','preschool-nursery'),
		   'Left' => __('Left','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting( 'preschool_nursery_border_radius_product_sale_text',array(
		'default' => 50,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_border_radius_product_sale_text', array(
		'label'  => __('Product Sale Border Radius','preschool-nursery'),
		'section'  => 'preschool_nursery_shop_page_options',
		'type'        => 'number',
		'input_attrs' => array(
			'step'=> 1,
		   'min' => 0,
		   'max' => 50,
		)
    ) );

	$wp_customize->add_setting('preschool_nursery_product_sale_text_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float'
	));
	$wp_customize->add_control('preschool_nursery_product_sale_text_size',array(
		'label'	=> __('Product Sale Text Size','preschool-nursery'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_shop_page_options',
		'type'=> 'number'
	));
	
	$wp_customize->add_setting( 'preschool_nursery_top_bottom_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_top_bottom_product_sale_padding',	array(
		'label' => esc_html__( 'Top / Bottom Product Sale Padding','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'preschool_nursery_left_right_product_sale_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_left_right_product_sale_padding',array(
		'label' => esc_html__( 'Left / Right Product Sale Padding','preschool-nursery' ),
		'section' => 'preschool_nursery_shop_page_options',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('preschool_nursery_shop_products_navigation',array(
		'default' => 'Yes',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_shop_products_navigation',array(
		'type' => 'radio',
		'label' => __('Woocommerce Products Navigation','preschool-nursery'),
		'choices' => array(
		   'Yes' => __('Yes','preschool-nursery'),
		   'No' => __('No','preschool-nursery'),
		),
		'section' => 'preschool_nursery_shop_page_options',
    ));

  	//Layout Settings
	$wp_customize->add_section( 'preschool_nursery_width_layout', array(
    	'title'      => __( 'Layout Settings', 'preschool-nursery' ),
		'panel' => 'preschool_nursery_panel_id'
	) );

	//Sticky Header
	$wp_customize->add_setting( 'preschool_nursery_fixed_header',array(
		'default' => false,
   	'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
 	) );
 	$wp_customize->add_control('preschool_nursery_fixed_header',array(
    	'type' => 'checkbox',
		'label' => __( 'Enable / Disable Fixed Header','preschool-nursery' ),
		'section' => 'preschool_nursery_width_layout'
    ));

 	$wp_customize->add_setting( 'preschool_nursery_fixed_header_padding_option', array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_fixed_header_padding_option', array(
		'label'       => esc_html__( 'Fixed Header Padding','preschool-nursery' ),
		'section'     => 'preschool_nursery_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('preschool_nursery_loader_setting',array(
		'default' => false,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_loader_setting',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Preloader','preschool-nursery'),
		'section' => 'preschool_nursery_width_layout'
	));

 	$wp_customize->add_setting('preschool_nursery_preloader_types',array(
     'default' => 'Default',
     'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_preloader_types',array(
		'type' => 'radio',
		'label' => __('Preloader Option','preschool-nursery'),
		'section' => 'preschool_nursery_width_layout',
		'choices' => array(
		   'Default' => __('Default','preschool-nursery'),
		   'Circle' => __('Circle','preschool-nursery'),
		   'Two Circle' => __('Two Circle','preschool-nursery')
		),
	) );

 	$wp_customize->add_setting( 'preschool_nursery_loader_color_setting', array(
		'default' => '#fff',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_loader_color_setting', array(
  		'label' => __('Preloader Color Option', 'preschool-nursery'),
		'section' => 'preschool_nursery_width_layout',
		'settings' => 'preschool_nursery_loader_color_setting',
  	)));

  	$wp_customize->add_setting( 'preschool_nursery_loader_background_color', array(
		'default' => '#000',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_loader_background_color', array(
  		'label' => __('Preloader Background Color Option', 'preschool-nursery'),
		'section' => 'preschool_nursery_width_layout',
		'settings' => 'preschool_nursery_loader_background_color',
  	)));

	$wp_customize->add_setting('preschool_nursery_theme_options',array(
    	'default' => 'Default',
     	'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_theme_options',array(
		'type' => 'select',
		'label' => __('Container Box','preschool-nursery'),
		'description' => __('Here you can change the Width layout. ','preschool-nursery'),
		'section' => 'preschool_nursery_width_layout',
		'choices' => array(
		   'Default' => __('Default','preschool-nursery'),
		   'Wide Layout' => __('Wide Layout','preschool-nursery'),
		   'Box Layout' => __('Box Layout','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting( 'preschool_nursery_post_image_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_post_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','preschool-nursery' ),
		'section'     => 'preschool_nursery_width_layout',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'preschool_nursery_featured_image_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'preschool_nursery_sanitize_number_range',
	));
	$wp_customize->add_control('preschool_nursery_featured_image_box_shadow',array(
		'label' => esc_html__( 'Featured Image Shadow','preschool-nursery' ),
		'section' => 'preschool_nursery_width_layout',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	// Button Settings
	$wp_customize->add_section( 'preschool_nursery_button_option', array(
		'title' => __('Button','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));

	$wp_customize->add_setting('preschool_nursery_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','preschool-nursery'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('preschool_nursery_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_left_right_padding',array(
		'label'	=> __('Left and Right Padding','preschool-nursery'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','preschool-nursery' ),
		'section'     => 'preschool_nursery_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// sidebar setting
	$wp_customize->add_section( 'preschool_nursery_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'preschool-nursery' ),
		'panel' => 'preschool_nursery_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('preschool_nursery_layout_settings',array(
     'default' => 'Right Sidebar',
     'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_layout_settings',array(
		'type' => 'radio',
		'label' => __('Post Sidebar Layout','preschool-nursery'),
		'section' => 'preschool_nursery_general_option',
		'description' => __('This option work for blog page, blog single page, archive page and search page.','preschool-nursery'),
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','preschool-nursery'),
		   'Right Sidebar' => __('Right Sidebar','preschool-nursery'),
		   'One Column' => __('Full Column','preschool-nursery'),
		   'Grid Layout' => __('Grid Layout','preschool-nursery')
		),
	) );

	$wp_customize->add_setting('preschool_nursery_page_sidebar_option',array(
     'default' => 'One Column',
     'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_page_sidebar_option',array(
     'type' => 'radio',
     'label' => __('Page Sidebar Layout','preschool-nursery'),
     'section' => 'preschool_nursery_general_option',
     'choices' => array(
         'Left Sidebar' => __('Left Sidebar','preschool-nursery'),
         'Right Sidebar' => __('Right Sidebar','preschool-nursery'),
         'One Column' => __('Full Column','preschool-nursery')
     ),
	) );

	//Topbar section
	$wp_customize->add_section('preschool_nursery_contact_details',array(
		'title'	=> __('Topbar Section','preschool-nursery'),
		'description'	=> __('Add Header Content here','preschool-nursery'),
		'priority'	=> null,
		'panel' => 'preschool_nursery_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'preschool_nursery_show_hide_topbar',array(
		'default' => false,
   	'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	) );
	$wp_customize->add_control('preschool_nursery_show_hide_topbar',array(
    	'type' => 'checkbox',
     	'label' => __( 'Show / Hide Top Header','preschool-nursery' ),
     	'section' => 'preschool_nursery_contact_details'
 	));

	$wp_customize->add_setting('preschool_nursery_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_phone_number'
	));
	$wp_customize->add_control('preschool_nursery_contact_number',array(
		'label'	=> __('Add Phone Number','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_phone_icon_changer',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
        $wp_customize,'preschool_nursery_phone_icon_changer',array(
		'label'	=> __('Phone Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('preschool_nursery_email_address',array(
		'label'	=> __('Add Email Address','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_mail_icon_changer',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
        $wp_customize,'preschool_nursery_mail_icon_changer',array(
		'label'	=> __('Email Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('preschool_nursery_facebook_url',array(
		'label'	=> __('Add Facebook URL','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_facebook_url',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_facebook_icon_changer',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
     	$wp_customize,'preschool_nursery_facebook_icon_changer',array(
		'label'	=> __('Facebook Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('preschool_nursery_instagram_url',array(
		'label'	=> __('Add Instagram URL','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_instagram_url',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_instagram_icon_changer',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
     	$wp_customize,'preschool_nursery_instagram_icon_changer',array(
		'label'	=> __('Instagram Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('preschool_nursery_twitter_url',array(
		'label'	=> __('Add Twitter URL','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_twitter_url',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_twitter_icon_changer',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
     	$wp_customize,'preschool_nursery_twitter_icon_changer',array(
		'label'	=> __('Twiiter Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('preschool_nursery_pinterest_url',array(
		'label'	=> __('Add Pinterest URL','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_pinterest_url',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_pinterest_icon_changer',array(
		'default'	=> 'fab fa-pinterest',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
     	$wp_customize,'preschool_nursery_pinterest_icon_changer',array(
		'label'	=> __('Pinterest Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_contact_details',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_header_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('preschool_nursery_header_button_text',array(
		'label'	=> __('Add Button Text','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_header_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_header_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('preschool_nursery_header_button_url',array(
		'label'	=> __('Add Button URL','preschool-nursery'),
		'section'	=> 'preschool_nursery_contact_details',
		'setting'	=> 'preschool_nursery_header_button_url',
		'type'		=> 'text'
	));

	// navigation menu 
	$wp_customize->add_section( 'preschool_nursery_navigation_menu' , array(
    	'title'      => __( 'Navigation Menus Settings', 'preschool-nursery' ),
		'priority'   => null,
		'panel' => 'preschool_nursery_panel_id'
	) );

	$wp_customize->add_setting('preschool_nursery_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_navigation_menu_font_size',array(
		'label'	=> __('Navigation Menus Font Size ','preschool-nursery'),
		'section'=> 'preschool_nursery_navigation_menu',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->add_setting('preschool_nursery_menu_text_tranform',array(
		'default' => 'Default',
		'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
 	$wp_customize->add_control('preschool_nursery_menu_text_tranform',array(
		'type' => 'radio',
		'label' => __('Navigation Menus Text Transform','preschool-nursery'),
		'section' => 'preschool_nursery_navigation_menu',
		'choices' => array(
		   'Default' => __('Default','preschool-nursery'),
		   'Uppercase' => __('Uppercase','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting('preschool_nursery_menu_font_weight',array(
		'default' => 'Default',
		'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_menu_font_weight',array(
		'type' => 'radio',
		'label' => __('Navigation Menus Font Weight','preschool-nursery'),
		'section' => 'preschool_nursery_navigation_menu',
		'choices' => array(
		   'Default' => __('Default','preschool-nursery'),
		   'Normal' => __('Normal','preschool-nursery'),
		),
	) );

	//home page slider
	$wp_customize->add_section( 'preschool_nursery_slider' , array(
    	'title'      => __( 'Slider Settings', 'preschool-nursery' ),
		'priority'   => null,
		'panel' => 'preschool_nursery_panel_id'
	) );

	$wp_customize->add_setting('preschool_nursery_slider_arrows',array(
        'default' => false,
        'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_slider_arrows',array(
     	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','preschool-nursery'),
   	'section' => 'preschool_nursery_slider',
	));

	$wp_customize->add_setting('preschool_nursery_slider_title',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
 	));
 	$wp_customize->add_control('preschool_nursery_slider_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider Title','preschool-nursery'),
		'section' => 'preschool_nursery_slider'
	));

	$wp_customize->add_setting('preschool_nursery_slider_content',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_slider_content',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider Content','preschool-nursery'),
		'section' => 'preschool_nursery_slider'
	));

	$wp_customize->add_setting('preschool_nursery_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_slider_button',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider Button','preschool-nursery'),
		'section' => 'preschool_nursery_slider'
	));

	$wp_customize->add_setting('preschool_nursery_slider_width_options',array(
    	'default' => 'Full Width',
     	'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_slider_width_options',array(
		'type' => 'select',
		'label' => __('Slider Width Layout','preschool-nursery'),
		'description' => __('Here you can change the Slider Width. ','preschool-nursery'),
		'section' => 'preschool_nursery_slider',
		'choices' => array(
		   'Full Width' => __('Full Width','preschool-nursery'),
		   'Container Width' => __('Container Width','preschool-nursery'),
		),
	) );

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'preschool_nursery_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'preschool_nursery_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'preschool_nursery_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'preschool-nursery' ),
			'section'  => 'preschool_nursery_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'preschool_nursery_slider_speed',array(
		'default' => 3000,
		'sanitize_callback'    => 'preschool_nursery_sanitize_number_range',
	));
	$wp_customize->add_control( 'preschool_nursery_slider_speed',array(
		'label' => esc_html__( 'Slider Speed','preschool-nursery' ),
		'section' => 'preschool_nursery_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('preschool_nursery_slider_height_option',array(
		'default'=> 600,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_slider_height_option',array(
		'label'	=> __('Slider Height Option','preschool-nursery'),
		'section'=> 'preschool_nursery_slider',
		'type'=> 'number'
	));

 	$wp_customize->add_setting('preschool_nursery_slider_content_option',array(
    	'default' => __('Left','preschool-nursery'),
     	'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_slider_content_option',array(
		'type' => 'select',
		'label' => __('Slider Content Layout','preschool-nursery'),
		'section' => 'preschool_nursery_slider',
		'choices' => array(
		   'Center' => __('Center','preschool-nursery'),
		   'Left' => __('Left','preschool-nursery'),
		   'Right' => __('Right','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting('preschool_nursery_slider_button_text',array(
		'default'=> __('Contact Us','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_slider_button_text',array(
		'label'	=> __('Slider Button Text','preschool-nursery'),
		'section'=> 'preschool_nursery_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'preschool_nursery_slider_excerpt_number', array(
		'default'              => 15,
		'sanitize_callback'    => 'preschool_nursery_sanitize_number_range',
	) );
	$wp_customize->add_control( 'preschool_nursery_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','preschool-nursery' ),
		'section'     => 'preschool_nursery_slider',
		'type'        => 'range',
		'settings'    => 'preschool_nursery_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('preschool_nursery_slider_opacity_color',array(
      'default'              => 0.7,
      'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control( 'preschool_nursery_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','preschool-nursery' ),
		'section'     => 'preschool_nursery_slider',
		'type'        => 'select',
		'settings'    => 'preschool_nursery_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','preschool-nursery'),
	      '0.1' =>  esc_attr('0.1','preschool-nursery'),
	      '0.2' =>  esc_attr('0.2','preschool-nursery'),
	      '0.3' =>  esc_attr('0.3','preschool-nursery'),
	      '0.4' =>  esc_attr('0.4','preschool-nursery'),
	      '0.5' =>  esc_attr('0.5','preschool-nursery'),
	      '0.6' =>  esc_attr('0.6','preschool-nursery'),
	      '0.7' =>  esc_attr('0.7','preschool-nursery'),
	      '0.8' =>  esc_attr('0.8','preschool-nursery'),
	      '0.9' =>  esc_attr('0.9','preschool-nursery')
		),
	));

	$wp_customize->add_setting('preschool_nursery_padding_top_bottom_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_padding_top_bottom_slider_content',array(
		'label'	=> __('Top Bottom Slider Content Padding','preschool-nursery'),
		'section'=> 'preschool_nursery_slider',
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->add_setting('preschool_nursery_padding_left_right_slider_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_padding_left_right_slider_content',array(
		'label'	=> __('Left Right Slider Content Padding','preschool-nursery'),
		'section'=> 'preschool_nursery_slider',
		'input_attrs' => array(
        	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->add_setting('preschool_nursery_show_slider_image_overlay',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_show_slider_image_overlay',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Image Overlay Slider','preschool-nursery'),
		'section' => 'preschool_nursery_slider'
	));

	$wp_customize->add_setting('preschool_nursery_color_slider_image_overlay', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'preschool_nursery_color_slider_image_overlay', array(
		'label'    => __('Image Overlay Slider Color', 'preschool-nursery'),
		'section'  => 'preschool_nursery_slider',
		'settings' => 'preschool_nursery_color_slider_image_overlay',
	)));

	//Facility Section
	$wp_customize->add_section('preschool_nursery_facility_section',array(
		'title'	=> __('Facility Section','preschool-nursery'),
		'description'	=> __('Add Facility Section below.','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));

	$wp_customize->add_setting('preschool_nursery_facility_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('preschool_nursery_facility_section_title',array(
		'label'	=> __('Section Heading Title','preschool-nursery'),
		'section'	=> 'preschool_nursery_facility_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_facility_section_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('preschool_nursery_facility_section_text',array(
		'label'	=> __('Section Text','preschool-nursery'),
		'section'	=> 'preschool_nursery_facility_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('preschool_nursery_facility_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'preschool_nursery_sanitize_choices',
	));
	$wp_customize->add_control('preschool_nursery_facility_section_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','preschool-nursery'),
		'section' => 'preschool_nursery_facility_section',
	));

	//no Result Setting
	$wp_customize->add_section('preschool_nursery_no_result_setting',array(
		'title'	=> __('No Results Settings','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));	

	$wp_customize->add_setting('preschool_nursery_no_search_result_title',array(
		'default'=> __('Nothing Found','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_no_search_result_title',array(
		'label'	=> __('No Search Results Title','preschool-nursery'),
		'section'=> 'preschool_nursery_no_result_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_no_search_result_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_no_search_result_content',array(
		'label'	=> __('No Search Results Content','preschool-nursery'),
		'section'=> 'preschool_nursery_no_result_setting',
		'type'=> 'text'
	));

	//404 Page Setting
	$wp_customize->add_section('preschool_nursery_page_not_found_setting',array(
		'title'	=> __('Page Not Found Settings','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));	

	$wp_customize->add_setting('preschool_nursery_page_not_found_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_page_not_found_title',array(
		'label'	=> __('Page Not Found Title','preschool-nursery'),
		'section'=> 'preschool_nursery_page_not_found_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_page_not_found_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_page_not_found_content',array(
		'label'	=> __('Page Not Found Content','preschool-nursery'),
		'section'=> 'preschool_nursery_page_not_found_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('preschool_nursery_mobile_media',array(
		'title'	=> __('Mobile Media Settings','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));

    $wp_customize->add_setting('preschool_nursery_enable_disable_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_enable_disable_preloader',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Preloader','preschool-nursery'),
       'section' => 'preschool_nursery_mobile_media'
    ));

	$wp_customize->add_setting('preschool_nursery_enable_disable_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_enable_disable_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Sidebar','preschool-nursery'),
		'section' => 'preschool_nursery_mobile_media'
	));

	$wp_customize->add_setting('preschool_nursery_enable_disable_topbar',array(
		'default' => false,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_enable_disable_topbar',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Top Header','preschool-nursery'),
		'section' => 'preschool_nursery_mobile_media'
	));

    $wp_customize->add_setting('preschool_nursery_enable_disable_fixed_header',array(
       'default' => false,
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_enable_disable_fixed_header',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Fixed Header','preschool-nursery'),
       'section' => 'preschool_nursery_mobile_media'
    ));   

	$wp_customize->add_setting('preschool_nursery_enable_disable_slider',array(
		'default' => false,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_enable_disable_slider',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider','preschool-nursery'),
		'section' => 'preschool_nursery_mobile_media'
	));

	$wp_customize->add_setting('preschool_nursery_show_hide_slider_button',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_show_hide_slider_button',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Slider Button','preschool-nursery'),
		'section' => 'preschool_nursery_mobile_media'
	));

	$wp_customize->add_setting('preschool_nursery_enable_disable_scrolltop',array(
		'default' => false,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_enable_disable_scrolltop',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Scroll To Top','preschool-nursery'),
		'section' => 'preschool_nursery_mobile_media'
	));

	//Blog Post
	$wp_customize->add_section('preschool_nursery_blog_post',array(
		'title'	=> __('Post Settings','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));	

	$wp_customize->add_setting('preschool_nursery_date_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_date_hide',array(
		'type' => 'checkbox',
		'label' => __('Post Date','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post'
	));

 	$wp_customize->add_setting('preschool_nursery_post_date_icon_changer',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
     	$wp_customize,'preschool_nursery_post_date_icon_changer',array(
		'label'	=> __('Post Date Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_author_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_author_hide',array(
		'type' => 'checkbox',
		'label' => __('Post Author','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post'
	));

 	$wp_customize->add_setting('preschool_nursery_post_author_icon_changer',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
        $wp_customize,'preschool_nursery_post_author_icon_changer',array(
		'label'	=> __('Post Author Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_comment_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_comment_hide',array(
		'type' => 'checkbox',
		'label' => __('Post Comments','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post'
	));

 	$wp_customize->add_setting('preschool_nursery_post_comment_icon_changer',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
        $wp_customize,'preschool_nursery_post_comment_icon_changer',array(
		'label'	=> __('Post Comment Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_blog_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_blog_post_featured_image',array(
       'default' => true,
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_blog_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Post Image','preschool-nursery'),
       'section' => 'preschool_nursery_blog_post'
    ));

    $wp_customize->add_setting( 'preschool_nursery_blog_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_blog_post_img_border_radius', array(
		'label'       => esc_html__( 'Post Image Border Radius','preschool-nursery' ),
		'section'     => 'preschool_nursery_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'preschool_nursery_blog_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_blog_post_img_box_shadow',array(
		'label' => esc_html__( 'Post Image Shadow','preschool-nursery' ),
		'section' => 'preschool_nursery_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));
    
 	$wp_customize->add_setting( 'preschool_nursery_blog_post_metabox_seperator', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'preschool_nursery_blog_post_metabox_seperator', array(
		'label'       => esc_html__( 'Blog Post Meta Box Seperator','preschool-nursery' ),
		'section'     => 'preschool_nursery_blog_post',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','preschool-nursery'),
		'type'        => 'text',
		'settings'    => 'preschool_nursery_blog_post_metabox_seperator',
	) );

	$wp_customize->add_setting('preschool_nursery_blog_post_layout',array(
		'default' => 'Default',
		'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_blog_post_layout',array(
		'type' => 'radio',
		'label' => __('Post Layout Option','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post',
		'choices' => array(
		   'Default' => __('Default','preschool-nursery'),
		   'Center' => __('Center','preschool-nursery'),
		   'Image and Content' => __('Image and Content','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting('preschool_nursery_post_break_block_setting',array(
     'default' => 'Into Blocks',
     'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_post_break_block_setting',array(
		'type' => 'radio',
		'label' => __('Display Blog Page posts','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post',
		'choices' => array(
		   'Into Blocks' => __('Into Blocks','preschool-nursery'),
		   'Without Blocks' => __('Without Blocks','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting('preschool_nursery_post_image_dimention',array(
       'default' => 'Default',
       'sanitize_callback'	=> 'preschool_nursery_sanitize_choices'
    ));
    $wp_customize->add_control('preschool_nursery_post_image_dimention',array(
       'type' => 'radio',
       'label'	=> __('Post Featured Image Dimention','preschool-nursery'),
       'choices' => array(
            'Default' => __('Default','preschool-nursery'),
            'Custom Image Size' => __('Custom Image Size','preschool-nursery'),
        ),
      	'section'	=> 'preschool_nursery_blog_post'
    ));

    $wp_customize->add_setting( 'preschool_nursery_post_featured_image_width',array(
		'default' => '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_number_range'
	));
	$wp_customize->add_control('preschool_nursery_post_featured_image_width',	array(
		'label' => esc_html__( 'Blog Post Custom Width','preschool-nursery' ),
		'section' => 'preschool_nursery_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 500,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'preschool_nursery_enable_image_dimention'
	));

	$wp_customize->add_setting( 'preschool_nursery_post_featured_image_height',array(
		'default' => '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_number_range'
	));
	$wp_customize->add_control('preschool_nursery_post_featured_image_height',	array(
		'label' => esc_html__( 'Blog Post Custom Height','preschool-nursery' ),
		'section' => 'preschool_nursery_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 350,
			'step' => 1,
		),
		'type' => 'range',
		'active_callback' => 'preschool_nursery_enable_image_dimention'
	));

	$wp_customize->add_setting('preschool_nursery_blog_description',array(
    	'default'   => 'Post Excerpt',
     	'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_blog_description',array(
		'type' => 'select',
		'label' => __('Post Description','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post',
		'choices' => array(
		   'None' => __('None','preschool-nursery'),
		   'Post Excerpt' => __('Post Excerpt','preschool-nursery'),
		   'Post Content' => __('Post Content','preschool-nursery'),
		),
	) );

 	$wp_customize->add_setting( 'preschool_nursery_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','preschool-nursery' ),
		'section'     => 'preschool_nursery_blog_post',
		'type'        => 'number',
		'settings'    => 'preschool_nursery_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'preschool_nursery_post_excerpt_suffix', array(
		'default'   => __('{...}','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'preschool_nursery_post_excerpt_suffix', array(
		'label'       => esc_html__( 'Excerpt Indicator','preschool-nursery' ),
		'section'     => 'preschool_nursery_blog_post',
		'type'        => 'text',
		'settings'    => 'preschool_nursery_post_excerpt_suffix',
	) );

	$wp_customize->add_setting('preschool_nursery_button_text',array(
		'default'=> __('Read More','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_button_text',array(
		'label'	=> __('Add Button Text','preschool-nursery'),
		'section'=> 'preschool_nursery_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_show_post_pagination',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_show_post_pagination',array(
		'type' => 'checkbox',
		'label' => __('Post Pagination','preschool-nursery'),
		'section' => 'preschool_nursery_blog_post'
	));

	$wp_customize->add_setting( 'preschool_nursery_pagination_option', array(
		'default'			=> 'Default',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control( 'preschool_nursery_pagination_option', array(
		'section' => 'preschool_nursery_blog_post',
		'type' => 'radio',
		'label' => __( 'Post Pagination', 'preschool-nursery' ),
		'choices'		=> array(
		   'Default'  => __( 'Default', 'preschool-nursery' ),
		   'next-prev' => __( 'Next / Previous', 'preschool-nursery' ),
	)));

	// Single post setting
 	$wp_customize->add_section('preschool_nursery_single_post_section',array(
		'title'	=> __('Single Post Settings','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));	

	$wp_customize->add_setting('preschool_nursery_tags_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_tags_hide',array(
		'type' => 'checkbox',
		'label' => __('Single Post Tags','preschool-nursery'),
		'section' => 'preschool_nursery_single_post_section'
	));

	$wp_customize->add_setting('preschool_nursery_single_post_image',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_single_post_image',array(
		'type' => 'checkbox',
		'label' => __('Single Post Featured Image','preschool-nursery'),
		'section' => 'preschool_nursery_single_post_section'
	));

	$wp_customize->add_setting( 'preschool_nursery_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','preschool-nursery' ),
		'section'     => 'preschool_nursery_single_post_section',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'preschool_nursery_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','preschool-nursery' ),
		'section' => 'preschool_nursery_single_post_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('preschool_nursery_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

    $wp_customize->add_setting('preschool_nursery_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

    $wp_customize->add_setting('preschool_nursery_single_post_comment',array(
       'default' => true,
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

	$wp_customize->add_setting('preschool_nursery_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

    $wp_customize->add_setting('preschool_nursery_show_hide_single_post_categories',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
 	));
 	$wp_customize->add_control('preschool_nursery_show_hide_single_post_categories',array(
		'type' => 'checkbox',
		'label' => __('Single Post Categories','preschool-nursery'),
		'section' => 'preschool_nursery_single_post_section'
	));

 	$wp_customize->add_setting( 'preschool_nursery_seperator_metabox', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'preschool_nursery_seperator_metabox', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','preschool-nursery' ),
		'section'     => 'preschool_nursery_single_post_section',
		'description' => __('Add the seperator for meta box. Example: ",",  "|", "/", etc. ','preschool-nursery'),
		'type'        => 'text',
		'settings'    => 'preschool_nursery_seperator_metabox',
	) );

	$wp_customize->add_setting('preschool_nursery_comment_form_heading',array(
		'default' => __('Leave a Reply','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_comment_form_heading',array(
		'type' => 'text',
		'label' => __('Comment Form Heading','preschool-nursery'),
		'section' => 'preschool_nursery_single_post_section'
	));

	$wp_customize->add_setting('preschool_nursery_comment_button_text',array(
		'default' => __('Post Comment','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_comment_button_text',array(
		'type' => 'text',
		'label' => __('Comment Submit Button Text','preschool-nursery'),
		'section' => 'preschool_nursery_single_post_section'
	));

 	$wp_customize->add_setting( 'preschool_nursery_comment_form_size',array(
		'default' => 100,
		'sanitize_callback'    => 'preschool_nursery_sanitize_number_range',
	));
	$wp_customize->add_control('preschool_nursery_comment_form_size',	array(
		'label' => esc_html__( 'Comment Form Size','preschool-nursery' ),
		'section' => 'preschool_nursery_single_post_section',
		'type' => 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 100,
			'step' => 1,
		),
	));

	 $wp_customize->add_setting('preschool_nursery_nav_links',array(
       'default' => true,
       'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
    ));
    $wp_customize->add_control('preschool_nursery_nav_links',array(
       'type' => 'checkbox',
       'label' => __('Enable / Disable Nav Links','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

    $wp_customize->add_setting('preschool_nursery_prev_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('preschool_nursery_prev_text',array(
       'type' => 'text',
       'label' => __('Previous Navigation Text','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

    $wp_customize->add_setting('preschool_nursery_next_text',array(
       'default' => '',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('preschool_nursery_next_text',array(
       'type' => 'text',
       'label' => __('Next Navigation Text','preschool-nursery'),
       'section' => 'preschool_nursery_single_post_section'
    ));

 	// related post setting
	$wp_customize->add_section('preschool_nursery_related_post_section',array(
		'title'	=> __('Related Post Settings','preschool-nursery'),
		'panel' => 'preschool_nursery_panel_id',
	));	

	$wp_customize->add_setting('preschool_nursery_related_posts',array(
		'default' => true,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_related_posts',array(
		'type' => 'checkbox',
		'label' => __('Related Post','preschool-nursery'),
		'section' => 'preschool_nursery_related_post_section',
	));

	$wp_customize->add_setting( 'preschool_nursery_show_related_post', array(
		'default' => 'By Categories', 
		'sanitize_callback'	=> 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control( 'preschool_nursery_show_related_post', array(
		'section' => 'preschool_nursery_related_post_section',
		'type' => 'radio',
		'label' => __( 'Show Related Posts', 'preschool-nursery' ),
		'choices' => array(
		   'categories'  => __(' By Categories', 'preschool-nursery'),
		   'tags' => __( ' By Tags', 'preschool-nursery' ),
	)));

 	$wp_customize->add_setting('preschool_nursery_change_related_post_title',array(
		'default'=> __('Related Posts','preschool-nursery'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_change_related_post_title',array(
		'label'	=> __('Change Related Post Title','preschool-nursery'),
		'section'=> 'preschool_nursery_related_post_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('preschool_nursery_change_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_change_related_posts_number',array(
		'label'	=> __('Change Related Post Number','preschool-nursery'),
		'section'=> 'preschool_nursery_related_post_section',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Footer
	$wp_customize->add_section( 'preschool_nursery_footer' , array(
    	'title'      => __( 'Footer Section', 'preschool-nursery' ),
		'priority'   => null,
		'panel' => 'preschool_nursery_panel_id'
	) );

	$wp_customize->add_setting('preschool_nursery_footer_widget',array(
		'default'           => 4,
		'sanitize_callback' => 'preschool_nursery_sanitize_choices',
	));
	$wp_customize->add_control('preschool_nursery_footer_widget',array(
		'type'        => 'radio',
		'label'       => __('No. of Footer widget area', 'preschool-nursery'),
		'section'     => 'preschool_nursery_footer',
		'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'preschool-nursery'),
		'choices' => array(
		   '1'     => __('One', 'preschool-nursery'),
		   '2'     => __('Two', 'preschool-nursery'),
		   '3'     => __('Three', 'preschool-nursery'),
		   '4'     => __('Four', 'preschool-nursery')
		),
	)); 

 	$wp_customize->add_setting( 'preschool_nursery_footer_widget_background', array(
		'default' => '#121212',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'preschool_nursery_footer_widget_background', array(
  		'label' => __('Footer Widget Background','preschool-nursery'),
    	'section' => 'preschool_nursery_footer',
  	)));

  	$wp_customize->add_setting('preschool_nursery_footer_widget_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'preschool_nursery_footer_widget_image',array(
		'label' => __('Footer Widget Background Image','preschool-nursery'),
		'section' => 'preschool_nursery_footer'
	)));

	$wp_customize->add_setting('preschool_nursery_hide_show_scroll',array(
		'default' => false,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_checkbox'
	));
	$wp_customize->add_control('preschool_nursery_hide_show_scroll',array(
     	'type' => 'checkbox',
   	'label' => __('Show / Hide Scroll To Top','preschool-nursery'),
   	'section' => 'preschool_nursery_footer',
	));

	$wp_customize->add_setting('preschool_nursery_scroll_icon_changer',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Preschool_Nursery_Icon_Changer(
     	$wp_customize,'preschool_nursery_scroll_icon_changer',array(
		'label'	=> __('Scroll To Top Icon','preschool-nursery'),
		'transport' => 'refresh',
		'section'	=> 'preschool_nursery_footer',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('preschool_nursery_footer_options',array(
     	'default' => 'Right align',
     	'sanitize_callback' => 'preschool_nursery_sanitize_choices'
	));
	$wp_customize->add_control('preschool_nursery_footer_options',array(
     	'type' => 'select',
		'label' => __('Scroll To Top','preschool-nursery'),
		'description' => __('Here you can change the Footer layout. ','preschool-nursery'),
		'section' => 'preschool_nursery_footer',
		'choices' => array(
		   'Left align' => __('Left align','preschool-nursery'),
		   'Right align' => __('Right align','preschool-nursery'),
		   'Center align' => __('Center align','preschool-nursery'),
		),
	) );

	$wp_customize->add_setting('preschool_nursery_scroll_top_fontsize',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('preschool_nursery_scroll_top_fontsize',array(
		'label'	=> __('Scroll To Top Font Size','preschool-nursery'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_footer',
		'type'=> 'range'
	));

	$wp_customize->add_setting('preschool_nursery_scroll_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_scroll_top_bottom_padding',array(
		'label'	=> __('Scroll Top Bottom Padding ','preschool-nursery'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('preschool_nursery_scroll_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_scroll_left_right_padding',array(
		'label'	=> __('Scroll Left Right Padding','preschool-nursery'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'preschool_nursery_scroll_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	) );
	$wp_customize->add_control( 'preschool_nursery_scroll_border_radius', array(
		'label'       => esc_html__( 'Scroll To Top Border Radius','preschool-nursery' ),
		'section'     => 'preschool_nursery_footer',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('preschool_nursery_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('preschool_nursery_footer_text',array(
		'label'	=> __('Add Copyright Text','preschool-nursery'),
		'section'	=> 'preschool_nursery_footer',
		'setting'	=> 'preschool_nursery_footer_text',
		'type'		=> 'text'
	));

    $wp_customize->add_setting('preschool_nursery_copyright_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_copyright_top_bottom_padding',array(
		'label'	=> __('Copyright Top and Bottom Padding','preschool-nursery'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'preschool_nursery_footer',
		'type'=> 'number'
	));

	$wp_customize->add_setting('preschool_nursery_copyright_background_color', array(
		'default'           => '#0e9aff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'preschool_nursery_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'preschool-nursery'),
		'section'  => 'preschool_nursery_footer',
	)));

	$wp_customize->add_setting('preschool_nursery_footer_text_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'preschool_nursery_sanitize_float',
	));
	$wp_customize->add_control('preschool_nursery_footer_text_font_size',array(
		'label'	=> __('Footer Text Font Size','preschool-nursery'),
		'section'=> 'preschool_nursery_footer',
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'type'=> 'number'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'preschool_nursery_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'preschool_nursery_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'preschool_nursery_customize_register' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Preschool Nursery 1.0
 * @see preschool-nursery_customize_register()
 *
 * @return void
 */
function preschool_nursery_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Preschool Nursery 1.0
 * @see preschool-nursery_customize_register()
 *
 * @return void
 */
function preschool_nursery_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function preschool_nursery_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Preschool_Nursery_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Preschool_Nursery_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Preschool_Nursery_Customize_Section_Pro(
				$manager,
				'preschool_nursery_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Preschool Nursery Pro', 'preschool-nursery' ),
					'pro_text' => esc_html__( 'Go Pro', 'preschool-nursery' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/nursery-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'preschool-nursery-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'preschool-nursery-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Preschool_Nursery_Customize::get_instance();
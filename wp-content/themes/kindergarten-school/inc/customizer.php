<?php
/**
 * Kindergarten School Theme Customizer
 *
 * @package Kindergarten School
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kindergarten_school_customize_register( $wp_customize ) {

	function kindergarten_school_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

	function kindergarten_school_sanitize_dropdown_pages( $page_id, $setting ) {
  		$page_id = absint( $page_id );
  		return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function kindergarten_school_sanitize_phone_number( $phone ) {
		return preg_replace( '/[^\d+]/', '', $phone );
	}

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	$wp_customize->add_setting('kindergarten_school_title_enable',array(
		'default' => true,
		'sanitize_callback' => 'kindergarten_school_sanitize_checkbox',
	));
	$wp_customize->add_control( 'kindergarten_school_title_enable', array(
	   'settings' => 'kindergarten_school_title_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Title','kindergarten-school'),
	   'type'      => 'checkbox'
	));

	$wp_customize->add_setting('kindergarten_school_tagline_enable',array(
		'default' => true,
		'sanitize_callback' => 'kindergarten_school_sanitize_checkbox',
	));
	$wp_customize->add_control( 'kindergarten_school_tagline_enable', array(
	   'settings' => 'kindergarten_school_tagline_enable',
	   'section'   => 'title_tagline',
	   'label'     => __('Enable Site Tagline','kindergarten-school'),
	   'type'      => 'checkbox'
	));	
	
	//Theme Options
	$wp_customize->add_panel( 'kindergarten_school_panel_area', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'title' => __( 'Theme Options Panel', 'kindergarten-school' ),		
	) );
	
	//Site Layout Section
	$wp_customize->add_section('kindergarten_school_site_layoutsec',array(
		'title'	=> __('Site Layout','kindergarten-school'),
		'priority'	=> 1,
		'panel' => 'kindergarten_school_panel_area',
	));		
	
	$wp_customize->add_setting('kindergarten_school_box_layout',array(
		'sanitize_callback' => 'kindergarten_school_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'kindergarten_school_box_layout', array(
	   'section'   => 'kindergarten_school_site_layoutsec',    	 
	   'label'	=> __('Check to Box Layout','kindergarten-school'),
	   'type'      => 'checkbox'
 	)); 

 	// Header Section
	$wp_customize->add_section('kindergarten_school_header_section', array(
        'title' => __('Header Section', 'kindergarten-school'),
        'priority' => null,
		'panel' => 'kindergarten_school_panel_area',
 	));

	$wp_customize->add_setting('kindergarten_school_phone_number',array(
		'sanitize_callback' => 'kindergarten_school_sanitize_phone_number',
	));

	$wp_customize->add_control( 'kindergarten_school_phone_number', array(
	   'section'   => 'kindergarten_school_header_section',
	   'label'	=> __('Phone Number','kindergarten-school'),
	   'type'      => 'text',
	   'priority' => 40,
    ));

    $wp_customize->add_setting('kindergarten_school_email_address',array(
		'sanitize_callback' => 'sanitize_email',
	));

	$wp_customize->add_control( 'kindergarten_school_email_address', array(
	   'section'   => 'kindergarten_school_header_section',
	   'label'	=> __('Email Address','kindergarten-school'),
	   'type'      => 'text',
	   'priority' => 40,
    ));

	// Social media Section
	$wp_customize->add_section('kindergarten_school_social_media_section', array(
        'title' => __('Social media Section', 'kindergarten-school'),
        'priority' => null,
		'panel' => 'kindergarten_school_panel_area',
 	));

	$wp_customize->add_setting('kindergarten_school_social_facebook',array(
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'kindergarten_school_social_facebook', array(
	   'section'   => 'kindergarten_school_social_media_section',
	   'label'	=> __('Facebook','kindergarten-school'),
	   'type'      => 'url',
	   'priority' => 40,
    ));

    $wp_customize->add_setting('kindergarten_school_social_twitter',array(
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'kindergarten_school_social_twitter', array(
	   'section'   => 'kindergarten_school_social_media_section',
	   'label'	=> __('Twitter','kindergarten-school'),
	   'type'      => 'url',
	   'priority' => 40,
    ));

    $wp_customize->add_setting('kindergarten_school_social_youtube',array(
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'kindergarten_school_social_youtube', array(
	   'section'   => 'kindergarten_school_social_media_section',
	   'label'	=> __('Youtube','kindergarten-school'),
	   'type'      => 'url',
	   'priority' => 40,
    ));

    $wp_customize->add_setting('kindergarten_school_social_instagram',array(
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'kindergarten_school_social_instagram', array(
	   'section'   => 'kindergarten_school_social_media_section',
	   'label'	=> __('Instagram','kindergarten-school'),
	   'type'      => 'url',
	   'priority' => 40,
    ));

    $wp_customize->add_setting('kindergarten_school_social_linkdin',array(
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control( 'kindergarten_school_social_linkdin', array(
	   'section'   => 'kindergarten_school_social_media_section',
	   'label'	=> __('Linkdin','kindergarten-school'),
	   'type'      => 'url',
	   'priority' => 40,
    ));

	//Slider
  	$wp_customize->add_section('kindergarten_school_slider_section',array(
	    'title' => __('Slider Section','kindergarten-school'),
	    'priority'  => null,
	    'panel' => 'kindergarten_school_panel_area',
	)); 

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

    $wp_customize->add_setting('kindergarten_school_slider',array(
	    'default' => 'select',
	    'sanitize_callback' => 'kindergarten_school_sanitize_choices',
  	));
  	$wp_customize->add_control('kindergarten_school_slider',array(
	    'type'    => 'select',
	    'choices' => $cat_post,
	    'label' => __('Select Category to display Latest Post','kindergarten-school'),
	    'description'	=> __('Size of image should be 570 x 570','kindergarten-school'),
	    'section' => 'kindergarten_school_slider_section',
	));
	
	// Home Three Boxes Section 
	$wp_customize->add_section('kindergarten_school_sectionsecond', array(
		'title'	=> __('Services Section','kindergarten-school'),
		'description'	=> __('Select Pages from the dropdown for homepage four boxes section','kindergarten-school'),
		'priority'	=> null,
		'panel' => 'kindergarten_school_panel_area',
	));

	$wp_customize->add_setting('kindergarten_school_pgboxes_title',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control( 'kindergarten_school_pgboxes_title', array(
	   'section'   => 'kindergarten_school_sectionsecond',
	   'label'	=> __('Section Title','kindergarten-school'),
	   'type'      => 'text',
	   'priority' => null,
    ));

    $wp_customize->add_setting( 'kindergarten_school_slider_count', array(
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'kindergarten_school_sanitize_number_absint',
	  'default' => 1,
	) );
	$wp_customize->add_control( 'kindergarten_school_slider_count', array(
	  'settings' => 'kindergarten_school_slider_count',
	  'type' => 'number',
	  'section' => 'kindergarten_school_slider_section',
	  'label' => __( 'Number Of Slide To Show','kindergarten-school'),
	) );
	
	$wp_customize->add_setting('kindergarten_school_pageboxes1',array(
		'default'	=> '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'kindergarten_school_sanitize_dropdown_pages'
	));
	$wp_customize->add_control(	'kindergarten_school_pageboxes1',array(
		'type' => 'dropdown-pages',
		'section' => 'kindergarten_school_sectionsecond',
	));	

	$wp_customize->add_setting('kindergarten_school_pageboxes2',array(
		'default'	=> '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'kindergarten_school_sanitize_dropdown_pages'
	)); 
	$wp_customize->add_control(	'kindergarten_school_pageboxes2',array(
		'type' => 'dropdown-pages',
		'section' => 'kindergarten_school_sectionsecond',
	));
	
	$wp_customize->add_setting('kindergarten_school_pageboxes3',array(
		'default'	=> '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'kindergarten_school_sanitize_dropdown_pages'
	));

	$wp_customize->add_control(	'kindergarten_school_pageboxes3',array(
		'type' => 'dropdown-pages',
		'section' => 'kindergarten_school_sectionsecond',
	));
	
	$wp_customize->add_setting('kindergarten_school_pageboxes4',array(
		'default'	=> '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'kindergarten_school_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'kindergarten_school_pageboxes4',array(
		'type' => 'dropdown-pages',
		'section' => 'kindergarten_school_sectionsecond',
	));
	
	$wp_customize->add_setting('kindergarten_school_disabled_pgboxes',array(
		'default' => true,
		'sanitize_callback' => 'kindergarten_school_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	
	
	$wp_customize->add_control( 'kindergarten_school_disabled_pgboxes', array(
	   'settings' => 'kindergarten_school_disabled_pgboxes',
	   'section'   => 'kindergarten_school_sectionsecond',
	   'label'     => __('Uncheck To Enable This Section','kindergarten-school'),
	   'type'      => 'checkbox'
	));

	// Footer Section 
	$wp_customize->add_section('kindergarten_school_footer', array(
		'title'	=> __('Footer Section','kindergarten-school'),
		'priority'	=> null,
		'panel' => 'kindergarten_school_panel_area',
	));

	$wp_customize->add_setting('kindergarten_school_copyright_line',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	
	$wp_customize->add_control( 'kindergarten_school_copyright_line', array(
	   'section'   => 'kindergarten_school_footer',
	   'label'	=> __('Copyright Line','kindergarten-school'),
	   'type'      => 'text',
	   'priority' => null,
    ));

	$wp_customize->add_setting('kindergarten_school_color_scheme_one',array(
		'default' => '#95c800',
		'sanitize_callback' => 'sanitize_hex_color',
	));

    $wp_customize->add_control( 
	    new WP_Customize_Color_Control( 
	    $wp_customize, 
	    'kindergarten_school_color_scheme_one', 
	    array(
	        'label'      => __( 'Color Scheme', 'kindergarten-school' ),
	        'section'    => 'colors',
	        'settings'   => 'kindergarten_school_color_scheme_one',
	    ) ) 
	);
}
add_action( 'customize_register', 'kindergarten_school_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kindergarten_school_customize_preview_js() {
	wp_enqueue_script( 'kindergarten_school_customizer', esc_url(get_template_directory_uri()) . '/js/customize-preview.js', array( 'customize-preview' ), '20161510', true );
}
add_action( 'customize_preview_init', 'kindergarten_school_customize_preview_js' );
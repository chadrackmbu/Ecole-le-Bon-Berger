<?php
/**
 * Home Page Options.
 *
 * @package Kids School
 */

$default = kids_school_get_default_theme_options();

// Latest Blog Section
$wp_customize->add_section( 'section_blog',
	array(
		'title'      => __( 'Latest Posts', 'kids-school' ),
		'priority'   => 100,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);
// Disable Blog Section
$wp_customize->add_setting('theme_options[enable_blog_section]', 
	array(
	'default' 			=> $default['enable_blog_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'kids_school_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[enable_blog_section]', 
	array(		
	'label' 	=> __('Enable Latest Posts Section', 'kids-school'),
	'section' 	=> 'section_blog',
	'settings'  => 'theme_options[enable_blog_section]',
	'type' 		=> 'checkbox',	
	)
);

// Section Title
$wp_customize->add_setting('theme_options[blog_section_title]', 
	array(
	'default'           => $default['blog_section_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_section_title]', 
	array(
	'label'       => __('Section Title', 'kids-school'),
	'section'     => 'section_blog',   
	'settings'    => 'theme_options[blog_section_title]',	
	'active_callback' => 'kids_school_blog_active',		
	'type'        => 'text'
	)
);

// Blog Number.
$wp_customize->add_setting( 'theme_options[blog_number]',
	array(
		'default'           => $default['blog_number'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'kids_school_sanitize_number_range',
		)
);
$wp_customize->add_control( 'theme_options[blog_number]',
	array(
		'label'       		=> __( 'Number of Posts', 'kids-school' ),
		'description' 		=> __('Save & Refresh the customizer to see its effect. Maximum is 10.', 'kids-school'),
		'section'     		=> 'section_blog',
		'active_callback' 	=> 'kids_school_blog_active',		
		'type'        		=> 'number',
		'input_attrs' 		=> array( 
			'min' => 1, 
			'max' => 10, 
			'step' => 1, 
			'style' => 'width: 115px;' 
		),
	)
);

$blog_number = kids_school_get_option( 'blog_number' );

// Setting Blog Category.
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'default'           => $default['blog_category'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new kids_school_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => __( 'Select Category', 'kids-school' ),
		'section'  => 'section_blog',
		'settings' => 'theme_options[blog_category]',	
		'active_callback' => 'kids_school_blog_active',		
		)
	)
);

<?php
/**
 * Featured Team options.
 *
 * @package Kids School
 */

$default = kids_school_get_default_theme_options();

// Featured Featured Team Section
$wp_customize->add_section( 'section_featured_team',
	array(
	'title'      => __( 'Featured Team', 'kids-school' ),
	'priority'   => 100,
	'capability' => 'edit_theme_options',
	'panel'      => 'home_page_panel',
	)
);

// Enable Featured Team Section
$wp_customize->add_setting('theme_options[enable_featured_team_section]', 
	array(
	'default' 			=> $default['enable_featured_team_section'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'kids_school_sanitize_checkbox'
	)
);

$wp_customize->add_control('theme_options[enable_featured_team_section]', 
	array(		
	'label' 	=> __('Enable Featured Team Section', 'kids-school'),
	'section' 	=> 'section_featured_team',
	'settings'  => 'theme_options[enable_featured_team_section]',
	'type' 		=> 'checkbox',	
	)
);

// Section Title
$wp_customize->add_setting('theme_options[featured_team_section_title]', 
	array(
	'default'           => $default['featured_team_section_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[featured_team_section_title]', 
	array(
	'label'       => __('Section Title', 'kids-school'),
	'section'     => 'section_featured_team',   
	'settings'    => 'theme_options[featured_team_section_title]',	
	'active_callback' => 'kids_school_featured_team_active',		
	'type'        => 'text'
	)
);

// Number of items
$wp_customize->add_setting('theme_options[number_of_featured_team_items]', 
	array(
	'default' 			=> $default['number_of_featured_team_items'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kids_school_sanitize_number_range'
	)
);

$wp_customize->add_control('theme_options[number_of_featured_team_items]', 
	array(
	'label'       => __('Number Of Items', 'kids-school'),
	'description' => __('Save & Refresh the customizer to see its effect. Maximum is 10.', 'kids-school'),
	'section'     => 'section_featured_team',   
	'settings'    => 'theme_options[number_of_featured_team_items]',		
	'type'        => 'number',
	'active_callback' => 'kids_school_featured_team_active',
	'input_attrs' => array(
			'min'	=> 1,
			'max'	=> 10,
			'step'	=> 1,
		),
	)
);

$wp_customize->add_setting('theme_options[featured_team_content_type]', 
	array(
	'default' 			=> $default['featured_team_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'kids_school_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[featured_team_content_type]', 
	array(
	'label'       => __('Content Type', 'kids-school'),
	'section'     => 'section_featured_team',   
	'settings'    => 'theme_options[featured_team_content_type]',		
	'type'        => 'select',
	'active_callback' => 'kids_school_featured_team_active',
	'choices'	  => array(
			'featured_team_page'	  => __('Page','kids-school'),
			'featured_team_post'	  => __('Post','kids-school'),
		),
	)
);

$number_of_featured_team_items = kids_school_get_option( 'number_of_featured_team_items' );

for( $i=1; $i<=$number_of_featured_team_items; $i++ ) {

	// Page
	$wp_customize->add_setting('theme_options[featured_team_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kids_school_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[featured_team_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'kids-school'), $i),
		'section'     => 'section_featured_team',   
		'settings'    => 'theme_options[featured_team_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'kids_school_featured_team_page',
		)
	);

	// Posts
	$wp_customize->add_setting('theme_options[featured_team_post_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'kids_school_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[featured_team_post_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Post #%1$s', 'kids-school'), $i),
		'section'     => 'section_featured_team',   
		'settings'    => 'theme_options[featured_team_post_'.$i.']',		
		'type'        => 'select',
		'choices'	  => kids_school_dropdown_posts(),
		'active_callback' => 'kids_school_featured_team_post',
		)
	);
}
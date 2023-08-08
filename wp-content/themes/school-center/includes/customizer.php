<?php
/**
 * Theme Customizer
 *
 * @package School Center
 */

function education_center_register_custom_controls( $wp_customize ){    
    // Load our custom control.
    require_once get_template_directory() . '/inc/custom-controls/note/class-note-control.php';
    require_once get_template_directory() . '/inc/custom-controls/radioimg/class-radio-image-control.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-repeater-setting.php';
    require_once get_template_directory() . '/inc/custom-controls/repeater/class-control-repeater.php';
    require_once get_template_directory() . '/inc/custom-controls/toggle/class-toggle-control.php';    
            
    // Register the control type.
    $wp_customize->register_control_type( 'Education_Center_Radio_Image_Control' );
    $wp_customize->register_control_type( 'Education_Center_Toggle_Control' );
}
add_action( 'customize_register', 'education_center_register_custom_controls' );
 
function school_center_overide_customizer_values( $wp_customize ){
    $wp_customize->remove_section( 'banner_box' );
    $wp_customize->get_setting( 'banner_subtitle' )->default = esc_html__( 'WELCOME TO SCHOOL CENTER', 'school-center' );
    $wp_customize->get_setting( 'banner_title' )->default = esc_html__( 'School Learning is Critical to Career Excellence', 'school-center' );
    $wp_customize->remove_setting('banner_btn_two_label');
    $wp_customize->remove_control('banner_btn_two_label');
    $wp_customize->remove_setting('banner_link_two');
    $wp_customize->remove_control('banner_link_two');
    $wp_customize->remove_setting('header_btn_lbl');
    $wp_customize->remove_control('header_btn_lbl');
    $wp_customize->remove_control('header_btn_link');
    $wp_customize->remove_control('header_btn_link');
    $wp_customize->get_control( 'cta_background_image' )->label = __( 'Upload CTA image', 'school-center' );
    $wp_customize->get_control( 'video_block_img' )->label = __( 'Upload Video image', 'school-center' );
    $wp_customize->get_control( 'ed_feat_course' )->description = '';
    $wp_customize->remove_setting('course_featured_image');
    $wp_customize->remove_control('course_featured_image');

    $wp_customize->add_setting(
        'course_btn_lbl',
        array(
            'default'           => __( 'Read More', 'school-center' ),
            'sanitize_callback' => 'sanitize_text_field',
            'transport'			=> 'postMessage',
        )
    );
    
    $wp_customize->add_control(
        'course_btn_lbl',
        array(
            'label'             => __( 'Button Label', 'school-center' ),
            'section'           => 'course_feature_home',
            'type'              => 'text',
        )
    );

}
add_action( 'customize_register', 'school_center_overide_customizer_values', 999 );


function school_center_frontpage_customizer_register( $wp_customize ){

    $wp_customize->add_setting( 
        new Education_Center_Control_Repeater_Setting( 
            $wp_customize, 
            'courses_repeater', 
            array(
                'default' => '',
                'sanitize_callback' => array( 'Education_Center_Control_Repeater_Setting', 'sanitize_repeater_setting' ),
            ) 
        ) 
    );
    
    $wp_customize->add_control(
		new Education_Center_Control_Repeater(
			$wp_customize,
			'courses_repeater',
			array(
				'section'       => 'featured_courses_section',
				'label'         => esc_html__( 'Courses', 'school-center' ),
                'priority'      => '50',
				'fields'  => array(
                    'image' => array(
                        'type'        => 'image',
                        'label'       => esc_html__( 'Upload image', 'school-center' ),
                        'description' => esc_html__( 'Recommended icon size is 340px by 235px in png format', 'school-center' )
                    ),
                    'title' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Enter Title', 'school-center' ),
                    ),
                    'content' => array(
                        'type'        => 'text',
                        'label'       => esc_html__( 'Enter Description', 'school-center' ),
                    ),
                    'link' => array(
                        'type'        => 'url',
                        'label'       => esc_html__( 'Link', 'school-center' ),
                        'description' => esc_html__( 'Example: https://facebook.com', 'school-center' ),
                    )
                ),
                'row_label' => array(
                    'type'  => 'field',
                    'value' => esc_html__( 'courses', 'school-center' ),
                    'field' => 'title'
                ),
                'choices' => array(
                    'limit' => 3
                )
			)
		)
    );

    $wp_customize->add_setting( 
        'courses_new_tab', 
        array(
            'default'           => false,
            'sanitize_callback' => 'education_center_sanitize_checkbox'
        ) 
    );
    
    $wp_customize->add_control(
        new Education_Center_Toggle_Control( 
            $wp_customize,
            'courses_new_tab',
            array(
                'section'     => 'featured_courses_section',
                'label'       => __( 'Enable to open link in a new tab', 'school-center' ),
                'priority'    => '60'
            )
        )
    );
}

add_action( 'customize_register', 'school_center_frontpage_customizer_register' );

function education_center_customize_register_home_course_feature( $wp_customize ){
    
    $wp_customize->add_section( 
        'course_feature_home', 
        array(
            'title'         => esc_html__( 'Course Features Section', 'school-center' ),
            'priority'      => 25,
            'panel'         => 'frontpage_settings',
        ) 
    );

    /** Enable course feature Section */
    $wp_customize->add_setting( 
        'ed_course_feature', 
        array(
            'default'           => false,
            'sanitize_callback' => 'education_center_sanitize_checkbox'
        ) 
    );
    
    $wp_customize->add_control(
        new Education_Center_Toggle_Control( 
            $wp_customize,
            'ed_course_feature',
            array(
                'section'     => 'course_feature_home',
                'label'	      => __( 'Enable Course Feature Section', 'school-center' ),
                'description' => __( 'Enable to show course feature section in your homepage', 'school-center' ),
            )
        )
    );

    /** Title Text */
    $wp_customize->add_setting( 
        'features_title', 
        array(
            'default'           => '', 
            'sanitize_callback' => 'sanitize_text_field',
            'transport'			=> 'postMessage',
        ) 
    );
    
    $wp_customize->add_control(
        'features_title',
        array(
            'section'         => 'course_feature_home',
            'label'           => __( 'Section Title', 'school-center' ),
            'type'            => 'text',
        )   
    );

    $wp_customize->selective_refresh->add_partial( 'features_title', array(
        'selector'        => '.site .course-highlights .section-header h2.section-header__title',
        'render_callback' => 'education_center_get_features_title',
    ) );

    /** Subtitle Text */
    $wp_customize->add_setting( 
        'features_subtitle', 
        array(
            'default'           => '', 
            'sanitize_callback' => 'sanitize_text_field',
            'transport'			=> 'postMessage',
        ) 
    );
    
    $wp_customize->add_control(
        'features_subtitle',
        array(
            'section'         => 'course_feature_home',
            'label'           => __( 'Section Subtitle', 'school-center' ),
            'type'            => 'text',
        )   
    );

    $wp_customize->selective_refresh->add_partial( 'features_subtitle', array(
        'selector'        => '.site .course-highlights .section-header .section-header__info',
        'render_callback' => 'education_center_get_features_subtitle',
    ) );

    $wp_customize->add_setting( 
        new Education_Center_Control_Repeater_Setting( 
            $wp_customize, 
            'course_feature_repeater', 
            array(
                'default'           => '',
                'sanitize_callback' => array( 'Education_Center_Control_Repeater_Setting', 'sanitize_repeater_setting' ),
            ) 
        ) 
    );
    
    $wp_customize->add_control(
        new Education_Center_Control_Repeater(
            $wp_customize,
            'course_feature_repeater',
            array(
                'section' => 'course_feature_home',				
                'label'	  => __( 'Add Features', 'school-center' ),
                'fields'  => array(
                    'image' => array(
                        'type'    => 'image',
                        'label'   => __( 'Upload Icon/Image', 'school-center' ),
                    ),
                    'title' => array(
                        'type'    => 'text',
                        'label'   => __( 'Enter Title', 'school-center' ),
                    ),
                    'content' => array(
                        'type'    => 'text',
                        'label'   => __( 'Enter Content', 'school-center' ),
                    ),
                    'link' => array(
                        'type'        => 'url',
                        'label'       => esc_html__( 'Link', 'school-center' ),
                        'description' => esc_html__( 'Example: https://facebook.com', 'school-center' ),
                    )
                ),
                'row_label' => array(
                    'type' => 'field',
                    'value' => esc_html__( 'feature', 'school-center' ),
                    'field' => 'title',
                ),
                'choices' => array(
                    'limit' => 3
                )
            )
        )
    );

    /** Course Featured Image */
    $wp_customize->add_setting( 
        'course_featured_image', 
        array(
            'default' 			=> '',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control( 
        new WP_Customize_Image_Control( 
            $wp_customize, 
            'course_featured_image', 
            array(
                'label'      => __( 'Upload the image', 'school-center' ),
                'section'    => 'course_feature_home',
            )
        )
    );
}

add_action( 'customize_register', 'education_center_customize_register_home_course_feature' );
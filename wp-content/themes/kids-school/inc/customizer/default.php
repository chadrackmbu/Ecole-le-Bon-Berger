<?php
/**
 * Default theme options.
 *
 * @package Kids School
 */

if ( ! function_exists( 'kids_school_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function kids_school_get_default_theme_options() {

	$defaults = array();

	// Top Bar
	$defaults['show_header_contact_info'] 		= false;
    $defaults['show_header_social_links'] 		= false;
    $defaults['header_social_links']			= array();

    // Homepage Options
	$defaults['enable_frontpage_content'] 		= false;

	// Featured Slider Section	
	$defaults['enable_featured_slider_section']		= false;
	$defaults['number_of_featured_slider_items']	= 3;
	$defaults['featured_slider_content_type']		= 'featured_slider_page';

	// Featured Services Section	
	$defaults['enable_featured_services_section']	= false;
	$defaults['featured_services_section_title']	= esc_html__( 'Featured Services', 'kids-school' );
	$defaults['number_of_featured_services_items']	= 3;
	$defaults['featured_services_content_type']		= 'featured_services_page';

	// Featured Gallery Section	
	$defaults['enable_featured_gallery_section']		= false;
	$defaults['featured_gallery_section_title']			= esc_html__( 'Featured Gallery', 'kids-school' );
	$defaults['number_of_featured_gallery_items']		= 6;
	$defaults['featured_gallery_content_type']			= 'featured_gallery_page';

	// Featured Team Section	
	$defaults['enable_featured_team_section']		= false;
	$defaults['featured_team_section_title']		= esc_html__( 'Featured Team', 'kids-school' );
	$defaults['number_of_featured_team_items']		= 3;
	$defaults['featured_team_content_type']			= 'featured_team_page';

	// Featured Testimonial Section	
	$defaults['enable_featured_testimonial_section']		= false;
	$defaults['featured_testimonial_section_title']			= esc_html__( 'Featured Testimonial', 'kids-school' );
	$defaults['number_of_featured_testimonial_items']		= 3;
	$defaults['featured_testimonial_content_type']			= 'featured_testimonial_page';

	// Latest Posts Section
	$defaults['enable_blog_section']		= false;
	$defaults['blog_section_title']			= esc_html__( 'Latest Posts', 'kids-school' );
	$defaults['blog_category']	   			= 0; 
	$defaults['blog_number']				= 3;

	//General Section
	$defaults['readmore_text']					= esc_html__('Learn More','kids-school');
	$defaults['your_latest_posts_title']		= esc_html__('Blog','kids-school');
	$defaults['excerpt_length']					= 15;
	$defaults['layout_options_blog']			= 'no-sidebar';
	$defaults['layout_options_archive']			= 'no-sidebar';
	$defaults['layout_options_page']			= 'no-sidebar';	
	$defaults['layout_options_single']			= 'right-sidebar';	

	//Footer section 		
	$defaults['copyright_text']					= esc_html__( 'Copyright &copy; All rights reserved.', 'kids-school' );

	// Pass through filter.
	$defaults = apply_filters( 'kids_school_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'kids_school_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function kids_school_get_option( $key ) {

		$default_options = kids_school_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;
<?php 
/**
 * School Center functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package School_Center
 */

function school_center_image_sizes(){
    add_image_size( 'school-center-cta-image', 500, 300, true );
}
add_action( 'after_setup_theme', 'school_center_image_sizes' );

function school_center_assets() {
    $my_theme = wp_get_theme();
    $version  = $my_theme['Version'];

    wp_enqueue_style( 'education-center', get_template_directory_uri()  . '/style.css' );
    wp_enqueue_style( 'school-center', get_stylesheet_directory_uri() . '/style.css', array( 'education-center' ), $version );
}
add_action( 'wp_enqueue_scripts', 'school_center_assets', 10 );

function education_center_register_required_plugins(){
    /*
    * Array of plugin arrays. Required keys are name and slug.
    * If the source is NOT from the .org repo, then source is also required.
    */
    $plugins = array(
        array(
            'name'      => __( 'Regenerate Thumbnails', 'rara-ecommerce-pro' ),
            'slug'      => 'regenerate-thumbnails',
            'required'  => false,
        ),
        array(
            'name'      => __( 'Contact Form 7', 'education-center' ),
            'slug'      => 'contact-form-7',
            'required'  => false,
        )
    );

    $config = array(
        'id'           => 'school-center',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

        /*
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'education-center' ),
            'menu_title'                      => __( 'Install Plugins', 'education-center' ),
            /* translators: %s: plugin name. * /
            'installing'                      => __( 'Installing Plugin: %s', 'education-center' ),
            /* translators: %s: plugin name. * /
            'updating'                        => __( 'Updating Plugin: %s', 'education-center' ),
            'oops'                            => __( 'Something went wrong with the plugin API.', 'education-center' ),
            'notice_can_install_required'     => _n_noop(
                /* translators: 1: plugin name(s). * /
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'education-center'
            ),
            'notice_can_install_recommended'  => _n_noop(
                /* translators: 1: plugin name(s). * /
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'education-center'
            ),
            'notice_ask_to_update'            => _n_noop(
                /* translators: 1: plugin name(s). * /
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'education-center'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                /* translators: 1: plugin name(s). * /
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'education-center'
            ),
            'notice_can_activate_required'    => _n_noop(
                /* translators: 1: plugin name(s). * /
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'education-center'
            ),
            'notice_can_activate_recommended' => _n_noop(
                /* translators: 1: plugin name(s). * /
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'education-center'
            ),
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'education-center'
            ),
            'update_link' 					  => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'education-center'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'education-center'
            ),
            'return'                          => __( 'Return to Required Plugins Installer', 'education-center' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'education-center' ),
            'activated_successfully'          => __( 'The following plugin was activated successfully:', 'education-center' ),
            /* translators: 1: plugin name. * /
            'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'education-center' ),
            /* translators: 1: plugin name. * /
            'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'education-center' ),
            /* translators: 1: dashboard link. * /
            'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'education-center' ),
            'dismiss'                         => __( 'Dismiss this notice', 'education-center' ),
            'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'education-center' ),
            'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'education-center' ),

            'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
        ),
        */
    );

    tgmpa( $plugins, $config );
}

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses education_center_header_style()
 */
function education_center_custom_header_setup() {
    add_theme_support(
        'custom-header',
        apply_filters(
            'education_center_custom_header_args',
            array(
                'default-image'      => get_stylesheet_directory_uri() . '/assets/img/banner.png',
                'default-text-color' => '#000000',
                'width'              => 1920,
                'height'             => 760,
                'flex-height'        => true,
                'video'         	 => true,
                'wp-head-callback'   => 'education_center_header_style',
            )
        )
    );

    register_default_headers( array(
        'default-image' => array(
            'url'           => get_stylesheet_directory_uri() . '/assets/img/banner.png',
            'thumbnail_url' => get_stylesheet_directory_uri() . '/assets/img/banner.png',
            'description'   => __( 'Default Header Image', 'school-center' ),
        ),
    ) );

}
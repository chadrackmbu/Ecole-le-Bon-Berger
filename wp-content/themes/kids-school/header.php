<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kids School
 */
/**
* Hook - kids_school_action_doctype.
*
* @hooked kids_school_doctype -  10
*/
do_action( 'kids_school_action_doctype' );
?>
<head>
<?php
/**
* Hook - kids_school_action_head.
*
* @hooked kids_school_head -  10
*/
do_action( 'kids_school_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - kids_school_action_before.
*
* @hooked kids_school_page_start - 10
*/
do_action( 'kids_school_action_before' );

/**
*
* @hooked kids_school_header_start - 10
*/
do_action( 'kids_school_action_before_header' );

/**
*
*@hooked kids_school_site_branding - 10
*@hooked kids_school_header_end - 15 
*/
do_action('kids_school_action_header');

/**
*
* @hooked kids_school_content_start - 10
*/
do_action( 'kids_school_action_before_content' );

/**
 * Banner start
 * 
 * @hooked kids_school_banner_header - 10
*/
do_action( 'kids_school_banner_header' );  

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kids School
 */

/**
 *
 * @hooked kids_school_footer_start
 */
do_action( 'kids_school_action_before_footer' );

/**
 * Hooked - kids_school_footer_top_section -10
 * Hooked - kids_school_footer_section -20
 */
do_action( 'kids_school_action_footer' );

/**
 * Hooked - kids_school_footer_end. 
 */
do_action( 'kids_school_action_after_footer' );

wp_footer(); ?>

</body>  
</html>
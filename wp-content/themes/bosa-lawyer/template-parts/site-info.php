<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Lawyer
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-lawyer' ) ) );
		echo esc_html( date( 'Y' ) );
		printf( esc_html__( ' Bosa Lawyer. Powered by', 'bosa-lawyer' ) );
	?>
	<a href="<?php echo esc_url( __( '//bosathemes.com', 'bosa-lawyer' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'Bosa Themes', 'bosa-lawyer' ) );
		?>
	</a>
</div><!-- .site-info -->
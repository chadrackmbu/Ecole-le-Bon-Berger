<?php
/**
 * Displays footer site info
 *
 * @package Resort Hotel Booking
 * @subpackage resort_hotel_booking
 */

?>
<div class="site-info">
    <div class="container">
        <p><?php resort_hotel_booking_credit(); ?> <?php echo esc_html(get_theme_mod('adventure_travelling_footer_text',__('By Themespride','resort-hotel-booking'))); ?> </p>
    </div>
</div>

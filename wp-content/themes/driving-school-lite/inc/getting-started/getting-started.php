<?php
//about theme info
add_action( 'admin_menu', 'driving_school_lite_gettingstarted' );
function driving_school_lite_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'driving-school-lite'), esc_html__('Get Started', 'driving-school-lite'), 'edit_theme_options', 'driving_school_lite_guide', 'driving_school_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function driving_school_lite_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'driving_school_lite_admin_theme_style');

//guidline for about theme
function driving_school_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'driving-school-lite' );
?>
<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Driving School Lite WordPress Theme', 'driving-school-lite' ); ?></h3>
		</div>
		<div class="color_bg_blue">
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
				<p class="intro_version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and felxible WordPress theme.', 'driving-school-lite' ); ?></p>
				<div class="blink">
					<h4><?php esc_html_e( 'Theme Created By Themesglance', 'driving-school-lite' ); ?></h4>
				</div>
			<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" /></div>
			<div class="coupon-code"><?php esc_html_e( 'Get', 'driving-school-lite' ); ?> <span><?php esc_html_e( '20% off', 'driving-school-lite' ); ?></span> <?php esc_html_e( 'on Premium Theme with the discount code: ', 'driving-school-lite' ); ?> <span><?php esc_html_e( '" Get20 "', 'driving-school-lite' ); ?></span></div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'driving-school-lite' ); ?></h3>
			<p><?php esc_html_e( 'Driving School Lite is a polished, eye-catching, feature-rich and versatile WordPress theme for Driving School Lites, driving instructors, traffic rules teaching class, drivers union, driving agency, parking teacher, vehicle license department, car Driving School Lite and similar websites. It can also be used as a driving blog or road safety teaching blog. It is a purpose oriented theme with all the necessary sections like gallery, testimonial, subscribers form, latest news etc. It is designed keeping in mind all the modern website designing norms to yield a performance focused website. The theme is powered by Bootstrap framework which gives it a strong base. It is embedded with social media icons to make your content shareable on various networking sites. It has cleverly used call to action (CTA) button to generate potential lead. This driving WP theme is fully responsive, SEO-friendly, multilingual, multi-browser compatible and retina ready. It supports various content post type. It is feathery light to load. It is coded with clean and secure coding for a bug-free website. With the help of theme customizer, you can customize the theme to your heart out to give it a personalized touch and do your branding. It promises to bring more traffic to your website with its search engine optimization.', 'driving-school-lite')?></p>
			<hr>
			<h3><?php esc_html_e( 'Help Docs', 'driving-school-lite' ); ?></h3>
			<ul>
				<p><?php esc_html_e( 'Driving School Lite', 'driving-school-lite' ); ?> <a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'driving-school-lite' ); ?></a></p>
			</ul>
			<hr>
			<h3><?php esc_html_e( 'Get started with Driving School Lite Theme', 'driving-school-lite' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-screenshot.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'driving-school-lite' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'driving-school-lite' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'driving-school-lite' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'driving-school-lite' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'driving-school-lite' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'driving-school-lite'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
			<hr class="firsthr">
			<a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'driving-school-lite'); ?></a>
			<a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_PRO_THEME_URL ); ?>"><?php esc_html_e('Buy Pro', 'driving-school-lite'); ?></a>
			<a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'driving-school-lite'); ?></a>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'driving-school-lite'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Simple Menu option', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Seperate Posttype for the Courses', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'About Section for the company description', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "testimonial" listing', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Gallery section with the plugin', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Team section with the custom posttype', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Video Promotion', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Plans listing', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Record section', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Social Icon widget', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Blog Post section on home', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Book now with contact form 7', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Frequently asked question', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Latest Blog Post Section', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Contact widget for footer', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Contact page Template', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'driving-school-lite'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, With Left and Right sidebar Template', 'driving-school-lite'); ?></li>
		</ul>
	</div>
	<div class="service">
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'driving-school-lite'); ?></h3>
			<ol>
				<li>
				<a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'driving-school-lite'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'driving-school-lite'); ?></h3>
			<ol>
				<li> <?php esc_html_e('Start', 'driving-school-lite'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'driving-school-lite'); ?></a> <?php esc_html_e('your website.', 'driving-school-lite'); ?></li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'driving-school-lite'); ?></h3>
			<ol>
				<li>
				<a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'driving-school-lite'); ?></a>
				</li>
			</ol>
		</div>
		<div class="col-lg-3 col-md-3">
			<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'driving-school-lite' ); ?></h3>
			<ol>
				<li><?php esc_html_e( 'Driving School Lite Lite', 'driving-school-lite' ); ?> <a href="<?php echo esc_url( DRIVING_SCHOOL_LITE_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'driving-school-lite' ); ?></a></li>
			</ol>
		</div>
	</div>
</div>
<?php } ?>
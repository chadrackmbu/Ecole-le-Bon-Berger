<?php

add_action( 'admin_menu', 'preschool_nursery_gettingstarted' );
function preschool_nursery_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'preschool-nursery'), esc_html__('About Theme', 'preschool-nursery'), 'edit_theme_options', 'preschool-nursery-guide-page', 'preschool_nursery_guide');   
}

function preschool_nursery_admin_theme_style() {
   wp_enqueue_style('preschool-nursery-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'preschool_nursery_admin_theme_style');

function preschool_nursery_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Preschool Nursery Theme', 'preschool-nursery' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'preschool-nursery' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=preschool-nursery-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'preschool-nursery' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'preschool_nursery_notice');


/**
 * Theme Info Page
 */
function preschool_nursery_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'preschool-nursery' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Preschool Nursery Theme', 'preschool-nursery' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'preschool-nursery' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="preschool_nursery_open(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="preschool_nursery_open(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Preschool-Nursery Lite Theme', 'preschool-nursery' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <div class="table-image">
								<table class="tablebox">
									<thead>
										<tr>
											<th><?php esc_html_e('Setup', 'preschool-nursery'); ?></th>
											<th><?php esc_html_e('Click Here', 'preschool-nursery'); ?></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php esc_html_e('Logo', 'preschool-nursery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Click', 'preschool-nursery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Menus', 'preschool-nursery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Click', 'preschool-nursery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Top Header', 'preschool-nursery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=preschool_nursery_contact_details') ); ?>" target="_blank"><?php esc_html_e('Click', 'preschool-nursery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Slider', 'preschool-nursery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=preschool_nursery_slider') ); ?>" target="_blank"><?php esc_html_e('Click', 'preschool-nursery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Post Settings', 'preschool-nursery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=preschool_nursery_blog_post') ); ?>" target="_blank"><?php esc_html_e('Click', 'preschool-nursery'); ?></a></td>
										</tr>
									</tbody>
									<tbody>
										<tr>
											<td><?php esc_html_e('Footer', 'preschool-nursery'); ?></td>
											<td class="table-img"><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=preschool_nursery_footer') ); ?>" target="_blank"><?php esc_html_e('Click', 'preschool-nursery'); ?></a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<ol>
								<li><?php esc_html_e( 'Start','preschool-nursery'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','preschool-nursery'); ?></a> <?php esc_html_e( 'your website.','preschool-nursery'); ?> </li>
								<li><?php esc_html_e( 'Preschool Nursery','preschool-nursery'); ?> <a target="_blank" href="<?php echo esc_url( PRESCHOOL_NURSERY_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','preschool-nursery'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','preschool-nursery'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( PRESCHOOL_NURSERY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'preschool-nursery'); ?></a>
							<a href="<?php echo esc_url( PRESCHOOL_NURSERY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'preschool-nursery'); ?></a>
							<a href="<?php echo esc_url( PRESCHOOL_NURSERY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'preschool-nursery'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','preschool-nursery'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'Using this child-friendly Nursery WordPress Theme, building a child-oriented website just got a whole lot easier.    This theme comes with an impressive design aesthetic and appearance that is sure to catch visitors’ eyes. Moreover, the full-width slider on your website will enable you to quickly recognize it and clearly communicate its purpose. If you are creating a website for a kindergarten, daycare center, or you are offering childcare services, look no further. You will find this theme overall design extremely suitable. With some top-notch eCommerce capabilities included in this theme in the form of Woocommerce integration, you won’t have to worry about pushing your products or services online. This will help you in selling products as well as services online and generate more revenue online for your business. The most interesting part is the drag and drop page builder included as a part of this Nursery WordPress Theme.
                           This will make customization extremely easy allowing you to implement whatever changes to want to make to your website. So by getting a highly customized look for your website, you can definitely set the bar high for your competitors. With dedicated support from our expert developers, you will feel confident while working with the theme as you are just an email away from getting help if something goes wrong. Translation-ready features are available with the theme allowing you to make your content available in different languages. There are numerous widgets and shortcodes available with the Nursery WordPress Theme facilitating you to add many content elements to your website as and when needed.', 'preschool-nursery' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','preschool-nursery'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Documention','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','preschool-nursery'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','preschool-nursery'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','preschool-nursery'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( PRESCHOOL_NURSERY_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','preschool-nursery'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( PRESCHOOL_NURSERY_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','preschool-nursery'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','preschool-nursery'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','preschool-nursery'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','preschool-nursery'); ?></a> <?php esc_html_e( 'your website.','preschool-nursery'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','preschool-nursery'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( PRESCHOOL_NURSERY_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','preschool-nursery'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( PRESCHOOL_NURSERY_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','preschool-nursery'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','preschool-nursery'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( PRESCHOOL_NURSERY_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'preschool-nursery'); ?></a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>
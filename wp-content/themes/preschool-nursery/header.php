<?php
/**
 * The header for our theme 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	  wp_body_open(); 
	} else { 
	  do_action( 'wp_body_open' ); 
	} ?>	
	<?php if(get_theme_mod('preschool_nursery_loader_setting', false) != '' || get_theme_mod('preschool_nursery_enable_disable_preloader',false) != ''){ ?>
	    <div id="pre-loader">
			<div class='demo'>
				<?php $preschool_nursery_theme_lay = get_theme_mod( 'preschool_nursery_preloader_types','Default');
				if($preschool_nursery_theme_lay == 'Default'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($preschool_nursery_theme_lay == 'Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php }elseif($preschool_nursery_theme_lay == 'Two Circle'){ ?>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
					<div class='circle'>
					    <div class='inner'></div>
					</div>
				<?php } ?>
			</div>
	    </div>
	<?php }?>
	<a class="screen-reader-text skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'preschool-nursery' ); ?></a>
	<div id="page" class="site">
		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="main-header">
					<?php if( get_theme_mod('preschool_nursery_show_hide_topbar', false) != '' || get_theme_mod( 'preschool_nursery_enable_disable_topbar', false) != ''){ ?>
						<div class="topbar py-2">
							<div class="row mx-0">
								<div class="col-lg-7 col-md-7">
									<?php if( get_theme_mod( 'preschool_nursery_contact_number' ) != '') { ?>
						                <a href="tel:<?php echo esc_attr( get_theme_mod('preschool_nursery_contact_number','' )); ?>" class="phone me-md-4"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_phone_icon_changer','fas fa-phone')); ?> me-2"></i><?php echo esc_html( get_theme_mod('preschool_nursery_contact_number','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('preschool_nursery_contact_number','' )); ?></span></a>
						            <?php } ?>
						            <?php if( get_theme_mod( 'preschool_nursery_email_address' ) != '') { ?>
						                <a href="mailto:<?php echo esc_attr( get_theme_mod('preschool_nursery_email_address','' )); ?>" class="email"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_mail_icon_changer','fas fa-envelope')); ?> me-2"></i><?php echo esc_html( get_theme_mod('preschool_nursery_email_address','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('preschool_nursery_email_address','' )); ?></span></a>
						            <?php } ?>
								</div>
								<div class="col-lg-5 col-md-5">
									<div class="social-icons text-md-end text-center">
										<?php if( get_theme_mod( 'preschool_nursery_facebook_url' ) != '') { ?>
						                	<a href="<?php echo esc_url( get_theme_mod('preschool_nursery_facebook_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_facebook_icon_changer','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'preschool-nursery'); ?></span></a>
						            	<?php } ?>
										<?php if( get_theme_mod( 'preschool_nursery_instagram_url' ) != '') { ?>
						                	<a href="<?php echo esc_url( get_theme_mod('preschool_nursery_instagram_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_instagram_icon_changer','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'preschool-nursery'); ?></span></a>
						            	<?php } ?>
										<?php if( get_theme_mod( 'preschool_nursery_twitter_url' ) != '') { ?>
						                	<a href="<?php echo esc_url( get_theme_mod('preschool_nursery_twitter_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_twitter_icon_changer','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'preschool-nursery'); ?></span></a>
						            	<?php } ?>
										<?php if( get_theme_mod( 'preschool_nursery_pinterest_url' ) != '') { ?>
						                	<a href="<?php echo esc_url( get_theme_mod('preschool_nursery_pinterest_url','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_pinterest_icon_changer','fab fa-pinterest')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Pinterest', 'preschool-nursery'); ?></span></a>
						            	<?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
					<div class="bottom-header">
						<div class="row mx-0">
							<div class="col-lg-3 col-md-4 align-self-center">
								<div class="logo mb-3 mb-md-0">
									<?php if ( has_custom_logo() ) : ?>
										<div class="site-logo"><?php the_custom_logo(); ?></div>
									<?php endif; ?>
									<?php $blog_info = get_bloginfo( 'name' ); ?>
									<?php if ( ! empty( $blog_info ) ) : ?>
										<?php if( get_theme_mod('preschool_nursery_show_site_title',true) != ''){ ?>
										    <?php if ( is_front_page() && is_home() ) : ?>
										    	<h1 class="site-title m-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										    <?php else : ?>
										    	<p class="site-title m-0 p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										    <?php endif; ?>
										<?php }?>
									<?php endif; ?>
									<?php
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) :
									?>
										<?php if( get_theme_mod('preschool_nursery_show_tagline',true) != ''){ ?>
											<p class="site-description m-0">
										    <?php echo esc_html($description); ?>
											</p>
										<?php }?>
									<?php endif; ?>
								</div>
							</div>
							<div class="<?php if( get_theme_mod( 'preschool_nursery_header_button_text') != '' || get_theme_mod( 'preschool_nursery_header_button_url') != '') { ?>col-lg-7 col-md-5<?php } else {?>col-lg-9 col-md-8 <?php }?> align-self-center">
								<div class="<?php if( get_theme_mod( 'preschool_nursery_fixed_header', false) != ''  || get_theme_mod( 'preschool_nursery_enable_disable_fixed_header', false) != '') { ?> sticky-header<?php } else { ?>close-sticky <?php } ?>">
									<?php if ( has_nav_menu( 'top' ) ) : ?>
										<nav role="navigation" class="navigation-top">
											<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
										</nav>
									<?php endif; ?>
								</div>
							</div>
							<?php if( get_theme_mod( 'preschool_nursery_header_button_text') != '' || get_theme_mod( 'preschool_nursery_header_button_url') != '') { ?>
								<div class="col-lg-2 col-md-3 align-self-center">
									<div class="book-btn text-md-end text-center">
										<a href="<?php echo esc_url(get_theme_mod( 'preschool_nursery_header_button_url')); ?>"><?php echo esc_html(get_theme_mod( 'preschool_nursery_header_button_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod( 'preschool_nursery_header_button_text')); ?></span></a>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</header>
		
	<div class="site-content-contain">
		<div id="content" class="py-5">
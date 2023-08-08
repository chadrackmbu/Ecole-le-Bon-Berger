<?php
/**
 * The Header for our theme.
 * @package Driving School Lite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>

  <?php if(get_theme_mod('driving_school_lite_preloader',false) || get_theme_mod('driving_school_lite_preloader_responsive',false)){ ?>
    <?php if(get_theme_mod( 'driving_school_lite_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'driving_school_lite_preloader_type') == 'Circle') {?>
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>

  <header role="banner" id="header">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'driving-school-lite' ); ?><span class="screen-reader-text"><?php esc_html_e('Skip to Content','driving-school-lite'); ?></span></a>
    <?php if (has_nav_menu('primary')){ ?>
      <div class="toggle-menu responsive-menu p-2">
        <button role="tab" onclick="driving_school_lite_resMenu_open()"><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_menu_open_icon','fas fa-bars')); ?> pe-2"></i><?php echo esc_html( get_theme_mod('driving_school_lite_mobile_menu_label', __('Menu','driving-school-lite'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('driving_school_lite_mobile_menu_label', __('Menu','driving-school-lite'))); ?></span></button>
      </div>
      <div id="sidelong-menu" class="nav side-nav">
        <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'driving-school-lite' ); ?>">
          <?php if (has_nav_menu('primary')){ 
            wp_nav_menu( array( 
              'theme_location' => 'primary',
              'container_class' => 'main-menu-navigation clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          } ?>
          <a href="javascript:void(0)" class="closebtn responsive-menu p-1" onclick="driving_school_lite_resMenu_close()"><?php echo esc_html( get_theme_mod('driving_school_lite_close_menu_label', __('Close Menu','driving-school-lite'))); ?><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('driving_school_lite_close_menu_label', __('Close Menu','driving-school-lite'))); ?></span></a>
        </nav>
      </div>
    <?php }?>
    <?php if(get_theme_mod('driving_school_lite_top_header',true) == true || get_theme_mod('driving_school_lite_hide_topbar_responsive',true) == true){ ?>
      <div class="topbar text-md-start text-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 p-0 align-self-center">
              <?php if ( get_theme_mod('driving_school_lite_location','') != "" ) {?>
                <span class="location"><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_location_icon','fas fa-map-marker-alt')); ?> py-3 px-2"></i>
                <?php if ( get_theme_mod('driving_school_lite_location','') != "" ) {?>
                  <?php echo esc_html( get_theme_mod('driving_school_lite_location','' )); ?>
                <?php }?></span>
              <?php }?>
            </div>
            <div class="col-lg-4 col-md-4 align-self-center">
              <div class="social-media mt-md-0 mt-3 text-md-end text-center">
                <?php if( get_theme_mod( 'driving_school_lite_facebook' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_facebook','' ) ); ?>" class="px-1"><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Facebook','driving-school-lite'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'driving_school_lite_twitter' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_twitter','' ) ); ?>" class="px-1"><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Twitter','driving-school-lite'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'driving_school_lite_youtube' ) != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_youtube','' ) ); ?>" class="px-1"><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Youtube','driving-school-lite'); ?></span></a>
                <?php } ?>
                <?php if( get_theme_mod( 'driving_school_lite_linkedin') != '') { ?>
                  <a href="<?php echo esc_url( get_theme_mod( 'driving_school_lite_linkedin','' ) ); ?>" class="px-1"><i class="<?php echo esc_html(get_theme_mod('driving_school_lite_linkedin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin','driving-school-lite'); ?></span></a>
                <?php } ?>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 align-self-center">
              <?php if ( get_theme_mod('driving_school_lite_button_text','') != "" ) {?>
                <div class="enroll my-md-0 my-2 text-md-end text-center">
                  <span class="p-2"><a href="<?php echo esc_url(get_theme_mod('driving_school_lite_button_link')); ?>" class="py-2 px-3"><?php echo esc_html(get_theme_mod('driving_school_lite_button_text','')); ?> <span class="screen-reader-text"><?php esc_html_e('Enroll Now','driving-school-lite'); ?></span></a></span>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
    <div class="contact-detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 align-self-center">
            <div class="logo py-2 text-md-start text-center">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('driving_school_lite_show_site_title',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php if( get_theme_mod('driving_school_lite_show_tagline',true) != ''){ ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php endif; ?>
              <?php }?>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 align-self-center">
            <div class="row">
              <div class="col-lg-4 col-md-4 align-self-center">
                <?php if ( get_theme_mod('driving_school_lite_call_text','') != "" ) {?>
                  <div class="call py-3">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-3 p-0">
                        <div class="contact-icon py-3 text-center">
                          <i class="<?php echo esc_html(get_theme_mod('driving_school_lite_phone_icon','fas fa-phone-volume')); ?>"></i>
                        </div>
                      </div>
                      <div class="col-lg-9 col-md-12 col-9 p-0">
                        <?php if ( get_theme_mod('driving_school_lite_call_text','') != "" ) {?>
                          <p class="header-txt mt-lg-0 mt-md-2 mt-0 mb-lg-1 mb-md-0 mb-1 px-2 text-lg-start text-md-center"><?php echo esc_html( get_theme_mod('driving_school_lite_call_text','' )); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('driving_school_lite_call_number','') != "" ) {?>
                          <p class="m-0 px-2 text-lg-start text-md-center"><a href="tel:<?php echo esc_attr( get_theme_mod('driving_school_lite_call_number','' )); ?>"><?php echo esc_html( get_theme_mod('driving_school_lite_call_number','' )); ?><span class="screen-reader-text"><?php esc_html_e('Phone Number', 'driving-school-lite') ?></span></a></p>
                        <?php }?>
                      </div>
                    </div>                  
                  </div>
                <?php }?>
              </div>
              <div class="col-lg-4 col-md-4 align-self-center">
                <?php if ( get_theme_mod('driving_school_lite_email_text','') != "" ) {?>
                  <div class="mail py-3">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-3 p-0">
                        <div class="contact-icon py-3 text-center">
                          <i class="<?php echo esc_html(get_theme_mod('driving_school_lite_email_icon','far fa-envelope')); ?>"></i>
                        </div>
                      </div>
                      <div class="col-lg-9 col-md-12 col-9 p-0">
                        <?php if ( get_theme_mod('driving_school_lite_email_text','') != "" ) {?>
                          <p class="header-txt mt-lg-0 mt-md-2 mt-0 mb-lg-1 mb-md-0 mb-1 px-2 text-lg-start text-md-center"><?php echo esc_html( get_theme_mod('driving_school_lite_email_text','') ); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('driving_school_lite_email','') != "" ) {?>
                          <p class="m-0 px-2 text-lg-start text-md-center"><a href="mailto:<?php echo esc_attr( get_theme_mod('driving_school_lite_email','' )); ?>"><?php echo esc_html( get_theme_mod('driving_school_lite_email','') ); ?><span class="screen-reader-text"><?php esc_html_e('Email', 'driving-school-lite') ?></span></a></p>
                        <?php }?>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 align-self-center">
                <?php if ( get_theme_mod('driving_school_lite_timing_text','') != "" ) {?>
                  <div class="time py-3">
                    <div class="row">
                      <div class="col-lg-3 col-md-12 col-3 p-0">
                        <div class="contact-icon py-3 text-center">
                          <i class="<?php echo esc_html(get_theme_mod('driving_school_lite_timing_icon','far fa-clock')); ?>"></i>
                        </div>
                      </div>
                      <div class="col-lg-9 col-md-12 col-9 p-0">
                        <?php if ( get_theme_mod('driving_school_lite_timing_text','') != "" ) {?>
                          <p class="header-txt mt-lg-0 mt-md-2 mt-0 mb-lg-1 mb-md-0 mb-1 px-2 text-lg-start text-md-center"><?php echo esc_html( get_theme_mod('driving_school_lite_timing_text','') ); ?></p>
                        <?php }?>
                        <?php if ( get_theme_mod('driving_school_lite_timing','') != "" ) {?>
                          <p class="m-0 px-2 text-lg-start text-md-center"><?php echo esc_html( get_theme_mod('driving_school_lite_timing','') ); ?></p>
                        <?php }?>
                      </div> 
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-section py-2 <?php if( get_theme_mod( 'driving_school_lite_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
      <div class="menuborder">
        <div class="container">
          <div class="menu-sec position-relative">
            <div class="row m-0">
              <div class="align-self-center <?php if(get_theme_mod('driving_school_lite_show_search',true)) { ?>col-lg-11 col-md-10 col-6 black p-0" <?php } else { ?>col-lg-12 col-md-12 black p-0 <?php } ?>">
                <div class="top-bar">
                  <div class="menubox">
                    <div id="sidelong-menu" class="nav side-nav">
                      <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'driving-school-lite' ); ?>">
                        <?php if (has_nav_menu('primary')){  
                          wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) ); 
                        } ?>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <?php if(get_theme_mod('driving_school_lite_show_search',true) ){ ?>
                <div class="col-lg-1 col-md-2 col-6 black p-0 align-self-center">
                  <div class="search-box position-relative">
                    <div class="wrap"><?php get_search_form(); ?></div>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
        <hr class="dash mb-0">
      </div>
    </div>
  </header>

  <?php if(get_theme_mod('driving_school_lite_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>
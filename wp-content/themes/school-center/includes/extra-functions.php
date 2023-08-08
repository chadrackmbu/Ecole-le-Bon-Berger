<?php 
/**
 * School Center functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package School_Center
 */


/**
 * Header Start
*/
function education_center_header(){ 

    $phone          = get_theme_mod( 'phone' ); 
    $email          = get_theme_mod( 'email' ); 
    $ed_social      = get_theme_mod( 'ed_social_links', false ); ?>

    <header id="masthead" class="site-header style-one" itemscope itemtype="https://schema.org/WPHeader">
        <?php if( $phone || $email || $ed_social ){ ?>
            <div class="header-top clearfix">
                <div class="container">
                    <?php if( $phone || $email ){ ?>
                        <div class="info">
                            <?php 
                                if( $phone ) echo '<a href="' . esc_url( 'tel:' . preg_replace( '/[^\d+]/', '', $phone ) ) . '" class="tel-link"><svg width="16" height="16" viewbox="0 0 16 16" fill="#F7F7F7" xmlns="http://www.w3.org/2000/svg"><path d="M15.6643 12.2499L12.2415 9.13784C12.0797 8.99078 11.8671 8.91235 11.6486 8.91911C11.4301 8.92587 11.2227 9.01728 11.0703 9.17404L9.05539 11.2462C8.5704 11.1536 7.59536 10.8496 6.59169 9.84849C5.58803 8.84398 5.28407 7.86641 5.19397 7.38479L7.26445 5.36904C7.42141 5.21674 7.51296 5.00935 7.51972 4.79076C7.52647 4.57216 7.44791 4.35951 7.30066 4.19781L4.18946 0.775917C4.04215 0.613711 3.8374 0.515321 3.61871 0.501643C3.40002 0.487965 3.18462 0.560077 3.01824 0.702663L1.1911 2.26963C1.04552 2.41573 0.958635 2.61018 0.946915 2.81609C0.934285 3.02659 0.693472 8.01292 4.55994 11.8811C7.933 15.2533 12.1582 15.5 13.3218 15.5C13.4919 15.5 13.5963 15.4949 13.6241 15.4933C13.83 15.4817 14.0243 15.3945 14.1697 15.2482L15.7358 13.4203C15.879 13.2544 15.9516 13.0392 15.9383 12.8205C15.9249 12.6018 15.8266 12.397 15.6643 12.2499Z" /></svg>' . esc_html( $phone ) . '</a>';
                                if( $email ) echo '<a href="' . esc_url( 'mailto:' . sanitize_email( $email ) ) . '" class="email-link"><svg width="19" height="14" viewbox="0 0 19 14" fill="#F7F7F7" xmlns="http://www.w3.org/2000/svg"><path d="M17.9448 4.79271C18.0768 4.68776 18.2732 4.78594 18.2732 4.95182V11.875C18.2732 12.7721 17.5453 13.5 16.6482 13.5H2.56482C1.66768 13.5 0.939819 12.7721 0.939819 11.875V4.95521C0.939819 4.78594 1.13279 4.69115 1.2682 4.79609C2.02654 5.38516 3.03201 6.13333 6.48513 8.64193C7.19946 9.16328 8.40466 10.2602 9.60649 10.2534C10.8151 10.2635 12.044 9.14297 12.7312 8.64193C16.1844 6.13333 17.1864 5.38177 17.9448 4.79271ZM9.60649 9.16667C10.3919 9.18021 11.5226 8.17813 12.0914 7.7651C16.5838 4.50495 16.9258 4.22057 17.9617 3.40807C18.158 3.25573 18.2732 3.01875 18.2732 2.76823V2.125C18.2732 1.22786 17.5453 0.5 16.6482 0.5H2.56482C1.66768 0.5 0.939819 1.22786 0.939819 2.125V2.76823C0.939819 3.01875 1.05492 3.25234 1.25128 3.40807C2.28722 4.21719 2.62914 4.50495 7.12159 7.7651C7.69034 8.17813 8.82107 9.18021 9.60649 9.16667Z" /></svg>' . esc_html( $email ) . '</a>';
                            ?>
                        </div>
                    <?php } ?>
                    <section class="social-wrap">
                        <?php if( $ed_social ) education_center_social_links( true ); ?>
                    </section>
                </div>
            </div>
        <?php } ?>
        <div class="desktop-header">
            <div class="header-bottom">
                <div class="container">
                    <div class="header-wrapper">
                        <?php education_center_site_branding(); ?>
                        <div class="nav-wrap">
                            <div class="header-left">
                                <?php education_center_primary_navigation(); ?>
                            </div>
                            <div class="header-right">
                                <?php education_center_header_search(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            /**
             *  Mobile Navigation
             */
            education_center_mobile_navigation();
        ?>
    </header>
<?php }

/**
 * Banner Section
 */
function education_center_banner(){
$banner               = get_theme_mod( 'ed_banner_section', 'static_banner' );
$banner_subtitle      = get_theme_mod( 'banner_subtitle', __( 'WELCOME TO SCHOOL CENTER', 'school-center' ) );
$banner_title         = get_theme_mod( 'banner_title', __( 'School Learning is Critical to Career Excellence', 'school-center' ) );
$banner_desc          = get_theme_mod( 'banner_content',  __( 'Take your learning organisation to the next level.', 'school-center' ) );
$btn_one              = get_theme_mod( 'banner_btn_label', __( 'See Courses', 'school-center' ) );
$btn_one_url          = get_theme_mod( 'banner_link', '#' );

if( is_front_page() && $banner == 'static_banner' && has_custom_header() ){ ?>
    <section class="cta-banner left-align banner<?php if( has_header_video() ) echo esc_attr( ' video-banner' ); ?>" id="banner_section">
        <div class="banner-image-wrapper">
            <?php the_custom_header_markup(); ?>
        </div>
        <?php if( $banner_title || $banner_desc || $btn_one || $banner_subtitle) { ?>
            <div class="banner__wrap">
                <div class="container">
                    <div class="banner__text">
                        <?php if( $banner_subtitle ){ ?>
                            <span class="banner__stitle">
                                <?php echo esc_html( $banner_subtitle ); ?>
                            </span>
                        <?php } if( $banner_title ){ ?>
                            <h2 class="banner__title">
                                <?php echo esc_html( $banner_title ); ?>
                            </h2>                         
                        <?php } if( $banner_desc ){ ?>
                            <div class="banner-desc">
                                <?php echo wp_kses_post( wpautop( $banner_desc ) ); ?>
                            </div>
                        <?php } if( $btn_one && $btn_one_url ) { ?>
                            <div class="btn-wrap">
                                <a href="<?php echo esc_url( $btn_one_url ); ?>" class="btn btn-primary btn-lg">
                                    <?php echo esc_html( $btn_one ); ?>
                                    <span class="btn-arrow"></span>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
<?php }
}

function education_center_google_fonts_url() {
	$fonts_url = '';

    /* Translators: If there are characters in your language that are not
    * supported by respective fonts, translate this to 'off'. Do not translate
    * into your own language.
    */
    $mulish_font = _x( 'on', 'Mulish font: on or off', 'school-center' );

    if ( 'off' !== $mulish_font ) {
        $font_families[] = 'Mulish:300,300i,400,400i,500,500i,600,600i';

        $query_args = array(
            'family'  => urlencode( implode( '|', $font_families ) ),
            'subset'  => urlencode( 'latin,latin-ext' ),
            'display' => urlencode( 'fallback' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

	return esc_url( $fonts_url );
}
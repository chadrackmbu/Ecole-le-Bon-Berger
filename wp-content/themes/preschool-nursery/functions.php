<?php
/**
 * Preschool Nursery functions and definitions
 */

function preschool_nursery_setup() {
	
	load_theme_textdomain( 'preschool-nursery', get_template_directory() . '/languages' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'preschool-nursery-featured-image', 2000, 1200, true );
	add_image_size( 'preschool-nursery-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'preschool-nursery' ),
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );


	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support('responsive-embeds');
	
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_editor_style( array( 'assets/css/editor-style.css', preschool_nursery_fonts_url() ) );
}
add_action( 'after_setup_theme', 'preschool_nursery_setup' );

/* Theme Font URL */
function preschool_nursery_fonts_url(){
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'ABeeZee:400,400i';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Acme';
	$font_family[] = 'Allura:400';
	$font_family[] = 'Anton';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Archivo:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Arimo:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Arsenal:400,400i,700,700i';
	$font_family[] = 'Arvo:400,400i,700,700i';
	$font_family[] = 'Alegreya:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre:300,300i,400,400i,700,700i';
	$font_family[] = 'Bangers';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Balsamiq Sans:400,400i,700,700i';
	$font_family[] = 'Barlow Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bitter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'BenchNine:300,400,700';
	$font_family[] = 'Cabin:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cardo:400,400i,700';
	$font_family[] = 'Courgette';
	$font_family[] = 'Caveat Brush:400';
	$font_family[] = 'Cherry Swash:400,700';
	$font_family[] = 'Cormorant Garamond:300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Crimson Text:400,400i,600,600i,700,700i';
	$font_family[] = 'Cuprum:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Cookie';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Charm:400,700';
	$font_family[] = 'Chewy';
	$font_family[] = 'Days One';
	$font_family[] = 'Dosis:200,300,400,500,600,700,800';
	$font_family[] = 'EB Garamond:400,400i,500,500i,600,600i,700,700i,800,800i';
	$font_family[] = 'Economica:400,400i,700,700i';
	$font_family[] = 'Fira Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Francois One';
	$font_family[] = 'Frank Ruhl Libre:300,400,500,700,900';
	$font_family[] = 'Gabriela:400';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Handlee';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Heebo:100,200,300,400,500,700,800,900';
	$font_family[] = 'Hind:300,400,500,600,700';
	$font_family[] = 'Inconsolata:200,300,400,500,600,700,800,900';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Josefin Slab:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Josefin Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Jost:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Krub:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Lobster';
	$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Lora:400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'Libre Baskerville:400,400i,700';
	$font_family[] = 'Lobster Two:400,400i,700,700i';
	$font_family[] = 'Merriweather:300,300i,400,400i,700,700i,900,900i';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Marcellus:400';
	$font_family[] = 'Merienda One:400';
	$font_family[] = 'Monda:400,700';
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Muli';
	$font_family[] = 'Mulish:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Noto Serif:400,400i,700,700i';
	$font_family[] = 'Nunito Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';
	$font_family[] = 'Overpass:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Overpass Mono:300,400,500,600,700';
	$font_family[] = 'Oxygen:300,400,700';
	$font_family[] = 'Oswald:200,300,400,500,600,700';
	$font_family[] = 'Orbitron:400,500,600,700,800,900';
	$font_family[] = 'Patua One';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Padauk:400,700';
	$font_family[] = 'Playball:400';
	$font_family[] = 'Playfair Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'PT Sans:400,400i,700,700i';
	$font_family[] = 'PT Serif:400,400i,700,700i';
	$font_family[] = 'Philosopher:400,400i,700,700i';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Poiret One';
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Prata:400';
	$font_family[] = 'Quicksand:300,400,500,600,700';
	$font_family[] = 'Quattrocento Sans:400,400i,700,700i';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Rubik:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Roboto Condensed:300,300i,400,400i,700,700i';
	$font_family[] = 'Rokkitt:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Russo One';
	$font_family[] = 'Righteous';
	$font_family[] = 'Saira:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Sen:400,700,800';
	$font_family[] = 'Slabo';
	$font_family[] = 'Source Sans Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Sail:400';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Spartan:100,200,300,400,500,600,700,800,900';
	$font_family[] = 'Staatliches';
	$font_family[] = 'Stylish:400';
	$font_family[] = 'Tangerine:400,700';
	$font_family[] = 'Titillium Web:200,200i,300,300i,400,400i,600,600i,700,700i,900';
	$font_family[] = 'Trirong:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Ubuntu:300,300i,400,400i,500,500i,700,700i';
	$font_family[] = 'Unica One';
	$font_family[] = 'VT323';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Vollkorn:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Volkhov:400,400i,700,700i';
	$font_family[] = 'Work Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Yanone Kaffeesatz:200,300,400,500,600,700';
	$font_family[] = 'ZCOOL XiaoWei';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/**
 * Widget area.
 */
function preschool_nursery_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'preschool-nursery' ),
		'id'            => 'sidebox-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'preschool-nursery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'preschool-nursery' ),
		'id'            => 'sidebox-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on Pages and archive pages.', 'preschool-nursery' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title py-2 mb-2 text-center text-capitalize">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$preschool_nursery_widget_areas = get_theme_mod('preschool_nursery_footer_widget', '4');
	for ($i=1; $i<=$preschool_nursery_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'preschool-nursery' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title py-2 mb-3">',
			'after_title'   => '</h3>',
		) );
	}
}
add_action( 'widgets_init', 'preschool_nursery_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function preschool_nursery_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'preschool-nursery-fonts', preschool_nursery_fonts_url(), array(), null );

	// blocks-css
	wp_enqueue_style( 'preschool-nursery-block-style', get_theme_file_uri('/assets/css/blocks.css') );

	//bootstrap
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/assets/css/bootstrap.css' ));

	// Theme stylesheet.
	wp_enqueue_style( 'preschool-nursery-basic-style', get_stylesheet_uri() );

	//font-awesome 
	wp_enqueue_style( 'font-awesome-style', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	// Body
    $preschool_nursery_body_color = get_theme_mod('preschool_nursery_body_color', '');
    $preschool_nursery_body_font_family = get_theme_mod('preschool_nursery_body_font_family', '');
    $preschool_nursery_body_font_size = get_theme_mod('preschool_nursery_body_font_size', '');
	// Paragraph
    $preschool_nursery_paragraph_color = get_theme_mod('preschool_nursery_paragraph_color', '');
    $preschool_nursery_paragraph_font_family = get_theme_mod('preschool_nursery_paragraph_font_family', '');
    $preschool_nursery_paragraph_font_size = get_theme_mod('preschool_nursery_paragraph_font_size', '');
	// "a" tag
	$preschool_nursery_atag_color = get_theme_mod('preschool_nursery_atag_color', '');
    $preschool_nursery_atag_font_family = get_theme_mod('preschool_nursery_atag_font_family', '');
	// "li" tag
	$preschool_nursery_li_color = get_theme_mod('preschool_nursery_li_color', '');
    $preschool_nursery_li_font_family = get_theme_mod('preschool_nursery_li_font_family', '');
	// H1
	$preschool_nursery_h1_color = get_theme_mod('preschool_nursery_h1_color', '');
    $preschool_nursery_h1_font_family = get_theme_mod('preschool_nursery_h1_font_family', '');
    $preschool_nursery_h1_font_size = get_theme_mod('preschool_nursery_h1_font_size', '');
	// H2
	$preschool_nursery_h2_color = get_theme_mod('preschool_nursery_h2_color', '');
    $preschool_nursery_h2_font_family = get_theme_mod('preschool_nursery_h2_font_family', '');
    $preschool_nursery_h2_font_size = get_theme_mod('preschool_nursery_h2_font_size', '');
	// H3
	$preschool_nursery_h3_color = get_theme_mod('preschool_nursery_h3_color', '');
    $preschool_nursery_h3_font_family = get_theme_mod('preschool_nursery_h3_font_family', '');
    $preschool_nursery_h3_font_size = get_theme_mod('preschool_nursery_h3_font_size', '');
	// H4
	$preschool_nursery_h4_color = get_theme_mod('preschool_nursery_h4_color', '');
    $preschool_nursery_h4_font_family = get_theme_mod('preschool_nursery_h4_font_family', '');
    $preschool_nursery_h4_font_size = get_theme_mod('preschool_nursery_h4_font_size', '');
	// H5
	$preschool_nursery_h5_color = get_theme_mod('preschool_nursery_h5_color', '');
    $preschool_nursery_h5_font_family = get_theme_mod('preschool_nursery_h5_font_family', '');
    $preschool_nursery_h5_font_size = get_theme_mod('preschool_nursery_h5_font_size', '');
	// H6
	$preschool_nursery_h6_color = get_theme_mod('preschool_nursery_h6_color', '');
    $preschool_nursery_h6_font_family = get_theme_mod('preschool_nursery_h6_font_family', '');
    $preschool_nursery_h6_font_size = get_theme_mod('preschool_nursery_h6_font_size', '');

	$preschool_nursery_custom_css ='
	    body{
		    color:'.esc_html($preschool_nursery_body_color).'!important;
		    font-family: '.esc_html($preschool_nursery_body_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_body_font_size).'px !important;
		}
		p,span{
		    color:'.esc_html($preschool_nursery_paragraph_color).'!important;
		    font-family: '.esc_html($preschool_nursery_paragraph_font_family).';
		    font-size: '.esc_html($preschool_nursery_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($preschool_nursery_atag_color).'!important;
		    font-family: '.esc_html($preschool_nursery_atag_font_family).';
		}
		li{
		    color:'.esc_html($preschool_nursery_li_color).'!important;
		    font-family: '.esc_html($preschool_nursery_li_font_family).';
		}
		h1{
		    color:'.esc_html($preschool_nursery_h1_color).'!important;
		    font-family: '.esc_html($preschool_nursery_h1_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($preschool_nursery_h2_color).'!important;
		    font-family: '.esc_html($preschool_nursery_h2_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($preschool_nursery_h3_color).'!important;
		    font-family: '.esc_html($preschool_nursery_h3_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($preschool_nursery_h4_color).'!important;
		    font-family: '.esc_html($preschool_nursery_h4_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($preschool_nursery_h5_color).'!important;
		    font-family: '.esc_html($preschool_nursery_h5_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($preschool_nursery_h6_color).'!important;
		    font-family: '.esc_html($preschool_nursery_h6_font_family).'!important;
		    font-size: '.esc_html($preschool_nursery_h6_font_size).'!important;
		}
	';

	wp_add_inline_style( 'preschool-nursery-basic-style',$preschool_nursery_custom_css );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-jquery', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'preschool-nursery-skip-link-focus-fix-jquery', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$preschool_nurseryScreenReaderText=array();
	
	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'preschool-nursery-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );

		$preschool_nurseryScreenReaderText['expand']         = __( 'Expand child menu', 'preschool-nursery' );
		$preschool_nurseryScreenReaderText['collapse']       = __( 'Collapse child menu', 'preschool-nursery' );		
	}

	wp_enqueue_script( 'jquery-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), true );
	
	wp_enqueue_script( 'bootstrap-jquery', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	require get_parent_theme_file_path( '/color-option.php' );
	wp_add_inline_style( 'preschool-nursery-basic-style',$preschool_nursery_custom_css );

	wp_localize_script( 'preschool-nursery-skip-link-focus-fix-jquery', 'preschool_nurseryScreenReaderText', $preschool_nurseryScreenReaderText );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'preschool_nursery_scripts' );

function preschool_nursery_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function preschool_nursery_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function preschool_nursery_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function preschool_nursery_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function preschool_nursery_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'preschool_nursery_loop_columns');
if (!function_exists('preschool_nursery_loop_columns')) {
	function preschool_nursery_loop_columns() {
		$columns = get_theme_mod( 'preschool_nursery_woocommerce_product_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'preschool_nursery_shop_per_page', 20 );
function preschool_nursery_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'preschool_nursery_woocommerce_product_per_page', 9 );
	return $cols;
}

/* Excerpt Limit Begin */
function preschool_nursery_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function preschool_nursery_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

define('PRESCHOOL_NURSERY_LIVE_DEMO',__('https://www.themeseye.com/demo/preschool-nursery-pro/','preschool-nursery'));
define('PRESCHOOL_NURSERY_BUY_PRO',__('https://www.themeseye.com/wordpress/nursery-wordpress-theme','preschool-nursery'));
define('PRESCHOOL_NURSERY_PRO_DOC',__('https://themeseye.com/theme-demo/docs/preschool-nursery-pro/','preschool-nursery'));
define('PRESCHOOL_NURSERY_FREE_DOC',__('https://themeseye.com/theme-demo/docs/free-preschool-nursery/','preschool-nursery'));
define('PRESCHOOL_NURSERY_PRO_SUPPORT',__('https://www.themeseye.com/forums/forum/themeseye-support/','preschool-nursery'));
define('PRESCHOOL_NURSERY_FREE_SUPPORT',__('https://wordpress.org/support/theme/preschool-nursery/','preschool-nursery'));
//footer Link
define('PRESCHOOL_NURSERY_CREDIT',__('https://www.themeseye.com/wordpress/free-preschool-wordpress-theme/', 'preschool-nursery'));

if ( ! function_exists( 'preschool_nursery_credit' ) ) {
	function preschool_nursery_credit(){
		echo "<a href=".esc_url(PRESCHOOL_NURSERY_CREDIT)." target='_blank'>".esc_html__('Nursery WordPress Theme','preschool-nursery')."</a>";
	}
}

function preschool_nursery_enable_image_dimention(){
	if(get_theme_mod('preschool_nursery_post_image_dimention') == 'Custom Image Size' ) {
		return true;
	}
	return false;
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/dashboard/get_started_info.php' ); 
/* Webfonts */
require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );
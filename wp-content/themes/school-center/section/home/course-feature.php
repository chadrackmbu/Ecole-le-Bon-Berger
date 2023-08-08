<?php
/**
 * Course Section
 * 
 * @package Education_Center
 */

$ed_course_feat     = get_theme_mod( 'ed_course_feature', false ); 
$featured_image     = get_theme_mod( 'course_featured_image' );
$featured_title     = get_theme_mod( 'features_title' ); 
$featured_subtitle  = get_theme_mod( 'features_subtitle' );
$course_repeater    = get_theme_mod( 'course_feature_repeater' );
$btn_lbl            = get_theme_mod( 'course_btn_lbl', __( 'Read More', 'school-center' ) );

if( $ed_course_feat && ( $featured_image || $featured_title || $featured_subtitle || $course_repeater ) ) { ?>
    <section class="course-highlights" id="feature-course-section">
        <div class="container">
            <div class="course-highlights__wrap">
                <?php if( $featured_title || $featured_subtitle || $course_repeater ){ ?>
                    <div class="course-highlights__info">
                        <?php if( $featured_title || $featured_subtitle ){ ?>
                            <div class="section-header">
                                <?php if( $featured_subtitle ) echo '<span class="section-header__info">' . esc_html( $featured_subtitle ) . '</span>';
                                if( $featured_title ) echo '<h2 class="section-header__title">' . esc_html( $featured_title ) . '</h2>'; ?>
                            </div>
                        <?php } 
                        if( $course_repeater ){ ?>
                            <div class="main-wrapper">
                                <?php foreach( $course_repeater as $course ){ 
                                    $image         = ( isset( $course['image'] ) && $course['image'] ) ? $course['image'] : '';
                                    $coursetitle   = ( isset( $course['title'] ) && $course['title'] ) ? $course['title'] : '';
                                    $coursecontent = ( isset( $course['content'] ) && $course['content'] ) ? $course['content'] : '';
                                    $courselink    = ( isset( $course['link'] ) && $course['link'] ) ? $course['link'] : '';
                                    if( $image || $coursetitle || $coursecontent ){ ?>
                                        <div class="card-wrapper">
                                            <?php 
                                            if( $image ) echo '<div class="image">' . wp_get_attachment_image( $image, 'full' ) . '</div>';
                                            if( $coursetitle || $coursecontent || ( $btn_lbl && $courselink ) ){ ?>
                                                <div class="card">
                                                    <?php 
                                                        if( $coursetitle ) echo '<h3>' . esc_html( $coursetitle ) . '</h3>';
                                                        if( $coursecontent ) echo wp_kses_post( wpautop( $coursecontent ) ); 
                                                        if( $btn_lbl && $courselink ) echo '<a href="' . esc_url( $courselink ) . '" class="btn-link">' . esc_html( $btn_lbl ) . '</a>'
                                                    ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } 
                                } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }

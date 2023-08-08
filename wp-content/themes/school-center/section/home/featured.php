<?php
/**
 * Featured Section
 * 
 * @package Education_Center
 */

$ed_feat_course  = get_theme_mod( 'ed_feat_course', false );
$sec_title       = get_theme_mod( 'courses_title' );
$subtitle        = get_theme_mod( 'courses_subtitle' );
$btn_lbl         = get_theme_mod( 'courses_btn_lbl' );
$course_repeater = get_theme_mod( 'courses_repeater' );
$open_new_tab    = get_theme_mod( 'courses_new_tab', false );
$new_tab        = ( $open_new_tab ) ? 'target=_blank' : '';

if( $ed_feat_course ){ ?>
    <section class="f-course" id="featured-course">
        <div class="container">
            <?php if( $sec_title || $subtitle ){ ?>
                <div class="section-header section-header--center">
                    <?php if( $subtitle ) echo '<span class="section-header__info">' . esc_html( $subtitle ) . '</span>';
                    if( $sec_title ) echo '<h2 class="section-header__title">' . esc_html( $sec_title ). '</h2>'; ?>
                </div>
            <?php } ?>
            <div class="f-grid">
                <div class="filters filter-button-group">
                    <?php if( $course_repeater ){
                        echo '<div class="grid">';
                            foreach( $course_repeater as $courses ){
                            $course_image   = ( isset( $courses['image'] ) && $courses['image'] ) ? $courses['image'] : '';
                            $course_title   = ( isset( $courses['title'] ) && $courses['title'] ) ? $courses['title'] : '';
                            $course_content = ( isset( $courses['content'] ) && $courses['content'] ) ? $courses['content'] : '';
                            $course_link    = ( isset( $courses['link'] ) && $courses['link'] ) ? $courses['link'] : '';
                            if( $course_image || $course_title || $course_content || $course_link ){ ?>
                                <div class="f-wrap">
                                    <div class="f-wrap__content">
                                        <div class="f-image">
                                            <?php if( $course_image ) echo wp_get_attachment_image( $course_image , 'education-center-featured-posts', false, array( 'itemprop' => 'image' ) ); ?>
                                        </div>
                                        <?php if( $course_title || $course_content || ( $btn_lbl && $course_link ) ){
                                            echo '<div class="f-info">';
                                                    if( $course_title || $course_link ){
                                                    if( $course_link ) echo '<a href="' . esc_url( $course_link ) . '">';
                                                    if( $course_title ) echo '<h3>' . esc_html( $course_title ) . '</h3>';
                                                    if( $course_link ) echo '</a>';
                                                    if( $course_content ) echo wp_kses_post( wpautop( $course_content ) );
                                                } 
                                                if( $course_link && $btn_lbl ) echo '<div class="entry-meta"><a href="' . esc_url( $course_link ) . '" class="btn-link"' . esc_attr( $new_tab ) . '>' . esc_html( $btn_lbl ) . '</a></div>';
                                            echo '</div>';
                                        } ?>
                                    </div>
                                </div>
                            <?php }
                            }
                        echo '</div>';
                    } ?>
                </div>
            </div>
        </div>
    </section>
<?php }
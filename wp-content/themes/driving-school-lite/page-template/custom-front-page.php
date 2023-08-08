<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<?php do_action('driving_school_lite_above_slider_section'); ?>

<main id="maincontent" role="main">
  <?php if( get_theme_mod('driving_school_lite_slider_hide',false) != false){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod('driving_school_lite_slider_speed',3000)); ?>"> 
        <?php $driving_school_lite_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'driving_school_lite_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $driving_school_lite_content_pages[] = $mod;
            }
          }
          if( !empty($driving_school_lite_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $driving_school_lite_content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
              <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
              } else{?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/block-patterns/images/banner.png" alt="" />
              <?php } ?>
              <div class="carousel-caption d-none d-md-block p-4">
                <div class="inner_carousel">
                  <?php if ( get_theme_mod('driving_school_lite_slider_title',true) != '' ) {?>
                    <h1 class="animated fadeInDown mb-2"><?php the_title(); ?></h1>
                  <?php }?>
                  <?php if ( get_theme_mod('driving_school_lite_slider_content',true) != '' ) {?>  
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( driving_school_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('driving_school_lite_slider_excerpt_number','25')))); ?></p>
                  <?php }?>
                  <?php if ( get_theme_mod('driving_school_lite_slider_button_label','BOOK LESSON') != '' && get_theme_mod('driving_school_lite_slider_button',true) != '') {?>
                    <div class="more-btn py-3">              
                      <span><a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('driving_school_lite_slider_button_label',__('BOOK LESSON','driving-school-lite')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('driving_school_lite_slider_button_label',__('BOOK LESSON','driving-school-lite')) ); ?></span></a></span>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Previous','driving-school-lite'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Next','driving-school-lite'); ?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('driving_school_lite_below_slider_section'); ?>

  <?php if( get_theme_mod('driving_school_lite_page_title') != ''){ ?>
    <section id="our-features">
        <?php if( get_theme_mod('driving_school_lite_page_title') != ''){ ?>
          <div class="text-center heading-feature py-5">
            <h2 class="pt-0"><?php echo esc_html(get_theme_mod('driving_school_lite_page_title','')); ?></h2>
            <hr class="head my-0 mx-auto py-2">
          </div>
        <?php }?>
      <div class="container">
        <div class="main-box">
          <div class="row">
            <?php 
              $driving_school_lite_catData=  get_theme_mod('driving_school_lite_category');
              if($driving_school_lite_catData){
                $page_query = new WP_Query(array( 'category_name' => esc_html( $driving_school_lite_catData ,'driving-school-lite')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-lg-3 col-md-3">
                  <div class="right-part mb-3 text-center">
                    <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                    <h3><?php the_title(); ?></h3>     
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( driving_school_lite_string_limit_words( $excerpt,10 ) ); ?></p>
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','driving-school-lite'); ?><span class="screen-reader-text"><?php esc_html_e('READ MORE','driving-school-lite'); ?></span></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <?php endwhile;
                wp_reset_postdata();   
              }       
            ?>
          </div>
        </div>
        <div class="clearfix"></div> 
      </div>
    </section>
  <?php }?>

  <?php do_action('driving_school_lite_after_our_features_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>
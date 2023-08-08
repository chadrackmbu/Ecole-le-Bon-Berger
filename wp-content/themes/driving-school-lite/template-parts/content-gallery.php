<?php
/**
 * The template part for displaying post
 * @package Driving School Lite
 * @subpackage driving_school_lite
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="blog-sec animated fadeInDown p-2 mb-4">
  <div class="mainimage">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the gallery.
        if ( get_post_gallery() ) {
          echo '<div class="entry-gallery">';
            echo ( get_post_gallery() );
          echo '</div>';
        };
      };
    ?>
  </div>
  <?php if( get_theme_mod( 'driving_school_lite_metafields_date',true) != '' || get_theme_mod( 'driving_school_lite_metafields_author',true) != '' || get_theme_mod( 'driving_school_lite_metafields_comment',true) != '' || get_theme_mod( 'driving_school_lite_metafields_time',true) != '') { ?>
    <div class="post-info py-1 my-1">
      <?php if( get_theme_mod( 'driving_school_lite_metafields_date',true) != '') { ?>
        <i class="fa fa-calendar pe-2" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date me-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'driving_school_lite_metafields_author',true) != '') { ?>
        <i class="fa fa-user pe-2" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author me-2"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'driving_school_lite_metafields_comment',true) != '') { ?>
        <i class="fa fa-comments pe-2" aria-hidden="true"></i><span class="entry-comments me-2"> <?php comments_number( __('0 Comments','driving-school-lite'), __('0 Comments','driving-school-lite'), __('% Comments','driving-school-lite') ); ?></span> 
      <?php }?>
      <?php if( get_theme_mod( 'driving_school_lite_metafields_time',true) != '') { ?>
        <span class="entry-comments me-2"><i class="far fa-clock me-1" aria-hidden="true"></i> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if(get_theme_mod('driving_school_lite_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('driving_school_lite_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p class="m-0"><?php $excerpt = get_the_excerpt(); echo esc_html( driving_school_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('driving_school_lite_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('driving_school_lite_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('driving_school_lite_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn mt-3 text-end">
      <a href="<?php the_permalink(); ?>" class="blogbutton-small" ><?php echo esc_html( get_theme_mod('driving_school_lite_blog_button_text',__('Read Full', 'driving-school-lite')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('driving_school_lite_blog_button_text',__('Read Full', 'driving-school-lite')) ); ?></span></a>
    </div>
  <?php }?>
</article>
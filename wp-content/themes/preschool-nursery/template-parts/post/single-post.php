<?php
/**
 * Template part for displaying posts
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<div class="blogger singlebox p-2 mb-4">
		<?php if( get_theme_mod( 'preschool_nursery_single_post_image',true) != '') { ?>
			<div class="post-image">
			    <?php 
			      if(has_post_thumbnail()) { 
			        the_post_thumbnail(); 
			      }
			    ?>
		 	</div>
	 	<?php } ?>
	 	<?php if( get_theme_mod('preschool_nursery_show_hide_single_post_categories',true) != ''){ ?>
			<div class="category mb-2">
	  		<?php the_category(); ?>
			</div>
		<?php } ?>
		<?php if( get_theme_mod( 'preschool_nursery_single_post_date',true) != '' || get_theme_mod( 'preschool_nursery_single_post_comment',true) != '' || get_theme_mod( 'preschool_nursery_single_post_author',true) != '') { ?>
			<div class="post-info py-1 px-2 mb-2">
				<?php if( get_theme_mod( 'preschool_nursery_single_post_date',true) != '') { ?>
				  <span class="entry-date ps-2 pe-3"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_post_date_icon_changer','fa fa-calendar'));?>"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('preschool_nursery_seperator_metabox') ); ?>
				<?php } ?>
				<?php if( get_theme_mod( 'preschool_nursery_single_post_author',true) != '') { ?>
				  <span class="entry-author ps-2 pe-3"><i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_post_author_icon_changer','fa fa-user'));?>"></i> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('preschool_nursery_seperator_metabox') ); ?>
				<?php } ?>
				<?php if( get_theme_mod( 'preschool_nursery_single_post_comment',true) != '') { ?>
				  <i class="<?php echo esc_attr(get_theme_mod('preschool_nursery_post_comment_icon_changer','fas fa-comments'));?> ps-2 pe-2"></i><span class="entry-comments"><?php comments_number( __('0 Comments','preschool-nursery'), __('0 Comments','preschool-nursery'), __('% Comments','preschool-nursery') ); ?></span>
				<?php } ?>
			</div>
	    <?php }?>
		<h1><?php the_title();?></h1>
		<div class="text">
	    	<?php the_content();?>
	  	</div>
	  	<?php if( get_theme_mod( 'preschool_nursery_tags_hide',true) != '') { ?>
		  	<div class="tags my-2"><p><?php
		      if( $tags = get_the_tags() ) {
		        echo '<span class="meta-sep"></span>';
		        foreach( $tags as $content_tag ) {
		          $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
		          echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '" class="m-1 py-1 ps-2 pe-4">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
		        }
		      } ?></p></div>
	    <?php } ?>
	</div>
	<?php
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'preschool-nursery' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		if( get_theme_mod( 'preschool_nursery_nav_links',true) != '') {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('preschool_nursery_next_text',__( 'Next Post', 'preschool-nursery' ))) . '<i class="fas fa-chevron-right ms-1"></i></span> ' .
					'<span class="screen-reader-text">' . __( 'Next Post', 'preschool-nursery' ) . '</span> ' .
					'',
				'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-chevron-left me-1"></i>' . esc_html(get_theme_mod('preschool_nursery_prev_text',__( 'Previous Post', 'preschool-nursery' ))) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous Post', 'preschool-nursery' ) . '</span> ' .
					'',
			) );
		}
	}?>
</article>

<?php if (get_theme_mod('preschool_nursery_related_posts',true) != '') {
  get_template_part( 'template-parts/post/related-posts' );
}
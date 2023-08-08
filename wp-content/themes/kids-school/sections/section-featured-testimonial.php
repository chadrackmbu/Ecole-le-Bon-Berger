<?php 
/**
 * Template part for displaying Featured Testimonial Section
 *
 *@package Kids School
 */
    $featured_testimonial_section_title           = kids_school_get_option( 'featured_testimonial_section_title' );
    $featured_testimonial_content_type            = kids_school_get_option( 'featured_testimonial_content_type' );
    $number_of_featured_testimonial_items         = kids_school_get_option( 'number_of_featured_testimonial_items' );

    if( $featured_testimonial_content_type == 'featured_testimonial_page' ) :
        for( $i=1; $i<=$number_of_featured_testimonial_items; $i++ ) :
            $featured_testimonial_posts[] = kids_school_get_option( 'featured_testimonial_page_'.$i );
        endfor;  
    elseif( $featured_testimonial_content_type == 'featured_testimonial_post' ) :
        for( $i=1; $i<=$number_of_featured_testimonial_items; $i++ ) :
            $featured_testimonial_posts[] = kids_school_get_option( 'featured_testimonial_post_'.$i );
        endfor;
    endif;
    ?>

    <?php if( !empty($featured_testimonial_section_title) ):?>
        <div class="section-header">
            <h2 class="section-title"><?php echo esc_html($featured_testimonial_section_title);?></h2>
        </div><!-- .section-header -->
    <?php endif;?>

    <?php if( $featured_testimonial_content_type == 'featured_testimonial_page' ) : ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'page',
                'posts_per_page' => absint( $number_of_featured_testimonial_items ),
                'post__in'      => $featured_testimonial_posts,
                'orderby'       =>'post__in',
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; ?>             
                
                <article class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail'; ?>">
                    <div class="featured-testimonial-item">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = kids_school_the_excerpt( 20 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        </div><!-- .entry-container -->
                    </div><!-- .featured-testimonial-item -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    
    <?php else: ?>
        <div class="section-content col-3 clear">
            <?php $args = array (
                'post_type'     => 'post',
                'posts_per_page' => absint( $number_of_featured_testimonial_items ),
                'post__in'      => $featured_testimonial_posts,
                'orderby'       =>'post__in',
                'ignore_sticky_posts' => true,
            );        
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
            $i=-1; $j=0; 
                while ($loop->have_posts()) : $loop->the_post(); $i++; $j++; ?>                
                
                <article class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail'; ?>">
                    <div class="featured-testimonial-item">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                                <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                            </div><!-- .featured-image -->
                        <?php endif; ?>

                        <div class="entry-container">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = kids_school_the_excerpt( 20 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        </div><!-- .entry-container -->
                    </div><!-- .featured-testimonial-item -->
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- .section-content -->
    <?php endif;
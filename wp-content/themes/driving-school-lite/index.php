<?php
/**
 * The template for displaying home page.
 * @package Driving School Lite
 */
get_header(); ?>

<main id="maincontent" role="main" class="main-wrap-box py-4">
    <?php
    $driving_school_lite_left_right = get_theme_mod( 'driving_school_lite_layout','Right Sidebar');
    if($driving_school_lite_left_right == 'Right Sidebar'){ ?>
        <div id="blog_post">
    		<div class="container">  
                <div class="row">      
                    <div class="col-lg-9 col-md-9">   
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>          
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                	<div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
          		    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <?php }else if($driving_school_lite_left_right == 'Left Sidebar'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="col-lg-9 col-md-9" >   
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>             
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                </div>                   
            </div>
        </div>
    <?php }else if($driving_school_lite_left_right == 'One Column'){ ?>
        <div id="blog_post">
            <div class="container">
                <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php driving_school_lite_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content' , get_post_format() );
                    endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                    endif; 
                ?>
                <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php driving_school_lite_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>                  
            </div>
        </div>
    <?php }else if($driving_school_lite_left_right == 'Three Columns'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-6 col-md-6">  
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>              
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                </div>               
            </div>
        </div>
    <?php }else if($driving_school_lite_left_right == 'Four Columns'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-lg-3 col-md-3"> 
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>               
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div> 
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            </div>
        </div>
    <?php }else if($driving_school_lite_left_right == 'Grid Layout'){ ?>
        <div id="blog_post">
            <div class="container">
                <div class="row">
                    <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                        <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                            <div class="navigation">
                                <?php driving_school_lite_posts_pagination();?>
                                <div class="clearfix"></div>
                            </div>
                        <?php }?>
                    <?php }?>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/grid-layout' );
                        endwhile;
                          else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                </div>
                <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                    <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                        <div class="navigation">
                            <?php driving_school_lite_posts_pagination();?>
                            <div class="clearfix"></div>
                        </div>
                    <?php }?>
                <?php }?>                    
            </div>
        </div>
    <?php }else {?>
        <div id="blog_post">
            <div class="container">  
                <div class="row">      
                    <div class="col-lg-9 col-md-9">  
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'top' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>              
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content' , get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <?php if( get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'bottom' || get_theme_mod( 'driving_school_lite_blog_nav_position','bottom') == 'both') { ?>
                            <?php if( get_theme_mod( 'driving_school_lite_post_navigation',true) != '') { ?>
                                <div class="navigation">
                                    <?php driving_school_lite_posts_pagination();?>
                                    <div class="clearfix"></div>
                                </div>
                            <?php }?>
                        <?php }?>
                    </div>      
                    <div class="col-lg-3 col-md-3"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>

<?php get_footer(); ?>
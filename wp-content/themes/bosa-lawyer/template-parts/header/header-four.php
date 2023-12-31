<header id="masthead" class="site-header header-four">
	<?php
	$social_defaults = array(
		array(
			'icon' 		=> '',
			'link' 		=> '',
			'target' 	=> true,
		)			
	);
	$social_icons = get_theme_mod( 'social_media_links', $social_defaults );
	$has_social_icon = false;
	if ( is_array( $social_icons ) ){
		foreach( $social_icons as $value ){
			if( !empty( $value['icon'] ) ){
				$has_social_icon = true;
				break;
			}
		}
	}
	$header_btn_defaults = array(
		array(
			'header_btn_type' 			=> 'button-outline',
			'header_btn_bg_color'		=> '#EB5A3E',
			'header_btn_border_color'	=> '#1a1a1a',
			'header_btn_text_color'		=> '#1a1a1a',
			'header_btn_hover_color'	=> '#086abd',
			'header_btn_text' 			=> '',
			'header_btn_link' 			=> '#',
			'header_btn_target'			=> true,
			'header_btn_radius'			=> 0,
		),		
	);

	$header_buttons = get_theme_mod( 'header_button_repeater', $header_btn_defaults );
	$has_header_btn = false;
	if ( is_array( $header_buttons ) ){
		foreach( $header_buttons as $value ){
			if( !empty( $value['header_btn_text'] ) ){
				$has_header_btn = true;
				break;
			}
		}
	}
	?>
	<div class="top-header">
		<?php if( !get_theme_mod( 'disable_top_header_section', false ) ){ ?>
			<?php if( ( !get_theme_mod( 'disable_header_social_links', false ) && $has_social_icon ) || ( !get_theme_mod( 'disable_contact_detail', false ) && ( get_theme_mod( 'contact_phone', '' )  || get_theme_mod( 'contact_email', '' )  || get_theme_mod( 'contact_address', '' ) ) ) || !get_theme_mod( 'disable_search_icon', false ) || ( !get_theme_mod( 'disable_hamburger_menu_icon', false ) && is_active_sidebar( 'menu-sidebar' ) ) ){ ?>
				<div class="top-header-inner">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 d-none d-lg-block">
								<?php if( !get_theme_mod( 'disable_contact_detail', false ) ){ ?>
									<div class="header-contact">
										<ul>
											<li>
												<?php if( get_theme_mod( 'contact_email', '' ) ){ ?>
													<a href="<?php echo esc_url( 'mailto:' . get_theme_mod( 'contact_email', '' ) ); ?>">
														<i class="fas fa-envelope"></i>
														<?php echo esc_html( get_theme_mod( 'contact_email', '' ) ); ?>
													</a>
												<?php } ?>
											</li>
											<li>
												<?php if( get_theme_mod( 'contact_address', '' ) ){ ?>
													<i class="fas fa-map-marker-alt"></i>
													<?php echo esc_html( get_theme_mod( 'contact_address', '' ) ); ?>
												<?php } ?>
											</li>
										</ul>
									</div>
								<?php } ?>
							</div>
							<div class="col-lg-6 d-none d-lg-flex justify-content-end align-items-center">
								<div class="header-icons">
									<div class="social-profile">
										<?php 
									        if( !get_theme_mod( 'disable_header_social_links', false ) && $has_social_icon ){

									            echo '<ul class="social-group">';
									            $count = 0.2;
									            $link_target = '';
									            foreach( $social_icons as $value ){
									                if ( $value['target'] ){
										        		$link_target = '_blank';
										        	}else{
										        		$link_target = '';
										        	}
										            if( !empty( $value['icon'] ) ){
											            echo '<li><a href="' . esc_url( $value['link'] ) . '" target="' .esc_html( $link_target ). '"><i class=" ' . esc_attr( $value['icon'] ) . '"></i></a></li>';
											            $count = $count + 0.2;
											        }
									            }
									            echo '</ul>';
					        				}
				        				?>
									</div>
									<!-- Search form structure -->
									<?php if( !get_theme_mod( 'disable_search_icon', false ) ): ?>
										<div id="search-form" class="header-search-wrap">
											<button class="search-icon">
												<span class="fas fa-search"></span>
											</button>
										</div>
									<?php endif; ?>
									<?php if( !get_theme_mod( 'disable_hamburger_menu_icon', false ) && is_active_sidebar( 'menu-sidebar' ) ){ ?>
										<div class="alt-menu-icon">
											<a class="offcanvas-menu-toggler" href="#">
												<span class="icon-bar-wrap">
													<span class="icon-bar"></span>
												</span>

											</a>
										</div>
									<?php } ?>
								</div>
								<?php 
									if ( !get_theme_mod( 'disable_header_button', false ) ){
										if( $has_header_btn ){ ?>
											<div class="header-btn">
												<?php 
													$i = 1;
									            	foreach( $header_buttons as $value ){
									            		if( !empty( $value['header_btn_text'] ) ){
									            			$link_target = '';
															if( $value['header_btn_target'] ){
																$link_target = '_blank';
															}else {
																$link_target = '';
															} ?>
															
															<a href="<?php echo esc_url( $value['header_btn_link'] ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="header-btn-<?php echo $i.' '.esc_attr( $value['header_btn_type'] ); ?>">
																<?php echo esc_html( $value['header_btn_text'] ); ?>
															</a>
															
														<?php
									            		}
									            		$i++;
									            	}
									            ?>
									        </div> 	
									<?php }
									} ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		<?php } ?>
		<?php if( !get_theme_mod( 'disable_mobile_top_header', false ) ){ ?>
			<?php if( ( !get_theme_mod( 'disable_header_social_links', false ) && $has_social_icon ) || ( !get_theme_mod( 'disable_contact_detail', false ) && ( get_theme_mod( 'contact_phone', '' )  || get_theme_mod( 'contact_email', '' )  || get_theme_mod( 'contact_address', '' ) ) ) || !get_theme_mod( 'disable_search_icon', false ) || ( !get_theme_mod( 'disable_header_button', false ) && $has_header_btn ) || is_active_sidebar( 'menu-sidebar' ) ){ ?>
				<div class="alt-menu-icon d-lg-none">
					<a class="offcanvas-menu-toggler" href="#">
						<span class="icon-bar-wrap">
							<span class="icon-bar"></span>
						</span>
						<span class="iconbar-label d-lg-none"><?php echo esc_html( get_theme_mod( 'top_bar_name', 'TOP MENU' ) ); ?></span>
					</a>
				</div>
			<?php } ?>
		<?php } ?>
		<!-- header search form -->
		<div class="header-search">
			<div class="container">
				<?php get_search_form(); ?>
				<button class="close-button">
					<span class="fas fa-times"></span>
				</button>
			</div>
		</div>
		<!-- header search form end-->
	</div>
	<?php get_template_part( 'template-parts/offcanvas', 'menu' );
	$header_slider_defaults = array(
		array(
			'slider_item' 	=> '',
			)			
	);
	$header_image_slider = get_theme_mod( 'header_image_slider', $header_slider_defaults );
	$has_header_image = false;
	if ( is_array( $header_image_slider ) ){
		foreach( $header_image_slider as $value ){
			if( !empty( $value['slider_item'] ) ){
				$has_header_image = true;
				break;
			}
		}
	}
	?>
	<div class="bottom-header header-image-wrap fixed-header">
		<?php
			if( $has_header_image ){ ?>
				<div class="header-image-slider">
				    <?php 
				    $render_header_image_size = get_theme_mod( 'render_header_image_size', 'full' );
				    foreach( $header_image_slider as $slider_item ) :
					    if( wp_attachment_is_image( $slider_item['slider_item'] ) ){
				    		$get_header_image_array = wp_get_attachment_image_src( $slider_item['slider_item'], $render_header_image_size );
			    			if( is_array( $get_header_image_array ) ){
			    				$header_image_url = $get_header_image_array[0];
			    			}else{
			    				$header_image_url = '';
			    			}
				    	}else{
				    		if( empty( $slider_item['slider_item'] ) ){
			    				$header_image_url = '';
			    			}else{
			    				$header_image_url = $slider_item['slider_item'];
			    			}
				    	} ?>
				    	<div class="header-slide-item" style="background-image: url( <?php echo esc_url( $header_image_url ); ?> )"><div class="slider-inner"></div>
				    	</div>
				    <?php endforeach; ?>
				</div>
				<?php if( !get_theme_mod( 'disable_header_slider_arrows', false ) ) { ?>
					<ul class="slick-control">
				        <li class="header-slider-prev">
				        	<span></span>
				        </li>
				        <li class="header-slider-next">
				        	<span></span>
				        </li>
				    </ul>
				<?php }
				if ( !get_theme_mod( 'disable_header_slider_dots', false ) ){ ?>
					<div class="header-slider-dots"></div>
				<?php }
				} ?>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<?php get_template_part( 'template-parts/site', 'branding' ); ?>
				</div>
				<div class="col-lg-9 d-none d-lg-block">
					<div class="main-navigation-wrap">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bosa-lawyer' ); ?></button>
							<?php if ( has_nav_menu( 'menu-1' ) ) :
								wp_nav_menu( 
									array(
										'container'      => '',
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'menu_class'     => 'menu nav-menu',
									)
								);
							?>
							<?php else :
								wp_page_menu(
									array(
										'menu_class' => 'menu-wrap',
										'before'     => '<ul id="primary-menu" class="menu nav-menu">',
										'after'      => '</ul>',
									)
								);
							?>
							<?php endif; ?>
						</nav><!-- #site-navigation -->	
						<?php if( get_theme_mod( 'contact_phone', '' ) && !get_theme_mod( 'disable_contact_detail', false ) ){ ?>
							<div class="bottom-contact">
								<a href="<?php echo esc_url( 'tel:' . get_theme_mod( 'contact_phone', '' ) ); ?>">
									<i class="fas fa-phone"></i>
									<span><?php echo esc_html( get_theme_mod( 'header_phone_label', 'Phone' ) ); ?></span>
									<?php echo esc_html( get_theme_mod( 'contact_phone', '' ) ); ?>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="overlay"></div>
	</div>
	<div class="mobile-menu-container"></div>
</header><!-- #masthead -->
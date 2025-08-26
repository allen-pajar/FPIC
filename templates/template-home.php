<?php
/**
 * Template Name: Homepage
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
	<!-- _________________________ Start Middle _________________________ -->
				<section id="middle">
					<div class="middle_inner">
	<!--_________________________ Start Content _________________________ -->
						<div id="cmsms_row_1" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner cmsms_row_fullwidth">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
													<ul class="cb-slideshow">
													 <?php 
													 while( have_rows('home_page_hero_slider') ) : the_row();
													 ?>
													   <?php $image = get_field('hero_slider_image'); 

												     ?>
													    <li>
													        <span style="background-image: url('<?php the_sub_field("hero_slider_image")?>')">
													        </span>
													   </li>
														<?php endwhile; ?>
													</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cmsms_row_8" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<h2 id="cmsms_heading_553e49e81ea44" class="cmsms_heading"><? the_field("feature_section_heading"); ?></h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="cmsms_row_9" class="cmsms_row cmsms_color_scheme_default">
						<div class="cmsms_row_outer_parent">
							<div class="cmsms_row_outer">
								<div class="cmsms_row_inner">
								    <div class="aligncenter">
												<div class="cmsms_img  cmsms_image_c">
												    <?php $image = get_field('feature_section_image'); 
												    ?>
													<img style="width: 480px; height: auto;" src="<? the_field("feature_section_image"); ?>" />
												</div>
											</div>
									<div class="cmsms_row_margin cmsms_row_outer_parent">
										<div class="cmsms_column">
											<ul id="cmsms_icon_list_items_55476f8003424" class="cmsms_icon_list_items cmsms_icon_list_type_block cmsms_icon_list_pos_left cmsms_color_type_icon">
									<?php while( have_rows('feature_list') ) : the_row(); ?>
												<li class="cmsms_icon_list_item cmsms_column one_half">
													<div class="cmsms_icon_list_item_inner">
														<div class="cmsms_icon_list_icon_wrap">
															<span class="cmsms_icon_list_icon cmsms-icon-<?php the_sub_field("feature_list_icon"); ?>
"></span>
														</div>
														<div class="cmsms_icon_list_item_content">
															<h4 class="cmsms_icon_list_item_title"><?php the_sub_field("feature_list_heading"); ?></h4>
															<div class="cmsms_icon_list_item_text">
															    <?php the_sub_field("feature_list_text"); ?>
															</div>
														</div>
													</div>
												</li>
									<?php endwhile; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					<?php if (get_field("feature_list_call_to_action_button")): ?> 
						<?php while( have_rows('feature_list_call_to_action_button') ): the_row(); ?>
						<div id="cmsms_row_6" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
			   								 <?php if (get_field("background_image_section_cta_text")): ?> 
												<div id="cmsms_paypal_donations_553e49e8080d0" class="cmsms_paypal_donations_wrap">
													<div class="cmsms_paypal_donations">
														<a href="<?php the_sub_field("call_to_action_button_url"); ?>" class="cmsms_button"><?php the_sub_field("call_to_action_button_text"); ?></a>
													</div>
												</div>
											<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					    <?php if (get_field("background_image_section")): ?> 
						<?php while( have_rows('background_image_section') ): the_row(); ?>
						<div style="background-image: url('<?php the_sub_field("background_image_section_image"); ?>'); background-position: center center; background-size: cover;" id="cmsms_row_7" class="cmsms_row cmsms_color_scheme_default" data-stellar-background-ratio="0.5">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner cmsms_row_fullwidth">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<h2 id="cmsms_heading_553e49e808e7f" class="cmsms_heading"><?php the_sub_field("background_image_section_text"); ?></h2>
												<div class="cmsms_wrap_portfolio entry-summary" id="portfolio_553e49e808f56" data-meta="title,categories,rollover">

										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
											 <?php if (get_field("background_image_section_cta_text")): ?> 
												<div id="cmsms_paypal_donations_553e49e8080d0" class="cmsms_paypal_donations_wrap">
													<div class="cmsms_paypal_donations">
														<a href="<?php the_sub_field("background_image_section_cta_url"); ?>" class="cmsms_button"><?php the_sub_field("background_image_section_cta_text"); ?></a>
													</div>
												</div>
											<?php endif ?>
											</div>
										</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<?php endwhile; ?>	
						<?php endif; ?>
						<?php if( get_field('homepage_links') == true ): ?>
						<div id="cmsms_row_55476f7fe69b2" class="cmsms_row">
						<div class="cmsms_row_outer_parent">
							<div class="cmsms_row_outer">
								<div class="cmsms_row_inner">
									<div class="cmsms_row_margin">
									<?php 
									$menu_name = 'homepage'; //menu slug
									$locations = get_nav_menu_locations();
									$array_menu = wp_get_nav_menu_items($locations[ $menu_name ]);

									foreach ($array_menu as $navItem) {
									?>

									<div class="cmsms_column one_fourth">
											<div class="cmsms_icon_box cmsms_box_centered">
												<div class="icon_box_inner">
													<h1><?php echo $navItem->title ?></h1>
													<a href="<?php echo $navItem->url ?>" title="<?php echo $navItem->title ?>" class="cmsms_button icon_box_button">Read More</a>
												</div>
											</div>
										</div>
									<?php } ?>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>	
					<?php if (get_field("latest_news_header")): ?> 
					<!-- If Latest News -->
											<div id="cmsms_row_10" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<h2 id="cmsms_heading_553e49e81fcae" class="cmsms_heading"><?php the_field("latest_news_header"); ?></h2>
												<div class="cmsms_posts_slider" >
													<div id="cmsms_owl_carousel_553e49e81fd81" class="cmsms_owl_slider cmsms_slider_553e49e81fd81">
														<div>
									                       

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>	
				</div>
			</div>
		</section>

		<script src='<?php echo get_template_directory_uri()?>/assets/LayerSlider/js/layerslider.kreaturamedia.jquery.js'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/LayerSlider/js/greensock.js'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/LayerSlider/js/layerslider.transitions.js'></script>
<?php get_footer(); ?>

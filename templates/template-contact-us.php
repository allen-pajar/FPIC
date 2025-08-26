<?php
/**
 * Template Name: Contact Us
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>
		<style type="text/css">
			.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list {
				overflow-y:auto;
			}

			.header_mid_inner .logo {
				position:static;
			}
			
			#footer.cmsms_footer_default .footer_inner {
				min-height:450px;
			}
			
			.fixed_footer #main {
				margin-bottom:450px;
			}
			
			.headline_color {
				background-color:#000000;
				opacity:0;
			}
			
			.headline_outer {
				background-repeat:repeat;
				background-attachment:fixed;
				background-size:cover;
				min-height: 175px;
				background-position: center center;
			}
			
			.headline_aligner {
				min-height:150px;
			}
			
			#cmsms_row_555091c556a5e .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_555091c556a5e .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 

			#cmsms_row_555091c556a5e .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-left:0%; 
			} 
			#cmsms_row_555091c556a5e .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-right:0%; 
			} 

			#google_map_555091c556dfc{
				height: 400px;
			}
			 
			#cmsms_row_555091c556fa4 .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_555091c556fa4 .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			} 
			 
			#cmsms_heading_555091c557200, #cmsms_heading_555091c557200 a { 
				font-size:24px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:20px; 
			} 
			 
			#cmsms_heading_555091c5584b3, #cmsms_heading_555091c5584b3 a { 
				font-size:24px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:38px; 
			} 
			 #cmsms_icon_list_items_555091c558691 { 
				padding-left:38px; 
			} 

			#cmsms_icon_list_items_555091c558691 .cmsms_icon_list_item:before { 
				font-size:18px; 
				left:-38px; 
			} 

			.cmsms_icon_list_items #cmsms_icon_list_item_555091c5587e4:before { 
				color:#4ecdc4; 
			} 

			.cmsms_icon_list_items #cmsms_icon_list_item_555091c558872:before { 
				color:#58cf90; 
			} 

			.cmsms_icon_list_items #cmsms_icon_list_item_555091c5588fb:before { 
				color:#58cf90; 
			} 
			 
			#cmsms_row_555091c558a73 { 
				background-position: top center; 
				background-repeat: repeat-y; 
				background-attachment: scroll; 
				background-size: cover; 
				min-height: 175px;
			} 

			#cmsms_row_555091c558a73 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_555091c558a73 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
			}
			
			#cmsms_icon_list_items_555091c558691 .cmsms_icon_list_item p {
			    padding: 0;
			}
			
						.cmsms_dynamic_cart .widget_shopping_cart_content .cart_list {
				overflow-y:auto;
			}

		</style>

	<!-- _________________________ Start Middle _________________________ -->
	<section id="middle" <?php post_class(); ?>>
		<div class="headline cmsms_color_scheme_first">
			<div class="headline_outer" style="background-image: url(<?php the_field("header_banner_image")?>);">
				<div class="headline_color"></div>
				<div class="headline_inner align_center">
					<div class="headline_aligner"></div>
					<div class="headline_text headline_subtitle">
						<h1 class="entry-title">
							<?php the_title()?>
						</h1>
						<h5>
							<?php the_field("page_subtitle"); ?>
						</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="middle_inner opened-article">
				<!--_________________________ Start Content _________________________ -->
												  <?php if (get_field("google_map")): ?>
						<div id="cmsms_row_555091c556a5e" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner cmsms_row_fullwidth">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<div id="google_map_555091c556dfc" class="google_map">
												  <?php the_field("google_map"); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
													<?php endif; ?>
						<div id="cmsms_row_555091c556fa4" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_half">
												<h3 id="cmsms_heading_555091c557200" class="cmsms_heading"><?php the_field("contact_text_heading_1"); ?></h3>
												<div class="cmsms_text">
											    <?php the_field("contact_text"); ?>
												</div>
											</div>
											<div class="cmsms_column one_half">
												<h3 id="cmsms_heading_555091c5584b3" class="cmsms_heading"><?php the_field("contact_text_heading_2"); ?></h3>
												<?php if( have_rows('contact_list') ): ?>
												<ul id="cmsms_icon_list_items_555091c558691" class="cmsms_icon_list_items cmsms_icon_list_type_list cmsms_icon_list_pos_left cmsms_color_type_border">
												<?php
  while( have_rows('contact_list') ) : the_row();
?>

													<li id="cmsms_icon_list_item_555091c5587e4" class="cmsms_icon_list_item"><?php the_sub_field("contact_info"); ?></li>
													<?php endwhile;?>
												</ul>
													<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

<?php get_footer(); ?>

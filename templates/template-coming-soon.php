<?php
/**
 * Template Name: Coming Soon
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
			
			.headline_outer {
				background-repeat:repeat;
				background-attachment:fixed;
				background-size:cover;
				min-height: 480px;
				background-position: center center;
			}
				
			.headline_color {
				background-color:#000000;
				opacity:0;
			}
			
			.headline_aligner {
				min-height:150px;
			}
			
			#cmsms_row_5548a7b764a2f .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_5548a7b764a2f .cmsms_row_outer_parent { 
				padding-bottom: 40px; 
			} 
			 
			#cmsms_heading_5548a7b764c0c, #cmsms_heading_5548a7b764c0c a { 
				font-size:26px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_5548a7b764d38 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5548a7b764d38 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_row_5548a7b76965e .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_5548a7b76965e .cmsms_row_outer_parent { 
				padding-bottom: 40px; 
			} 
			 
			#cmsms_heading_5548a7b769858, #cmsms_heading_5548a7b769858 a { 
				font-size:26px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_5548a7b76993b .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5548a7b76993b .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_row_5548a7b76b78b .cmsms_row_outer_parent { 
				padding-top: 50px; 
			} 

			#cmsms_row_5548a7b76b78b .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			}
			 
			#cmsms_heading_5548a7b76b9ec, #cmsms_heading_5548a7b76b9ec a { 
				font-size:26px; 
				font-weight:400; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_5548a7b76bb07 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5548a7b76bb07 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_clients_5548a7b76bcdd .cmsms_clients_item { height:160px; line-height:160px; } 
			#cmsms_clients_5548a7b76bcdd .cmsms_clients_item a { line-height:160px; } 
			 
			#cmsms_row_5548a7b76d2f5 { 
				background-image: url(img/images/bg-big-water.jpg); 
				background-position: top center; 
				background-repeat: repeat-y; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_5548a7b76d2f5 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_5548a7b76d2f5 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
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
	</section>
<?php get_footer(); ?>
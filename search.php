<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

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
				background-position: center center;
				min-height: 175px;
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
							<?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
						</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="middle_inner opened-article">
			<div class="content_wrap l_sidebar">
			    		
			<!-- _________________________ Start Sidebar _________________________ -->
				<div class="sidebar fl" role="complementary">
					<aside id="search-2" class="widget widget_search">
						<?php get_search_form(); ?>
					</aside>
				</div>
			<!-- _________________________ Finish Sidebar _________________________ -->
									<!--_________________________ Start Content _________________________ -->
									<div class="content fr entry" role="main">
								<div class="blog opened-article">

							<!--_________________________ Start Standard Article _________________________ -->
	<?php
	if ( have_posts() ) {
	
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
} ?>

		</div>
	</section>
<?php get_footer(); ?>

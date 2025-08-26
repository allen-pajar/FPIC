<?php
/**
 * Template Name: Document Library
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
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'document',
    'posts_per_page' => -1,
    'orderby'          => 'date',
    'order'            => 'DESC'
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
?>

						<article class="cmsms_default_type post">

						<div id="cmsms_row_5551a75f0147f" class="cmsms_row cmsms_color_scheme_default">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<div id="cmsms_heading_5551a75f01776" class="cmsms_heading_wrap cmsms_heading_align_left">
													<h3 class="cmsms_heading">
													       <?php the_title(); ?>
													    </h3>
												</div>
												<div class="cmsms_text">
													<?php the_content(); ?>
																		<div class="cmsms_post_content entry-content"></div>
																		
																		<footer class="cmsms_post_footer entry-meta">
																		    
													<?php 
													      $document_download_eng = get_field('document_upload_eng');
													      $document_download_spa = get_field('document_upload_spa');
													    ?>
																			<?php if ($document_download_eng) { ?>
																			<a target="_blank" href="<?php echo $document_download_eng; ?>" class="button cmsms_post_read_more" href="open-post.html" title="Download <?php the_title(); ?>">Download Document (English)</a>
																			<?php } 
																			
																			if ($document_download_spa) { ?>
																			<a target="_blank" href="<?php echo $document_download_spa; ?>" class="button cmsms_post_read_more" href="open-post.html" title="Download <?php the_title(); ?>">Download Document (Spanish)</a>
																		    <?php } ?>
																		</footer>
												</div>
												<div id="cmsms_divider_5551a75f0195f" class="cmsms_divider cmsms_divider_width_long cmsms_divider_pos_center"></div>
											</div>
										</div>
									</div>
								</div>
								</article>
								
								<?php
    endwhile;
endif;
?>
						<!-- _________________________ Finish Content _________________________ -->
		</div>
	</section>
<?php get_footer(); ?>

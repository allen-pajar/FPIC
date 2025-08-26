<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

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
					</div>
				</div>
			</div>
		</div>
		<div class="middle_inner opened-article">
			<div class="content_wrap r_sidebar">
			    		
			<!-- _________________________ Start Sidebar _________________________ -->
				<div class="sidebar fr" role="complementary">
					<aside id="search-2" class="widget widget_search">
					</aside>
				</div>
			<!-- _________________________ Finish Sidebar _________________________ -->
									<!--_________________________ Start Content _________________________ -->
									<div class="content fl entry" role="main">
								<div class="blog opened-article">
							<!--_________________________ Start Standard Article _________________________ -->

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
													<?php 
													       if (get_field('document_upload')) :
													    ?>
																		<footer class="cmsms_post_footer entry-meta">
																			<a target="_blank" href="<?php echo $document_download; ?>" class="button cmsms_post_read_more" href="open-post.html" title="Download <?php the_title(); ?>">Download Document</a>
																		</footer>
													<?php endif ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								</article>
						<!-- _________________________ Finish Content _________________________ -->
		</div>
	</section>


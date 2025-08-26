<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

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
													       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													    </h3>
												</div>
												<div class="cmsms_text">
													<?php the_content(); ?>
												<div class="cmsms_post_content entry-content"></div>
												<?php if( get_field('document_upload') ): ?>
													<footer class="cmsms_post_footer entry-meta">
														<a target="_blank" href="<?php echo $document_download; ?>" class="button cmsms_post_read_more" href="open-post.html" title="Download <?php the_title(); ?>">Download Document</a>
												    </footer>
												<?php endif; ?>
												</div>
												<div id="cmsms_divider_5551a75f0195f" class="cmsms_divider cmsms_divider_width_long cmsms_divider_pos_center"></div>
											</div>
										</div>
									</div>
								</div>
								</article>	
<!-- _________________________ Finish Content _________________________ -->
								

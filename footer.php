<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
						<div id="cmsms_row_12" class="cmsms_row cmsms_color_scheme_first" data-stellar-background-ratio="0.5">
							<div class="cmsms_row_outer_parent">
								<div class="cmsms_row_outer">
									<div class="cmsms_row_inner">
										<div class="cmsms_row_margin">
											<div class="cmsms_column one_first">
												<div class="cmsms_sidebar sidebar_layout_14141414">
													<aside class="widget widget_text">
													<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
													      <?php dynamic_sidebar( 'footer-widget-1' ); ?>
													<?php endif; ?>
													</aside>
													<aside class="widget widget_text">
													<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
													      <?php dynamic_sidebar( 'footer-widget-2' ); ?>
													<?php endif; ?>
													</aside>
													<aside class="widget widget_text">
													<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
													      <?php dynamic_sidebar( 'footer-widget-3' ); ?>
													<?php endif; ?>
													</aside>
													<div class="cl"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="cl"></div>
	<!-- _________________________ Finish Content _________________________ -->
					</div>
	<!-- _________________________ Finish Middle _________________________ -->
				<a href="javascript:void(0);" id="slide_top" class="cmsms-icon-up-open-mini"></a>
			</div>
	<!-- _________________________ Finish Main _________________________ -->
	<!-- _________________________ Start Footer _________________________ -->
			<footer id="footer" class="cmsms_color_scheme_footer cmsms_footer_small">
				<div class="footer_bg">
					<div class="footer_inner">
						<div class="social_wrap">
							<div class="social_wrap_inner">
								<?php if ( is_active_sidebar( 'footer-widget-4' ) ) : ?>
							      <?php dynamic_sidebar( 'footer-widget-4' ); ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="copyright">
						    <?php if ( is_active_sidebar( 'footer-widget-5' ) ) : ?>
						      <?php dynamic_sidebar( 'footer-widget-5' ); ?><?php echo date("Y");?> |  All Rights Reserved
							<?php endif; ?>
						 </div>
					</div>
				</div>
			</footer>
	<!-- _________________________ Finish Footer _________________________ -->
	<!-- _________________________ Finish Page _________________________ -->
	
		<script src='<?php echo get_template_directory_uri()?>/assets/bootstrap/js/bootstrap.min.js'></script>
		<!--
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jsLibraries.min.js'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.iLightBox.min.js'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jqueryLibraries.min.js'></script>
		<script>
		/* <![CDATA[ */
			var cmsms_script = {
				"ilightbox_skin":"dark",
				"ilightbox_path":"vertical",
				"ilightbox_infinite":"0",
				"ilightbox_aspect_ratio":"1",
				"ilightbox_mobile_optimizer":"1",
				"ilightbox_max_scale":"1",
				"ilightbox_min_scale":"0.2",
				"ilightbox_inner_toolbar":"0",
				"ilightbox_smart_recognition":"0",
				"ilightbox_fullscreen_one_slide":"0",
				"ilightbox_fullscreen_viewport":"center",
				"ilightbox_controls_toolbar":"1",
				"ilightbox_controls_arrows":"0",
				"ilightbox_controls_fullscreen":"1",
				"ilightbox_controls_thumbnail":"1",
				"ilightbox_controls_keyboard":"1",
				"ilightbox_controls_mousewheel":"1",
				"ilightbox_controls_swipe":"1",
				"ilightbox_controls_slideshow":"0",
				"ilightbox_close_text":"Close",
				"ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)",
				"ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)",
				"ilightbox_slideshow_text":"Slideshow",
				"ilightbox_next_text":"Next",
				"ilightbox_previous_text":"Previous",
				"ilightbox_load_image_error":"An error occurred when trying to load photo.",
				"ilightbox_load_contents_error":"An error occurred when trying to load contents.",
				"ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."
			};
		/* ]]> */
		</script>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.easing.min.js?ver=1.3.0'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.script.js'></script>
		
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.tweet.min.js'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.isotope.min.js'></script>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.isotope.mode.js'></script>
		-->
	</body>
</html>

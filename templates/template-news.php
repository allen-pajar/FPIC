<?php
/**
 * Template Name: News
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
				min-height: 175px;
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
		<div class="middle_inner opened-article">
			<div class="content_wrap r_sidebar">
			    		
			<!-- _________________________ Start Sidebar _________________________ -->
							<div class="content entry" role="main">
								<div id="cmsms_row_554c88a07207b" class="cmsms_row cmsms_color_scheme_default">
									<div class="cmsms_row_outer_parent">
										<div class="cmsms_row_outer">
											<div class="cmsms_row_inner">
												<div class="cmsms_row_margin">
													<div class="cmsms_column one_first">
														<div class="cmsms_wrap_blog entry-summary" id="blog_554c88a072294" data-meta="date,categories,author,comments,likes,more">
															<div class="blog standard">
															<!--_________________________ Start Standard Article _________________________ -->
																<article class="cmsms_default_type post">
																	<div class="cmsms_post_info entry-meta">
																		<span class="cmsms_post_format_img cmsms-icon-desktop-3"></span>
																		<abbr class="published cmsms_post_date" title="July 20, 2014">
																			<span class="cmsms_day_mon">20.07</span>
																			<span class="cmsms_year">2014</span>
																		</abbr>
																	</div>
																	<div class="cmsms_post_cont">
																	  <!-- image -->
																		<figure>
																			<a href="open-post.html" title="The Ozone Layer" class="cmsms_img_link preloader">
																				<img width="820" height="490" src="img/images/ozon-full.jpg" class="full-width" alt="The Ozone Layer" title="The Ozone Layer" />
																			</a>
																		</figure>
																		<!-- video -->
																		<div class="cmsms_video_wrap">
																			<iframe src="//player.vimeo.com/video/22633151"></iframe>
																		</div>
																		<header class="cmsms_post_header entry-header">
																			<h3 class="cmsms_post_title entry-title cmsms_valid_title">
																				<a href="open-post.html">The Ozone Layer</a>
																			</h3>
																		</header>
																		<div class="cmsms_post_cont_info entry-meta">
																			<span class="cmsms_post_user_name">By <a href="#" title="Posts by backdoor" class="vcard author"><span class="fn" rel="author">backdoor</span></a></span><span class="cmsms_post_category">In <a href="open-post.html" rel="category tag">Ecology</a>, <a href="open-post.html" rel="category tag">Home</a></span>
																		</div>
																		<div class="cmsms_post_content entry-content"></div>
																		<footer class="cmsms_post_footer entry-meta">
																			<div class="cmsms_post_meta_info">
																				<a href="#" onclick="return false;" id="cmsmsLike-172" class="cmsmsLike active cmsms-icon-heart-7"><span>1</span></a><a class="cmsms_post_comments cmsms-icon-comment-6" href="#" title="Comment on The Ozone Layer">1</a>
																			</div>
																			<a class="button cmsms_post_read_more" href="open-post.html">Read More</a>
																		</footer>
																	</div>
																</article>
																<!--_________________________ Finish Standard Article _________________________ -->
															</div>
															<div class="cmsms_wrap_more_posts"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="cl"></div>
							</div>
							<!-- _________________________ Finish Content _________________________ -->
							<!-- _________________________ Start Sidebar _________________________ -->
							<div class="sidebar" role="complementary">
								<aside id="search-2" class="widget widget_search">
									<div class="search_bar_wrap">
										<form method="get">
											<p>
												<input name="s" placeholder="enter keywords" value="" type="text" />
												<button type="submit" class="cmsms-icon-search-7"></button>
											</p>
										</form>
									</div>
								</aside>
								<aside id="custom-flickr-2" class="widget widget_custom_flickr_entries">
									<div id="flickr">
										<h3 class="widgettitle">Flickr</h3>
										<div class="wrap">
											<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=64867600@N03"></script>
										</div>
										<div class="cl"></div>
										<a href="http://www.flickr.com/photos/64867600@N03" class="more_button" target="_blank">
											<span>More flickr images</span>
										</a>
									</div>
								</aside>
								<aside id="cmsms_paypal" class="widget widget_custom_paypal_donations">
									<div class="cmsms_paypal_donations_widget">
										<h3 class="widgettitle">Donate</h3>
										<p>Donec fringilla, erat et semper eleifend, justo quam sodales a vehicula ipsum libero eget mi. Integer condimentum, nibh aliquet.</p>
										<a href="#" class="button">DONATE NOW!</a>
									</div>
								</aside>		
								<aside id="recent-posts-2" class="widget widget_recent_entries">
									<h3 class="widgettitle">Recent Posts</h3>
									<ul>
										<li><a href="open-post.html">The Ozone Layer</a></li>
										<li><a href="open-post.html">Spring Melody</a></li>
										<li><a href="open-post.html">Save Tropic Forests</a></li>
										<li><a href="open-post.html">Keep Calm &#038; Save Nature</a></li>
										<li><a href="open-post.html">Bear Population</a></li>
									</ul>
								</aside>
							</div>
						<!-- _________________________ Finish Sidebar _________________________ -->
						</div>
					</div>
				</section>
<!-- _________________________ Finish Middle _________________________ -->

<?php get_footer(); ?>

<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage FPIC360
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes();?> class="cmsms_html">
	<head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<?php wp_head(); ?>
		<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery.js'></script>
		<!--<script src='<?php echo get_template_directory_uri()?>/assets/js/jquery-migrate.min.js'></script>-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DXF078T5M8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DXF078T5M8');
</script>
		
		
						
		<style>
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
			
			#cmsms_row_1 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_1 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 

			#cmsms_row_1 .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-left:0%; 
			} 
			#cmsms_row_1 .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-right:0%; 
			} 
			 
			#cmsms_row_2 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_2 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
			}
			 
			#cmsms_row_3 .cmsms_row_outer_parent { 
				padding-top: 60px; 
			} 

			#cmsms_row_3 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			}
			 
			#cmsms_heading_553e49e80710d, #cmsms_heading_553e49e80710d a { 
				font-size:34px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:40px; 
			} 
			
			#cmsms_row_4 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_4 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			} 
			 
			#cmsms_stat_553e49e8075f6 .cmsms_stat_counter { 
				color:#57cbe1; 
			} 

			#cmsms_stat_553e49e8076a4 .cmsms_stat_counter { 
				color:#62e0c1; 
			} 

			#cmsms_stat_553e49e80773a .cmsms_stat_counter { 
				color:#7fe092; 
			} 

			#cmsms_stat_553e49e8077d1 .cmsms_stat_counter { 
				color:#b7f275; 
			} 
			 
			#cmsms_row_5 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_5 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			}
			 
			#cmsms_heading_553e49e807cad, #cmsms_heading_553e49e807cad a { 
				color:#979ca4; color:rgba(151, 156, 164, 1);
				font-size:18px; 
				line-height:32px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:30px; 
			} 
			 
			#cmsms_row_6 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_6 .cmsms_row_outer_parent { 
				padding-bottom: 70px; 
			} 


			#cmsms_paypal_donations_553e49e8080d0 { 
				text-align:center; 
			} 

			#cmsms_paypal_donations_553e49e8080d0 .cmsms_button:before { 
				margin-right:0;
				margin-left:0; 
				vertical-align:baseline; 
			} 

			#cmsms_paypal_donations_553e49e8080d0 .cmsms_button { 
				font-weight:100; 
				font-style:normal; 
			} 
			
			#cmsms_paypal_donations_553e49e8080d0 form:hover + .cmsms_button { 
			} 
			 
			#cmsms_row_7 { 
				background-position: top center; 
				background-repeat: repeat-y; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_7 .cmsms_row_outer_parent { 
				padding-top: 60px; 
			} 

			#cmsms_row_7 .cmsms_row_outer_parent { 
				padding-bottom: 100px; 
			} 

			#cmsms_row_7 .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-left:10%; 
			} 
			#cmsms_row_7 .cmsms_row_inner.cmsms_row_fullwidth { 
				padding-right:10%; 
			} 
			 
			#cmsms_heading_553e49e808e7f, #cmsms_heading_553e49e808e7f a { 
				color:#ffffff; color:rgba(255, 255, 255, 1);
				font-size:34px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:60px; 
			} 
			 
			#cmsms_row_8 .cmsms_row_outer_parent { 
				padding-top: 80px; 
			} 

			#cmsms_row_8 .cmsms_row_outer_parent { 
				padding-bottom: 0px; 
			}
			 
			#cmsms_heading_553e49e81ea44, #cmsms_heading_553e49e81ea44 a { 
				font-size:32px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_9 .cmsms_row_outer_parent { 
				padding-top: 60px; 
			} 

			#cmsms_row_9 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
			} 

			 #cmsms_icon_list_items_553e49e81ee7b.cmsms_icon_list_pos_right .cmsms_icon_list_item:before { 
				left:auto; 
				right:39.5px; 
			} 
			#cmsms_icon_list_items_553e49e81ee7b.cmsms_icon_list_type_block .cmsms_icon_list_item:before { 
				width:1px; 
			} 

			#cmsms_icon_list_items_553e49e81ee7b .cmsms_icon_list_icon { 
				border-width:1px; 
				width:80px; 
				height:80px; 
				-webkit-border-radius:50%; 
				-moz-border-radius:50%; 
				border-radius:50%; 
			} 

			#cmsms_icon_list_items_553e49e81ee7b .cmsms_icon_list_icon:before { 
				font-size:32px; 
				line-height:78px; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81efbc .cmsms_icon_list_icon:before { 
				color:rgba(0,0,0,.5) 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81efbc:hover .cmsms_icon_list_icon { 
				background-color:rgba(0,0,0,.7) 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81efbc:hover .cmsms_icon_list_icon:before { 
				color:inherit; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f115 .cmsms_icon_list_icon:before { 
				color:#62e0c7; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f115:hover .cmsms_icon_list_icon { 
				background-color:#62e0c7; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f115:hover .cmsms_icon_list_icon:before { 
				color:inherit; 
			} 
			 
			#cmsms_icon_list_items_553e49e81f520.cmsms_icon_list_items .cmsms_icon_list_item:before { 
				left:39.5px; 
			} 
			
			#cmsms_icon_list_items_553e49e81f520.cmsms_icon_list_type_block .cmsms_icon_list_item:before { 
				width:1px; 
			} 

			#cmsms_icon_list_items_553e49e81f520 .cmsms_icon_list_icon { 
				border-width:1px; 
				width:80px; 
				height:80px; 
				-webkit-border-radius:50%; 
				-moz-border-radius:50%; 
				border-radius:50%; 
			} 

			#cmsms_icon_list_items_553e49e81f520 .cmsms_icon_list_icon:before { 
				font-size:32px; 
				line-height:78px; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f676 .cmsms_icon_list_icon:before { 
				color:#7ce095; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f676:hover .cmsms_icon_list_icon { 
				background-color:#7ce095; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f676:hover .cmsms_icon_list_icon:before { 
				color:inherit; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f7b9 .cmsms_icon_list_icon:before { 
				color:#a6ec7c; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f7b9:hover .cmsms_icon_list_icon { 
				background-color:#a6ec7c; 
			} 

			.cmsms_icon_list_items.cmsms_color_type_icon #cmsms_icon_list_item_553e49e81f7b9:hover .cmsms_icon_list_icon:before { 
				color:inherit; 
			} 
			 
			#cmsms_row_10 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_10 .cmsms_row_outer_parent { 
				padding-bottom: 50px; 
			}
			 
			#cmsms_heading_553e49e81fcae, #cmsms_heading_553e49e81fcae a { 
				font-size:32px; 
				text-align:center; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:0px; 
			} 
			 
			#cmsms_row_11 .cmsms_row_outer_parent { 
				padding-top: 0px; 
			} 

			#cmsms_row_11 .cmsms_row_outer_parent { 
				padding-bottom: 70px; 
			}
			 
			#cmsms_heading_553e49e832cc5, #cmsms_heading_553e49e832cc5 a { 
				font-size:26px; 
				text-align:left; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:40px; 
			} 
			 
			#cmsms_tabs_list_item_553e49e832e43 a:hover,#cmsms_tabs_list_item_553e49e832e43.current_tab a { 
				background-color:#57cbe1; 
				border-color:#57cbe1; 
			} 

			#cmsms_tabs_list_item_553e49e8358a9 a:hover,#cmsms_tabs_list_item_553e49e8358a9.current_tab a { 
				background-color:#62e0c1; 
				border-color:#62e0c1; 
			} 

			#cmsms_tabs_list_item_553e49e835a40 a:hover,#cmsms_tabs_list_item_553e49e835a40.current_tab a { 
				background-color:#7fe092; 
				border-color:#7fe092; 
			} 
			 
			#cmsms_heading_553e49e835edb, #cmsms_heading_553e49e835edb a { 
				font-size:26px; 
				text-align:left; 
				font-weight:300; 
				font-style:normal; 
				margin-top:0px; 
				margin-bottom:40px; 
			} 
			 
			.cmsms_stats.shortcode_animated #cmsms_stat_553e49e836051.cmsms_stat { 
				width:78%; 
			} 

			#cmsms_stat_553e49e836051 .cmsms_stat_inner { 
				background-color:#57cbe1; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_553e49e8360f4.cmsms_stat { 
				width:73%; 
			} 

			#cmsms_stat_553e49e8360f4 .cmsms_stat_inner { 
				background-color:#62e0c1; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_553e49e836189.cmsms_stat { 
				width:92%; 
			} 

			#cmsms_stat_553e49e836189 .cmsms_stat_inner { 
				background-color:#7fe092; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_553e49e836214.cmsms_stat { 
				width:88%; 
			} 

			#cmsms_stat_553e49e836214 .cmsms_stat_inner { 
				background-color:#b7f275; 
				color:#ffffff; 
			} 

			.cmsms_stats.shortcode_animated #cmsms_stat_553e49e83629e.cmsms_stat { 
				width:78%; 
			} 

			#cmsms_stat_553e49e83629e .cmsms_stat_inner { 
				background-color:#c9ef5f; 
				color:#ffffff; 
			} 
			 
			#cmsms_row_12 { 
				/*background-image: url(<?php echo get_template_directory_uri()?>/assets/images/bg-big-water.jpg); */
				background-position: top center; 
				background-repeat: repeat-y; 
				background-attachment: scroll; 
				background-size: cover; 
			} 

			#cmsms_row_12 .cmsms_row_outer_parent { 
				padding-top: 40px; 
			} 

			#cmsms_row_12 .cmsms_row_outer_parent { 
				padding-bottom: 20px; 
			} 
		</style>
		<script src='/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.6' id='swv-js'></script>
<script id='contact-form-7-js-extra'>
var wpcf7 = {"api":{"root":"https:\/\/staging-fpic360deg-staging.kinsta.cloud\/wp-json\/","namespace":"contact-form-7\/v1"}};
</script>
<script src='/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.6' id='contact-form-7-js'></script>
	</head>

<body <?php body_class(); ?>>
	<!-- _________________________ Start Page _________________________ -->
		<div id="page" class="csstransition cmsms_liquid fixed_header hfeed site">
	<!-- _________________________ Start Main _________________________ -->
			<div id="main">
	<!-- _________________________ Start Header _________________________ -->
				<header id="header">
					<div class="header_mid" data-height="95">
						<div class="header_mid_outer">
							<div class="header_mid_inner">
								<div class="logo_wrap">
									<a href="/" title="<?php echo get_template() ?>" class="logo">
										<?php 
										$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
										?>
																				<img src="<?php echo $image[0]; ?>" alt="FPIC360" />
										<img class="logo_retina" src="<?php echo $image[0]; ?>" alt="FPIC360" width="179" height="44" />

									</a>
								</div>
								<div class="resp_nav_wrap">
									<div class="resp_nav_wrap_inner">
										<div class="resp_nav_content">
											<a class="responsive_nav cmsms-icon-menu-2" href="javascript:void(0);"></a>
										</div>
									</div>
								</div>
	<!-- _________________________ Start Navigation _________________________ -->
								<nav>
								<?php 
								wp_nav_menu(array(
    'menu'              => "Main Menu",
    'menu_class'        => "navigation",
    'menu_id'           => "navigation",
    'container_class'   => "menu-main-container",
    'link_before'       => "<span>",
    'link_after'        => "</span>"
) );
?>
							  </nav>
	<!-- _________________________ Finish Navigation _________________________ -->
							</div>
						</div>
					</div>
				</header>
	<!-- _________________________ Finish Header _________________________ -->

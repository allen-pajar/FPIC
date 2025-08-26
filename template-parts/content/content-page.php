<?php
/**
 * Template part for displaying page content in page.php
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
						<h5>
							<?php the_field("page_subtitle"); ?>
						</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="middle_inner opened-article">
			<!--_________________________ Start Content _________________________ -->
<?php
  while( have_rows('page_section') ) : the_row();
?>

			<div class="cmsms_post_content entry-content">
				<div id="cmsms_row_5548a7b764a2f" class="cmsms_row cmsms_color_scheme_default">
					<div class="cmsms_row_outer_parent">
						<div class="cmsms_row_outer">
							<div class="cmsms_row_inner">
								<div class="cmsms_row_margin">
									<div class="cmsms_column one_first">
										<h3 id="<?php the_sub_field("anchor_tag")?>" class="cmsms_heading">
											<?php the_sub_field("section_header")?>
										</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="cmsms_row_554b576c54360" class="cmsms_row cmsms_color_scheme_default">
					<div class="cmsms_row_outer_parent">
						<div class="cmsms_row_outer">
							<div class="cmsms_row_inner">
								<div class="cmsms_row_margin">
									<div class="cmsms_column one_first">
										<figure>
											<?php 
$image = get_sub_field("section_image");
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
										</figure>
										<div class="cmsms_text">
											<?php the_sub_field("section_content"); ?>
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php endwhile;?>
			</div>
		</section>
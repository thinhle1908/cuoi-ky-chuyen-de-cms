<?php

/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     WP Job Manager
 * @category    Template
 * @since       1.0.0
 * @version     1.27.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

global $post;
$job_salary   = get_post_meta(get_the_ID(), '_job_salary', true);
$job_featured = get_post_meta(get_the_ID(), '_featured', true);
$company_name = get_post_meta(get_the_ID(), '_company_name', true);

?>
<article <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr($post->geolocation_lat); ?>" data-latitude="<?php echo esc_attr($post->geolocation_long); ?>">



	<!-- <div class="job-title-wrap">
	</div> -->

	<div class="is-layout-constrained wp-block-group">
		<div class="wp-block-group__inner-container">
			<div class="is-layout-flex wp-container-3 wp-block-columns" style="height: 150px;">
				<div class="is-layout-flow wp-block-column" style="flex-basis:15%">
					<figure class="company-logo" style="border: solid 1px gray;">
						<?php the_company_logo('thumbnail'); ?>
					</figure>
				</div>
				<div class="is-layout-flow wp-block-column job-title-wrap" style="flex-basis:85%">
					<h2 class="entry-title">
						<a href="<?php the_job_permalink(); ?>"><?php wpjm_the_job_title(); ?></a>
					</h2>

					<p style="margin: 0; color: gray; font-weight: 500;">Create: <?php echo get_post_datetime($post)->format('F j Y') ?></p>

					<div style="display: flex; width: 100%;">
						<?php
						if (get_option('job_manager_enable_categories')) {
							$category = wpjm_get_the_job_categories();
							if (!empty($category)) : foreach ($category as $jobtype) : ?>
									<p style="border-top-left-radius: 5px;border-bottom-left-radius: 5px;" class="bottom <?php echo esc_attr(sanitize_title($jobtype->slug)); ?>"><?php echo ucfirst(esc_html($jobtype->name)); ?></p>
						<?php endforeach;
							endif;
						}
						?>

						<?php if ($company_name) { ?>
							<p class="bottom">
								<?php the_company_name(); ?>
							</p>
						<?php } ?>
						<p class="bottom" style="border-top-right-radius: 5px;border-bottom-right-radius: 5px;"><?php the_job_location(true); ?></p>
					</div>
				</div>
			</div>
			<div class="is-layout-flex wp-container-5 wp-block-columns">
				<div class="is-layout-flow wp-block-column job-title-wrap">
					<ul style="margin-left: 0; padding-left: 0;">
						<?php
						$decs = substr(wpjm_get_the_job_description(), 0, 231);
						$decs_arr = str_split($decs, 77);
						foreach ($decs_arr as $des) {
							echo '<li class="bold-text">' . ucfirst(strip_tags($des)) . '</li>';
						}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<?php if ($job_featured) { ?>
		<div class="featured-label"><?php esc_html_e('Featured', 'jobscout'); ?></div>
	<?php } ?>

</article>
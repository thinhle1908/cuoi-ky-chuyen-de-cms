<?php

/**
 *
 * Creating a custom job search form for homepage
 * The [jobs] shortcode is will use search_location and search_keywords variables from the query string.
 *
 * @link https://wpjobmanager.com/document/tutorial-creating-custom-job-search-form/
 *
 * @package JobScout
 */
$find_a_job_link = get_option('job_manager_jobs_page_id', 0);
$post_slug       = get_post_field('post_name', $find_a_job_link);
$ed_job_category = get_option('job_manager_enable_categories');

if ($post_slug) {
  $action_page =  home_url('/' . $post_slug);
} else {
  $action_page =  home_url('/');
}

$jobs = get_job_listings();
?>

<div class="job_listings">

  <form class="jobscout_job_filters" method="GET" action="<?php echo esc_url($action_page) ?>">
    <div class="search-header-design">

      <div class="search_keywords">
        <span class="icon-search-header"><i class="fa fa-search"></i></span>
        <input type="text" id="search-header" name="search_keywords" placeholder="<?php esc_attr_e('Từ khóa', 'jobscout'); ?>">
      </div>

      <div class="search_categories custom_search_categories">
        <span class="icon-search-header-location"><i class="fa-solid fa-location-dot"></i></span>
        <select id="search-location-header" class="robo-search-category" name="search_location">
          <option value=""><?php _e('Địa điểm', 'jobscout'); ?></option>
          <?php foreach ($jobs->{'posts'} as $jobcat) : ?>
            <option value="<?php echo esc_html(get_the_job_location($jobcat->ID)); ?>"><?php echo esc_html(get_the_job_location($jobcat->ID)); ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <?php if ($ed_job_category) { ?>
        <div class="search_categories custom_search_categories">
          <label for="search_category"><?php esc_html_e('Job Category', 'jobscout'); ?></label>
          <select id="search_category" class="robo-search-category" name="search_category">
            <option value=""><?php _e('Select Job Category', 'jobscout'); ?></option>
            <?php foreach (get_job_listing_categories() as $jobcat) : ?>
              <option value="<?php echo esc_attr($jobcat->term_id); ?>"><?php echo esc_html($jobcat->name); ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      <?php } ?>
      

      <div class="search_submit">
        <input id="btn-search-header" type="submit" value="<?php esc_attr_e('TÌM KIẾM', 'jobscout'); ?>" />
      </div>

    </div>
  </form>

</div>
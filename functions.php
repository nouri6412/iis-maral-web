<?php
//************************* dynamic title *****************************
function iisgroup_theme_support()
{
    load_theme_textdomain( 'iisgroup', get_template_directory() . '/languages' );
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('category-thumbnails');
}
add_action('after_setup_theme', 'iisgroup_theme_support');

add_filter('show_admin_bar', '__return_false');

// add tag support to pages
function tags_support_all()
{
    register_taxonomy_for_object_type('post_tag', 'page');
}

function register_session_new()
{
    if (!session_id()) {
        session_start();
    }
}

add_action('init', 'register_session_new');

// ensure all tags are included in queries
function tags_support_query($wp_query)
{
    if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}

// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');


///menu
require get_template_directory() . '/inc/menu.php';


/// tools

require get_template_directory() . '/inc/jdf.php';
require get_template_directory() . '/inc/tools.php';


/// post type
require get_template_directory() . '/inc/post_type.php';

/// helper
require get_template_directory() . '/inc/helper-functions.php';


/// template tags
require get_template_directory() . '/inc/template-tags.php';

/// template functions
require get_template_directory() . '/inc/template-functions.php';

/// icon
require get_template_directory() . '/inc/icon-functions.php';

/// classes
require get_template_directory() . '/classes/class-custom-theme-svg-icons.php';
require get_template_directory() . '/classes/class-custom-theme-walker-comment.php';



///// setting page acf

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'     => 'تنظیمات  قالب iis  group',
        'menu_title'    => 'تنظیمات  قالب iis  group',
        'menu_slug'     => 'iis-theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'صفحه اول',
        'menu_title'    => 'صفحه اول',
        'menu_slug'     => 'iis-theme-general-settings-homepage',
        'parent_slug'    => 'iis-theme-general-settings',
    ));

}



/// ajax
function iisgroup_theme_scripts()
{
    global $wp_query;

    wp_enqueue_script(
        'iisgroup_ajax_script',
        get_template_directory_uri() . '/assets/js/ajax.js',
        array('jquery'),
        1,
        false
    );

    wp_localize_script('iisgroup_ajax_script', 'custom_theme_mbm_object', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'siteurl' => site_url(),
        'sitelogo' => get_field('header', 'option')["logo"],
        'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ));
}

add_action('wp_enqueue_scripts', 'iisgroup_theme_scripts');


////ajax

foreach (glob(get_template_directory() . "/inc/ajax/*.php") as $filename) {
    require $filename;
}


//date hook
function time_ago_date(  $the_date) {

	return human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ' .'پیش';
}
add_filter( 'get_the_date', 'time_ago_date', 10, 1 );






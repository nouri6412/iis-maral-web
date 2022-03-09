<?php
///post type contact

function iisgroup_post_type_contact()
{

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
		'editor',
		'excerpt',
        'custom-fields', // custom fields
        'post-formats', // post formats
		
    );

    $labels = array(
        'name' => _x('ارتباط با ما', 'plural'),
        'singular_name' => _x('ارتباط با ما', 'singular'),
        'menu_name' => _x('ارتباط با ما', 'admin menu'),
        'name_admin_bar' => _x('ارتباط با ما', 'admin bar'),
        'add_new' => _x('ثبت ارتباط با ما جدید', 'add new'),
        'add_new_item' => "ثبت ارتباط با ما جدید",
        'new_item' => "ارتباط با ما جدید",
        'edit_item' => "ویرایش ارتباط با ما",
        'view_item' => "مشاهده ارتباط با ما",
        'all_items' => "همه ارتباط با ما ها",
        'search_items' => "جستجوی ارتباط با ما",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'contact_form'),
        'has_archive' => true,
        'hierarchical' => false,
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow'
        // )
    );
    register_post_type('contact_form', $args);
}
add_action('init', 'iisgroup_post_type_contact');


///post type immigration

function iisgroup_post_type_immigration()
{

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
		'editor',
		'excerpt',
        'custom-fields', // custom fields
        'post-formats', // post formats
		
    );

    $labels = array(
        'name' => _x('وب سایت های مهاجرتی', 'plural'),
        'singular_name' => _x('وب سایت های مهاجرتی', 'singular'),
        'menu_name' => _x('وب سایت های مهاجرتی', 'admin menu'),
        'name_admin_bar' => _x('وب سایت های مهاجرتی', 'admin bar'),
        'add_new' => _x('ثبت وب سایت های مهاجرتی جدید', 'add new'),
        'add_new_item' => "ثبت وب سایت های مهاجرتی جدید",
        'new_item' => "وب سایت های مهاجرتی جدید",
        'edit_item' => "ویرایش وب سایت های مهاجرتی",
        'view_item' => "مشاهده وب سایت های مهاجرتی",
        'all_items' => "همه وب سایت های مهاجرتی",
        'search_items' => "جستجوی وب سایت های مهاجرتی",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'immigration'),
        'has_archive' => true,
        'hierarchical' => false,
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow'
        // )
    );
    register_post_type('immigration', $args);
}
add_action('init', 'iisgroup_post_type_immigration');

///post type video

function iisgroup_post_type_video()
{

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
		'editor',
		'excerpt',
        'custom-fields', // custom fields
        'post-formats', // post formats
		
    );

    $labels = array(
        'name' => _x('ویدئو', 'plural'),
        'singular_name' => _x('ویدئو', 'singular'),
        'menu_name' => _x('ویدئو', 'admin menu'),
        'name_admin_bar' => _x('ویدئو', 'admin bar'),
        'add_new' => _x('ویدئو جدید', 'add new'),
        'add_new_item' => "ثبت ویدئو",
        'new_item' => "ویدئو جدید",
        'edit_item' => "ویرایش ویدئو",
        'view_item' => "مشاهده ویدئو",
        'all_items' => "همه ویدئو",
        'search_items' => "جستجوی ویدئو",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'video'),
        'has_archive' => true,
        'hierarchical' => false,
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow'
        // )
    );
    register_post_type('video', $args);
}
add_action('init', 'iisgroup_post_type_video');


///post type program

function iisgroup_post_type_program()
{

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
		'editor',
		'excerpt',
        'custom-fields', // custom fields
        'post-formats', // post formats
		
    );

    $labels = array(
        'name' => _x('برنامه های مهاجرتی', 'plural'),
        'singular_name' => _x('برنامه های مهاجرتی', 'singular'),
        'menu_name' => _x('برنامه های مهاجرتی', 'admin menu'),
        'name_admin_bar' => _x('برنامه های مهاجرتی', 'admin bar'),
        'add_new' => _x('برنامه های مهاجرتی جدید', 'add new'),
        'add_new_item' => "ثبت برنامه های مهاجرتی",
        'new_item' => "ویدئو برنامه های مهاجرتی",
        'edit_item' => "ویرایش برنامه های مهاجرتی",
        'view_item' => "مشاهده برنامه های مهاجرتی",
        'all_items' => "همه برنامه های مهاجرتی",
        'search_items' => "جستجوی برنامه های مهاجرتی",
        'not_found' => "یافت نشد"
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'program'),
        'has_archive' => true,
        'hierarchical' => false,
        // 'capabilities' => array(
        //     'create_posts' => 'do_not_allow'
        // )
    );
    register_post_type('program', $args);
}
add_action('init', 'iisgroup_post_type_program');


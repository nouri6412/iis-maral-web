<?php
function get_menu_array_nav_item($main_menu)
{
    $menus = [];
    foreach ($main_menu as $navItem) {
        if (!isset($menus[$navItem->menu_item_parent])) {
            $menus[$navItem->menu_item_parent] = [];
        }
        $menus[$navItem->menu_item_parent][] =$navItem;
    }
    return $menus;
}
function iisgroup_custom_menu()
{
    register_nav_menu('primary-menu', 'منوی اصلی ');
}
add_action('init', 'iisgroup_custom_menu');

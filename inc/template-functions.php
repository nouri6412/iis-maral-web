<?php

/**
 * Filters the default archive titles.
 */
function custom_theme_get_the_archive_title()
{
    if (is_category()) {
        $title = 'دسته' . ' ' . '<span class="page-description">' . single_term_title('', false) . '</span>';
    } elseif (is_tag()) {
        $title = 'تگ' . ' ' . '<span class="page-description">' . single_term_title('', false) . '</span>';
    } elseif (is_author()) {
        $title = 'نویسنده' . ' ' . '<span class="page-description">' . get_the_author_meta('display_name') . '</span>';
    } elseif (is_year()) {
        $title = 'سال' . ' ' . '<span class="page-description">' . get_the_date(_x('Y', 'yearly archives date format', 'twentynineteen')) . '</span>';
    } elseif (is_month()) {
        $title = 'ماه' . ' ' . '<span class="page-description">' . get_the_date(_x('F Y', 'monthly archives date format', 'twentynineteen')) . '</span>';
    } elseif (is_day()) {
        $title = 'روز' . ' ' . '<span class="page-description">' . get_the_date() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = '' . '<span class="page-description">' . post_type_archive_title('', false) . '</span>';
    } elseif (is_tax()) {
        $tax = get_taxonomy(get_queried_object()->taxonomy);
        /* translators: %s: Taxonomy singular name. */
        $title = sprintf(esc_html__('%s :', 'twentynineteen'), $tax->labels->singular_name);
    } else {
        $title = '';
    }
    return $title;
}
add_filter('get_the_archive_title', 'custom_theme_get_the_archive_title');

function custom_generate_menu_li_mobile($navItem, $menu)
{
    $item_class = "";
    $i = '';
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (trim($actual_link) == $navItem->url && $navItem->menu_item_parent == 0) {
        $item_class = 'active';
    }
?>
    <?php
    if (!isset($menu[$navItem->ID])) {
    ?>
        <li class="nav-item">
            <a href="<?php echo $navItem->url; ?>" class="nav-link <?php echo $item_class ?>"><?php echo $navItem->title; ?></a>
        </li>
    <?php
    } else {
    ?>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header nav-item" id="flush-headingOne">
                    <a href="<?php echo $navItem->url; ?>" class="accordion-button collapsed nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <?php echo $navItem->title; ?>
                    </a>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body ps-0">
                        <ul class="p-0 m-0">
                            <?php
                            foreach ($menu[$navItem->ID] as $item) {
                                custom_generate_menu_li_mobile($item, $menu);
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
<?php
}

function custom_generate_menu_li($navItem, $menu)
{
    $item_class = "";
    $child = '';
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if (trim($actual_link) == $navItem->url && $navItem->menu_item_parent == 0) {
        $item_class = 'active';
    }
    if (isset($menu[$navItem->ID])) {
        $child = 'position-relative child';
    }
?>
    <?php
    if (!isset($menu[$navItem->ID])) {
    ?>
        <li class="">
            <a href="<?php echo $navItem->url; ?>" class="<?php echo $item_class ?>"><?php echo $navItem->title; ?></a>
        </li>
    <?php
    } else {
    ?>
        <li class="<?php echo $child ?>"><a href="<?php echo $navItem->url; ?>"><?php echo $navItem->title; ?></a>
            <ul class="p-0 m-0 inner">
                <?php
                foreach ($menu[$navItem->ID] as $item) {
                    custom_generate_menu_li($item, $menu);
                }
                ?>
            </ul>
        </li>
    <?php
    }
    ?>
<?php
}


function custom_site_url($url)
{
    if (pll_current_language() == 'fa') {
        return site_url( 'fa/' . $url);
    }
    return site_url($url);
}

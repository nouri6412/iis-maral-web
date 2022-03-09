<?php
$header = get_field("header-iis", "option");
$menuLocations = get_nav_menu_locations();

$menuID = $menuLocations['primary-menu'];

$primaryNav = wp_get_nav_menu_items($menuID);
$menus = [];
//var_dump($primaryNav);
$menus = get_menu_array_nav_item($primaryNav);
?>

<!-- navigation -->

<!-- mobile-menu -->
<div class="text-end follow-btn d-md-none">
    <a href="<?php echo (isset($header["follow_us"])) ? $header["follow_us"] : ''; ?>" class="btn btn-primary"><?php _e('Follow us', 'iisgroup');  ?></a>
</div>
<nav class="navbar navbar-expand-lg navbar-light d-md-none ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pt-3">
                <?php
                foreach ($menus[0] as $navItem) {
                    custom_generate_menu_li_mobile($navItem, $menus);
                }
                ?>
            </ul>
        </div>
    </div>
</nav>


<!-- desktop-manu-->
<nav class="pt-3 pb-3 ps-xl-5 pe-xl-5 d-none d-md-block">
    <div class="row align-items-center">
        <div class="col-9">
            <ul class="p-0 m-0 d-flex menu-list align-items-center">
                <?php
                foreach ($menus[0] as $navItem) {
                    custom_generate_menu_li($navItem, $menus);
                }
                ?>
            </ul>
        </div>
        <div class="col-3 text-end">
            <a href="<?php echo (isset($header["follow_us"])) ? $header["follow_us"] : ''; ?>" class="btn btn-primary"><?php _e('Follow us', 'iisgroup');  ?></a>
        </div>
    </div>
</nav>
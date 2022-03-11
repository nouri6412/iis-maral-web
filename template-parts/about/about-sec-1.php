<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$header = get_field("sec-1");
?>
<!--  -->
<section class="bg-light d-none d-lg-block" style="min-height: 600px;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-58.png);background-position: top right;background-repeat: no-repeat;">
    <div class="container position-relative h-100">
        <div class="col-11 m-auto p-4 pt-5 h-100" style="background-image: url(<?php echo (isset($header["image-r"])) ? $header["image-r"] : ''; ?>);background-repeat: no-repeat;background-position:top right;">

            <div class="box">
                <div>
                    <h2 class="font-bolder"><?php echo (isset($header["title"])) ? $header["title"] : ''; ?>
                    </h2>
                </div>
                <div>
                    <p class="text-secondary">
                    <?php echo (isset($header["desc"])) ? $header["desc"] : ''; ?>
                    </p>
                </div>
                <div><a href="<?php echo (isset($header["link"])) ? $header["link"] : ''; ?>" class="btn btn-primary"><?php _e('READ MORE','iisgroup') ?></a></div>
            </div>
            <div class="big-image big-image-left"><img src="<?php echo (isset($header["image-l"])) ? $header["image-l"] : ''; ?>" alt=""></div>
        </div>
    </div>
</section>

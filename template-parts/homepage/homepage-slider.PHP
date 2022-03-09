<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$slider = get_field("homepage-slider","option");
if (!is_array($slider)) {
    $slider = ["en"=>[],"fa"=>[]];
}
$sliders =$slider[$lang_flag];
$header = get_field("homepage-sec1", "option");
?>
<!-- items -->

<div class="pe-2 ps-2 ps-xl-5 pe-xl-5 bg-gray">
    <div class="container ps-xl-5 pe-xl-5 pt-3 pb-3">
        <div class="pe-xl-5 ps-xl-5">
            <div class="single-item">
                <?php
                foreach ($sliders as $item) {
                ?>
                    <div class="d-flex align-items-center bg-light">
                        <div class="d-flex align-items-end align-items-lg-center justify-content-end" style="background-image:url(<?php echo $item["image"]; ?>);background-size: contain;background-repeat: no-repeat;">
                            <a href="<?php echo $item["link"]; ?>" class="btn btn-border-primary mb-5 mb-lg-0 me-5"><?php _e("more", "iisgroup") ?></a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <!--  -->
            <div class="row row-cols-2 row-cols-md-4 align-items-center items mt-5">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <span>
                          <img style="width: 45px;height:45px" src="<?php echo (  isset($header[$lang_flag]) && isset($header[$lang_flag]["item1"]) && isset($header[$lang_flag]["item1"]["icon"])) ? $header[$lang_flag]["item1"]["icon"] : ''; ?>"/>
                        </span>
                        <div>
                            <h5><?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item1"]) && isset($header[$lang_flag]["item1"]["title"])) ? $header[$lang_flag]["item1"]["title"] : ''; ?></h5><span class="d-block ms-2 text-secondary">
                            <?php echo (isset($header[$lang_flag]) && isset($header[$lang_flag]["item1"]) && isset($header[$lang_flag]["item1"]["desc"])) ? $header[$lang_flag]["item1"]["desc"] : ''; ?>                       
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="d-flex align-items-center">
                        <span>
                          <img style="width: 45px;height:45px" src="<?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item2"]) && isset($header[$lang_flag]["item2"]["icon"])) ? $header[$lang_flag]["item2"]["icon"] : ''; ?>"/>
                        </span>
                        <div>
                            <h5><?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item2"]) && isset($header[$lang_flag]["item2"]["title"])) ? $header[$lang_flag]["item2"]["title"] : ''; ?></h5><span class="d-block ms-2 text-secondary">
                            <?php echo (isset($header[$lang_flag]) && isset($header[$lang_flag]["item2"]) && isset($header[$lang_flag]["item2"]["desc"])) ? $header[$lang_flag]["item2"]["desc"] : ''; ?>                       
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="d-flex align-items-center">
                        <span>
                          <img style="width: 45px;height:45px" src="<?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item3"]) && isset($header[$lang_flag]["item3"]["icon"])) ? $header[$lang_flag]["item3"]["icon"] : ''; ?>"/>
                        </span>
                        <div>
                            <h5><?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item3"]) && isset($header[$lang_flag]["item3"]["title"])) ? $header[$lang_flag]["item3"]["title"] : ''; ?></h5><span class="d-block ms-2 text-secondary">
                            <?php echo (isset($header[$lang_flag]) && isset($header[$lang_flag]["item3"]) && isset($header[$lang_flag]["item3"]["desc"])) ? $header[$lang_flag]["item3"]["desc"] : ''; ?>                       
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="d-flex align-items-center">
                        <span>
                          <img style="width: 45px;height:45px" src="<?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item4"]) && isset($header[$lang_flag]["item4"]["icon"])) ? $header[$lang_flag]["item4"]["icon"] : ''; ?>"/>
                        </span>
                        <div>
                            <h5><?php echo ( isset($header[$lang_flag]) && isset($header[$lang_flag]["item4"]) && isset($header[$lang_flag]["item4"]["title"])) ? $header[$lang_flag]["item4"]["title"] : ''; ?></h5><span class="d-block ms-2 text-secondary">
                            <?php echo (isset($header[$lang_flag]) && isset($header[$lang_flag]["item4"]) && isset($header[$lang_flag]["item4"]["desc"])) ? $header[$lang_flag]["item4"]["desc"] : ''; ?>                       
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
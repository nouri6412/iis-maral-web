<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$data = get_field("sec-3");
?>

<section class="bg-light">
    <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Ellipse-10-1.png);background-repeat: no-repeat;background-position: top left;">
        <div>
            <div class="pt-5">
                <div class="container p-0 ps-lg-4 pe-lg-4 ps-md-0 pe-md-0 ps-lg-5 pe-xl-5">
                    <div class="col-11 m-auto text-center pt-3">
                        <h3 class="little-border-center text-center font-bolder"><?php echo $data["title"]; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-9 p-3 p-5 pb-2 pt-5 m-auto">
                <div class="row row-cols-2 row-cols-lg-3 justify-content-between pb-lg-5 team">
                    <?php
                    foreach ($data['items'] as $item) {
                    ?>
                        <div style="margin-top: 20px;" class="col">
                            <div class="text-center">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo $item["icon"]; ?>" alt="<?php echo $item["title"]; ?>" width="85px" class="border-radius">
                                    <div class="text-start ms-lg-3">
                                        <h6><?php echo $item["title"]; ?></h6>
                                        <span class="text-secondary"><?php echo $item["desc"]; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div> <?php
                            }
                                ?>
                </div>
            </div>
        </div>
</section>

<!--  -->
<section class="pt-5 pb-5 bg-light d-none d-xl-block">
    <div class="col-10 m-auto">
        <div class="row column">
            <section class="timeline js--timeline">
                <div class="timeline-pipe"></div>
                <?php
                foreach ($data['items1'] as $item) {
                ?>
                    <div class="timeline-item">
                        <div class="timeline-pointer">
                            <div class="pointer-item">
                                <img style="width: 70px;" src="<?php echo $item["icon"]; ?>" />
                            </div>
                        </div>
                        <div class="timeline-meta"></div>
                        <div class="timeline-card ">
                            <div class="card card-section m-0">
                                <h4><?php echo $item["title"]; ?>
                                </h4>

                            </div>
                        </div>
                    </div> <?php
                        }
                            ?>
            </section>
        </div>
    </div>
</section>
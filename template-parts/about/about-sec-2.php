<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$data = get_field("sec-2");
?>
<!--  -->

<section>
    <div class="col-9 m-auto">
        <div class="pt-5 pb-5">
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col">
                    <h3 class="little-border-center text-center font-bolder"><?php echo $data['col-1']["title"] ?>
                    </h3>
                    <div class="mt-5 pt-2">
                        <ul class="p-0">
                            <?php
                            foreach ($data['col-1']['items'] as $item) {
                            ?>
                                <li class="mt-4 fs-5"><i aria-hidden="true" class="fas fa-check fs-2 text-primary me-2"></i><?php echo $item["title"]; ?></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col mt-4 mt-lg-0">
                    <h3 class="little-border-center text-center font-bolder"><?php echo $data['col-2']["title"] ?>
                    </h3>
                    <div class="mt-5 col-10">
                        <div class="row row-cols-3 populated permissions">
                            <?php
                            foreach ($data['col-2']['items'] as $item) {
                            ?>
                                <div class="col">
                                    <div class="d-flex flex-column text-center" style="width: 140px;">
                                        <span><img src="<?php echo $item["icon"] ?>" style="width: 35px;height:45px" /></span>
                                        <span class="text-secondary mt-1"><?php echo $item["title"] ?></span>
                                    </div>
                                </div> <?php
                                    }
                                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
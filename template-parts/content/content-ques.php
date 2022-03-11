<?php
$date = [];

$data = get_field("ques");
if (!is_array($data)) {
    $data = [];
}
if (count($data) == 0) {
    return;
}
?>
<div class="mt-5">
    <div>
        <div class="accordion">
            <h4 class="accordion__heading blue font-bold"><?php _e('FAQ', 'iisgroup') ?></h4>
            <?php
            foreach ($data as $item) {
            ?>
                <div class="accordion__item">
                    <button class="accordion__btn">

                        <span class="accordion__caption"><i class="far fa-lightbulb"></i><?php echo $item["ques"] ?>
                        </span>
                        <span class="accordion__icon"><i class="fa fa-plus text-primary"></i></span>
                    </button>

                    <div class="accordion__content">
                        <p class="text-justify"><?php echo $item["resp"] ?>
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
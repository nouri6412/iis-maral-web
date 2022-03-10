<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$footer = get_field("footer-" . $lang_flag, 'option');
?>
<div class="col-6 col-md-3">
    <div class="">
        <h5 class="border-blue font-bold"><?php _e('Quick access', 'iisgroup') ?>
        </h5>
    </div>
    <ul class="p-0 links">
        <?php foreach ($footer["quick_access"] as $item) { ?>
            <li><a href="<?php echo $item["link"] ?>"><?php echo $item["title"] ?></a></li>

        <?php } ?>
    </ul>
</div>
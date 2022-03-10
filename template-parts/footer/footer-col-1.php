<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$footer = get_field("footer-".$lang_flag, 'option');
?>
<div class="col-12 col-md-3 pe-md-3">
    <a href="" class="d-flex justify-content-center"><img src="<?php  echo $footer["logo"] ?>" alt=""></a>
    <div>
        <p class=" p-2 fs-6"><?php  echo $footer["desc"] ?>
        </p>
    </div>
</div>
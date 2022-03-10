<?php
$lang_flag = "en";
if (pll_current_language() == 'fa') {
    $lang_flag = "fa";
}
$footer = get_field("footer-" . $lang_flag, 'option');
$header = get_field("header-iis", "option");
?>

<div class="col-12 col-md-3">
    <div>
        <ul class="p-0 d-flex media-item-circle justify-content-center justify-content-md-end pe-4">
            <li><a href="<?php echo $header["sosial"]["whatsapp"] ?>"><span><i class="fas fa-phone-alt"></i></span></a></li>
            <li><a href="<?php echo $header["sosial"]["instagram"] ?>"><span><i class="fab fa-instagram"></i></span></a></li>
            <li><a href="<?php echo $header["sosial"]["telegram"] ?>"><span><i class="fab fa-telegram"></i></span></a></li>
        </ul>
    </div>
    <div>
        <ul class="links p-0">
            <li><a href=""><i aria-hidden="true" class="far fa-envelope m-1"></i><?php echo $footer["contact"]["email"]; ?></a></li>
            <li><a href=""><i aria-hidden="true" class="fas fa-address-card m-1"></i><?php echo $footer["contact"]["address"]; ?></a>
            </li>
            <li><a href=""><i aria-hidden="true" class="fas fa-location-arrow m-1"></i><?php echo $footer["contact"]["location"]; ?></a>
            </li>
        </ul>
    </div>
</div>
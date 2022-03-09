<!--  -->
<section class="bg-image pt-3
        pt-lg-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305.png);background-position: top center;min-height: 450px;">
    <div class="container position-relative">
        <div class="col-11 m-auto p-lg-4 pt-5">
            <div class="row align-items-center">
                <?php
                if (pll_current_language() == 'fa') {
                ?>
                    <div class="col pt-5 pb-5 form">
                        <div class="">
                            <h3 style="margin-bottom:5px" class="border-blue font-bolder"><?php _e('Contact us', 'iisgroup') ?></h3>
                        </div>
                        <div id="dzFormMsg-error" class="dzFormMsg error"></div>
                        <div class="col-12"><input id="dzName" name="dzName" type="text" placeholder="<?php _e('name', 'iisgroup') ?>"></div>
                        <div class="col-12"><input id="dzMessage" name="dzMessage" type="text" placeholder="<?php _e('message', 'iisgroup') ?>"></div>
                        <div class="col-12"><input id="dzEmail" name="dzEmail" type="email" placeholder="<?php _e('email', 'iisgroup') ?>"></div>
                        <div class="text-end mt-2 col-11 pe-2"><button onclick="ajax_submit_mbm_contact_form(
                                    $('#dzName').val()
                                    ,$('#dzEmail').val()
                                    ,$('#dzMessage').val()
                                    ,$('#dzFormMsg-error')
                                    ,$('#dzFormMsg-doned')
                                    ,$(this))" class="btn btn-primary"><?php _e('send', 'iisgroup') ?></button>
                        </div>
                        <div class="loading-ajax"></div>
                        <div id="dzFormMsg-doned" class="dzFormMsg doned"></div>
                    </div>
                    <div class="col d-none d-lg-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/CONTACT_PIC.png" alt="" width="550px">
                    </div>

                <?php
                } else {
                ?>
                    <div class="col d-none d-lg-block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/CONTACT_PIC.png" alt="" width="550px">
                    </div>
                    <div class="col pt-5 pb-5 form">
                        <div class="">
                            <h3 style="margin-bottom:5px" class="border-blue font-bolder"><?php _e('Contact us', 'iisgroup') ?></h3>
                        </div>
                        <div id="dzFormMsg-error" class="dzFormMsg error"></div>
                        <div class="col-12"><input id="dzName" name="dzName" type="text" placeholder="<?php _e('name', 'iisgroup') ?>"></div>
                        <div class="col-12"><input id="dzMessage" name="dzMessage" type="text" placeholder="<?php _e('message', 'iisgroup') ?>"></div>
                        <div class="col-12"><input id="dzEmail" name="dzEmail" type="email" placeholder="<?php _e('email', 'iisgroup') ?>"></div>
                        <div class="text-end mt-2 col-11 pe-2"><button onclick="ajax_submit_mbm_contact_form(
                                    $('#dzName').val()
                                    ,$('#dzEmail').val()
                                    ,$('#dzMessage').val()
                                    ,$('#dzFormMsg-error')
                                    ,$('#dzFormMsg-doned')
                                    ,$(this))" class="btn btn-primary"><?php _e('send', 'iisgroup') ?></button>
                        </div>
                        <div class="loading-ajax"></div>
                        <div id="dzFormMsg-doned" class="dzFormMsg doned"></div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>
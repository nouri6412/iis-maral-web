<?php

?>
<!--  -->
<section class="bg-image pt-3
        pt-lg-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305.png);background-position: top center;min-height: 450px;">
    <div class="container position-relative">
        <div class="col-11 m-auto p-lg-4 pt-5">
            <div class="row align-items-center">
                <div class="col d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/CONTACT_PIC.png" alt="" width="550px">
                </div>
                <div class="col pt-5 pb-5">
                    <div class="">
                        <h3 class="border-blue font-bolder"><?php _e('Contact us', 'iisgroup') ?></h3>
                    </div>
                    <form action="">
                        <div class="col-12"><input type="text" placeholder="<?php _e('name', 'iisgroup') ?>"></div>
                        <div class="col-12"><input type="text" placeholder="<?php _e('message', 'iisgroup') ?>"></div>
                        <div class="col-12"><input type="email" placeholder="<?php _e('email', 'iisgroup') ?>"></div>
                        <div class="text-end mt-2 col-11 pe-2"><button class="btn btn-primary"><?php _e('send', 'iisgroup') ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
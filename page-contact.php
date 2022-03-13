<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage iisgroup
 * @since 1.0.0
 * Template Name: ارتباط با ما
 */


get_header('bg');
?>

<section>
    <section class="bg-image pt-3 pt-lg-0" style="min-height: 400px;">
        <div class="container position-relative">
            <div class="col-11 m-auto p-lg-4 pt-5">
                <div class="row row-cols-1 row-cols-md-2 align-items-center">
                    <div class="col-lg-8 pt-5 pb-5">
                        <div class="">
                            <h3 class="border-blue font-bolder"><?php _e('Contact us', 'iisgroup') ?></h3>
                        </div>
                        <div class="col pt-5 pb-5 form">
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
                    </div>
                    <div class="col-lg-4">
                        <div>
                            <div>
                                <p><?php echo get_field("desc") ?></p>
                            </div>
                            <div class="d-flex align-items-center fs-6"><i class="fa fa-envelope text-primary fs-3 m-2" aria-hidden="true"></i><?php echo get_field("email") ?></div>
                            <div class="mt-3 d-flex align-items-center fs-6"><i class="fa fa-phone text-primary fs-3 m-2" aria-hidden="true"></i><?php echo get_field("tel") ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<?php
get_footer();

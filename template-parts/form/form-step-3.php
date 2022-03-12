<section style="display: none;" id="form-step-3" class="pt-3">
    <div class="col-lg-10 m-auto ps-lg-2">
        <div class="container ps-xl-5 pe-xl-5 pt-1 position-relative pb-2 pb-lg-0">
            <div>
                <h2><?php _e('INITIAL ASSESSMENT FORM', 'iisgroup') ?></h2>
            </div>
            <div>
                <h6 class="mt-3"><?php _e('"*" indicates required fields', 'iisgroup') ?></h6>
            </div>

            <div class="mt-4">
                <div class="container text-start">
                    <p class="font-12 text-secondary"><?php echo __('Step 3 of 5', 'iisgroup') . ' ' . '-' . ' ' . __('Work Experience', 'iisgroup') ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="pt-4 pb-4">
                <div>
                    <label for="" class="d-block"><?php _e('COMPANY FROM','iisgroup') ?>
                    </label>
                    <input id="company_from" name="company_from" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('COMPANY TO','iisgroup') ?>
                    </label>
                    <input id="company_to" name="company_to" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('OCCUPATION','iisgroup') ?>
                    </label>
                    <input id="occupation" name="occupation" type="tel">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('CITY/COUNTRY','iisgroup') ?> </label>
                    <input id="citycountry" name="citycountry">
                </div>
                <div style="margin-top: 20px;"></div>
                <!-- <button class="control-btn" id="prev-btn" onclick="previous()">Back</button> -->
                <button class="control-btn btn-primary" id="prev-btn" onclick="back_form_step(3,2)"><?php _e('BACK','iisgroup') ?></button>
                <button class="control-btn btn-primary" id="next-btn" onclick="next_form_step(3,4)"><?php _e('Next','iisgroup') ?></button>            </div>
        </div>
    </div>
</section>
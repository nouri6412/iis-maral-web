<section style="display: none;" id="form-step-2" class="pt-3">
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
                    <p class="font-12 text-secondary"><?php echo __('Step 2 of 5', 'iisgroup') . ' ' . '-' . ' ' . __('Education', 'iisgroup') ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="pt-4 pb-4">
                <div>
                    <label for="" class="d-block"><?php _e('INSTITUTION DATE COMPLETE','iisgroup') ?></label>
                    <input id="institution_date_complete" name="institution_date_complete" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('NAME OF THE UNIVERSITY OR COLLAGE','iisgroup') ?>
                    </label>
                    <input id="name_of_the_university_or_collage" name="name_of_the_university_or_collage" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('PROGRAM','iisgroup') ?>
                    </label>
                    <input id="program" name="program" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('PROFESSIONAL AFFILIATION & TECHNICAL TRAININGS / CERTIFICATES DATE','iisgroup') ?>*
                    </label>
                    <input id="professional_affiliation" name="professional_affiliation" type="tel">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('NAME OF THE CERTIFICATE','iisgroup') ?> </label>
                    <input id="name_of_the_certificate" name="name_of_the_certificate">
                </div>
                <div style="margin-top: 20px;"></div>
                <!-- <button class="control-btn" id="prev-btn" onclick="previous()">Back</button> -->
                <button class="control-btn btn-primary" id="prev-btn" onclick="back_form_step(2,1)"><?php _e('BACK','iisgroup') ?></button>
                <button class="control-btn btn-primary" id="next-btn" onclick="next_form_step(2,3)"><?php _e('Next','iisgroup') ?></button>
            </div>
        </div>
    </div>
</section>
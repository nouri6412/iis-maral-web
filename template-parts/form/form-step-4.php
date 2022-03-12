<section style="display: none;" id="form-step-4" class="pt-3">
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
                    <p class="font-12 text-secondary"><?php echo __('Step 4 of 5', 'iisgroup') . ' ' . '-' . ' ' . __('Language knowledge', 'iisgroup') ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="pt-4 pb-4">
                <div>
                    <label for="" class="d-block"><?php _e('ENGLISH LANGUAGE SPEAK','iisgroup') ?>
                    </label>
                    <input id="english_language_speak" name="english_language_speak" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('ENGLISH LANGUAGE READ','iisgroup') ?>
                    </label>
                    <input id="english_language_read" name="english_language_read" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('ENGLISH LANGUAGE WRITE','iisgroup') ?>
                    </label>
                    <input id="english_language_write" name="english_language_write" >
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('IF YOU HAVE COMPLETED IELTS, PLEASE ENTER YOUR SCORE:','iisgroup') ?> </label>
                    <input id="if_you_have_completed_ielts_please_enter_your_score" name="if_you_have_completed_ielts_please_enter_your_score">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('FRENCH LANGUAGE SPEAK','iisgroup') ?>
                    </label>
                    <input id="french_language_speak" name="french_language_speak" >
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('FRENCH LANGUAGE READ','iisgroup') ?>
                    </label>
                    <input id="french_language_read" name="french_language_read" >
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('FRENCH LANGUAGE WRITE','iisgroup') ?>
                    </label>
                    <input id="french_language_write" name="french_language_write" >
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('IF YOU HAVE COMPLETED TEF, PLEASE ENTER YOUR SCORE:','iisgroup') ?>
                    </label>
                    <input id="if_you_have_completed_tef_please_enter_your_score" name="if_you_have_completed_tef_please_enter_your_score" >
                </div>
                <div style="margin-top: 20px;"></div>
                <!-- <button class="control-btn" id="prev-btn" onclick="previous()">Back</button> -->
                <button class="control-btn btn-primary" id="prev-btn" onclick="back_form_step(4,3)"><?php _e('BACK','iisgroup') ?></button>
                <button class="control-btn btn-primary" id="next-btn" onclick="next_form_step(4,5)"><?php _e('Next','iisgroup') ?></button>            </div>
        </div>
    </div>
</section>
<section style="display: none;" id="form-step-5" class="pt-3">
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
                    <p class="font-12 text-secondary"><?php echo __('Step 5 of 5', 'iisgroup') . ' ' . '-' . ' ' . __('rest of Information', 'iisgroup') ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="pt-4 pb-4">
                <div>
                    <label for="" class="d-block"><?php _e('HOW MUCH MONEY WILL YOU BRING TO CANADA?', 'iisgroup') ?>
                    </label>
                    <input id="how_much_money_will_you_bring_to_canada" name="how_much_money_will_you_bring_to_canada" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('HAVE YOU BEEN CONVICTED OF OR CURRENTLY CHARGED WITH A CRIME OR OFFENCE IN ANY COUNTRY?', 'iisgroup') ?>
                    </label>
                    <input id="have_you_been_convicted_of_or_currently" name="have_you_been_convicted_of_or_currently" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('PREVIOUSLY SOUGHT REFUGEE STATUS IN CANADA OR APPLIED FOR AN IMMIGRANT OR VISITOR VISA?', 'iisgroup') ?>
                    </label>
                    <input id="previously_sought_refugee_status_in_canada_" name="previously_sought_refugee_status_in_canada_">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('BEEN REFUSED REFUGEE STATUS IN, OR AN IMMIGRANT OR VISITOR VISA TO, CANADA OR ANY OTHER COUNTRY?', 'iisgroup') ?> </label>
                    <input id="been_refused_refugee_status_in_or_an_immigrant" name="been_refused_refugee_status_in_or_an_immigrant">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('IF APPLICABLE, HAVE YOU FINISHED YOUR MILITARY DUTY AND RECEIVE YOUR CARD?', 'iisgroup') ?>
                    </label>
                    <input id="if_applicable_have_you_finished_your_military" name="if_applicable_have_you_finished_your_military">
                </div>
                <div style="margin-top: 20px;"></div>
                <!-- <button class="control-btn" id="prev-btn" onclick="previous()">Back</button> -->
                <button class="control-btn btn-primary" id="prev-btn" onclick="back_form_step(5,4)"><?php _e('BACK', 'iisgroup') ?></button>
                <button class="control-btn btn-primary" id="next-btn" onclick="submit_form_step($(this),$('#dzFormMsg-error')
                                    ,$('#dzFormMsg-doned')
                                    )"><?php _e('Send', 'iisgroup') ?></button>
            </div>
        </div>
    </div>
</section>
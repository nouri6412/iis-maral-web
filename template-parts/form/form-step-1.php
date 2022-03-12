<section id="form-step-1" class="pt-3">
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
                    <p class="font-12 text-secondary"><?php echo __('Step 1 of 5', 'iisgroup') . ' ' . '-' . ' ' . __('Personal Information', 'iisgroup') ?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="pt-4 pb-4">
                <div>
                    <label for="" class="d-block"><?php _e('FIRST NAME','iisgroup') ?>*</label>
                    <input id="first_name" name="first_name" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('FAMILY NAME','iisgroup') ?>*
                    </label>
                    <input id="family_name" name="family_name" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('CURRENT ADDRESS','iisgroup') ?>*
                    </label>
                    <input id="current_address" name="current_address" type="text">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('TELEPHONE','iisgroup') ?>*
                    </label>
                    <input id="telephone" name="telephone" type="tel">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('E-MAIL','iisgroup') ?>* </label>
                    <input id="e-mail" name="e-mail" type="email">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('DATE OF BIRTH','iisgroup') ?>* </label>
                    <input id="date_of_birth" name="date_of_birth" type="date">
                </div>
                <div>
                    <label for="" class="d-block"><?php _e('CITY AND COUNTRY OF BIRTH','iisgroup') ?>*</label>
                    <input id="city_and_country_of_birth" name="city_and_country_of_birth" type="text">
                </div>
                <div>
                    <label for="" class="d-block mb-3"><?php _e('CURRENT MARITAL STATUS','iisgroup') ?>*
                    </label>
                    <select id="current_marital_status" name="current_marital_status">
                        <option value="single"><?php _e('single','iisgroup') ?></option>
                        <option value="married"><?php _e('married','iisgroup') ?></option>
                    </select>
                </div>
                <div style="margin-top: 20px;"></div>
                <!-- <button class="control-btn" id="prev-btn" onclick="previous()">Back</button> -->
                <button class="control-btn btn-primary" id="next-btn" onclick="next_form_step(1,2)"><?php _e('Next','iisgroup') ?></button>
            </div>
        </div>
    </div>
</section>
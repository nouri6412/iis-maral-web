<?php
$args = array(
    'post_type' => 'immigration',
    'post_status' => 'publish',
    'posts_per_page' => 3
);
$the_query = new WP_Query($args);
?>
<div class="container ps-4 pe-4 ps-md-0 pe-md-0 ps-lg-5 pe-xl-5 pt-3">
    <div class="ps-xl-5 pe-xl-5">

        <!--  -->
        <section class="pt-5">
            <div class="pb-2">
                <div class="row p-3 row-cols-md-4 pb-5">
                    <div class="col-12 col-md-3 p-0 d-flex flex-column justify-content-center align-items-center">
                        <h3 class="text-center mb-5 font-bolder"><?php _e('WEBSITES OF THE IMMIGRATION ORGANIZATION','iisgroup') ?>
                        </h3>
                        <div>
                            <a href="<?php echo custom_site_url('immigration'); ?>" class="btn btn-primary"><?php _e('more','iisgroup') ?></a>
                        </div>
                    </div>
                    <?php
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                    ?>
                        <li>
                            <?php
                            get_template_part('template-parts/immigration/immigration', 'item');
                            ?>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>
            </div>
        </section>
    </div>
</div>
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
                        <h3 class="text-center mb-5 font-bold"><?php _e('WEBSITES OF THE IMMIGRATION ORGANIZATION','iisgroup') ?>
                        </h3>
                        <div>
                            <a href="<?php echo custom_site_url('immigration'); ?>" class="btn btn-primary"><?php _e('more','iisgroup') ?></a>
                        </div>
                    </div>
                    <?php
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                    ?>
                            <?php
                            get_template_part('template-parts/immigration/immigration', 'item');
                            ?>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>
            </div>
        </section>
    </div>
</div>
<!--  -->
<section class="bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305.jpg);background-position: top center;">
    <div class="container position-relative">
        <div class="col-lg-11 m-auto p-lg-4 pt-5">
            <div class="text-center d-flex flex-column">
                <h3 class="little-border font-bold">IMMIGRATION PROGRAMS
                </h3>
                <span class="font-span">Permanent Residency
                </span>
            </div>
            <div class="row p-3 row-cols-1 row-cols-lg-4">
                <div class="col-6 col-lg-3">
                    <div class="cart-elem responsive">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Rectangle-93-pgq84dllpv51tzzc9ocwjgj4m3fgxpsj0i9ila1gt0.jpg" alt=""></figure>
                        <a href="" class="pt-2"><span class="font-bold">Educational</span></a>
                        <div class="text-end p-2 pe-3"><a href="" class="font-bold font-13">More></a></div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="cart-elem responsive">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Rectangle-92.jpg" alt=""></figure>
                        <a href="" class="pt-2"><span class="font-bold">Educational</span></a>
                        <div class="text-end p-2 pe-3"><a href="" class="font-13">More></a></div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="cart-elem responsive">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Rectangle-90-1-pgq85w48q97ojds5fbx9k2rv2fyrc5syk03ofbsms4.jpg" alt=""></figure>
                        <a href="" class="pt-2"><span class="font-bold">Educational</span></a>
                        <div class="text-end p-2 pe-3"><a href="" class="font-13">More></a></div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 ">
                    <div class="cart-elem responsive">
                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Rectangle-91.jpg" alt=""></figure>
                        <a href="" class="pt-2"><span class="font-bold">Educational</span></a>
                        <div class="text-end p-2 pe-3"><a href="" class="font-13">More></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
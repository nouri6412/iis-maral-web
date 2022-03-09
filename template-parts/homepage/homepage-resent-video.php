<?php
$args = array(
    'post_type' => 'video',
    'post_status' => 'publish',
    'posts_per_page' => 6
);
$the_query = new WP_Query($args);
?>
<!--  -->
<section class="bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305-2.jpg)">
    <div class="container position-relative">
        <div class="col-lg-10 m-lg-auto pt-4 pb-5">
            <div class="text-center">
                <h3 class="font-bolder"><?php _e('IMMIGRATION PROGRAM INTRODUCTION VIDEOS', 'iisgroup') ?></h3>
            </div>

            <div class="mt-5">
                <div class="row row-cols-3">
                    <?php
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                    ?>
                        <?php
                        get_template_part('template-parts/video/video', 'item');
                        ?>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  -->
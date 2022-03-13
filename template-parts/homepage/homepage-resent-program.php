<?php
$args = array(
    'post_type' => 'program',
    'post_status' => 'publish',
    'posts_per_page' => 4
);
$the_query = new WP_Query($args);
?>
<!--  -->
<section class="bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305.jpg);background-position: top center;">
    <div class="container position-relative">
        <div class="col-lg-11 m-auto p-lg-4 pt-5">
            <div class="text-center d-flex flex-column">
                <h3 class="little-border font-bold"><?php _e('IMMIGRATION PROGRAMS', 'iisgroup') ?>
                </h3>
                <span class="font-span"><?php _e('Permanent Residency', 'iisgroup') ?>
                </span>
            </div>
            <div class="row p-3 row-cols-1 row-cols-lg-4">
                <?php
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                ?>
                    <?php
                    get_template_part('template-parts/program/program', 'item');
                    ?>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div style="text-align: center;">
                <a href="<?php echo custom_site_url('program'); ?>" class="btn btn-primary"><?php _e('more', 'iisgroup') ?></a>
            </div>
        </div>
    </div>
</section>

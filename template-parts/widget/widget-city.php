<?php
$args = array(
    'post_type' => 'city',
    'post_status' => 'publish',
    'posts_per_page' => 20
);
$the_query = new WP_Query($args);
?>
<!--  -->
<div class="mt-3 border rounded-3">
    <div class="p-4 pb-5">
        <div>
            <h4 class="font-bold"><?php _e('Cities in Canada', 'iisgroup') ?>
            </h4>
            <div>
                <ul class="p-0 news mt-4 ps-2">
                    <?php
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                    ?>
                        <li><a href="<?php echo get_permalink();  ?>"><?php echo get_the_title(); ?>
                            </a></li>
                    <?php

                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
            </div>
            <div class="text-end mt-4">
            <a href="<?php echo home_url('city') ?>" class="btn border btn-primary rounded-2"><?php _e('See all', 'iisgroup') ?>
                </a>
            </div>
        </div>
    </div>
</div>
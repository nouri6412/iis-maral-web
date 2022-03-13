<?php
$args = array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 10
); 
$the_query = new WP_Query($args);
?>
<div class="bg-lighter border rounded-3">
    <div class="p-4 pt-5 pb-5">
        <div>
            <h4 class="font-bold"><?php _e('Latest News', 'iisgroup') ?>
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
                <a href="<?php echo home_url('news') ?>" class="btn border btn-primary rounded-2"><?php _e('See all news', 'iisgroup') ?>
                </a>
            </div>
        </div>
    </div>
</div>
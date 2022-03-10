<div class="col">
    <div>
        <figure>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
        </figure>
        <div class="pe-3 mt-3">
            <p class="text-justify font-15"><?php echo get_the_excerpt(); ?></p>
        </div>
        <div>
            <div class="text-end p-2 pe-3"><a href="" class="font-12 more"><?php _e('more','iisgroup'); ?></a></div>
        </div>
    </div>
</div>
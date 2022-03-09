<div class="col-6 col-lg-3">
    <div class="cart-elem responsive">
        <figure><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"></figure>
        <a href="<?php echo get_the_permalink(); ?>" class="pt-2"><span class="font-bold"><?php echo get_the_title(); ?></span></a>
        <div class="text-end p-2 pe-3"><a href="" class="font-bold font-13"><?php _e('more','iisgroup'); ?>></a></div>
    </div>
</div>
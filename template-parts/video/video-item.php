<div class="col-6 col-md-4">
    <div class="cart-video">
        <figure class="position-relative"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>"><a href="<?php echo get_the_permalink(); ?>" class="position-absolute play"><i class="fas fa-play"></i></a>
        </figure>
        <a href="<?php echo get_the_permalink(); ?>" class="p-2"><span><?php echo get_the_title(); ?></span></a>
    </div>
</div>
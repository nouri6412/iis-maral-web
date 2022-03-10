<div class="col-12 col-md-6">
    <a href="<?php echo get_the_permalink(); ?>">
        <div class="image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="text-center m-1 mb-5 m-lg-5">
                <h4 class="text-white text-center pe-3 pb-5 font-bold"><?php echo get_the_title(); ?>
                </h4>
            </div>
            <div class="d-flex justify-content-between col-12 align-items-center"><span class="text-white"><?php echo get_the_date(); ?></span><i aria-hidden="true" class="fas fa-arrow-left text-white fs-2"></i></div>
        </div>
    </a>

</div>
<div>
    <a href="<?php echo home_url(); ?>" class="text-dark"><?php _e('Home', 'iisgroup') ?></a><span>/</span><a href="<?php echo get_permalink(); ?>" class="text-dark">
        <?php echo get_the_title(); ?></a>
</div>
<div class="mt-5">
    <div>
        <h3 class="font-bold"><?php echo get_the_title(); ?></h3>
        <div class="text-end"><span class="text-secondary font-12"><?php echo get_the_date(); ?></span></div>
        <div class="mt-4"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>" width="100%" class="rounded">
        </div>
    </div>
</div>

<?php
get_template_part('template-parts/content/content', 'arc');
?>
<?php echo get_the_content(); ?>
<?php
get_template_part('template-parts/content/content', 'ques');
get_template_part('template-parts/content/content', 'share-buttons');
?>


<div class="mt-5 pt-5">
    <div class="clear" id="comment-list">
        <div class="comments-area form" id="comments">
            <div class="clearfix m-b20">
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            </div>
        </div>
    </div>
</div>
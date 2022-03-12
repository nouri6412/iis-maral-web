<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage iisgroup
 * @since iisgroup 1.0
 */

get_header('bg');
?>
<!--  -->
<div class="pb-5 pt-5">
    <div class="">
        <div class="col-10 col-md-11 col-xl-9 m-auto">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8">
                    <?php

                    // Start the Loop.
                    while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/content/content', 'page');

                    endwhile; // End the loop.
                    ?>
                </div>

                <!--  -->
                <div class="col-12 col-lg-4 ps-lg-4 mt-5 mt-lg-0">
                    <div class="border-lg-start ps-lg-4">
                        <?php
                        get_template_part('template-parts/widget/widget', 'last-news');
                        get_template_part('template-parts/widget/widget', 'links');
                        get_template_part('template-parts/widget/widget', 'city');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

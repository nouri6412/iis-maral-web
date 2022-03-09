<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage iis-group
 * @since 1.0.0
 * Template Name: homepage
 */

get_header();

?>
<?php
  get_template_part('template-parts/homepage/homepage',"slider");
  get_template_part('template-parts/homepage/homepage',"resent-immigration");
?>

<!--  -->
<section class="bg-light d-none d-lg-block" style="min-height: 600px;background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-58.png);background-position: top right;background-repeat: no-repeat;">
    <div class="container position-relative h-100">
        <div class="col-11 m-auto p-4 pt-5 h-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Ellipse-9-1.png);background-repeat: no-repeat;background-position:top right;">

            <div class="box">
                <div>
                    <h2 class="font-bolder">ABOUT ISS GROUP
                    </h2>
                </div>
                <div>
                    <p class="text-secondary">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus volutpat mauris volutpat
                        auctor orci facilisis et suspendisse aliquet. Sed facilisi est turpis eros. Ultricies
                        sit ac lorem ipsum in.
                    </p>
                </div>
                <div><a href="" class="btn btn-primary">READ MORE</a></div>
            </div>
            <div class="big-image big-image-left"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/Group-42-pgowt1cjusbx7sgqdfzmzt4nj1m4ll9x89pmroe062.png" alt=""></div>
        </div>
    </div>
</section>


<?php
  get_template_part('template-parts/homepage/homepage',"resent-video");
  get_template_part('template-parts/homepage/homepage',"resent-program");
?>


<!--  -->
<section class="bg-image pt-3
        pt-lg-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/image/Group-305.png);background-position: top center;min-height: 450px;">
    <div class="container position-relative">
        <div class="col-11 m-auto p-lg-4 pt-5">
            <div class="row align-items-center">
                <div class="col d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/CONTACT_PIC.png" alt="" width="550px">
                </div>
                <div class="col pt-5 pb-5">
                    <div class="">
                        <h3 class="border-blue font-bolder">Contact us</h3>
                    </div>
                    <form action="">
                        <div class="col-12"><input type="text" placeholder="name"></div>
                        <div class="col-12"><input type="email" placeholder="email"></div>
                        <div class="text-end mt-2 col-11 pe-2"><button class="btn btn-primary">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

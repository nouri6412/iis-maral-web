<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage iisgroup
 * @since 1.0.0
 * Template Name: فرم ارزیابی اولیه مهاجرت
 */


get_header('bg');
?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/initial-form.css">
<div id="initial_assessment_form" class="form">
<?php
get_template_part('template-parts/form/form', "step-1");
get_template_part('template-parts/form/form', "step-2");
get_template_part('template-parts/form/form', "step-3");
get_template_part('template-parts/form/form', "step-4");
get_template_part('template-parts/form/form', "step-5");
?>
</div>
<div class="loading-ajax"></div>
<div id="dzFormMsg-error" class="dzFormMsg error"></div>
<div style="margin:30px;" id="dzFormMsg-doned" class="dzFormMsg doned"></div>
<?php
get_footer();

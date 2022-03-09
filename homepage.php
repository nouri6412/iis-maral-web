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
  get_template_part('template-parts/homepage/homepage',"about");
  get_template_part('template-parts/homepage/homepage',"resent-video");
  get_template_part('template-parts/homepage/homepage',"resent-program");
  get_template_part('template-parts/homepage/homepage',"contact");
?>



<?php

get_footer();

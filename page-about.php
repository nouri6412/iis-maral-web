<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage iisgroup
 * @since 1.0.0
 * Template Name: درباره ما
 */


get_header();
?>
<?php
get_template_part('template-parts/about/about', "sec-1");
get_template_part('template-parts/about/about', "sec-2");
get_template_part('template-parts/about/about', "sec-3");
?>

<?php
get_footer();

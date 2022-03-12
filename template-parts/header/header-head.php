<meta charset="<?php bloginfo('charset'); ?>" />

<!-- MOBILE SPECIFIC -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
<?php //echo get_the_title(pll_get_post(52)); 
?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/initial-form.css">
<?php
if (pll_current_language() == 'fa') {
?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugin-fa/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugin-fa/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-rtl.css">
    <link href="<?php echo get_template_directory_uri(); ?>/style-rtl.css" rel="stylesheet" type="text/css" />
<?php
} else {
?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugin/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<?php
}
?>
<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<?php wp_head(); ?>
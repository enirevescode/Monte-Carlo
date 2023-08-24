<?php
/*
  Template Name: Full-width
  Template Post Type: post, page, product
*/

// if (!defined('ABSPATH')) {
//    exit; // Exit if accessed directly.
// } ;?>


<?php get_template_part('header-spa'); ?>
<?php get_template_part('./content/encart_spa'); ?>
<?php get_template_part('./content/grid_spa'); ?>
<br>
<?php get_template_part('./content/encart_fidel'); ?>


<?php get_footer(); ?>
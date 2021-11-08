<?php
/**
 * Template Name: Homepage
 *
 * @package alexrodriguez
 */
?>

<?php 
    $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 

    get_header(); 
?>
<main class="front-page background-color" >
    <?php get_template_part('./template-parts/front-page/front-page-banner');?>
    <?php get_template_part('/template-parts/projects'); ?>
</main>

<?php
    get_footer();
?>
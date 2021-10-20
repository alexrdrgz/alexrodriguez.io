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
    <?php get_template_part('./template-parts/side-templates/right-side'); ?>
    <?php get_template_part('./template-parts/side-templates/left-side'); ?>
    <?php get_template_part('./template-parts/front-page/front-page-banner');?>
</main>

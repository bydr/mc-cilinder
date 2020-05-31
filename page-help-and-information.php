<?php
/*
Template Name: Help and Information Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumbs'); ?>

<div class="container-fluid page-content page-content__helpInformation">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8 col-lg-8 content-wrapper">
                <?php get_template_part('parts/content-list-img'); ?>

            </div>
            <div class="col-12 col-xl-1"></div>
            <div class="col-12 col-xl-3 col-lg-4 sidebar-right">
                <?php get_template_part('parts/sidebar-category-list'); ?>
                <?php get_template_part('parts/sidebar-right'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

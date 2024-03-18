<?php 
/* Template Name: Single Post Template
 * Template Post Type: post, page
 */
/**
 * Single Post Default template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */
    get_header(); ?>

        <div id="page-content" class="page-blocks page-blocks__single" data-tpl="single">

            <?php 

                the_content();

            ?>
        
        </div>

    <?php get_footer(); ?>
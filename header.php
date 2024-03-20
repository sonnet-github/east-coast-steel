<?php
/**
 * Header template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js theme-html">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php 
			wp_head();
			get_template_part('src/views/partials/header', 'before-body'); 
		?>
		<!-- fontawesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
    <body <?php body_class(); ?>>

		
		<?php get_template_part('src/views/partials/header', 'body-start'); ?>

		<div id="page-main" class="body-unload">
                        
			<?php get_template_part('src/views/partials/header', 'content');  ?>
            
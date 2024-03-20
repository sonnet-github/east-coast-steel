<?php
/**
 * Page Header Template Block (Header Block)
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    $mobile_logo_type = get_field('mobile_logo_type', 'options');
    $header_main_logo = get_field('header_main_logo', 'options');
    $header_cta = get_field('header_cta', 'options');
    $header_link = get_field('header_link', 'options');

    $social_media = [
        [
            'icon' => '<i class="fab fa-facebook"></i>',
            'url' => get_field('sl_facebook') ? get_field('sl_facebook') : '#'
        ],
        [
            'icon' => '<i class="fab fa-instagram-square"></i>',
            'url' => get_field('sl_instagram') ? get_field('sl_instagram') : '#'
        ],
        [
            'icon' => '<i class="fab fa-linkedin"></i>',
            'url' => get_field('sl_linked_in') ? get_field('sl_linked_in') : '#'
        ]
    ];


?>
<header id="page-header" class="page-header--<?= $header_type ?>">
    <div class="ph-content">
        <div class="ph-top hidden-mobile-landscape">
            <?php if($social_media):?>
            <ul class="site-smi">
                <?php foreach($social_media as $smi):?>
                    <?php if($smi):?>
                        <li>
                            <a href="<?= $smi['url']?>" target="_blank" aria-label="social media">
                                <?= $smi['icon']?>
                            </a>
                        </li>
                    <?php endif;?>
                <?php endforeach;?>
            </ul>
            <?php endif;?>
            <?php if($header_link):?>
                <a href="<?= $header_link['url']?>" target="<?= $header_link['target']?>" class="ph-link"><?= $header_link['title']?></a>
            <?php endif;?>
        </div>
        <div class="ph-row">
            <div class="ph-left">
                <?php if($header_main_logo):?>
                    <div class="ph-logo">
                        <a href="<?= get_site_url(null, ''); ?>">
                            <img src="<?= $header_main_logo['url']?>" alt="<?= $header_main_logo['alt']?>" width="158" height="58">
                        </a>
                    </div>
                <?php endif;?>
            </div>
            <div class="ph-right">
                <div class="ph-nav-holder hidden-mobile-landscape">
                    <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'header-nav', 'theme_location' => 'primary-menu', 'menu_class' => 'ph-nav') ); ?>
                </div>
                <?php if($header_cta):?>
                    <a href="<?= $header_cta['url']?>" target="<?= $header_cta['target']?>" class="site-btn ph-btn hidden-mobile-landscape"><?= $header_cta['title']?></a>
                <?php endif;?>
                <button type="button" class="burger-menu-btn">
                    <span class="icon-menu">
                        <em></em>
                        <em></em>
                        <em></em>
                    </span>
                </button>
            </div>
        </div>
    </div>
</header>
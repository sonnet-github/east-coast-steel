<?php
/**
 * Footer Upper Template (Footer Block)
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    $footer_contact_title = get_field('footer_contact_title', 'options');
    $footer_contact_details = get_field('footer_contact_details', 'options');
    $footer_cta = get_field('footer_cta', 'options');
    $footer_location_title = get_field('footer_location_title', 'options');
    $footer_location = get_field('footer_location', 'options');

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
<div class="pf-upper">
    <div class="pf-container">
        <div class="pf-row">
            <div class="pf-col pf-contact">

                <?php if($footer_contact_title):?>
                    <p class="pf-title"><?= $footer_contact_title?></p>
                <?php endif;?>

                <?php if($footer_contact_details):?>
                    <?= $footer_contact_details?>
                <?php endif;?>

                <?php if($footer_cta):?>
                    <a href="<?= $footer_cta['url']?>" target="<?= $footer_cta['target']?>" class="pf-btn">
                        <?= $footer_cta['title']?>
                        <span class="slide-next-button sm pf-btn-arrow">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                <?php endif;?>
            </div>
            <div class="pf-col pf-menu">
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'pf-nav', 'theme_location' => 'secondary-menu', 'menu_class' => 'pf-nav') ); ?>
            </div>
            <div class="pf-col pf-address">
                <?php if($footer_location_title):?>
                    <p class="pf-title"><?= $footer_location_title?></p>
                <?php endif;?>
                <?php if($footer_location):?>
                    <?= $footer_location?>
                <?php endif;?>
            </div>
            <div class="pf-col pf-smi">
                <p class="pf-title">Follow us on</p>
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
            </div>
        </div>
    </div>
</div>
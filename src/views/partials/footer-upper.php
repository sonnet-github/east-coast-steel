<?php
/**
 * Footer Upper Template (Footer Block)
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    $phone = get_field('gen_phone_number', 'options');
    $email = get_field('gen_email_address', 'options');
    $location = get_field('gen_location', 'options');
    $icon_class = (defined('FOOTER_ALT_CLASS')) ? '-light' : '';
    $footer_contact_title = get_field('footer_contact_title', 'options');
    $footer_contact_details = get_field('footer_contact_details', 'options');

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
                <p class="pf-title">General enquiries</p>
                <ul>
                    <li><a href="tel:02 9618 6266">02 9618 6266</a></li>
                    <li><a href="mailto:sales@eastcoaststeel.com.au">sales@eastcoaststeel.com.au</a></li>
                </ul>
                <a href="#" class="pf-btn">
                    Contact us 
                    <span class="slide-next-button sm pf-btn-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
            <div class="pf-col pf-menu">
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'pf-nav', 'theme_location' => 'secondary-menu', 'menu_class' => 'pf-nav') ); ?>
            </div>
            <div class="pf-col pf-address">
                <p class="pf-title">Visit us</p>
                <p><a href="#" target="_blank">4 Moorlands Road, Ingleburn,<br> NSW 2565</a></p>
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
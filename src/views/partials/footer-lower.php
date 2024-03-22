<?php
/**
 * Footer Lower Template (Footer Block)
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $footer_logo = get_field('footer_logo_image', 'options');
    $footer_logo_secondary = get_field('footer_logo_secondary', 'options');
    $copyright_content = get_field('copyright_line', 'options');

?>
<div class="pf-lower">
    <div class="pf-container">
        <?php if($footer_logo || $footer_logo_secondary):?>
            <div class="pf-logo">
                <a href="#">
                    <img src="<?= $footer_logo['url']?>" alt="<?= $footer_logo['alt']?>" class="pf-logo-default">
                    <img src="<?= $footer_logo_secondary['url']?>" alt="<?= $footer_logo_secondary['alt']?>" class="pf-logo-secondary">
                </a>
            </div>
        <?php endif;?>
        <?php if($copyright_content):?>
            <div class="pf-copyright">
                <?= $copyright_content?>
            </div>
        <?php endif;?>
    </div>
</div>
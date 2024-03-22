<?php
/**
 * Footer Lower Template (Footer Block)
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $footer_logo = get_field('footer_logo_image', 'options');

?>
<div class="pf-lower">
    <div class="pf-container">
        <div class="pf-logo">
            <a href="#">
                <img src="<?= $footer_logo['url']?>" alt="Logo" class="pf-logo-default">
                <img src="/wp-content/uploads/2024/03/logo-footer-mobile.svg" alt="" class="pf-logo-secondary">
            </a>
        </div>
        <div class="pf-copyright">
            <ul>
                <li>All rights reserved © 2024 East Coast Steel</li>
                <li><a href="#">Policies</a></li>
                <li><a href="#">Terms and conditions</a></li>
            </ul>
        </div>
    </div>
</div>
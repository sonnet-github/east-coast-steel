<?php
/**
 * Featured Capabilities Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    // Support custom "anchor" values.
    $anchor = '';
    if ( ! empty( $block['anchor'] ) ) {
        $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
    }

    // Get acf fields value and set default
    $theme = get_field('theme') ?: 'light';
    $background = get_field('background_color') ?: 'transparent';
    $content = get_field('content');

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = 'block-featured-capabilities';
    if ( ! empty( $block['className'] ) ) {
        $class_name .= ' ' . $block['className'];
    }
    if ( ! empty( $block['align'] ) ) {
        $class_name .= ' align' . $block['align'];
    }

    $class_name .= ' block-theme-'.$theme;

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>

    <section class="block--custom-layout <?= $class_name ?>" <?= $anchor ?> style="background-color:<?= $background ?>;">
        <div class="block-featured-capabilities__bg"></div>
        <div class="container">
            <div class="block-featured-capabilities__top">
                <div class="block-featured-capabilities__feat-img canvas-img">
                    <canvas width="488" height="400"></canvas>
                    <img src="/wp-content/uploads/2024/03/placeholder-2.jpg" alt="Placeholder">
                </div>
                <a href="#" class="site-btn block-featured-capabilities__btn border-none sm" target="">Capabilities</a>
            </div>
            <div class="block-featured-capabilities__row">
                <div class="block-featured-capabilities__col-capbility-list">
                    <ul class="block-featured-capabilities__capability-list">
                        <li>
                            <a href="#">Mini Slitting</a>
                        </li>
                        <li>
                            <a href="#">Large Slitting</a>
                        </li>
                        <li>
                            <a href="#">Precision Shearing</a>
                        </li>
                        <li>
                            <a href="#">Contract Storage</a>
                        </li>
                        <li>
                            <a href="#">Bulk Coil Sales</a>
                        </li>
                    </ul>
                    <div class="block-featured-capabilities__capability-text">
                        <p>Check out our <a href="#">Capabilities</a></p>
                    </div>
                </div>
                <div class="block-featured-capabilities__col-description">
                    <p>Steel used for:</p>
                    <ul>
                        <li>Air conditioning ducts</li>
                        <li>Door manufacturing</li>
                        <li>Building sheds</li>
                        <li>Structural steel</li>
                        <li>White goods</li>
                        <li>Storage</li>
                    </ul>
                </div>
                <div class="block-featured-capabilities__col-feat-img">
                    <div class="block-featured-capabilities__feat-img-2 canvas-img">
                        <canvas width="280" height="229"></canvas>
                        <img src="/wp-content/uploads/2024/03/placeholder-2.jpg" alt="Placeholder">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>



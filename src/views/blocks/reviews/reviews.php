<?php
/**
 * Reviews Block Template
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
    $class_name = 'block-reviews';
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

    <section class="block--custom-layout <?= $class_name ?>" <?= $anchor ?> style="background-color:<?= $background ?>;" data-ux="reviews">
        <div class="container">
            <div class="block-reviews__slider-wrapper">
                <div class="block-reviews__slider owl-carousel reviews-slider">

                    <div class="block-reviews__slide">
                        <div class="block-reviews__img">
                            <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="111" height="83">
                        </div>
                        <h4>Lorem ipsum dolor  sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua</h4>
                        <p>– Name here <span>Position, Company</span></p>
                    </div>

                    <div class="block-reviews__slide">
                        <div class="block-reviews__img">
                            <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="111" height="83">
                        </div>
                        <h4>Lorem ipsum dolor  sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua</h4>
                        <p>– Name here <span>Position, Company</span></p>
                    </div>

                    <div class="block-reviews__slide">
                        <div class="block-reviews__img">
                            <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="111" height="83">
                        </div>
                        <h4>Lorem ipsum dolor  sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua</h4>
                        <p>– Name here <span>Position, Company</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
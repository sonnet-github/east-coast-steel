<?php
/**
 * Gallery Content Slider Block Template
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
    $background = get_field('background_color') ?: '#f9fafc';
    $content = get_field('content');

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = 'block-gallery-content-slider';
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

    <section class="block--custom-layout <?= $class_name ?>" <?= $anchor ?> style="background-color:<?= $background ?>;" data-ux="gallery-content-slider">
        <div class="container">
            <span class="site-btn block-gallery-content-slider__tag">Specialties</span>
            <div class="block-gallery-content-slider__wrapper">
                <div class="block-gallery-content-slider__slider owl-carousel">

                    <div class="block-gallery-content-slider__slide-item">
                        <div class="block-gallery-content-slider__slide-item-content">

                            <h5>Large Stockholding and on-site availability</h5>

                            <div class="block-gallery-content-slider__img canvas-img block-gallery-content-slider__img-mobile">
                                <canvas width="343" height="317"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                            </div>

                            <p>We ensure a diverse array of sheet sizes are readily available at our Sydney based site. Our commitment to maintaining a substantial inventory provides customers with quick and efficient access to the sheet sizes you require. Its your assurance of operational flexibility and responsive service. </p>
                        </div>
                        <div class="block-gallery-content-slider__gallery">

                            <div class="block-gallery-content-slider__gallery-col-1">
                                <div class="block-gallery-content-slider__gallery-item gallery-item-1">
                                    <div class="block-gallery-content-slider__img canvas-img">
                                        <canvas width="488" height="451"></canvas>
                                        <!-- <canvas width="394" height="365" class="show-tablet"></canvas> -->
                                        <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>

                            <div class="block-gallery-content-slider__gallery-col-2">
                                <div class="block-gallery-content-slider__gallery-item gallery-item-2">
                                    <div class="block-gallery-content-slider__img canvas-img">
                                        <canvas width="349" height="228"></canvas>
                                        <!-- <canvas width="282" height="185" class="show-tablet"></canvas> -->
                                        <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                                    </div>
                                </div>

                                <div class="block-gallery-content-slider__gallery-item gallery-item-3">
                                    <div class="block-gallery-content-slider__img canvas-img">
                                        <canvas width="211" height="228"></canvas>
                                        <!-- <canvas width="170" height="185" class="show-tablet"></canvas> -->
                                        <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="block-gallery-content-slider__slide-item">
                        <div class="block-gallery-content-slider__slide-item-content">

                            <h5>Large Stockholding and on-site availability</h5>

                            <div class="block-gallery-content-slider__img canvas-img block-gallery-content-slider__img-mobile">
                                <canvas width="343" height="317"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                            </div>

                            <p>We ensure a diverse array of sheet sizes are readily available at our Sydney based site. Our commitment to maintaining a substantial inventory provides customers with quick and efficient access to the sheet sizes you require. Its your assurance of operational flexibility and responsive service. </p>
                        </div>
                        <div class="block-gallery-content-slider__gallery">

                            <div class="block-gallery-content-slider__gallery-col-1">
                                <div class="block-gallery-content-slider__gallery-item gallery-item-1">
                                    <div class="block-gallery-content-slider__img canvas-img">
                                        <canvas width="488" height="451"></canvas>
                                        <!-- <canvas width="394" height="365" class="show-tablet"></canvas> -->
                                        <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>

                            <div class="block-gallery-content-slider__gallery-col-2">
                                <div class="block-gallery-content-slider__gallery-item gallery-item-2">
                                    <div class="block-gallery-content-slider__img canvas-img">
                                        <canvas width="349" height="228"></canvas>
                                        <!-- <canvas width="282" height="185" class="show-tablet"></canvas> -->
                                        <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                                    </div>
                                </div>

                                <div class="block-gallery-content-slider__gallery-item gallery-item-3">
                                    <div class="block-gallery-content-slider__img canvas-img">
                                        <canvas width="211" height="228"></canvas>
                                        <!-- <canvas width="170" height="185" class="show-tablet"></canvas> -->
                                        <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Image">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
<?php
/**
 * Featured Products Block Template
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
    $class_name = 'block-featured-products';
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

    <section class="block--custom-layout <?= $class_name ?>" <?= $anchor ?> style="background-color:<?= $background ?>;" data-ux="featured-products">
        <div class="block-featured-products__wrapper">
            <a href="#" class="site-btn sm border-none block-featured-products__btn">Products</a>
            <div class="block-featured-products__slider-wrapper">
                <div class="block-featured-products__slider owl-carousel">

                    <div class="block-featured-products__slide">
                        <div class="block-featured-products__product">
                            <div class="block-featured-products__product-img canvas-img">
                                <canvas width="238" height="196"></canvas>
                                <img src="/wp-content/uploads/2024/03/fp-1.png" alt="Product">
                            </div>
                            <div class="block-featured-products__product-content">
                                <div class="block-featured-products__product-content-inner">
                                    <h6>Galvanised Steel</h6>
                                    <p>Steel coated with zinc to enhance its corrosion resistance and  durability</p>
                                </div>
                                <div class="block-featured-products__product-count">1 of 10</div>
                            </div>
                        </div>
                    </div>

                    <div class="block-featured-products__slide">
                        <div class="block-featured-products__product">
                            <div class="block-featured-products__product-img canvas-img">
                                <canvas width="238" height="196"></canvas>
                                <img src="/wp-content/uploads/2024/03/fp-2.png" alt="Product">
                            </div>
                            <div class="block-featured-products__product-content">
                                <div class="block-featured-products__product-content-inner">
                                    <h6>Galvanised Steel</h6>
                                    <p>Steel coated with zinc to enhance its corrosion resistance and  durability</p>
                                </div>
                                <div class="block-featured-products__product-count">1 of 10</div>
                            </div>
                        </div>
                    </div>

                    <div class="block-featured-products__slide">
                        <div class="block-featured-products__product">
                            <div class="block-featured-products__product-img canvas-img">
                                <canvas width="238" height="196"></canvas>
                                <img src="/wp-content/uploads/2024/03/placeholder-2.jpg" alt="Product">
                            </div>
                            <div class="block-featured-products__product-content">
                                <div class="block-featured-products__product-content-inner">
                                    <h6>Galvanised Steel</h6>
                                    <p>Steel coated with zinc to enhance its corrosion resistance and  durability</p>
                                </div>
                                <div class="block-featured-products__product-count">1 of 10</div>
                            </div>
                        </div>
                    </div>

                    <div class="block-featured-products__slide">
                        <div class="block-featured-products__product">
                            <div class="block-featured-products__product-img canvas-img">
                                <canvas width="238" height="196"></canvas>
                                <img src="/wp-content/uploads/2024/03/placeholder-2.jpg" alt="Product">
                            </div>
                            <div class="block-featured-products__product-content">
                                <div class="block-featured-products__product-content-inner">
                                    <h6>Galvanised Steel</h6>
                                    <p>Steel coated with zinc to enhance its corrosion resistance and  durability</p>
                                </div>
                                <div class="block-featured-products__product-count">1 of 10</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="block-featured-products__controls owl-carousel-controls">
                    <!-- <button class="slide-prev-button" aria-label="Prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="slide-next-button" aria-label="Next"><i class="fas fa-arrow-right"></i></button> -->
                </div>
            </div>
            <div class="block-featured-products__content">
                <p>Explore our <a href="http://east-coast-steel.local/products/">Products</a></p>
            </div>
        </div>
    </section>

<?php endif; ?>
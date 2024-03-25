<?php
/**
 * Image Content Tabs Block Template
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
    $background = get_field('background_color') ?: '#e3f0f8';
    $content = get_field('content');
    $title = get_field('title');

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = 'block-image-content-tabs';
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
        <div class="container">
            <div class="block-image-content-tabs__inner">
                <h3>Overview heading</h3>
                <div class="block-image-content-tabs__content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. </p>
                </div>

                <div class="block-image-content-tabs__tab-holder">
                    <div class="block-image-content-tabs__tab-left">
                        <ul class="block-image-content-tabs__tab-btn-list">
                            <li><a href="#" class="active">Mini Slitting</a></li>
                            <li><a href="#">Large Slitting</a></li>
                            <li><a href="#">Precision Shearing</a></li>
                            <li><a href="#">Contract Storage</a></li>
                            <li><a href="#">Bulk Coil Sales</a></li>
                        </ul>
                    </div>
                    <div class="block-image-content-tabs__tab-right">

                        <div class="block-image-content-tabs__tab-item active">

                            <div class="block-image-content-tabs__img canvas-img">
                                <canvas width="592" height="356"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                            </div>

                            <div class="block-image-content-tabs__tab-item-content">
                                <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                            </div>

                        </div>

                        <div class="block-image-content-tabs__tab-item">

                            <div class="block-image-content-tabs__img canvas-img">
                                <canvas width="592" height="356"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                            </div>

                            <div class="block-image-content-tabs__tab-item-content">
                                <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                            </div>

                        </div>

                        <div class="block-image-content-tabs__tab-item">

                            <div class="block-image-content-tabs__img canvas-img">
                                <canvas width="592" height="356"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                            </div>

                            <div class="block-image-content-tabs__tab-item-content">
                                <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                            </div>

                        </div>

                        <div class="block-image-content-tabs__tab-item">

                            <div class="block-image-content-tabs__img canvas-img">
                                <canvas width="592" height="356"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                            </div>

                            <div class="block-image-content-tabs__tab-item-content">
                                <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                            </div>

                        </div>

                        <div class="block-image-content-tabs__tab-item">

                            <div class="block-image-content-tabs__img canvas-img">
                                <canvas width="592" height="356"></canvas>
                                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                            </div>

                            <div class="block-image-content-tabs__tab-item-content">
                                <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="block-image-content-tabs__mobile-content">

                    <div class="block-image-content-tabs__tab-item mobile">

                        <h6>Mini Slitting</h6>

                        <div class="block-image-content-tabs__img canvas-img">
                            <canvas width="342" height="203"></canvas>
                            <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                        </div>

                        <div class="block-image-content-tabs__tab-item-content">
                            <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                        </div>

                    </div>

                    <div class="block-image-content-tabs__tab-item mobile">

                        <h6>Large Slitting</h6>
                        
                        <div class="block-image-content-tabs__img canvas-img">
                            <canvas width="342" height="203"></canvas>
                            <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                        </div>

                        <div class="block-image-content-tabs__tab-item-content">
                            <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                        </div>

                    </div>

                    <div class="block-image-content-tabs__tab-item mobile">

                        <h6>Precision Shearing</h6>
                        
                        <div class="block-image-content-tabs__img canvas-img">
                            <canvas width="342" height="203"></canvas>
                            <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                        </div>

                        <div class="block-image-content-tabs__tab-item-content">
                            <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                        </div>

                    </div>

                    <div class="block-image-content-tabs__tab-item mobile">

                        <h6>Contract Storage</h6>
                        
                        <div class="block-image-content-tabs__img canvas-img">
                            <canvas width="342" height="203"></canvas>
                            <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                        </div>

                        <div class="block-image-content-tabs__tab-item-content">
                            <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                        </div>

                    </div>

                    <div class="block-image-content-tabs__tab-item mobile">

                        <h6>Bulk Coil Sales</h6>
                        
                        <div class="block-image-content-tabs__img canvas-img">
                            <canvas width="342" height="203"></canvas>
                            <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="">
                        </div>

                        <div class="block-image-content-tabs__tab-item-content">
                            <p>Uniquely crafted to be narrower than any other slit liner, we take pride in being one of the exclusive few in the country with the expertise and machinery to achieve this level of slitting specification. </p>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

<?php endif; ?>
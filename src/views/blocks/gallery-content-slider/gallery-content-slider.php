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
    $tag = get_field('tag');
    $slides = get_field('slides');

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

            <?php if($tag):?>
                <span class="site-btn block-gallery-content-slider__tag" data-aos="fade-left"><?= $tag?></span>
            <?php endif;?>

            <?php if($slides):?>
                <div class="block-gallery-content-slider__wrapper" data-aos="fade-zoom-in" data-aos-delay="500">
                    <div class="block-gallery-content-slider__slider owl-carousel">

                        <?php foreach($slides as $slide_item):?>
                            <?php if($slide_item):
                                $images = $slide_item['images'];  
                            ?>
                            
                            
                                <div class="block-gallery-content-slider__slide-item">

                                    <div class="block-gallery-content-slider__slide-item-content">

                                        <?php if($slide_item['title']):?>
                                            <h5><?= $slide_item['title']?></h5>
                                        <?php endif;?>
                                        
                                        <?php if(isset($images) && count($images) > 0):?>

                                            <?php if(isset($images[0])):?>
                                                <div class="block-gallery-content-slider__img canvas-img block-gallery-content-slider__img-mobile">
                                                    <canvas width="343" height="317"></canvas>
                                                    <img src="<?= $images[0]['image']['url']?>" alt="<?= $images[0]['image']['alt']?>">
                                                </div>
                                            <?php endif;?>

                                        <?php endif;?>

                                        <?php if($slide_item['content']):?>
                                            <?= $slide_item['content']?>
                                        <?php endif;?>
                                    </div>

                                    <?php if(isset($images) && count($images) > 0):
                                        $img_1 = isset($images[0]) ? $images[0] : false;  
                                        $img_2 = isset($images[1]) ? $images[1] : false;  
                                        $img_3 = isset($images[2]) ? $images[2] : false;  
                                    ?>
                                        <div class="block-gallery-content-slider__gallery">

                                            <?php if($img_1['image']):?>

                                                <div class="block-gallery-content-slider__gallery-col-1">
                                                    <div class="block-gallery-content-slider__gallery-item gallery-item-1">
                                                        <div class="block-gallery-content-slider__img canvas-img">
                                                            <canvas width="488" height="451"></canvas>
                                                            <img src="<?= $img_1['image']['url']?>" alt="<?= $img_1['image']['alt']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endif;?>

                                            <?php if($img_2['image'] || $img_3['image']):?>

                                                <div class="block-gallery-content-slider__gallery-col-2">

                                                    <?php if($img_2['image']):?>
                                                        <div class="block-gallery-content-slider__gallery-item gallery-item-2">
                                                            <div class="block-gallery-content-slider__img canvas-img">
                                                                <canvas width="349" height="228"></canvas>
                                                                <img src="<?= $img_2['image']['url']?>" alt="<?= $img_2['image']['alt']?>">
                                                            </div>
                                                        </div>
                                                    <?php endif;?>

                                                    <?php if($img_3['image']):?>
                                                        <div class="block-gallery-content-slider__gallery-item gallery-item-3">
                                                            <div class="block-gallery-content-slider__img canvas-img">
                                                                <canvas width="211" height="228"></canvas>
                                                                <img src="<?= $img_3['image']['url']?>" alt="<?= $img_3['image']['alt']?>">
                                                            </div>
                                                        </div>
                                                    <?php endif;?>
                                                </div>

                                            <?php endif;?>

                                        </div>
                                    <?php endif;?>

                                </div>

                            <?php endif;?>
                        <?php endforeach;?>
                       

                    </div>
                </div>
            <?php endif;?>
        </div>
    </section>

<?php endif; ?>
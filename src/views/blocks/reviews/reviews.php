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
    $reviews_list = get_field('reviews_list');

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
            <?php if($reviews_list):?>
                <div class="block-reviews__slider-wrapper" data-aos="fade-up">
                    <div class="block-reviews__slider owl-carousel reviews-slider">

                        <?php foreach($reviews_list as $review):?>
                            <?php if($review):?>

                                <div class="block-reviews__slide">

                                    <?php if($review['image']):?>
                                        <div class="block-reviews__img">
                                            <img src="<?= $review['image']['url']?>" alt="<?= $review['image']['alt']?>" width="111" height="83">
                                        </div>
                                    <?php endif;?>

                                    <?php if($review['content']):?>
                                        <h4><?= $review['content']?></h4>
                                    <?php endif;?>

                                    <?php if($review['name'] || $review['description']):?>
                                        <p>– <?= $review['name']?> <span><?= $review['description']?></span></p>
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
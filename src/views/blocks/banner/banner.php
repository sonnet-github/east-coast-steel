<?php
/**
 * Banner Block Template
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
    $background = get_field('background_color') ?: '#FFFFFF';
    $content = get_field('content');
    $image = get_field('image');
    $subtitle = get_field('subtitle');
    $title = get_field('title');
    $button = get_field('button');

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = 'block-banner';
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
        <div class="canvas-img block-banner__img-banner">
            <canvas width="1440" height="752"></canvas>

            <?php if($image):?>

                <img src="<?= $image['url']?>" alt="<?= $image['alt']?>">

            <?php else:?>

                <img src="/wp-content/uploads/2024/03/banner-placeholder.jpg" alt="Banner Image">

            <?php endif;?>

        </div>
        <div class="block-banner__content-holder">
            <div class="container">
                <div class="block-banner__content" data-aos="fade-left">
                    <?php if($subtitle):?>
                        <small><?= $subtitle?></small>
                    <?php endif;?>
                    <?php if($title):?>
                        <h1><?= $title?></h1>
                    <?php endif;?>
                    <?php if($button):?>
                        <a href="<?= $button['url']?>" target="<?= $button['target']?>" class="site-btn block-banner__btn"><?= $button['title']?></a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
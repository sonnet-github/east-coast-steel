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
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $button = get_field('button');
    $description_title = get_field('description_title');
    $description_list = get_field('description_list');
    $capabilities_list = get_field('capabilities_list');
    $capabilities_list_text = get_field('capabilities_list_text');

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
                <?php if($image_1):?>
                    <div class="block-featured-capabilities__feat-img canvas-img">
                        <canvas width="488" height="400"></canvas>
                        <img src="<?= $image_1['url']?>" alt="<?= $image_1['alt']?>">
                    </div>
                <?php endif;?>
                <?php if($button):?>
                    <a href="<?= $button['url']?>" class="site-btn block-featured-capabilities__btn border-none sm" target="<?= $button['target']?>">
                        <?= $button['title']?>
                    </a>
                <?php endif;?>
            </div>
            <div class="block-featured-capabilities__row">
                <div class="block-featured-capabilities__col-capbility-list">
                    <?php if($capabilities_list):?>
                    <ul class="block-featured-capabilities__capability-list">
                        <?php foreach($capabilities_list as $item):?>
                            <?php if($item['capability']):?>
                                <li>
                                    <a href="<?= $item['capability']['url']?>" target="<?= $item['capability']['target']?>"><?= $item['capability']['title']?></a>
                                </li>
                            <?php endif;?>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    <?php if($capabilities_list_text):?>
                        <div class="block-featured-capabilities__capability-text">
                            <?= $capabilities_list_text?>
                        </div>
                    <?php endif;?>
                </div>
                <div class="block-featured-capabilities__col-description">
                    <?php if($description_title):?>
                        <p><?= $description_title?></p>
                    <?php endif;?>
                    <?php if($description_list):?>
                    <ul>
                        <?php foreach($description_list as $item):?>
                            <?php if($item):?>
                                <li><?= $item['text']?></li>
                            <?php endif;?>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>
                <?php if($image_2):?>
 
                    <div class="block-featured-capabilities__col-feat-img">
                        <div class="block-featured-capabilities__feat-img-2 canvas-img">
                            <canvas width="280" height="229"></canvas>
                            <img src="<?= $image_2['url']?>" alt="<?= $image_2['alt']?>">
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </section>

<?php endif; ?>



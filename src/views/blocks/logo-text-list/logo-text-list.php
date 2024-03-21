<?php
/**
 * Logo Text List Block Template
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
    $logo_text_list = get_field('logo_text_list');

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = 'block-logo-text-list';
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
            <?php if($logo_text_list):?>
                <div class="block-logo-text-list__list">

                    <?php foreach($logo_text_list as $item):?>
                        <?php if($item):?>
                            <div class="block-logo-text-list__item">
                                <div class="block-logo-text-list__item-inner">
                                    <?php if($item['image']):?>
                                        <div class="block-logo-text-list__item-logo">
                                            <img src="<?= $item['image']['url']?>" alt="<?= $item['image']['alt']?>" width="91" height="91">
                                        </div>
                                    <?php endif;?>
                                    <?php if($item['content']):?>
                                        <div class="block-logo-text-list__item-content">
                                            <?= $item['content']?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                        <?php endif;?>
                    <?php endforeach;?>
                
                </div>
            <?php endif;?>
        </div>
    </section>

<?php endif; ?>
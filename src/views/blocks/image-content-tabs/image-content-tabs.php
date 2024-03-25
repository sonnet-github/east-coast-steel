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
    $tabs = get_field('tabs');

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

    <section class="block--custom-layout <?= $class_name ?>" <?= $anchor ?> style="background-color:<?= $background ?>;" data-ux="image-content-tabs">
        <div class="container">
            <div class="block-image-content-tabs__inner">

                <?php if($title):?>
                    <h3><?= $title?></h3>
                <?php endif;?>

                <?php if($content):?>
                    <div class="block-image-content-tabs__content">
                        <?= $content?>
                    </div>
                <?php endif;?>

                <div class="block-image-content-tabs__tab-holder">
                    <div class="block-image-content-tabs__tab-left">
                        <?php if($tabs):
                            $count = 1;    
                        ?>
                            <ul class="block-image-content-tabs__tab-btn-list">
                                <?php foreach($tabs as $tab_btn):?>
                                    <?php if($tab_btn['title']):?>
                                        <li><a href="#" class="tab-btn <?= $count === 1 ? 'active': ''?>" data-id="<?= $count?>"><?= $tab_btn['title']?></a></li>
                                    <?php endif;?>
                                <?php $count++; endforeach;?>
                            </ul>
                        <?php endif;?>
                    </div>
                    <div class="block-image-content-tabs__tab-right">

                        <?php if($tabs):
                            $tab_count = 1;    
                        ?>
                            <?php foreach($tabs as $tab_item):?>
                                <?php if($tab_item):?>

                                    <div class="block-image-content-tabs__tab-item tab-item <?= $tab_count === 1 ? 'active' : ''?>" data-id="<?= $tab_count?>">

                                        <?php if($tab_item['image']):?>
                                            <div class="block-image-content-tabs__img canvas-img">
                                                <canvas width="592" height="356"></canvas>
                                                <img src="<?= $tab_item['image']['url']?>" alt="<?= $tab_item['image']['alt']?>">
                                            </div>
                                        <?php endif;?>

                                        <?php if($tab_item['content']):?>
                                            <div class="block-image-content-tabs__tab-item-content">
                                                <?= $tab_item['content']?>
                                            </div>
                                        <?php endif;?>

                                    </div>

                                <?php endif;?>
                            <?php $tab_count++; endforeach;?>

                        <?php endif;?>

                    </div>
                </div>

                <?php if($tabs):?>
                    <div class="block-image-content-tabs__mobile-content">

                        <?php foreach($tabs as $item_content):?>

                            <?php if($item_content):?>
                                <div class="block-image-content-tabs__tab-item mobile">

                                    <?php if($item_content['title']):?>
                                        <h6><?= $item_content['title']?></h6>
                                    <?php endif;?>

                                    <?php if($item_content['image']):?>

                                        <div class="block-image-content-tabs__img canvas-img">
                                            <canvas width="342" height="203"></canvas>
                                            <img src="<?= $item_content['image']['url']?>" alt="<?= $item_content['title']?>">
                                        </div>

                                    <?php endif;?>

                                    <?php if($item_content['content']):?>

                                        <div class="block-image-content-tabs__tab-item-content">
                                            <?= $item_content['content']?>
                                        </div>

                                    <?php endif;?>

                                </div>
                            <?php endif;?>

                        <?php endforeach;?>

                    </div>
                <?php endif;?>

            </div>
        </div>
    </section>

<?php endif; ?>
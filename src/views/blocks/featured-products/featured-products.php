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
    $button = get_field('button');
    $bottom_content = get_field('bottom_content');

    // $post_per_page = 9;
    $query_helper = new \SDEV\Helper\Query();
    $tax_query = ['relation' => 'and'];
    $posts = $query_helper->setQueryArgs([
        'post_type' => 'cpt_products',
        'post_status' => 'publish',
        'orderby' => 'date',
        'meta_query' => [
            [
                'key' => 'featured',
                'value' => true
            ]
        ]
    ]); 
    $posts->setOrder('date', 'desc');
    $posts->setPageSize(-1);
    $posts->setPage(1);
    $products = $posts->getList();
    $product_results = [];

    if($products) {

        foreach($products as $product) {
            $post_id = $product->ID;
            
            $product_results[$post_id] = [
                'title' => $product->post_title,
                'image' => get_the_post_thumbnail_url($post_id),
                'excerpt' => get_the_excerpt($post_id)
            ];

        }
    }

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
        <div class="block-featured-products__wrapper" data-aos="fade-left">
            <?php if($button):?>
                <a href="<?= $button['url']?>" target="<?= $button['target']?>" class="site-btn sm border-none block-featured-products__btn"><?= $button['title']?></a>
            <?php endif;?>
           
            <?php if($product_results):
                $count = 1;    
            ?>
            <div class="block-featured-products__slider-wrapper">
                <div class="block-featured-products__slider owl-carousel">

                    <?php foreach($product_results as $product):?>
                        <div class="block-featured-products__slide">
                            <div class="block-featured-products__product">
                                <div class="block-featured-products__product-img canvas-img">
                                    <canvas width="238" height="196"></canvas>
                                    <img src="<?=  $product['image']?>" alt="<?=  $product['title']?>">
                                </div>
                                <div class="block-featured-products__product-content">
                                    <div class="block-featured-products__product-content-inner">
                                        <h6><?=  $product['title']?></h6>
                                        <p><?=  $product['excerpt']?></p>
                                    </div>
                                    <div class="block-featured-products__product-count"><?= $count?> of <?= count($product_results)?></div>
                                </div>
                            </div>
                        </div>
                    <?php $count++; endforeach;?>
                    

                </div>

                <div class="block-featured-products__controls owl-carousel-controls">
                    <!-- arrows goes here -->
                </div>

            </div>
            <?php endif;?>
            <?php if($bottom_content):?>
                <div class="block-featured-products__content">
                    <?= $bottom_content?>
                </div>
            <?php endif;?>
        </div>
    </section>

<?php endif; ?>
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
                
                    <div class="block-logo-text-list__item">
                        <div class="block-logo-text-list__item-inner">
                            <div class="block-logo-text-list__item-logo">
                                <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="91" height="91">
                            </div>
                            <div class="block-logo-text-list__item-content">
                                <p>Flexibility to accommodate small and large orders  </p>
                            </div>
                        </div>
                    </div>

                    <div class="block-logo-text-list__item">
                        <div class="block-logo-text-list__item-inner">
                            <div class="block-logo-text-list__item-logo">
                                <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="91" height="91">
                            </div>
                            <div class="block-logo-text-list__item-content">
                                <p>Customers aren’t just a number. Long term relationships are central and we really ‘get’ our small to mid-market customers  </p>
                            </div>
                        </div>
                    </div>

                    <div class="block-logo-text-list__item">
                        <div class="block-logo-text-list__item-inner">
                            <div class="block-logo-text-list__item-logo">
                                <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="91" height="91">
                            </div>
                            <div class="block-logo-text-list__item-content">
                                <p>Longevity: our staff have been here in the industry and know the products inside and out, some of them for over 20 years </p>
                            </div>
                        </div>
                    </div>

                    <div class="block-logo-text-list__item">
                        <div class="block-logo-text-list__item-inner">
                            <div class="block-logo-text-list__item-logo">
                                <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="91" height="91">
                            </div>
                            <div class="block-logo-text-list__item-content">
                                <p>Our attention to detail is second to none and we provide quality products we stand behind. </p>
                            </div>
                        </div>
                    </div>

                    <div class="block-logo-text-list__item">
                        <div class="block-logo-text-list__item-inner">
                            <div class="block-logo-text-list__item-logo">
                                <img src="/wp-content/uploads/2024/03/placeholder-3.png" alt="Placeholder" width="91" height="91">
                            </div>
                            <div class="block-logo-text-list__item-content">
                                <p>Faster turnaround around times. We have the process and experience to ensure your project orders move with speed and reliability.  </p>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endif;?>
        </div>
    </section>

<?php endif; ?>
<?php
/**
 * Welcome Text Block Template
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
    $title_content = get_field('title_content');
    $subtitle = get_field('subtitle');

    // Create class attribute allowing for custom "className" and "align" values.
    $class_name = 'block-welcome-text';
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

    <div class="block--custom-layout <?= $class_name ?>" <?= $anchor ?> style="background-color:<?= $background ?>;">
        <div class="container">
            <div class="block-welcome-text__content">
            <h3>We’re <strong>extremely flexible</strong> as a coil and sheet processor, for 20 years we have been focused on being the <strong>alternative offer in the industry</strong> with strong service that sets us apart.</h3>
                <p>Find out more <a href="#">About us</a></p>
            </div>
        </div>
    </div>

<?php endif; ?>
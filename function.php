<?php

function cuba_theme_assets() {
    wp_enqueue_style(
        'cuba-main-style',
        get_template_directory_uri() . '/assets/dist/style.css',
        array(),
        filemtime( get_template_directory() . '/assets/dist/style.css' )
    );

    wp_enqueue_style(
        'swiper-style',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        array(),
        null
    );

    wp_enqueue_script(
        'swiper-script',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'cuba-script-main',
        get_template_directory_uri() . '/assets/script/script.js',
        array(),
        filemtime( get_template_directory() . '/assets/script/script.js' ),
        true
    );

    wp_enqueue_script(
        'cuba-script-basket',
        get_template_directory_uri() . '/assets/script/basket.js',
        array(),
        filemtime( get_template_directory() . '/assets/script/basket.js' ),
        true
    );

    wp_enqueue_script(
        'cuba-script-filters',
        get_template_directory_uri() . '/assets/script/filters.js',
        array(),
        filemtime( get_template_directory() . '/assets/script/filters.js' ),
        true
    );

    wp_enqueue_script(
        'cuba-script-card',
        get_template_directory_uri() . '/assets/script/card.js',
        array(),
        filemtime( get_template_directory() . '/assets/script/card.js' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'cuba_theme_assets' );
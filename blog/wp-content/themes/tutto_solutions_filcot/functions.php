<?php

/**
 * Tutto Solutions - Filcot functions and definitions
 */



/**
 * Enqueues scripts and styles.
 */

add_action('template_redirect', 'redirect_externally');
function redirect_externally()
{
    $redirect = get_post_meta(get_the_ID(), 'redirect_to_here', true);

    if ($redirect) {
        wp_redirect($redirect);
    }
}


add_theme_support('post-thumbnails');


function tuttoSolutionsFilcot_scripts()
{

    // Theme stylesheet.
    wp_enqueue_style('tuttoSolutionsFilcot-style', get_stylesheet_uri(), array(), '1.0');

    // FontAwesome Link Css

    wp_enqueue_style(
        'fontawesome',
        get_stylesheet_directory_uri() . '/assets/@fortawesome/fontawesome-free/css/all.css',
        array(),
        '1.1.1'
    );

    wp_enqueue_style(
        'bootstrap_css',
        get_stylesheet_directory_uri() . '/assets/bootstrap/dist/css/bootstrap.css',
        array(),
        '4.5'
    );

    //scripts
    wp_enqueue_script(
        'app_js',
        get_stylesheet_directory_uri() . '/assets/scripts/app.js',
        array('app'),
        '1.0',
        true
    );

    wp_enqueue_script(
        'bootstrap_js',
        get_stylesheet_directory_uri() . '/assets/bootstrap/dist/js/bootstrap.js',
        array('jquery'),
        '4.1.3',
        true
    );
}
add_action('wp_enqueue_scripts', 'tuttoSolutionsFilcot_scripts');
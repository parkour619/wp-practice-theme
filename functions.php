<?php
function university_files() {
 wp_enqueue_style('main-university-css', get_theme_file_uri('/assets/index.css'));
 wp_enqueue_script('main-university-js', get_theme_file_uri('/assets/index.js'), NULL, '1.0', true);
 wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
 wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
 wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'university_features');

function accordians_files() {
    wp_enqueue_script('accordian-main-css', get_theme_file_uri('/assets/acc.js'), NULL, '1.0', true);
    wp_enqueue_style('accordian-main-css', get_theme_file_uri('/assets/acc.css'));
}

add_action('wp_enqueue_scripts', 'accordians_files');

//Navigation Menus
register_nav_menus([
    'primary' => __('Primary Menu'),
]);
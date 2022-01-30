<?php

function site_files() {
    wp_enqueue_script('site_js', get_theme_file_uri('/assets/dist/bundle.js'), null, '1.0', true);
    wp_enqueue_style('site_main_files', get_theme_file_uri('/assets/src/styles/style.css'),false, '1.1', 'all');
}

function load_external_cdn() {
    wp_enqueue_script('font_aws_js', 'https://kit.fontawesome.com/316dda3a77.js', [], 1.0, true);
    wp_enqueue_style('ggogle_font', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap',false);
}


 add_action('wp_enqueue_scripts', 'site_files');
 add_action('wp_enqueue_scripts', 'load_external_cdn');

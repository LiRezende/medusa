<?php

function lm_theme_styles() {
    wp_enqueue_style('theme_css', get_template_directory_uri().'/assets/css/theme.css');
}

function lm_after_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    register_nav_menu('primary', __('Primary Menu', 'medusa'));
    register_nav_menu('footer', __('Footer', 'medusa'));
}
<?php
function devxut_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main_menu' => 'Menú Principal',
    ]);
}
add_action('after_setup_theme', 'devxut_theme_setup');

<?php
if (!function_exists('petsbook_setup')) {
    function petsbook_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus([
            'header-nav' => 'Menu du header',
            'footer-nav' => 'Menu du footer'
        ]);
    }
}
add_action('after_setup_theme', 'petsbook_setup');
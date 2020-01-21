<?php
if (!function_exists('petsbook_wpnavmenu')):

function petsbook_wpnavmenu($menu) {

    $menu = str_replace('menu-item', 'footer-archives__list__link', $menu);
    $menu = str_replace(' href', ' class="footer-archives__list__link" href', $menu);

    return $menu;
}

endif;

add_filter('wp_nav_menu', 'petsbook_wpnavmenu');
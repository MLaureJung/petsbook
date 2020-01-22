<?php
if (!function_exists('petsbook_wpnavmenu')):

// Header left
function header_nav_left()
{
    $menu2 = wp_nav_menu( 
        array(
        'theme_location' => 'header-nav-left',
        'container' => 'nav', 
        'menu_class' => 'header-nav__items__left',  
        'echo' => false,
        ) 
    ); 
    $menu2 = str_replace('menu-item', 'nav-link header-nav__items__left__part__link', $menu2);
    $menu2 = str_replace(' href', ' class="nav-link header-nav__items__left__part__link" href', $menu2);
    echo $menu2;
}

// header right
function header_nav_right()
{
    $menu2 = wp_nav_menu( 
        array(
        'theme_location' => 'header-nav-right',
        'container' => 'nav', 
        'menu_class' => 'header-nav__items__right', 
        'echo' => false, 
        ) 
    );  
    $menu2 = str_replace('menu-item', 'nav-link header-nav__items__left__part__link', $menu2);
    $menu2 = str_replace(' href', ' class="nav-link header-nav__items__left__part__link" href', $menu2);
    echo $menu2;
}

//footer
function footer_nav()
{
    $menu1 = wp_nav_menu( 
        array(
        'theme_location' => 'footer-nav',
        'container' => 'nav', 
        'menu_class' => 'footer-archives__list',  
        'echo' => false
        ) 
    );  
    $menu1 = str_replace('menu-item', 'footer-archives__list__link', $menu1);
    $menu1 = str_replace(' href', ' class="footer-archives__list__link" href', $menu1);
    echo $menu1;
}
endif;
    
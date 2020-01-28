<?php

function petsbook_carousel_login($wp_customize) 
{
    // Carousel visibility
    $wp_customize->add_setting (
        'petsbook_carousel_login_active',
        [
            'default' => false
        ]
    );

    $wp_customize->add_control(
        'petsbook_carousel_login_active',
        [
            'type' => 'checkbox',
            'label' => 'Activer le carousel',
            'section' => 'petsbook_carousel_login',
            'priority' => 1,
        ]
    );
}
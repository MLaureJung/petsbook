<?php
/*
Plugin Name: petsbook plugin
Description: Mise en place de fonctionnalités pour le thème petsbook
Author: team petsbook
Version: 1.0
*/
if (!defined('WPINC')) {
    die;
}

class petsbook
{
    public function __construct()
    {
        add_action('init', [$this, 'petsbook_register_cpt_animal']);
        add_action('init', [$this, 'petsbook_register_taxonomies']);
    }
public function petsbook_register_cpt_animal()
{
    $labels = [
        'name'               => 'Animaux',
        'singular_name'      => 'Animal',
        'menu_name'          => 'Animaux',
        'name_admin_bar'     => 'Animal',
        'add_new'            => 'Ajouter un animal',
        'add_new_item'       => 'Ajouter un nouveau animal',
        'new_item'           => 'Nouveau animal',
        'edit_item'          => 'Editer un animal',
        'view_item'          => 'Voir l\'animal',
        'all_items'          => 'Voir tous les animaux',
        'search_items'       => 'Rechercher un animal',
        'not_found'          => 'Aucun animal trouvé',
        'not_found_in_trash' => 'Aucun animal trouvé dans la corbeille',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'label' => 'Animaux',
        'menu_position' => 3,
        // https://developer.wordpress.org/resource/dashicons
        'menu_icon' => 'dashicons-buddicons-activity',
        'hierarchical' => false,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'mes-animaux'
        ],
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ]
    ];

    register_post_type('animal', $args);
    }

    public function petsbook_register_taxonomies()
    {

        // On créé une taxonomie pour relier nos projets par clients
        // https://developer.wordpress.org/reference/functions/register_taxonomy/

        register_taxonomy(
            'animal-type',
            'animal',
            [
                'label' => 'type-animal',
                'public' => true,
                'hierarchical' => false,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'type-animal'
                ]
            ]
        );
    }
    public function petsbook_activate()
    {
        // à l'activation du plugin...
        // on execute la méthode qui construit les CPT
        $this->petsbook_register_cpt_animal();
        $this->petsbook_register_taxonomies();
    }
    public function petsbook_deactivate()
    {
        // à la désactivation du plugin...
        flush_rewrite_rules();
    }

}

$petsbook = new petsbook();
register_activation_hook(__FILE__, [$petsbook, 'petsbook_activate']);
register_deactivation_hook(__FILE__, [$petsbook, 'petsbook_deactivate']);
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
        ],
        'show_in_rest' => true
        
    ];

    register_post_type('animal', $args);
    }

    public function petsbook_register_taxonomies()
    {

        // On créé une taxonomie pour relier nos projets par clients
        // https://developer.wordpress.org/reference/functions/register_taxonomy/

        

            $labels=[
            'name'                       => 'Types d \'animaux',
            'singular_name'              => 'Type',
            'menu_name'                  => 'Types',
            'all_items'                  => 'Tous les types',
            'new_item_name'              => 'Nouveau type',
            'add_new_item'               => 'Ajouter un type',
            'update_item'                => 'Mettre à jour un type',
            'edit_item'                  => 'Editer un type',
            'view_item'                  => 'Voir tous les types',
            'separate_items_with_commas' => 'Séparer les type avec une virgule',
            'add_or_remove_items'        => 'Ajouter une supprimer un type',
            'choose_from_most_used'      => 'Choisir parmis les types les plus utilisés',
            'popular_items'              => 'Types populaires',
            'search_items'               => 'Rechercher un type',
            'not_found'                  => 'Aucun type trouvé',
            'items_list'                 => 'Lister les types',
            'items_list_navigation'      => 'Lister les types',
            ];


            $args = [
                'labels' => $labels,
                'public' => true,
                'hierarchical' => false,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'type-animal'
                ],
                'show_in_rest' => true    
            ];
               
            register_taxonomy( 'animal-type',
            'animal', $args);   
        
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
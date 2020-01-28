<?php
/*
Plugin Name: petsbook newsletter plugin
Description: Mise en place de la newsletter petsbook
Author: team petsbook
Version: 1.0
*/

if (!defined('WPINC')) {
    die;
}

class Newsletter 
{
    public function __construct()
    {
        add_action('plugins_loaded', [$this, 'jal_install']);
        // add_action('after_switch_theme', [$this, 'jal_version']);
        // add_action('after_switch_theme', [$this, 'jal_index']);
        // add_action('plugins_loaded', [$this, 'jal_install_data']);
    }

    /*-------------------------------------------------------*/
    public function jal_install()
    {
        global $wpdb;
        global $jal_db_version;

        $jal_db_version = '1.0';
        $table_name = $wpdb->prefix . "newsletters";
        $charset_collate = $wpdb->get_charset_collate();
        $installed_ver = get_option( "jal_db_version" );
    
        if ( $installed_ver != $jal_db_version ) 
        {
            $sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
                `newsletters_id` bigint(20) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                `newsletters_name` tinytext NOT NULL, 
                `newsletters_email` varchar(100) NOT NULL,
                `user_id` bigint(20) UNSIGNED
            ) $charset_collate;";
        
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);

            update_option( "jal_db_version", $jal_db_version );
        } 
    }

    /*-------------------------------------------------------*/
    public function jal_version()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletters";
    
        $sql = "ALTER TABLE `$table_name` ADD COLUMN FOREIGN KEY (`user_id`)
                ALTER TABLE `$table_name` ADD COLUMN REFERENCES wp_users(ID);";
                
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    /*-------------------------------------------------------*/
    public function jal_index()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletters";
    
        $sql = "ALTER TABLE `$table_name` CREATE INDEX(`user_id`);";
                
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    /*-------------------------------------------------------*/
    public function jal_install_data() {
        global $wpdb;
        
        $welcome_name = 'Mr. WordPress';
        $welcome_text = 'Congratulations, you just completed the installation!';
        
        $table_name = $wpdb->prefix . 'newsletters';
        
        $wpdb->insert( 
            $table_name, 
            array( 
                'newsletters_name' => $welcome_text, 
                'newsletters_email' => $welcome_name, 
            ) 
        );
    }

    /*-------------------------------------------------------*/
    public function myplugin_update_db_check() {
        global $jal_db_version;
        if ( get_site_option( 'jal_db_version' ) != $jal_db_version ) {
            $this->jal_install();
        }
    }

    /*-------------------------------------------------------*/
    public function newsletters_activate()
    {
        // à l'activation du plugin...
        $this->jal_install();
        $this->jal_version();
        $this->jal_index();
        $this->jal_install_data();
    }

    public function newsletters_deactivate()
    {
        // à la désactivation du plugin...
        flush_rewrite_rules();
    }
}

$newsletters = new Newsletter();
register_activation_hook(__FILE__, [$newsletters, 'newsletters_activate']);
register_deactivation_hook(__FILE__, [$newsletters, 'newsletters_deactivate']);

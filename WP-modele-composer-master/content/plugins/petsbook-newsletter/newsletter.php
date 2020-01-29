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
        add_action('plugins_loaded', [$this, 'newsletter_install']);
        // add_action('after_switch_theme', [$this, 'newsletter_version']);
        // add_action('after_switch_theme', [$this, 'newsletter_index']);
        //add_action('plugins_loaded', [$this, 'newsletter_install_data']);
        add_action('plugins_loaded', [$this, 'newsletter_update_db_check']);
    }

    /*-------------------------------------------------------*/
    public function newsletter_install()
    {
        global $wpdb;
        global $newsletter_db_version;

        $newsletter_db_version = '1.0';
        $table_name = $wpdb->prefix . "newsletters";
        $charset_collate = $wpdb->get_charset_collate();
        $installed_ver = get_option( "newsletter_db_version" );
    
        if ( $installed_ver != $newsletter_db_version ) 
        {
            $sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
                `newsletters_id` bigint(20) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                `newsletters_name` tinytext NOT NULL, 
                `newsletters_email` varchar(100) NOT NULL,
                `user_id` bigint(20) UNSIGNED
            ) $charset_collate;";
        
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);

            update_option( "newsletter_db_version", $newsletter_db_version );
        } 
    }

    /*-------------------------------------------------------*/
    public function newsletter_version()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletters";
    
        $sql = "ALTER TABLE `$table_name` ADD COLUMN FOREIGN KEY (`user_id`)
                ALTER TABLE `$table_name` ADD COLUMN REFERENCES wp_users(ID);";
                
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    /*-------------------------------------------------------*/
    public function newsletter_index()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletters";
    
        $sql = "ALTER TABLE `$table_name` CREATE INDEX(`user_id`);";
                
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    /*-------------------------------------------------------*/
    public function newsletter_install_data() {
        global $wpdb;
        // global $newsletter_db_version;
        
        $welcome_name = 'Mr. Kapiloute';
        $welcome_text = 'Congratulations, you just completed the LeveliKoute!';
        // $installed_ver = get_option( "newsletter_db_version" );
        // $newsletter_db_version = '1.0';
        
        // if ( $installed_ver != $newsletter_db_version)
        // {
            $table_name = $wpdb->prefix . 'newsletters';
        
            $wpdb->insert( 
                $table_name, 
                array( 
                    'newsletters_name' => $welcome_text, 
                    'newsletters_email' => $welcome_name, 
                ) 
            );
        // }
        // update_option( "newsletter_db_version", $newsletter_db_version);
    }

    /*-------------------------------------------------------*/
    public function newsletter_update_db_check() {
        global $newsletter_db_version;
        if ( get_site_option( 'newsletter_db_version' ) != $newsletter_db_version ) {
            $this->newsletter_install();
            $this->newsletter_install_data();
        }
    }

    /*-------------------------------------------------------*/
    public function newsletters_activate()
    {
        // à l'activation du plugin...
        $this->newsletter_version();
        $this->newsletter_index();
        $this->newsletter_update_db_check();
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

<?php

if (!defined('WPINC')) {
    die;
}

class Newsletter 
{
    public function __construct()
    {
        add_action('after_switch_theme', [$this, 'jal_install']);
        add_action('after_switch_theme', [$this, 'jal_version']);
        add_action('after_switch_theme', [$this, 'jal_index']);
    }

    public function jal_install()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletter";
     
        $charset_collate = $wpdb->get_charset_collate();
    
        $sql = "CREATE TABLE `$table_name` (
            `newsletter_id` bigint(20) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
            `newsletter_name` tinytext NOT NULL, 
            `newsletter_email` varchar(100) NOT NULL,
            `user_id` bigint(20) UNSIGNED
           ) $charset_collate;";
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function jal_version()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletter";
    
        $sql = "ALTER TABLE `$table_name` ADD COLUMN FOREIGN KEY (`user_id`)
                ALTER TABLE `$table_name` ADD COLUMN REFERENCES wp_users(ID);";
                
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function jal_index()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . "newsletter";
    
        $sql = "ALTER TABLE `$table_name` CREATE INDEX(`user_id`);";
                
    
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }

    public function newsletter_activate()
    {
        // à l'activation du plugin...
        // on execute la méthode qui construit les CPT
        $this->jal_install();
        $this->jal_version();
        $this->jal_index();
    }
    public function newsletter_deactivate()
    {
        // à la désactivation du plugin...
        flush_rewrite_rules();
    }
}

$newsletter = new Newsletter();
register_activation_hook(__FILE__, [$newsletter, 'newsletter_activate']);
register_deactivation_hook(__FILE__, [$newsletter, 'newsletter_deactivate']);
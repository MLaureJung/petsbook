<?php

function jal_install () {
    global $wpdb;
    $table_name = $wpdb->prefix . "newsletter";
 
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE `$table_name` (
        `newsletter_id` bigint(20) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
        `newsletter_name` tinytext NOT NULL, 
        `newsletter_email` varchar(100) NOT NULL,
        `ID` bigint(20) UNSIGNED,
        --FOREIGN KEY (ID) 
        --REFERENCES wp_users(ID) 
        ALTER TABLE wp_newsletter ADD COLUMN FOREIGN KEY (ID)
        ALTER TABLE wp_newsletter ADD COLUMN REFERENCES wp_users(ID)
       ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
};

add_action('after_switch_theme','jal_install');
jal_install();

<?php

function jal_install () {
    global $wpdb;
    $table_name = $wpdb->prefix . "newsletter";
 
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE `$table_name` (
        `newsletter_id` bigint(20) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
        `newsletter_name` tinytext NOT NULL, 
        `newsletter_email` varchar(100) NOT NULL,
        `wp_user_id` bigint(20) UNSIGNED
       ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
};

add_action('after_switch_theme','jal_install',5);
jal_install();

function jal_version () {
    global $wpdb;
    $table_name = $wpdb->prefix . "newsletter";

    $sql = "ALTER TABLE `wp_user_id` ADD COLUMN FOREIGN KEY (wp_user_id)
            ALTER TABLE `$table_name` ADD COLUMN REFERENCES wp_users(ID);";
            

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
};

add_action('after_switch_theme','jal_version',6);
jal_version();

function jal_index () {
    global $wpdb;
    $table_name = $wpdb->prefix . "newsletter";

    $sql = "ALTER TABLE `$table_name` ADD INDEX(`wp_user_id`);";
            

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
};

add_action('after_switch_theme','jal_index',7);
jal_index();

// FOREIGN KEY (ID) 
// REFERENCES wp_users(ID) 
// ALTER TABLE $table_name ADD COLUMN REFERENCES wp_users(ID);";
// ALTER TABLE `$table_name` ADD INDEX(`wp_user_id`)

// ALTER TABLE wp_newsletter ADD COLUMN FOREIGN KEY (ID)
// ALTER TABLE wp_newsletter ADD COLUMN REFERENCES wp_users(ID)
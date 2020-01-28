<?php

// function jal_install(){
//     global $wpdb;

//     $table_name = $wpdb->prefix . 'liveshoutbox';
    
//     $charset_collate = $wpdb->get_charset_collate();

//     $sql = "CREATE TABLE $table_name (
//         id mediumint(9) NOT NULL AUTO_INCREMENT,
//         name tinytext NOT NULL,
//         email varchar(100) NOT NULL,
//         PRIMARY KEY  (id),
//         FOREIGN KEY (wp_user) REFERENCES wp_user(user_email)

//     )$charset_collate;";

//     // we do not execute sql directly
//     // we are calling dbDelta which cant migrate database
//     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//     dbDelta($sql);

//     // save current database version for later use (on upgrade)
//     //add_option('custom_table_example_db_version', $custom_table_example_db_version);
        
// };

// add_action('after_switch_theme','jal_install');
// jal_install();

function jal_install () {
    global $wpdb;
    $table_name = $wpdb->prefix . "newsletter";
 
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) PRIMARY KEY NOT NULL AUTO_INCREMENT, 
        name tinytext NOT NULL, 
        PRIMARY KEY  (id),
        FOREIGN KEY  (wp_users) REFERENCES 
        user_email varchar(100) NOT NULL) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
};

add_action('after_switch_theme','jal_install');
jal_install();


// function jal_install () {
//     global $wpdb;
 
//     $table_name = $wpdb->prefix . "liveshoutbox";
 
    
//     $charset_collate = $wpdb->get_charset_collate();
//     $sql = "CREATE TABLE $table_name (
//     id mediumint(9) NOT NULL AUTO_INCREMENT,
//     time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
//     name tinytext NOT NULL,
//     text text NOT NULL,
//     url varchar(55) DEFAULT '' NOT NULL,
//     PRIMARY KEY  (id)
//     ) $charset_collate;";
//     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//     dbDelta($sql);
// };

// add_action('after_switch_theme','jal_install');
// jal_install();

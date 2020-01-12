<?php
/**
 * Plugin Name: Polarsteps Import
 * Description: Creates Wordpress Blog Posts from Polarsteps Export Tar file
 * Version: 1.0
 * Author: Sanne Hoogmans & Julian van den Berkmortel
 **/

// defile plugin dir
define( 'POLARSTEPS_IMPORT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// require menu class
require_once( POLARSTEPS_IMPORT__PLUGIN_DIR . 'classes/class.menu.php');

add_action( 'plugins_loaded', 'polarsteps_import_init', 14 );

/**
 * On plugins_loaded: load the minimum amount of essential files for this plugin.
 */
function polarsteps_import_init() {

    $integrations   = array();
    $integrations[] = new Menu();

    foreach ( $integrations as $integration ) {
        $integration->register_hooks();
    }
}

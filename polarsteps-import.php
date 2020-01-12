<?php
/**
 * Plugin Name: Polarsteps Import
 * Description: Creates Wordpress Blog Posts from Polarsteps Export Tar file
 * Version: 1.0
 * Author: Sanne Hoogmans & Julian van den Berkmortel
 **/

use SanneHoogmans\PolarstepsImport\Plugin;

define( 'POLARSTEPS_IMPORT__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once(POLARSTEPS_IMPORT__PLUGIN_DIR . 'vendor/autoload.php');

add_action( 'plugins_loaded', 'polarsteps_import_init', 14 );

/**
 * On plugins_loaded: load the minimum amount of essential files for this plugin.
 */
function polarsteps_import_init() {
    (new Plugin())->init();
}

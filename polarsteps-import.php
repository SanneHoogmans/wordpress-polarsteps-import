<?php
/**
 * Plugin Name: Polarsteps Import
 * Description: Creates Wordpress Blog Posts from Polarsteps Export Tar file
 * Version: 1.0
 * Author: Sanne Hoogmans & Julian van den Berkmortel
 **/

add_action('admin_menu', 'polarsteps_menu');

function polarsteps_menu()
{
    new Menu([
        new ImportSubmenu()
    ]);
}


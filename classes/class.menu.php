<?php

add_action( 'init', array( 'Menu', 'init' ) );

/**
 * Class Menu
 */
class Menu
{
    private static $initiated = false;

    public static function init() {
        if ( ! self::$initiated ) {
            self::create_menu_item();
        }
    }

    /**
     * Create Menu Item
     */
    public static function create_menu_item() {
        add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
    }

}

function test_init(){
    echo "<h1>Hello World!</h1>";
}
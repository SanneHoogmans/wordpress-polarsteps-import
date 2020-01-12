<?php

/**
 * Class Menu
 */
class Menu
{
    /**
     * Registers all hooks to WordPress.
     *
     * @return void
     */
    public function register_hooks() {
        add_action( 'admin_menu', array( $this, 'create_menu_item' ), 5 );
    }

    /**
     * Create Menu Item
     */
    public function create_menu_item() {
        add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', array($this, 'test_init') );
    }

    public function test_init(){
        echo "<h1>Hello World!</h1>";
    }
}

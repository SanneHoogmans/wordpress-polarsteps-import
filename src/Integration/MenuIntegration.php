<?php

namespace SanneHoogmans\PolarstepsImport\Integration;

class MenuIntegration extends AbstractIntegration
{
    public function register_hooks()
    {
        add_action( 'admin_menu', [$this, 'create_menu_item'], 5 );
    }

    public function create_menu_item()
    {
        add_menu_page( 'Polarsteps', 'Polarsteps', 'manage_options', 'polarsteps', [$this, 'view_init'], $this->getIcon());
    }

    protected function getIcon()
    {
        return (
            'data:image/svg+xml;base64,' .
            base64_encode(file_get_contents($this->plugin->getAssetPath('polarsteps.svg')))
        );
    }

    public function view_init(){
        echo "<h1>Hello World!</h1>";
    }
}
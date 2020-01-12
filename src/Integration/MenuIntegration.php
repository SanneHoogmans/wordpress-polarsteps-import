<?php

namespace SanneHoogmans\PolarstepsImport\Integration;

use SanneHoogmans\PolarstepsImport\Import\PolarStepsImporter;
use SanneHoogmans\PolarstepsImport\View\PolarStepsImporterView;

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

    /**
     * Init View
     */
    public function view_init(){
        $polarStepsImporter = new PolarStepsImporter();
        $polarStepsImporterView = new PolarStepsImporterView($polarStepsImporter);
        echo $polarStepsImporterView->getView();
    }
}
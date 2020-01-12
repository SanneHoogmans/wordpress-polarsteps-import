<?php

namespace SanneHoogmans\PolarstepsImport;

use SanneHoogmans\PolarstepsImport\Integration\IntegrationRegistry;

class Plugin
{
    protected $integrationRegistry;

    public function __construct()
    {
        $this->integrationRegistry = new IntegrationRegistry($this);
    }

    public function init()
    {
        foreach ($this->integrationRegistry->get_integrations() as $integration) {
            $integration->register_hooks();
        }
    }

    /**
     * @param string $path
     * @return string
     */
    public function getAssetPath($path)
    {
        return POLARSTEPS_IMPORT__PLUGIN_DIR . 'assets/' . $path;
    }
}
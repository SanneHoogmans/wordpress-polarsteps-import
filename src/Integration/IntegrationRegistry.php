<?php

namespace SanneHoogmans\PolarstepsImport\Integration;

use SanneHoogmans\PolarstepsImport\Plugin;

class IntegrationRegistry
{
    protected $plugin;

    /** @var IntegrationInterface[] */
    protected $integrations;

    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;

        $this->integrations = [
            new MenuIntegration($plugin)
        ];
    }

    /**
     * @return IntegrationInterface[]
     */
    public function get_integrations()
    {
        return $this->integrations;
    }
}
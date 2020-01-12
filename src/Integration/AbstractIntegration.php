<?php

namespace SanneHoogmans\PolarstepsImport\Integration;

use SanneHoogmans\PolarstepsImport\Plugin;

abstract class AbstractIntegration implements IntegrationInterface
{
    /** @var Plugin */
    protected $plugin;

    /**
     * AbstractIntegration constructor.
     * @param Plugin $plugin
     */
    public function __construct(Plugin $plugin)
    {
        $this->plugin = $plugin;
    }
}
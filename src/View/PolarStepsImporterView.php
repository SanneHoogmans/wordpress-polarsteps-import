<?php

namespace SanneHoogmans\PolarstepsImport\View;

use SanneHoogmans\PolarstepsImport\Import\PolarStepsImporter;

class PolarStepsImporterView {


    /** @var PolarStepsImporter */
    protected $controller;

    /**
     * PolarStepsImporterView constructor.
     * @param PolarStepsImporter $controller
     */
    public function __construct(
        PolarStepsImporter $controller
    )
    {
        $this->controller = $controller;
    }

    function getView() {
        return $this->controller->getTest();
    }
}
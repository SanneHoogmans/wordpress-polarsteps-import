<?php

class ImportSubmenu extends AbstractSubmenu
{
    function getPageTitle()
    {
        'Import';
    }

    function getMenuTitle()
    {
        'Import';
    }

    function getCapability()
    {
        'administrator';
    }

    function getSlug()
    {
        return parent::getSlug() . '-import';
    }
}
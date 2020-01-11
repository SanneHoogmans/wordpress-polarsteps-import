<?php

interface SubmenuInterface
{
    function getPageTitle();
    function getSlug();
    function getMenuTitle();
    function getCapability();

    function init();
}
<?php

abstract class AbstractSubmenu implements SubmenuInterface
{
    /** @var Menu */
    protected $parent;

    function getSlug()
    {
        return $this->parent->getSlug();
    }

    public function init()
    {
        add_submenu_page($this->parent->getSlug(), $this->getPageTitle(), $this->getMenuTitle(), $this->getCapability(), $this->getSlug());
    }
}
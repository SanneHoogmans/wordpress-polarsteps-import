<?php

class Menu
{
    /** @var SubmenuInterface */
    protected $submenu;

    /**
     * Menu constructor.
     * @param SubmenuInterface[] $submenu
     */
    public function __construct(array $submenu)
    {
        add_menu_page($this->getPageTitle(), $this->getMenuTitle(), $this->getCapability(), $this->getSlug(), $this->render(), $this->getIcon());

        foreach ($submenu as $sub) {
            $sub->init();
        }
    }

    public function getPageTitle()
    {
        return 'Polarsteps';
    }

    public function getMenuTitle()
    {
        return 'Polarsteps';
    }

    public function getCapability()
    {
        return 'administrator';
    }

    public function getSlug()
    {
        return 'polarsteps';
    }

    public function getIcon()
    {
        return (
            'data:image/svg+xml;base64,' .
            base64_encode(file_get_contents(plugin_dir_url(__FILE__) . '../polarsteps.svg'))
        );
    }

    protected function render()
    {
        return 'Hello, World!';
    }
}
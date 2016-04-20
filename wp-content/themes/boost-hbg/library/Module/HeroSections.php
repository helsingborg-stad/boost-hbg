<?php

namespace BoostHBG\Module;

class HeroSections extends \Modularity\Module
{
    /**
     * Module args
     * @var array
     */
    public $args = array(
        'id' => 'herosection',
        'nameSingular' => 'Hero Secions',
        'namePlural' => 'Hero Sections',
        'description' => 'Divides the hero into multiple selectable sections.',
        'supports' => array(),
        'icon' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MzMuNSIgaGVpZ2h0PSI0MzMuNSIgdmlld0JveD0iMCAwIDQzMy41IDQzMy41Ij48cGF0aCBkPSJNMCAzODIuNWg3Ni41VjUxSDB2MzMxLjV6TTM1NyA1MXYzMzEuNWg3Ni41VjUxSDM1N3pNMTAyIDM4Mi41aDIyOS41VjUxSDEwMnYzMzEuNXoiLz48L3N2Zz4='
    );

    public function __construct()
    {
        // This will register the module
        $this->register(
            $this->args['id'],
            $this->args['nameSingular'],
            $this->args['namePlural'],
            $this->args['description'],
            $this->args['supports'],
            $this->args['icon']
        );

        // Add our template folder as search path for templates
        add_filter('Modularity/Module/TemplatePath', function ($paths) {
            $paths[] = BOOST_PATH . 'templates/';
            return $paths;
        });
    }
}

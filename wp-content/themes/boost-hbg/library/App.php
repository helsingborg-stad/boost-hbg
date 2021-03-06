<?php
namespace BoostHBG;

class App
{
    public function __construct()
    {
        new \BoostHBG\Theme\Enqueue();
        new \BoostHBG\Theme\Filters();
        
        // Enable SVG in sliders
        add_filter('acf/load_field/key=field_56a5ed2f398dc', [$this, 'addSvgSupport']);
        add_filter('acf/load_field/key=field_570f4e9b10c26', [$this, 'addSvgSupport']);
    }

    public function addSvgSupport($field)
    {
        $field['mime_types'] .= ',svg';
        return $field;
    }
}


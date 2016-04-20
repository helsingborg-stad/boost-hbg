<?php
namespace BoostHBG;

class App
{
    public function __construct()
    {
        new \BoostHBG\Theme\Enqueue();
        new \BoostHBG\Theme\Filters();
        new \BoostHBG\Theme\Color();
        new \BoostHBG\Theme\Animate();
    }
}

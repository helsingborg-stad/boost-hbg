<?php
namespace Dunkers;

class App
{
    public function __construct()
    {
        new \Dunkers\Theme\Enqueue();
        new \Dunkers\Theme\Filters();
        new \Dunkers\Theme\Color();
    }
}

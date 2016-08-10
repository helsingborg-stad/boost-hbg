<?php

namespace BoostHBG\Theme;

class Animate
{
    public function __construct()
    {
        add_action('wp_head', array($this, 'makeAnimatedObjectVisible'));
    }

    public function makeAnimatedObjectVisible()
    {
        if(!is_admin()) {
            echo '<noscript>';
                echo '<style>';
                    echo 'main [class^="modularity-mod-"] [class^="grid-"], .social-feed > li, .sidebar-footer-area > [class^="grid-"], .modularity-mod-table .box-panel, div:not(.hero) > .modularity-mod-slider .slider, .modularity-mod-inlaylist > .box-panel, .modularity-mod-iframe > iframe, .modularity-mod-contact > .box-card {visibility: visible;}';
                echo '</style>';
            echo '</noscript>';
        }
    }
}

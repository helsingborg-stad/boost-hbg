<?php

namespace BoostHBG\Theme;

use BoostHBG\Helper\CacheBust as CacheBust;

class Enqueue
{
    public function __construct()
    {
        // Enqueue scripts and styles
        add_action('wp_enqueue_scripts', array($this, 'style'));
        add_action('wp_enqueue_scripts', array($this, 'font'));
        add_action('wp_enqueue_scripts', array($this, 'script'), 900);
    }

    /**
     * Enqueue styles
     * @return void
     */
    public function style()
    {
        wp_enqueue_style(
            'boost-css',
            get_stylesheet_directory_uri() .
                '/assets/dist/' .
                CacheBust::name('css/app.css'),
            array(),
            '',
        );
    }

    /**
     * Enqueue scripts
     * @return void
     */
    public function script()
    {
        wp_enqueue_script(
            'boost-js',
            get_stylesheet_directory_uri() .
                '/assets/dist/' .
                CacheBust::name('js/app.js'),
            array(),
            '',
        );
    }

    /**
     * Enqueue fonts
     * @return void
     */
    public function font()
    {
        wp_enqueue_style(
            'queue',
            get_stylesheet_directory_uri() .
                '/assets/font/' .
                CacheBust::name('queue/queue.css'),
            array(),
            '',
        );
    }
}

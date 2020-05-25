<?php

/**
 * Use local varnish server.
 * @var string
 */
define('VHP_VARNISH_IP', '127.0.0.1');

/**
 * Use memcached.
 * @var bool
 */

if(in_array('HTTP_HOST', $_SERVER))
{    
    $httpHost = explode(".", $_SERVER['HTTP_HOST']);

    if (!in_array(array_shift($httpHost), array("test", "beta"))) {
        define('WP_USE_MEMCACHED', true);
    } else {
        define('WP_USE_MEMCACHED', false);
    }
}

/**
* Memcache key salt
* @var string
*/
// define('WP_CACHE_KEY_SALT', NONCE_KEY);

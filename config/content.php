<?php

/**
* Tell WordPress to load from local wp-content, and not vendor wp.
*/
define('WP_CONTENT_DIR', dirname(__DIR__) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . @$_SERVER['HTTP_HOST'] . '/wp-content');

/**
 * Use municipio as default theme.
 * @var string
 */
 define('WP_DEFAULT_THEME', 'bootstrap-theme');

/**
 * Limit number of post revisions per post
 * @var integer
 */
define('WP_POST_REVISIONS', 10);

/**
 * Set the autosave interval
 * @default: 60 seconds
 * @var integer
 */
define('AUTOSAVE_INTERVAL', 120);

/**
 * Change the time interval for how often the trash will empty itself
 * @default: 30 days
 * @var integer
 */
define('EMPTY_TRASH_DAYS', 30);

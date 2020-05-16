<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('BOOST_PATH', __DIR__);

//Include vendor files
if (file_exists(dirname(ABSPATH) . '/vendor/autoload.php')) {
    require_once dirname(ABSPATH) . '/vendor/autoload.php';
}

require_once BOOST_PATH . '/library/Vendor/Psr4ClassLoader.php';

$loader = new BoostHBG\Vendor\Psr4ClassLoader();
$loader->addPrefix('BoostHBG', BOOST_PATH . '/library');
$loader->addPrefix('BoostHBG', BOOST_PATH . '/source/php');
$loader->register();

new BoostHBG\App();

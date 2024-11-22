<?php
namespace BigupWeb\WebGuyJeff;

/**
 * WebGuyJeff Theme Entry.
 *
 * @package webguyjeff
 * @author Jefferson Real <me@jeffersonreal.uk>
 * @copyright Copyright 2023 Jefferson Real
 */

// Development debugging.
$enable_debug = true;

// Set global constants.
define( 'WEBGUYJEFF_DEBUG', $enable_debug );
define( 'WEBGUYJEFF_PATH', trailingslashit( __DIR__ ) );
define( 'WEBGUYJEFF_URL', trailingslashit( get_site_url( null, strstr( __DIR__, '/wp-content/' ) ) ) );

// Register namespaced autoloader.
$namespace = 'BigupWeb\\WebGuyJeff\\';
$root      = WEBGUYJEFF_PATH . 'classes/';
require_once $root . 'autoload.php';

// Setup the plugin.
$Theme_Setup = new Theme_Setup();
$Theme_Setup->all();

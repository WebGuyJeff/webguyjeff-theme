<?php
namespace BigupWeb\WebGuyJeffTheme;

/**
 * WebGuyJeff Theme Entry.
 *
 * @package webguyjeff-theme
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

// Development debugging.
$enable_debug = true;

// Set global constants.
define( 'WEBGUYJEFF_DEBUG', $enable_debug );
define( 'WEBGUYJEFF_PATH', trailingslashit( __DIR__ ) );
define( 'WEBGUYJEFF_URL', trailingslashit( get_site_url( null, strstr( __DIR__, '/wp-content/' ) ) ) );

// Register namespaced autoloader.
$namespace = 'BigupWeb\\WebGuyJeffTheme\\';
$root      = WEBGUYJEFF_PATH . 'classes/';
require_once $root . 'autoload.php';

// Setup the plugin.
$Theme_Setup = new Theme_Setup();
$Theme_Setup->all();

<?php
/**
 * A library of helper functions for WordPress.
 *
 * @package webguyjeff-theme
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

namespace BigupWeb\WebGuyJeffTheme;

/**
 * Utility methods.
 */
class Util {


	/**
	 * Retrieve file contents the 'WordPress way'.
	 * 
	 * @param string $path File system path.
	 */
	public static function get_contents( $path ) {
		include_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-base.php';
		include_once ABSPATH . 'wp-admin/includes/class-wp-filesystem-direct.php';
		if ( ! class_exists( 'WP_Filesystem_Direct' ) ) {
			return false;
		}
		$wp_filesystem = new \WP_Filesystem_Direct( null );
		$string        = $wp_filesystem->get_contents( $path );
		return $string;
	}
}
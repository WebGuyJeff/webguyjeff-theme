<?php
namespace BigupWeb\Freedev;

use WP_Block_Pattern_Categories_Registry;

/**
 * Setup block patterns.
 *
 * @package freedev
 */
class Patterns {

	/**
	 * Pattern categories to be registered.
	 *
	 * @var array
	 */
	private $categories = array();

	/**
	 * Register_Patterns constructor.
	 */
	public function __construct() {
		$this->categories = array(
			'freedev'   => array( 'label' => __( 'Freedev Theme Patterns', 'freedev' ) ),
			'bigupweb' => array( 'label' => __( 'Bigup Web Patterns', 'freedev' ) ),
		);
	}


	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	public function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}
			register_block_pattern_category( $slug, $args );
		}
	}
}

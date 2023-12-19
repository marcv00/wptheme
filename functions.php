<?php
/**
 * Bon Appetit Clone functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bon Appetit Clone
 * @since Bon Appetit Clone 1.0
 */



/**
 * Register pattern categories.
 */

if ( ! function_exists( 'bonappetitclone_pattern_categories' ) ) :
	/**
	 * Register pattern categories giving them a description.
     * Other categories found in patterns folder will be registered without one.
	 *
	 * @since Bon Appetit Clone 1.0
	 * @return void
	 */
	function bonappetitclone_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);
	}
endif;

add_action( 'init', 'bonappetitclone_pattern_categories' );
<?php

/**
 * Takehome Class
 *
 * @since    1.0.0
 * @package  take_home
 */




if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! class_exists( 'Takehome' ) ) :


	/**
	 * Takehome
	 */
	class Takehome {

		const TEXTDOMAIN = 'takehome';

		public function __construct() {
			add_action( 'after_setup_theme', array( $this, 'init_template' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
			add_action( 'init', array( $this, 'research_type' ) );

		}

	}



	endif;


return new Takehome();

<?php

namespace Opal_Packages;

use Opal_Packages\Admin\Settings;

/**
 * Set up and initialize
 */
class Plugin {
	/**
	 *  The instance.
	 *
	 * @var void
	 */
	private static $instance;

	/**
	 * Returns the instance.
	 */
	public static function get_instance() {

		if ( ! self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	/**
	 * Actions setup
	 */
	public function __construct() {

	}

	/**
	 * Enqueue scripts.
	 */
	public function enqueue_scripts() {

	}

	/**
	 * Translations.
	 */
	public function i18n() {
		load_plugin_textdomain( 'opal-packages', false, 'opal-packages/languages' );
	}
}
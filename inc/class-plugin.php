<?php

namespace WPGutenbergPlugin;

use WPGutenbergPlugin\Admin\Editor;

/**
 * Main plugin file. Initializes the whole plugin.
 *
 * @package WPGutenbergPlugin
 */
class Plugin {
	/**
	 * Initializes the plugin.
	 */
	public function init() {
		if ( is_admin() ) {
			Editor\init();
		}
	}
}

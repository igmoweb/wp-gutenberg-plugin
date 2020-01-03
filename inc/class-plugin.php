<?php

namespace WPGutenbergPlugin;

use WPGutenbergPlugin\EditorAssets;

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
		EditorAssets\init();
	}
}

<?php

namespace WPGutenbergPlugin\Manifest;

use function WPGutenbergPlugin\plugin_dir;

/**
 * Read the assets manifest and return its content
 *
 * @return array|bool Return the file in array format or false if the file does not exist.
 */
function get_manifest() {
	/** @var \WP_Filesystem_Base $wp_filesystem */
	global $wp_filesystem;

	require_once ABSPATH . '/wp-admin/includes/file.php';
	WP_Filesystem();

	$filename = plugin_dir() . '/dist/asset-manifest.json';
	if ( ! $wp_filesystem->is_readable( $filename ) ) {
		return false;
	}

	return json_decode( $wp_filesystem->get_contents( $filename ), true );
}

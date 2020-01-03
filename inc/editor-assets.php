<?php

namespace WPGutenbergPlugin\EditorAssets;

use function WPGutenbergPlugin\Manifest\get_manifest;
use function WPGutenbergPlugin\plugin_dir;

use function WPGutenbergPlugin\plugin_url;

/**
 * Initializes the editor assets
 */
function init() {
	add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\enqueue_editor_assets' );
	add_action( 'enqueue_block_assets', __NAMESPACE__ . '\\enqueue_block_assets' );
}

/**
 * Enqueue Gutenberg frontend assets
 */
function enqueue_block_assets() {
	$manifest = get_manifest();
	if ( ! $manifest ) {
		// Production mode
		$editor_script = 'dist/front.js';
		$editor_style  = 'dist/front.css';
		wp_enqueue_script(
			'wp-gp-editor',
			plugin_url() . $editor_script,
			[
				'wp-blocks',
				'wp-element',
				'wp-components',
				'wp-i18n',
			],
			filemtime( plugin_dir() . $editor_script ),
			true
		);

		wp_enqueue_style(
			'wp-gp-editor',
			plugin_url() . $editor_style,
			[],
			filemtime( plugin_dir() . $editor_style )
		);
	} else {
		// Development mode
		// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion,WordPress.WP.EnqueuedResourceParameters.NoExplicitVersion
		wp_enqueue_script(
			'wp-gp-editor',
			$manifest['editor.js'],
			[
				'wp-blocks',
				'wp-element',
				'wp-components',
				'wp-i18n',
			],
			null,
			true
		);
	}
}

/**
 * Enqueue Gutenberg admin assets
 */
function enqueue_editor_assets() {
	$manifest = get_manifest();
	if ( ! $manifest ) {
		// Production mode
		$editor_script = 'dist/editor.js';
		$editor_style  = 'dist/editor.css';
		wp_enqueue_script(
			'wp-gp-editor',
			plugin_url() . $editor_script,
			[
				'wp-blocks',
				'wp-element',
				'wp-components',
				'wp-i18n',
			],
			filemtime( plugin_dir() . $editor_script ),
			true
		);

		wp_enqueue_style(
			'wp-gp-editor',
			plugin_url() . $editor_style,
			[
				'wp-blocks',
			],
			filemtime( plugin_dir() . $editor_style )
		);
	} else {
		// Development mode
		// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion,WordPress.WP.EnqueuedResourceParameters.NoExplicitVersion
		wp_enqueue_script(
			'wp-gp-editor',
			$manifest['editor.js'],
			[
				'wp-blocks',
				'wp-element',
				'wp-components',
				'wp-i18n',
			],
			null,
			true
		);
	}
}

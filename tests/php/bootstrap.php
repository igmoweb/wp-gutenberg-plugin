<?php
/**
 * PHPUnit bootstrap file
 */

$_tests_dir = 'vendor/wp-phpunit/wp-phpunit';
define( 'WP_TESTS_CONFIG_FILE_PATH', dirname( __FILE__ ) . '/wp-tests-config.php' );

// Give access to tests_add_filter() function.
require_once $_tests_dir . '/includes/functions.php';

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
